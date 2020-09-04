<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;
class ProductController extends Controller
{
    
    public function index(){

    if (request()->categorie) {
        
        $products=Product::with('categories')->whereHas('categories',function($query){
        $query->where('slug',request()->categorie);
        })->orderBy('created_at','DESC')->paginate(6);
    }else {
      $products=Product::with('categories')->orderBy('created_at','DESC')->paginate(6);
    }
        return view('products.index')->with('products',$products);
    }
    
    
    public function show($slug){

       $product=Product::where('slug', $slug)->firstOrFail();
       $stock=$product->stock== 0 ? 'Indisponible':'Disponible';
       return view('products.show',['product'=>$product,'stock'=>$stock]);
   }

          
   
   public function search()
    {
                request()->validate([

                 'q'=>'required|min:3'

                ]);
                $q=request()->input('q');
                $products=Product::where('title','like',"%$q%")
                          ->orwhere('description','like',"%$q%")
                          ->paginate(6);
                          return view('products.search')->with('products',$products);
    }
            
}