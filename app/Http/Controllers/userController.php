<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class UserController extends Controller
{
      	public function usersList()
	{ 
		    $users = new User;
         $users = User::whereNotIn('status',['T'])->get();


        //return $Category;
        return view('layouts.admin.registredUsers.usersList',compact('users'));
    }
    //  public function editUser($id)
    // {

    // 	$editUser = User::where('id',$id)->first();
    //   //dd($edit);
    // 	return view('layouts.admin.user.editUser')->with('editUser',$editUser)->with('id',$id);
    // }

    // public function updateUser(Request $request,$id)
    // {
      
    //     $users = User::find($id);
    //     $users->first_name = $request->first_name;
    //     $users->last_name = $request->last_name;
    //     $users->first_name = $request->first_name;
    //     $users->username = $request->username;
    //     $users->email = $request->email;
    //     $users->status = 'Y';

    //     $users->save();

    //     return redirect('usersList');

    // }
      public function destroy($id)
    {
         
          $users = User::where('id',$id)->update(['status'=>'T']);
          if($users)
          {
           return redirect('usersList');
          }
          else{
            return "Not Deleted";
          }
        // dd($categories);
         //return view('layouts.admin.category.category',compact('categories'));         
    }
 public function toggle(Request $request,$id)
    {
      
      $users = $request->all();
     
      return  User::where('id',$id)->update(['status'=>$users['checkvar']]);

    
         die(json_encode(array('success'=>'category status changed')));
         $users->save();
         
    }


}
