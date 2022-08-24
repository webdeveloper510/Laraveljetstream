<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\models\Product;
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
class Controller extends BaseController
{

 
  public function unlikePost(Request $request)
  {
   
       $id = auth()->user()->id;
       $likeExist = LikeDislike::where(['user_id'=>$id, 'content_id'=>$request->contentId])->get(); 
       //print_r($likeExist);die;    
       if(count($likeExist)<=0){
        $data=new LikeDislike;
        $data->content_id=$request->contentId;
        $data->dislike=1;       
        $data->user_id=$id;       
        $data->save();  
        return response()->json([
            'bool'=>true
        ]);
       }

       else{     
        LikeDislike::where(['user_id'=>$id, 'content_id'=>$request->contentId])->update(['dislike'=>0]); 
        return response()->json([
            'bool'=>true
        ]);
       }
    }
    

    Public function uploadpage()
    {

        return view('product');
    }

    public function channel(){
      
      return view('channel');
    }
    public function videodetail(){
      
      return view('videodetail');
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
      $likeExist = LikeDislike::where(['user_id'=>$id,'content_id'=>$request->contentId])->get();     
      if(count($likeExist)<=0){
       $data=new LikeDislike;
       $data->content_id=$request->contentId;
       $data->like=1;       
       $data->user_id=$id;       
       $data->save();  
       return response()->json([
           'bool'=>true
       ]);
      }
    }

    function detail(Request $request,$id)
    {

        product::find($id)->increment('views');

        $detail=product::find($id);
        return view('dashboard',['detail'=>$detail]);

    }

  
}
