<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Color;
use App\Product;
use App\MultipleImg;
use App\File;
use DB;


class ProductController extends Controller
{
    	public function productView()
	{
    
        $products = new Product; 

        
         $products = DB::table('products')->whereNotIn('products.status',['T'])
                ->join('categories','products.category_id','=','categories.id')
                ->join('colors','products.color_id','=','colors.id')
                ->select('products.*','categories.category_name','colors.color_name')
                ->get();
          // $products = Product::whereNotIn('status',['T'])->get();


  //dd($products);
        //return $products;
        return view('layouts.admin.product.list',compact('products'));
    }

    public function productForm()
    {
      // $products = Product::get();
          $categories = Category::get();
          $colors = Color::get();
    //dd($category);
    	return view('layouts.admin.product.add',compact('categories','colors'));
    }

    public function addNewProduct(Request $request)
    {
      // $this->validate($request,[
      //     'productName' => 'required',
      //   	'ram'=>'required',
      //   	'battery'=>'required',
      //   	'processor'=>'required',
      //   	'description'=>'required',
      //   	'price'=>'required',
      //   	'quantity'=>'required',
      //   	// 'thumbnail'=>'required',
      //   	'upc'=>'required'],
      //       ['productName.required' => 'This field can not be empty',
      //   	 'ram.required'=>'This field can not be empty',
      //   	 'battery.required'=>'This field can not be empty',
      //   	 'processor.required'=>'This field can not be empty',
      //   	 'description.required'=>'This field can not be empty',
      //   	 'price.required'=>'This field can not be empty',
      //   	 'quantity.required'=>'This field can not be empty',
      //   	 // 'thumbnail.required'=>'This field can not be empty',
      //   	 'upc.required'=>'This field can not be empty',
      //      // 'upc.unique'=>'UPC must be unique'

      //   	 ]);
    // dd($request->all());
    	// $products = new Product;
    	// $products->product_name = $request->product_name;
    	// $products->ram = $request->ram;
    	// $products->battery = $request->battery;
    	// $products->processor = $request->processor;
    	// $products->product_description = $request->product_description;
    	// $products->product_price = $request->product_price;
    	// $products->product_quantity = $request->product_quantity;
     //  $products->color_id = $request->color_id;
     //  $products->category_id = $request->category_id;
    	// $products->upc = $request->upc;


              // $thumbnail = $request->file('thumbnail');
      // $products->save();

   
      // return $products['id'];
     // $products->thumbnail = $request->thumbnail;
     $products = Product::create($request->all());
     $products->status = 'Y';
     //dd($products);
      if($request->hasfile('thumbnail')  ) //here file is the name field of inputtype file
      {

         
          $productId = $products->id;
          // dd($productId);
        //single thumbnail

        $thumbnail = $request->file('thumbnail');
        $thumbnail_ext = $thumbnail->getClientOriginalExtension();
        $sort_no = $request->sort_no;

        $thumbnail_name = $request->upc .'.'.$productId.'.'.$thumbnail_ext;
        $destination_path = base_path('resources/assets/images/defaultThumbnail/');
        $thumbnail->move($destination_path,$thumbnail_name);

        $products->thumbnail = $thumbnail_name;
        // dd($products);
        $products->save();
        
       //multiple IMG
    
           // $multipleImg = new MultipleImg;
          // $multipleImg->product_id = $products->id;
          $image_array = $request->file('image_name');
          $combo = array_combine($sort_no, $image_array);
          // dd($sort_no);
          $counter = 1;
        
           foreach($combo as $sort_no => $image )
            {

              $image_ext = $image->getClientOriginalExtension();
              $image_name = $request->upc.'.'.$counter .'.'.$image_ext;
              // $image_name = $image->getClientOriginalName();
              
              // dd($image_name);

              $destination_path = base_path('resources\assets\images\multipleImg\\'.$productId.'\\');
                $image->move($destination_path,$image_name);
                // dd($image);
              // $multipleImg = new MultipleImg;

              // $image = $request->image_name;
              $multipleImg = MultipleImg::create([
                'product_id' => $productId,
                'sort_no' => $sort_no,
                'image_name' => $image_name
                ]);
              $counter++;
        //       $insertArray = array('product_id' => $result->id, );
        // MultipleImg::create($insertArray);

            }
          return redirect('productDetails');
        }
        else
       {
          $products = Product::create($request->all());
          $products->status = 'Y';
          $products->save();
          return redirect('productDetails');

      }
    //	return route(url('categoryDetails')) ;
    	//for display all contants
      
   	  // $products = Product::get();

    //      $products = DB::table('products')->whereNotIn('products.status',['T'])
    //             ->join('categories','products.category_id','=','categories.id')
    //             ->join('colors','products.color_id','=','colors.id')
    //             ->select('products.*','categories.category_name','colors.color_name')
    //             ->get();

    // // return view('layouts.admin.product.product',compact('products'));
     // return redirect('productDetails');
    }


//Edit Code

