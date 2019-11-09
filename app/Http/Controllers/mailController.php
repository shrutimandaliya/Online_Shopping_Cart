<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\sendMail;		//used in dynamic sending 


class mailController extends Controller
{
	 
    
     public function send(Request $request)
     {
    // 	Mail::send(['text'=>'mail'],['name','SHR'],function($message){
    // 		$message->to('shrmandaliya410@gmail.com','To Shrmandaliya410')->subject('Test mail');
    // 		$message->from('shrmandaliya410@gmail.com','Shrmandaliya410');
    // 	});//static method1 //first param.. view(.blade.php), sec in any variable and it content is value of it ,third is function which content to and from
    	// Mail::send(new SendMail());//static method2
//below method is for dynamic mail
    	// $email = $req->to;		//getting request from textbox of daynamicMail.blade.php and store in email variable where 'to' is the name of this textbox

    	// Mail::send('mail',['temp'=>$req->message],function($message)use($email){		//first param.. view(.blade.php) sec whatevr u want to send msg, third fun.. from where u send and where to go. 
    		// $message->to($email);
    		// $message->from('shrmandaliya410@gmail.com');
    	// });
       
 
     	Mail::send(new sendMail());
    }

    public function resetView()
    {
    	return view('resetPassView');
    }

    // public function updatePass(Request $request,$id)
    // {
    // 	// dd($request);
    // 	$user = User::find($id);

    // 	$user->email = $request->email;
    // 	$user->password = $request->password;
    //     $user->remember_token = $request->_token;

    // 	if($request->password == $request->confirmPass)
    // 	{
    // 		$user->save();
    // 	}
    // 	else
    // 	{
    // 		return 'false';
    // 	}

    // }
   
}
