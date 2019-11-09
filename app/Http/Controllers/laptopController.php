<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Color;
use App\Category;
use App\Product;
use DB;

class LaptopController extends Controller
{
	public function laptopList()
	{ 

		   
   	     // $colors = Color::get();
         $products = Product::whereNotIn('status',['T'])->get();
         $categorys = Category::whereNotIn('status',['T'])->orderBy('category_name','asc')->get();
         // dd($categorys);
         $colors = Color::whereNotIn('status',['T'])->orderBy('color_name','asc')->get();
        
         // dd($thumbnail);	


        //return $Category;
        return view('layouts.user.laptopView',compact('products','categorys','colors'));
    }

    public function laptopGride(Request $request)
    {
        // dd($request->all());
      $sortType = $request['sortType'];
        // dd($ids);
        if($request['selected'] !== Null)
        {
          $ids = explode(",", $request['selected']);
            if($request['active']=='gridData')
            {   
                if($sortType == 'name')
                {
                    $products = Product::whereIn('category_id',$ids)->orderBy('product_name','asc')->get();
                    return view('layouts.user.laptopGrideView',compact('products'));
                } 
                elseif($sortType == 'price')
                {
                    $products = Product::whereIn('category_id',$ids)->orderBy('product_price','asc')->get();
                    return view('layouts.user.laptopGrideView',compact('products'));
                }
                else
                {
                    $products = Product::whereIn('category_id',$ids)->get();
                    return view('layouts.user.laptopGrideView',compact('products'));
                }
            }
            elseif($request['active']=='listData')
            {
                if($sortType == 'name')
                {
                      // dd($request->all());
                    $products = Product::whereIn('category_id',$ids)->orderBy('product_name','asc')->get();
                // dd($products);
                    return view('layouts.user.laptoplistView',compact('products'));
                } 
                elseif($sortType == 'price')
                {
                    $products = Product::whereIn('category_id',$ids)->orderBy('product_price','asc')->get();
                // dd($products);
                    return view('layouts.user.laptoplistView',compact('products'));
                }
                else
                {
                     $products = Product::whereIn('category_id',$ids)->get();
                // dd($products);
                    return view('layouts.user.laptoplistView',compact('products'));
                }
            }
        }
        // if($request['selected'] !== Null)
        // {
        //     return redirect('checked/'.$request['selected']);
        // }

        elseif(empty($request['selected']))
        {
            if($request['active']=='gridData')
            {   
                if($sortType == 'name')
                {
                    $products = Product::whereNotIn('status',['T'])->orderBy('product_name','asc')->get();
                    return view('layouts.user.laptopGrideView',compact('products'));
                } 
                elseif($sortType == 'price')
                {
                    $products = Product::whereNotIn('status',['T'])->orderBy('product_price','asc')->get();
                    return view('layouts.user.laptopGrideView',compact('products'));
                }
                else
                {
                    $products = Product::whereNotIn('status',['T'])->get();
                    return view('layouts.user.laptopGrideView',compact('products'));
                }
            }
            
            elseif($request['active']=='listData')
                {
                    if($sortType == 'name')
                    {
                      // dd($request->all());
                        $products = Product::whereNotIn('status',['T'])->orderBy('product_name','asc')->get();
                // dd($products);
                        return view('layouts.user.laptoplistView',compact('products'));
                    } 
                    elseif($sortType == 'price')
                    {
                        $products = Product::whereNotIn('status',['T'])->orderBy('product_price','asc')->get();
                // dd($products);
                        return view('layouts.user.laptoplistView',compact('products'));
                    }
                    else
                    {
                       $products = Product::whereNotIn('status',['T'])->get();
                // dd($products);
                       return view('layouts.user.laptoplistView',compact('products'));
                   }
               }
           }
       }

