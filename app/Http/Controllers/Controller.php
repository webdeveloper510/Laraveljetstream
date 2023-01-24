<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Subscribe;
use App\Models\User;
use App\Models\Rating;
use App\Models\Report;
use App\Models\Comment;
use App\Models\LikeDislike;
use Toastr;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use Aws\S3\S3Client;
use League\Flysystem\AwsS3v3\AwsS3Adapter;
use League\Flysystem\Filesystem;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Notification;
use App\Notifications\UserFollowNotification;
use Share;
use App\Mail\productmail;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth')->except('login');
    }

    public function sendNotification()
    {

        $user = User::first();

        $details = [
            'greeting' => 'Hi Artisan',
            'body' => 'This is my first notification from ItSolutionStuff.com',
            'thanks' => 'Thank you for using ItSolutionStuff.com tuto!',
            'actionText' => 'View My Site',
            'actionURL' => url('/'),
            'order_id' => 101
        ];

    }

    public function unlikePost(Request $request)

    {
        $id = auth()->user()->id;
        $likeExist = LikeDislike::where(['user_id' => $id, 'product_id' => $request->contentId])->get();
        //print_r($likeExist);die;
        if (count($likeExist) <= 0) {
            $data = new LikeDislike;
            $data->product_id = $request->contentId;
            $data->dislike = 1;
            $data->user_id = $id;
            $data->save();
        } else {
            LikeDislike::where(['user_id' => $id, 'product_id' => $request->contentId])->update(['dislike' => 1, 'like' => 0]);
        }

        $like = LikeDislike::where(['product_id' => $request->contentId])->sum('like');
        $dislike = LikeDislike::where(['product_id' => $request->contentId])->sum('dislike');

        return response()->json([
            'bool' => true,
            'like' => $like,
            'dislike' => $dislike
        ]);
    }

    public function uploadpage()
    {

        return view('product');
    }

    public function channel($id)
    {
        $id = base64_decode($id);
         $videos=array();
		 $subscriber=0;
		 $count=0;
		 $socialshare='';
        $videos = Product::with(['comments.replies', 'user', 'like', 'ratings'])->where('user_id', $id)->get()->toArray();
        // echo "<pre>";
        // print_r($videos);die;
        if ($videos) {
            $subscriber = Subscribe::where(['channel_id' => $videos[0]['user_id']])->sum('count');
            $count = Subscribe::where(['channel_id' => $videos[0]['user_id'], 'user_id' => $id])->sum('count');
            $socialshare = \Share::page(
                'http://localhost/jetstream/channel/' . $id
            )
                ->facebook()
                ->twitter()
                ->linkedin()
                ->telegram()
                ->reddit()
                ->whatsapp()->getRawLinks();
        }
        $id = base64_encode($id);
        // echo "<pre>";
        // print_r($subscriber);die;
        return view('channel', compact('videos', 'count', 'socialshare', 'subscriber','id'));
    }

    public function setting()
    {
        return view('setting');
    }

    public function watchlater()
    {
        $product = product::join('save_video', 'save_video.product_id', '=', 'product.id')->with('user')->get()->toArray();
            // echo "<pre>";
            // print_r($product);die;
        $name = auth()->user()->name;
        return view('watchlater', compact('product', 'name'));
    }

    public function videodetail($id)
    {
		   $auth_id = auth()->user()->id;
        $videos = product::where('encripted_video_url', $id)->with(['comments.replies', 'user', 'like', 'ratings'])->with('comments.user')->get()->toArray();
    //    echo "<pre>";
    //    print_r($videos);die;
        $total_comment = count($videos[0]['comments']);
        $username = auth()->user()->name;
        $Rating = Rating::where('product_id', $id)->avg('rating');
        $subscriber = Subscribe::where(['channel_id' => $videos[0]['user_id']])->sum('count');
        // echo "<pre>";
        // print_r($subscriber);die;
        $count = Subscribe::where(['channel_id' => $videos[0]['user_id'], 'user_id' => $auth_id])->sum('count');

        $trending_product = DB::table('trending')->where('product_id', '=', $videos[0]['id'])->count();
        if ($trending_product > 0) {
            $update = DB::table('trending')->where('product_id', '=', $videos[0]['id'])->update(['count' => DB::raw('count+1')]);
        } else {
            $user['product_id'] = $videos[0]['id'];
            $user['count'] = 1;
            $user['created_at'] = Carbon::now();
            $user['updated_at'] = Carbon::now();
            DB::table('trending')->insert($user);
        }

        $socialshare = \Share::page(
            'http://localhost/jetstream/watch/'.$videos[0]['encripted_video_url'],
            'Share URL',
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->reddit();
        // echo "<pre>";
        //     print_r($socialshare);die;
        $like = array_column($videos[0]['like'], 'like');
        $dislike = array_column($videos[0]['like'], 'dislike');
        $liked =  array_sum($like);
        $disliked =  array_sum($dislike);

        //$star_avg = Rating::avg('rating');
        $averageRating = DB::table('ratings')
            ->where('product_id', $videos[0]['id'])
            ->avg('rating');
            $id = base64_encode($id);
        $multi_video = User::with(['posts','Report_video'])->get()->toArray();
        // echo "<pre>";
        // print_r($averageRating);
        return view('product.single', compact('videos', 'liked', 'disliked', 'count', 'subscriber', 'Rating', 'username', 'socialshare', 'averageRating','total_comment','id','multi_video'));

    }


    public function store(Request $request)
    {
        $id = auth()->user()->id;
        $data = $request->all();
        $folder = "video";
        $validator = Validator::make($data, [
            'title' => 'required|max:255',
            'description' => 'required',
            'thumbnail' => 'required',
            'upload_video' => 'required',
            'security' => 'required',
            'child_vis' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        } else {
            $video_name = $data['upload_video']->store($folder, 'spaces');
            $imae_name = $data['thumbnail']->store('images', 'spaces');
            $input = $data['upload_video']->getClientOriginalName();
            $thumbnail = $data['thumbnail']->getClientOriginalName();
            $user['title'] = $request->title;
            $user['description'] = $request->description;
            $user['thumbnail'] = $imae_name;
            $user['security'] = $request['security'];
            $user['user_id'] =  $id;
            $user['file'] = $video_name;
            $user['encripted_video_url'] = $this->generateRandomString();
            $insert = DB::table('product')->insert($user);

            return response()->json([
                'status' => $insert ? 1 : 0,
                'message' => $insert ? 'Content Upload Successfully!' : 'Some erorr occure'
            ]);
        }
    }

    //-----------------------------------Generate Random String-------------------------//

    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }
    /*--------------------------------------like dislike---------------------------------------*/

    public function likePost(Request $request)
    {
        $id = auth()->user()->id;
        $likeExist = LikeDislike::where(['user_id' => $id, 'product_id' => $request->contentId])->get();
        if (count($likeExist) <= 0) {
            $data = new LikeDislike;
            $data->product_id = $request->contentId;
            $data->like = 1;
            $data->user_id = $id;
            $data->save();
        } else {
            LikeDislike::where(['user_id' => $id, 'product_id' => $request->contentId])->update(['dislike' => 0, 'like' => 1]);
            LikeDislike::where(['user_id' => $id, 'product_id' => $request->contentId])->update(['dislike' => 0, 'like' => 1]);
        }

        $like = LikeDislike::where(['product_id' => $request->contentId])->sum('like');
        $dislike = LikeDislike::where(['product_id' => $request->contentId])->sum('dislike');

        return response()->json([
            'bool' => true,
            'like' => $like,
            'dislike' => $dislike
        ]);
    }

    /*--------------------------------------save video---------------------------------------*/

    function save_video(Request $request)
    {
        $date = Carbon::now();
        $id = auth()->user()->id;
        $saved_data = DB::table('save_video')->where(['user_id' => $id, 'product_id' => $request->product_id])->count();

        if ($saved_data > 1) {
            return response()->json([
                'bool' => true,
                'message' => 'Already Saved Successfully!',
                'code' => 1
            ]);
        } else {

            $data['product_id'] = $request->product_id;
            $data['user_id'] = $id;
            $data['created_at'] = $date;
            $data['updated_at'] = $date;
            DB::table('save_video')->insert($data);

            return response()->json([
                'bool' => true,
                'message' => 'Content Saved Successfully!',
                'code' => 1
            ]);
        }
    }


    /*---------------------------subscribe system--------------------------------*/

    function subscribe(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());die;
        $id = auth()->user()->id;
        $alreadySubscribed = Subscribe::where(['user_id' => $id, 'channel_id' => $request->channel_id])->count();
        //print_r($alreadySubscribed);die;
        $flag = $request->flag;

        if ($flag == 1) {
            if ($alreadySubscribed <= 0) {
                //print_r($request->all());die;
                $code = $this->subscribed($request->all());
                $message = 'Subscribed Successfully!';
            } else {
                $this->unsubscribed($request, $flag);
                $code = 1;
                $message = 'Subscribed Successfully!';
            }
        } else {
            $code = $this->unsubscribed($request, $flag);
            $message = 'Unsubscribe Successfully!';
        }

        return response()->json([
            'bool' => true,
            'message' => $message,
            'code' => $code,
        ]);
    }

    public function subscribed($data)
    {
        // print_r($data);die;
        $id = auth()->user()->id;
        $data1 = new Subscribe;
        $data1->channel_id = $data['channel_id'];
        $data1->user_id = $id;
        $data1->count = 1;
        $data1->save();
        return 1;
    }
    public function unsubscribed($data, $flag)
    {
        $id = auth()->user()->id;
        $update = Subscribe::where(['user_id' => $id, 'channel_id' => $data->channel_id])->update(['count' => $flag]);
        return 2;
    }

    /**-------------------------------Rating System----------------------------- */

    public function rate(Request $request)
    {
        //    echo "<pre>";
        //    print_r($request->all());die;
        $data = new Rating;
        $id = auth()->user()->id;
        $user = Rating::where(['user_id' => $id, 'product_id' => $request->product_id])->first();
        if ($user) {
            $updated = Rating::where(['user_id' => $id, 'product_id' => $request->product_id])->update(['rating' => $request->rating]);
            return response()->json([
                'bool' => true,
                'message' => 'Rate Updated Successfully!',
                'code' => 1
            ]);
        } else {
            $data->user_id = $id;
            $data->rating  = $request->rating;
            $data->product_id  = $request->product_id;
            $data->rateable_type = 'test';
            $data->rateable_id = 1;
            $data->comment = 'Star-Rating';
            $data->save();
            return response()->json([
                'message' => 'Rated Successfully!',
                'status' => 1
            ]);
        }
    }

    /*-------------------------------Report system---------------------------------*/

    public function report(Request $request)
    {
        $id = auth()->user()->id;
        // print_r($id);die;
        $report_data = $request->all();
        $validator = Validator::make($report_data, [
            'timestamp' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        } else {
            $data = new Report;
            $data->user_id = $id;
            $data->product_id  = $request->product_id;
            $data->description = $request->description;
            $data->save();
            // echo "<pre>";
            // print_r($data);die;
            $this->email($data);
            return response()->json([
                'Report' => $data,
                'bool' => true,
                'message' => 'Content Reported By user!',
                'code' => 1
            ]);
        }
    }


    /*-----------------------------search system-----------------------------------*/

    public function search(Request $request)
    {
        $search = $request->input('search');
        $posts = product::with(['comments.replies', 'user', 'like'])
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->get()->toArray();
        return view('search', compact('posts'));
    }
// ---->->->->->----->->->->->->->->->->->->->-->->email----------->---->->->->->->->->//
    public function email($data)
    {
     Mail::to("amit@codenomad.net")->send(new productmail($data));
     return "Email sent successfully !!";
    }
}