    public function editProduct($id)
    {
        // dd($id);
       $categories = Category::get();
      // $categories = Category::where('id',$id)->first();

        // $categories = Category::find('id',$id)->get();
          $colors = Color::get();
          $images = MultipleImg::where('product_id',$id)->whereNotIn('images.status',['T'])->get();
          // dd($images);
          $edit = Product::where('id',$id)->first();
      //dd($edit);

         // $categories = Category::whereNotIn('status',['T'])->get();

          return view('layouts.admin.product.edit',compact('colors','categories','images'))->with('edit',$edit)->with('id',$id);
    }

    public function updateProduct(Request $request,$id)
    {
      // dd($request->all());
   
        $products = Product::find($id);
        $products->product_name = $request->product_name;
        // dd($products);
        $products->ram = $request->ram;
        $products->battery = $request->battery;
        $products->processor = $request->processor;
        $products->product_description = $request->product_description;
        $products->product_price = $request->product_price;
        $products->product_quantity = $request->product_quantity;
        // $products->thumbnail = $request->thumbnail;
        $products->color_id = $request->color_id;
        // $products->category_id = $request->category_id;
        $products->upc = $request->upc;
        $products->save();

        $req = $request->all();
        // dd($req);
        $productId = $req['id'];
        // dd($productId);
        $u = Product::where('id',$productId)->select('upc')->first();
        // dd($u);
        $l = MultipleImg::where('product_id',$productId)->select('image_name')->get()->last();
        // dd($l);

        $q = substr($l['image_name'], strpos($l['image_name'],'.')+1);
        $h = strstr($q,'.',true);
        // return $h;

        if($request->hasfile('thumbnail') || $request->hasfile('image_name'))
        {
          // dd($request);
          //single IMG
          $thumbnail = $request->file('thumbnail');
        // $thumbnail_name = $thumbnail->getClientOriginalName();
          $thumbnail_ext = $thumbnail->getClientOriginalExtension();
          $thumbnail_name = $request->upc.'.'.$productId.'.'.$thumbnail_ext;
          $destination_path = base_path('resources/assets/images/defaultThumbnail/');
          $thumbnail->move($destination_path,$thumbnail_name);
          $products->thumbnail = $thumbnail_name;
          $products->save();

          //Multiple Img
          $sort_no = $request->sort_no;
          $image_array = $request->file('image_name');
          $combo = array_combine($sort_no, $image_array);
          // dd($sort_no);

        
           foreach($combo as $sort_no => $image )
            {
              $h = $h + 1;

              $image_ext = $image->getClientOriginalExtension();
              $image_name = $u['upc'].'.'.$h .'.'.$image_ext;
              // $image_name = $image->getClientOriginalName();
              
              // dd($image_name);

              $destination_path = base_path('resources\assets\images\multipleImg\\'.$productId.'\\');
                $image->move($destination_path,$image_name);
                // dd($image);
              // $multipleImg = new MultipleImg;

              // $image = $request->image_name;
              $multipleImg = MultipleImg::create([
                'product_id' => $productId,
                'sort_no' => $sort_no,
                'image_name' => $image_name
                ]);
            
             
            }

       
                return redirect('productDetails');
             
         }
         else
        {
           $products = Product::find($id);
        $products->product_name = $request->product_name;
        // dd($products);
        $products->ram = $request->ram;
        $products->battery = $request->battery;
        $products->processor = $request->processor;
        $products->product_description = $request->product_description;
        $products->product_price = $request->product_price;
        $products->product_quantity = $request->product_quantity;
        // $products->thumbnail = $request->thumbnail;
        $products->color_id = $request->color_id;
        // $products->category_id = $request->category_id;
        $products->upc = $request->upc;
        $products->save();
                return redirect('productDetails');

          // echo "file didn't upload";
         }
       
        // $products->save();


    }


//Delete Code
    public function destroy($id)
    {
      
 		//return $category_id;
		       
         // Category::find($id)->delete();
         // $categories = Category::get();
         
          $products = Product::where('id',$id)->update(['status'=>'T']);
          if($products)
          {
           return redirect('productDetails');
          }
          else{
            return "Not Deleted";
          }
        // dd($categories);
         //return view('layouts.admin.category.category',compact('categories'));         
    }

