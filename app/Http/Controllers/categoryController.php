<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Category;
use App\Product;
use DB;
use Session;


class CategoryController extends Controller
{
	public function categoryView()
	{ 
		    // $categories = new Category;

   	     $categories = Category::whereNotIn('status',['T'])->get();

        return view('layouts.admin.category.list',compact('categories'));
    }

    public function categoryForm()
    {

    	return view('layouts.admin.category.add');
    }

    public function addNewCategory(Request $request)
    {
      // $this->validate($request,[
      //       'categoryName' => 'required|alpha'],
      //       ['categoryName.required' => 'This field can not be empty']);
    	//dd($request);

    	$categories = new Category;
    	$categories->category_name = $request->category_name;
      $categories->status = 'Y';
          	//return $Category;
        // $Category->remember_token = $request->_token;
    	$categories->save();
    	//return $category;
    //	return route(url('categoryDetails')) ;
    	//for display all contants
   	  $categories = Category::get();

      return redirect('categoryDetails');
     // return view('layouts.admin.category.category',compact('categories'));
    }


//Edit Code
    public function editCategory($id)
    {

    	$edit = Category::where('id',$id)->first();
      //dd($edit);
    	return view('layouts.admin.category.edit')->with('edit',$edit)->with('id',$id);
    }

    public function updateCategory(Request $request,$id)
    {
      // $this->validate($request,[
      //       'categoryName' => 'required|alpha'],
      //       ['categoryName.required' => 'This field can not be empty']);
    	$categories = Category::find($id);
        $categories->category_name = $request->category_name;
        $categories->save();

        return redirect('categoryDetails');

    }

//Delete Code
    public function destroy(Request $request,$id)
    {
      // $proId = $request->proId;
      // dd($proId);
      $catId = $request->id;
      // dd($id); 
      $products = Product::where('category_id',$catId)->count();
      // dd($products);
      $categorys = Category::find($catId);

      if($products>0  || $categorys['status']=="Y")
      {
        Session::flash('success','You can not Delete this Category');
      }
      else
      {
        $categories = Category::where('id',$catId)->update(['status'=>'T']);
        if($categories)
        {
          Session::flash('success','Category successfully deleted');
           // return redirect('categoryDetails');
        }
        else
        {
          return "Not Deleted";
        }
      }

    }

    public function toggle(Request $request,$id)
    {
      
      $categories = $request->all();
     //dd($categories);
      //$cat = new Category;
    //  dd($cat);
      return  Category::where('id',$id)->update(['status'=>$categories['checkvar']]);

      // $categories = Category::find($request->id);



      // if($categories->status == 'Y')
      // {
      //   $categories->status = 'N';
      // }
      // else{
      //   $categories->status = 'Y';
      // }
      //$cat->save();

         die(json_encode(array('success'=>'category status changed')));
         $categories->save();
         
    }
}
