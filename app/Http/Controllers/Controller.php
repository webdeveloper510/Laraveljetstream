<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\models\Product;
use App\models\Subscribe;
use App\models\User;
use App\models\Comment;
use App\models\LikeDislike;
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
class Controller extends BaseController
{

  public function unlikePost(Request $request)
  {

       $id = auth()->user()->id;
       $likeExist = LikeDislike::where(['user_id'=>$id, 'product_id'=>$request->contentId])->get();
       //print_r($likeExist);die;
       if(count($likeExist)<=0){
        $data=new LikeDislike;
        $data->product_id=$request->contentId;
        $data->dislike=1;
        $data->user_id=$id;
        $data->save();
        // return response()->json([
        //     'bool'=>true
        // ]);
       }

       else{
        LikeDislike::where(['user_id'=>$id, 'product_id'=>$request->contentId])->update(['dislike'=>1,'like'=>0]);
        // return response()->json([
        //     'bool'=>true
        // ]);
       }

       $like = LikeDislike::where(['product_id'=>$request->contentId])->sum('like');
       $dislike = LikeDislike::where(['product_id'=>$request->contentId])->sum('dislike');

       return response()->json([
        'bool'=>true,
        'like'=>$like,
        'dislike'=>$dislike
    ]);
    }

    Public function uploadpage()
    {
        return view('product');
    }

    public function channel()
    {
      return view('channel');
    }

    public function videodetail($id){
      $videos = product::with(['comments.replies','user','like'])->find($id)->toArray();

       $like = array_column($videos['like'], 'like');
       $dislike = array_column($videos['like'], 'dislike');
       $liked =  array_sum($like);
       $disliked =  array_sum($dislike);
      return view('product.single',compact('videos','liked','disliked'));
    }

    Public function store(Request $request){
        $id = auth()->user()->id;
        $data=$request->all();
        $folder = "video";
        $validator = Validator::make($data, [
          'title' => 'required|max:255',
          'description' => 'required',
          'thumbnail' => 'required',
          'security' => 'required',
          'file'=>'required'
        ]);
     if ($validator->fails()){
          return redirect()
                  ->back()
                  ->withErrors($validator)
                  ->withInput();
       }
       else{

        $video_name = $data['file']->store($folder, 'spaces');

        $imae_name = $data['thumbnail']->store('images', 'spaces');

                  $input = $data['file']->getClientOriginalName();
                  $thumbnail = $data['thumbnail']->getClientOriginalName();
                  $user['title'] =$request->title;
                  $user['description']= $request->description;
                  $user['thumbnail']= $imae_name;
                  $user['security'] = $request->security;
                  $user['user_id'] =  $id;
                  $user['file'] = $video_name;

                  DB::table('product')->insert($user);
                  return redirect()->back()->with('message', 'content upload successfully');

      }

    }

    public function likePost(Request $request){
      $id = auth()->user()->id;
      $likeExist = LikeDislike::where(['user_id'=>$id,'product_id'=>$request->contentId])->get();
      if(count($likeExist)<=0){
       $data=new LikeDislike;
       $data->product_id=$request->contentId;
       $data->like=1;
       $data->user_id=$id;
       $data->save();
      }
      else{
        LikeDislike::where(['user_id'=>$id, 'product_id'=>$request->contentId])->update(['dislike'=>0, 'like'=>1]);

       }

       $like = LikeDislike::where(['product_id'=>$request->contentId])->sum('like');
       $dislike = LikeDislike::where(['product_id'=>$request->contentId])->sum('dislike');

       return response()->json([
        'bool'=>true,
        'like'=>$like,
        'dislike'=>$dislike
    ]);
    }


    function detail(Request $request,$id)
    {

        product::find($id)->increment('views');

        $detail=product::find($id);
        return view('dashboard',['detail'=>$detail]);

    }

    function save_video(Request $request)
    {
        $date = Carbon::now();
        $id = auth()->user()->id;
        $saved_data = DB::table('save_video')->where(['user_id'=>$id,'product_id'=>$request->product_id])->count();
        // print_r($saved_data);die;
        if($saved_data>1){
            return response()->json([
                'bool'=>true,
                'message'=>'Already Saved Successfully!',
                'code'=>1
            ]);
        }
        else{

            $data['product_id'] = $request->product_id;
            $data['user_id'] =$id;
            $data['created_at'] = $date;
            $data['updated_at'] = $date;
            DB::table('save_video')->insert($data);

            return response()->json([
                'bool'=>true,
                'message'=>'Content Saved Successfully!',
                'code'=>1
            ]);
        }
    }


    public function getVideo($id)
{
      $videos = product::with('user')->find($id);


      return view('product.single',compact('videos'));

}
public function single($id)
{
      $videos = product::with('user')->find($id);


      return view('dashboard',compact('videos'));

}

function subscribe(Request $request)
    {

        $id = auth()->user()->id;
        $data=new Subscribe;
        $data->channel_id=$request->channel_id;
        Subscribe::find($id)->increment('count');
        $data->user_id=$id;
        $data->save();
        return redirect()->back()->with('message', 'Content Saved Successfully!');

    }


}
