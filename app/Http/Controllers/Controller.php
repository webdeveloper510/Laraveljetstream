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
    Public function uploadpage(){
        return view('product');
    }
    Public function store(Request $request){

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
                $destinationPath = $data['file']->store($folder.'/', 'spaces');
                $destinationPath = $data['thumbnail']->store('images/', 'spaces');
              
                  $input = $data['file']->getClientOriginalExtension();
                  $user['title'] =$request->title;
                  $user['description']= $request->description;
                  $user['thumbnail']= $request->thumbnail;
                  $user['security'] = $request->security;
                  $user['file'] = $input;
      }
              


        
       // Storage::setVisibility($destinationPath, 'public');

         die;
        // echo "<pre>";
        // print_r($data);
        // die;
        // $rules=[
        //   'file' =>'mimes:mpeg,ogg,mp4,webm,3gp,mov,jpg,flv,avi,wmv,ts|max:100040|required'
        // ];

      //  $validator = Validator($data,$rules);

    //    if ($validator->fails()){
    //        return redirect()
    //                    ->back()
    //                    ->withErrors($validator)
    //                    ->withInput();
    //    }else{


    //               $video=$data['file'];

    //               $input = $video->getClientOriginalExtension();

    //                   $user['name'] =$input;
    //                   $user['surname']= $request->surname;
    //                   $user['email']= $request->email;
    //                   $user['date'] = $request->date_of_birth;
    //                   $user['password'] = $request->password;
    //                   $user['created_at']  =date('Y-m-d h:i:s');
    //                   $user['updated_at']  =date('Y-m-d h:i:s');

    //                   DB::table('users')->insert($user);
    //                   return redirect()->back()->with('upload_success','upload_success');
    //           }

    }
}
