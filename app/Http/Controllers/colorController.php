<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Color;
use App\Product;
use Session;
use DB;

class ColorController extends Controller
{
    	public function colorView()
	{ 
		    $colors = new Color;
   	     // $colors = Color::get();
         $colors = Color::whereNotIn('status',['T'])->get();
         // dd($colors);
        return view('layouts.admin.color.list',compact('colors'));
    }


    public function colorForm()
    {

    	return view('layouts.admin.color.add');
    }

    public function addNewColor(Request $request)
    {
      $this->validate($request,[
            'colorName' => 'required|alpha'],
            ['colorName.required' => 'This field can not be empty']);
    	//dd($request);

    	$colors = new Color;
    	$colors->color_name = $request->colorName;
      $colors->status = 'Y';
          	
        // $Category->remember_token = $request->_token;
    	$colors->save();
    	//return $category;
    //	return route(url('categoryDetails')) ;
    	//for display all contants
   	  $colors = Color::get();

      return redirect('colorDetails');
     // return view('layouts.admin.color.color',compact('colors'));
    }


//Edit Code
    public function editColor($id)
    {
      //return $id;
      $edit = Color::where('id',$id)->first();
      //dd($edit);
      return view('layouts.admin.color.edit')->with('edit',$edit)->with('id',$id);
    }

    public function updateColor(Request $request,$id)
    {
      // $this->validate($request,[
      //       'colorName' => 'required|alpha'],
      //       ['colorName.required' => 'This field can not be empty']);
      $colors = Color::find($id);
        $colors->color_name = $request->colorName;
        $colors->save();

        return redirect('colorDetails');

    }

//Delete Code
    public function destroy(Request $request,$id)
    {
      
      $colId = $request->id;
      
      $colors = Color::find($colId); 
      $products = Product::where('category_id',$colId)->count();

      if($products>0 || $colors['status']=="Y")
      {
        Session::flash('success','You can not delete this Color');

      } 
      else
      {  
        $colors = Color::where('id',$id)->update(['status'=>'T']);
        if($colors)
        {
          Session::flash('success','Color successfully deleted');
           // return redirect('colorDetails');
        }
        else
        {
          return "Not Deleted";
        }
      }        
    }

     public function toggle(Request $request,$id)
    {
      
      $colors = $request->all();
     // dd($colors);
      // return $colors;
      return Color::where('id',$id)->update(['status'=>$colors['checkvar']]);

      
         die(json_encode(array('success'=>'color status changed')));
      $colors->save();
         
    }
}