    public function toggle(Request $request,$id)
    {
      
      $products = $request->all();
      //dd($products);
      

      return Product::where('id',$id)->update(['status'=>$products['checkvar']]);
      // Session::flash('success','Your status has been successfully changed');
      
      die(json_encode(array('success'=>'Product status changed')));
      $products->save();
         
    }

    public function editMultipleImg($id)
    {
      // $images = MultipleImg::where('id',$id)->get();
      $edit = MultipleImg::where('id',$id)->first();

        // dd($edit);  

      return view('layouts.admin.product.editMultipleImgForm')->with('edit',$edit)->with('id',$id);
    }

    public function updateMultipleImg(Request $request,$id)
    {
        

       $req = $request->all();
        // dd($req);
        $image = MultipleImg::where('id',$id)->get();
          // return $image;
          // dd($image);
        $pro_id=$req['product_id'];
        $img_id = $req['id'];
        $img_name=$req['image'];
        // dd($img_name);
        // return $req;
        
        if($request->hasfile('image_name'))
        {
          // $req = $request->all();
          // return $req;
          
         $sort_no = $request->sort_no;
         // dd($sort_no);

          $img = $request->file('image_name');
         
          $destination_path = base_path('resources\assets\images\multipleImg\\'.$pro_id.'\\');
          $img->move($destination_path,$img_name);
          // dd($img);
          // $image->sort_no = $sort_no;
          // $image->image_name = $img_name;
          $update = array('sort_no' => $sort_no,'image_name'=>$img_name );
          MultipleImg::where('id',$id)->update($update);
          // dd($image);

          // $image->save();

          // return view('layouts.admin.product.editProduct');
          return redirect('editProduct/'.$pro_id);
          // return redirect()-back();
        }

        // else{
        //   // dd($request->sort_no);
           // $sort_no = $request->sort_no;
         // dd($sort_no);

         
          // $products = Product::find($id);
        // $image = MultipleImg::find($id);

        //   $img_name = $products['upc'].'.'.$sort_no.'.'.$img_ext;
        //    $destination_path = base_path('resources\assets\images\multipleImg\\'.$image->product_id.'\\');
        //   $img->move($destination_path,$img_name);
        //   $image->image_name = $img_name;

        //   $image->save();

          // return redirect('editProduct/'.$image->product_id);
        // }

    }

     public function multipleImgDestroy($id)
    {
      
    //return $category_id;
           
         // Category::find($id)->delete();
         // $categories = Category::get();
         // dd($id);
        

          $image = MultipleImg::where('id',$id)->update(['status'=>'T']);
          // dd($images);
          if($image)
          {
           
            $image = MultipleImg::find($id);

           return redirect('editProduct/'.$image->product_id);
          }
          else{
            return "Not Deleted";
          }
        // dd($categories);
         //return view('layouts.admin.category.category',compact('categories'));         
    }


   

}