    public function sort(Request $request)
    {
        // dd($request->all());

        $sortType = $request['sortType'];
        // dd($a);
        $active = $request['active'];
        $ids = explode(",", $request['selected']);

        if($request['selected'] !== null)
        {

        if($sortType=='name' )
        {
            if($active=='listData')
            {
              $products = Product::whereIn('category_id', $ids)->orderBy('product_name','asc')->get();

              return view('layouts.user.laptopListView',compact('products'));
            }
            // dd($active);
            elseif($active=='gridData')
            {
                // dd($active);
                $products = Product::whereIn('category_id', $ids)->orderBy('product_name','asc')->get();
            // dd($products);

                return view('layouts.user.laptopGrideView',compact('products')); 
            }
        }
        elseif($sortType=='price'  )
        {
            if($active=='listData')
            {
                $products = Product::whereIn('category_id', $ids)->orderBy('product_price','asc')->get();
            // dd($products);

                return view('layouts.user.laptopListView',compact('products'));

            }           
            elseif($active=='gridData')
            {
                $products = Product::whereIn('category_id', $ids)->orderBy('product_price','asc')->get();
            // dd($products);

                return view('layouts.user.laptopGrideView',compact('products'));
            }
            
        }
        elseif($active=='listData')
        {
            $products = Product::whereIn('category_id', $ids)->get();
            // // dd($products);
        
            return view('layouts.user.laptopListView',compact('products'));
        }
        elseif($active=='gridData')
        {
             $products = Product::whereIn('category_id', $ids)->get();
            // // dd($products);
        
            return view('layouts.user.laptopGrideView',compact('products'));
        }
    }
    
    elseif(empty($request['selected']))
    {

        if($sortType=='name' )
        {
            if($active=='listData')
            {
             $products = Product::whereNotIn('status',['T'])->orderBy('product_name','asc')->get();
                // dd($products);
                return view('layouts.user.laptopListView',compact('products'));
            }
            elseif($active=='gridData')
            {
              $products = Product::whereNotIn('status',['T'])->orderBy('product_name','asc')->get();
                // dd($products);
                return view('layouts.user.laptopGrideView',compact('products'));   
            }
        }
        elseif($sortType=='price')
        {
            if($active=='listData')
            {
             $products = Product::whereNotIn('status',['T'])->orderBy('product_price','asc')->get();
                // dd($products);
                return view('layouts.user.laptopListView',compact('products'));
            }
            elseif($active=='gridData')
            {
              $products = Product::whereNotIn('status',['T'])->orderBy('product_price','asc')->get();
                // dd($products);
                return view('layouts.user.laptopGrideView',compact('products'));   
            }
        }
        elseif($active=='listData')
        {
            $products = Product::whereNotIn('status',['T'])->get();
                // dd($products);
                return view('layouts.user.laptopListView',compact('products'));
        }
        elseif($active=='gridData')
        {
             $products = Product::whereNotIn('status',['T'])->get();
                // dd($products);
                return view('layouts.user.laptopGrideView',compact('products')); 
        }
    }

    }
    public function checked(Request $request)
    {
        // dd($request->all());
       $sortType = $request['sortType'];
        // dd($sortType);
        $active = $request['active'];
        // dd($b);
        $ids = explode(",", $request['selected']);
        // dd($ids);
        $colorId = explode(",", $request['selectedColor']);
        // dd($colorId);
          
        if($request['selected'] !== null)
        {
            if($active=='listData' )
            {
                if($sortType=='name')
                {
                  $products = Product::whereIn('category_id', $ids)->orderBy('product_name','asc')->get();
                  return view('layouts.user.laptopListView',compact('products'));
                }
            // dd($active);
                elseif($sortType=='price')
                {
                // dd($active);
                    $products = Product::whereIn('category_id', $ids)->orderBy('product_price','asc')->get();
                    return view('layouts.user.laptopListView',compact('products')); 
                }
                else
                {
                    $products = Product::whereIn('category_id', $ids)->get();
                    return view('layouts.user.laptopListView',compact('products')); 

                }
            }
            elseif($active=='gridData' )
            {
                if($sortType=='name')
                {
                    $products = Product::whereIn('category_id', $ids)->orderBy('product_name','asc')->get();
                    // dd($products);
                    return view('layouts.user.laptopGrideView',compact('products'));
                }           
                elseif($sortType=='price')
                {
                    $products = Product::whereIn('category_id', $ids)->orderBy('product_price','asc')->get();
                    return view('layouts.user.laptopGrideView',compact('products'));
                }
                else
                {
                    $products = Product::whereIn('category_id', $ids)->get();
                    return view('layouts.user.laptopGrideView',compact('products'));
                }
            }
           //  elseif($active=='listData')
           //  {
           //      $products = Product::whereIn('category_id', $ids)->get();
           //      return view('layouts.user.laptopListView',compact('products'));
           //  }
           //  elseif($active=='gridData')
           //  {
           //     $products = Product::whereIn('category_id', $ids)->get();
           //     return view('layouts.user.laptopGrideView',compact('products'));
           // }
       }
       elseif(empty($request['selected']))     
         {
        // dd($request->all());
        if($sortType=='name' )
        {
            if($active=='listData')
            {
             $products = Product::whereNotIn('status',['T'])->orderBy('product_name','asc')->get();
                // dd($products);
                return view('layouts.user.laptopListView',compact('products'));
            }
            elseif($active=='gridData')
            {
              $products = Product::whereNotIn('status',['T'])->orderBy('product_name','asc')->get();
                // dd($products);
                return view('layouts.user.laptopGrideView',compact('products'));   
            }
        }
        elseif($sortType=='price')
        {
            if($active=='listData')
            {
             $products = Product::whereNotIn('status',['T'])->orderBy('product_price','asc')->get();
                // dd($products);
                return view('layouts.user.laptopListView',compact('products'));
            }
            elseif($active=='gridData')
            {
              $products = Product::whereNotIn('status',['T'])->orderBy('product_price','asc')->get();
                // dd($products);
                return view('layouts.user.laptopGrideView',compact('products'));   
            }
        }
        elseif($active=='listData')
        {
            $products = Product::whereNotIn('status',['T'])->get();
                // dd($products);
                return view('layouts.user.laptopListView',compact('products'));
        }
        elseif($active=='gridData')
        {
             $products = Product::whereNotIn('status',['T'])->get();
                // dd($products);
                return view('layouts.user.laptopGrideView',compact('products')); 
        }
            // if($request['active']=='gridData')
            // {   
            //     if($sortType == 'name')
            //     {
            //         $products = Product::whereNotIn('status',['T'])->orderBy('product_name','asc')->get();
            //         return view('layouts.user.laptopGrideView',compact('products'));
            //     } 
            //     elseif($sortType == 'price')
            //     {
            //         $products = Product::whereNotIn('status',['T'])->orderBy('product_price','asc')->get();
            //         return view('layouts.user.laptopGrideView',compact('products'));
            //     }
            //     else
            //     {
            //         $products = Product::whereNotIn('status',['T'])->get();
            //         return view('layouts.user.laptopGrideView',compact('products'));
            //     }
            // }
            // elseif($request['active']=='listData')
            //     {
            //         if($sortType == 'name')
            //         {
            //           // dd($request->all());
            //             $products = Product::whereNotIn('status',['T'])->orderBy('product_name','asc')->get();
            //             return view('layouts.user.laptopListView',compact('products'));
            //         } 
            //         elseif($sortType == 'price')
            //         {
            //             $products = Product::whereNotIn('status',['T'])->orderBy('product_price','asc')->get();
            //             return view('layouts.user.laptopListView',compact('products'));
            //         }
            //         else
            //         {
            //            $products = Product::whereNotIn('status',['T'])->get();
            //            return view('layouts.user.laptopListView',compact('products'));
            //        }
            //    }
           }
       }

    public function checkedColor(Request $request)
    {
        // dd($request->all());
        $sortType = $request['sortType'];
        // dd($sortType);
        $active = $request['active'];
        // dd($b);
        $ids = explode(",", $request['selected']);
        // dd($ids);
        $colorId = explode(",", $request['selectedColor']);
        // dd($colorId);

        if($request->selected && $request->selectedColor )
        {
            if($active=="listData")
            {   
                // dd($request->all());
                $products = Product::whereIn('category_id',$ids)
                                    ->whereIn('color_id',$colorId)
                                    ->get();
                // dd($products);

                return view('layouts.user.laptopListView',compact('products'));
            }
            elseif($active=="gridData")
            {
                $products = Product::whereIn('category_id',$ids)
                                    ->whereIn('color_id',$colorId)
                                    ->get();
                // dd($products);

                return view('layouts.user.laptopGrideView',compact('products'));
            }
        }
    }
   }




