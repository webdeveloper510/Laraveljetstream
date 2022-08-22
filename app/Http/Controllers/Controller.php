<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\models\Product;
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
  Public function likePost(Request $request){

    $post = product::find($request->contentId);
    $post->like();
    $post->save();
    
    
    
    // $likePost = DB::table('liked')->insert([
    //   'video_id' => $request->contentId,
    //   'user_id' =>auth()->user()->id,
    //   'count'=>1
    // ]);

  }

    Public function uploadpage(){
      
        return view('product');
    }
    Public function store(Request $request){

        //Auth::user;


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
                  // $test = Storage::setVisibility($imae_name, 'public');
                  // print_r($test);die;
                  DB::table('product')->insert($user);

                  return redirect()->back()->with('message', 'content upload successfully');

      }

    }
}

