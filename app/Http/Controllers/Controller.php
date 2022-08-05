<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    Public function uploadpage(){
        return view('product');
    }

    Public function store(Request $request){

        $data=$request->all();

        $rules=[
          'file' =>'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required'];

        $validator = Validator($data,$rules);

       if ($validator->fails()){
           return redirect()
                       ->back()
                       ->withErrors($validator)
                       ->withInput();
       }else{
                  $video=$data['file'];
                  $input = time().$video->getClientOriginalExtension();

                      $user['name'] =$input;
                      $user['surname']= $request->surname;
                      $user['email']= $request->email;
                      $user['date_of_birth'] = $request->date_of_birth;
                      $user['password'] = $request->password;
                      $user['created_at']  =date('Y-m-d h:i:s');
                      $user['updated_at']  =date('Y-m-d h:i:s');

                      DB::table('users')->insert($user);
                      return redirect()->back()->with('upload_success','upload_success');
              }

    }
}
