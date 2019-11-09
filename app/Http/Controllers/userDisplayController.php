<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Color; 
use App\Category;
use App\Product;
use App\MultipleImg;
use DB;

class UserDisplayController extends Controller
{
	public function loop(Request $request)
	{
		// dd($request->all());
		$active = $request['active'];
		$sortType = $request['sortType'];
        $catId = explode(",", $request['selected']);
        $colorId = explode(",", $request['selectedColor']);
        $min = $request['min'];
        // dd($min);
        $max = $request['max'];

        if($request->selected)
        {
        	// dd('yes');
        	$products = Product::whereIn('category_id', $catId)
                                ->whereBetween('product_price',[$min,$max])
                                ->where('status','Y')
                                ->get();
        	// dd($products);

        	if($sortType == "name")
        	{
        		// dd('yes');
        		 $products = Product::whereIn('category_id',$catId)
                                    ->whereBetween('product_price',[$min,$max])
                                    ->orderBy('product_name','asc')->get();	
        	}
        	elseif ($sortType == "price")
        	{
        		$products = Product::whereIn('category_id',$catId)
                                    ->whereBetween('product_price',[$min,$max])
                                    ->orderBy('product_price','asc')->get();
        	}
        	elseif ($request->selected && $request->selectedColor)
        	{
        		$products = Product::whereIn('category_id',$catId)
					        		->whereIn('color_id',$colorId)
                                    ->whereBetween('product_price',[$min,$max])
                                    ->get();
        	}
        	if($request->selected && $request->selectedColor && $sortType == "name")
        	{
        		$products = Product::whereIn('category_id',$catId)
									->whereIn('color_id',$colorId)
									->orderBy('product_name','asc')
                                    ->whereBetween('product_price',[$min,$max])
									->get();
        	}
        	elseif($request->selected && $request->selectedColor && $sortType == "price")
        	{
        		$products = Product::whereIn('category_id',$catId)
									->whereIn('color_id',$colorId)
									->orderBy('product_price','asc')
                                    ->whereBetween('product_price',[$min,$max])
									->get();
        	}
        	
        	if($active == "listData")
        	{
        		// dd('yes');
        		return view('layouts.user.laptopListView',compact('products'));
        	}	
        	elseif ($active == "gridData")
        	{
        		return view('layouts.user.laptopGrideView',compact('products'));
        	}
        }
        elseif ($request->selectedColor)
        {
        	$products = Product::whereIn('color_id',$colorId) 
                                ->whereBetween('product_price',[$min,$max])
                                ->get();
			
			if($sortType == "name")
        	{
        		// dd('yes');
        		 $products = Product::whereIn('color_id',$colorId)
                                    ->whereBetween('product_price',[$min,$max])
                                    ->orderBy('product_name','asc')
                                    ->get();	
        	}
        	elseif ($sortType == "price")
        	{
        		$products = Product::whereIn('color_id',$colorId)
                                    ->orderBy('product_price','asc')
                                    ->whereBetween('product_price',[$min,$max])
                                    ->get();
        	}

        	if($active == "listData")
        	{
        		// dd('yes');
        		return view('layouts.user.laptopListView',compact('products'));
        	}	
        	elseif ($active == "gridData")
        	{
        		return view('layouts.user.laptopGrideView',compact('products'));
        	}							
        }

        elseif ($active == "gridData")
        {
        	$products = Product::whereNotIn('status',['T'])
                                ->whereBetween('product_price',[$min,$max])
                                ->get();

        	if($sortType == "name")
        	{
        		$products = Product::whereNotIn('status',['T'])
                                    ->orderBy('product_name','asc')
                                    ->whereBetween('product_price',[$min,$max])
                                    ->get();
        			
        	}
        	elseif ($sortType == "price")
        	{
        		$products = Product::whereNotIn('status',['T'])
                                    ->orderBy('product_price','asc')
                                    ->whereBetween('product_price',[$min,$max])
                                    ->get();
        	}
        	return view('layouts.user.laptopGrideView',compact('products'));

        }
        elseif ($active == "listData")
        {
        	$products = Product::whereNotIn('status',['T'])
                                ->whereBetween('product_price',[$min,$max])
                                ->get();
        	if($sortType == "name")
        	{
        		$products = Product::whereNotIn('status',['T'])
                                    ->orderBy('product_name','asc')
                                    ->whereBetween('product_price',[$min,$max])
                                    ->get();
        			
        	}
        	elseif ($sortType == "price")
        	{
        		$products = Product::whereNotIn('status',['T'])
                                    ->orderBy('product_price','asc')
                                    ->whereBetween('product_price',[$min,$max])
                                    ->get();
        	}
        	return view('layouts.user.laptopListView',compact('products'));
        }
        
	}

    public function productDetails(Request $request,$id)
    {
        $products = Product::where('id',$id)->get();
        // dd($products);
        $images = MultipleImg::where('product_id',$id)->whereNotIn('images.status',['T'])->get();

        return view('layouts.user.productDetails',compact('products','images'));   
    }
    public function addToCart(Request $request,$id)
    {
        // dd($request->all());
        $pid = $request['id'];
        // dd($id);
        $request->session()->put('pid',$pid);
        $product = Product::where('id',$pid)->get();
        // dd($product);
        return view('layouts.user.cart',compact('product'));
        //$session = $request->session();
        // dd($session);
        // $cartData = ($session->get('cart')) ? $session->get('cart') : array();
        // dd($cartData);
        // if (array_key_exists($id, $cartData)) 
        // {
        //     $cartData[$id]['qty']++;
        // }
        // else
        // {
        //     $cartData[$id] = array(
        //         'qty' => 1
        //     );
        // }
        // $request->session()->put('cart', $cartData);
        // return view('layouts.user.cart');
        // return 'Yes';
        // return redirect()->back()->with('message', 'Product Added Successfully!');
    }

}
