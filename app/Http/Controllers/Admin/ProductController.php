<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Product;
use App\Category;
// use Cloudder;
use Session;
use Alert;
// use App\Images;
class ProductController extends Controller
{
    public function index()
    {
        // $products=Product::paginate(10);
        return view('admin.products');
    }
    public function create()
    {
        $category=Category::all();
        return view('admin.product-add',compact('category'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
//         $this->validate($request,[
//             "title"=>"required|string",
//             "description"=>"required",
//             'price'=>'required',
//             'quantity'=>'required',
//             'category_id'=>'required',
            
//         ],[
//             'required.category_id'=>'No category is chosen'
//         ]);

// // dd($request->file('pictures'));
            
//         $product=new Product;
//         $product->title=$request->title;
//         $product->description=$request->description;
//         $product->price=$request->price;
//         $product->quantity=$request->quantity;
//         $product->category_id=$request->category_id;
//         // dd($request->hasFile('pictures'));
//         $product->save();
//         // if($request->hasFile('pictures')){
//         //     // dd($request->file('pictures'));
//         //     foreach($request->file('pictures') as $pic){
//         //         // dd($pic);
//         //         $image_n=$pic->getClientOriginalName();
//         //         $image_name=$pic->getRealPath();
//         //         Cloudder::upload($image_name,null);
//         //         list($width,$height)=getimagesize($image_name);
//         //         $image_url=Cloudder::show(Cloudder::getPublicId(),['width'=>$width,"height"=>$height]);
//         //         $pic->move(public_path("uploads"),$image_n);
//         //         $ima=new Images;
              
//         //         $ima->name=$image_n;
//         //         $ima->image_url=$image_url;
//         //         $ima->product_id=$product->id;
//         //         $ima->save();
//         //         // dd($ima->save());
                
//         //     }
//         // }
        
            Session::flash("msg","Successfully Saved");
            Alert::success("Successfully Saved");
            return redirect()->back();
       
        
    }
    public function show($id)
    {
        // $Product=Product::whereId($id)->first();
        // return $Product;
    }
    public function saveOne(Request $request,$id)
    {
        // $product=Product::whereId($id)->first();
        // $product->title=$request->title;
        // $product->description=$request->description;
        // $product->price=$request->price;
        // $product->quantity=$request->quantity;
        // $product->category_id=$request->category_id;
        // if($product->save())
        // {
        //     Session::flash("msg","Successfully edited");
        //     return redirect()->back();
        // }else{
        //     Session::flash("error","Opps an error occurred");
        //     return redirect()->back();
        // }

    }
    public function edit($id)
    {
        // $category=Product::whereId($id)->first();
        // $cat=Category::all();
        // dd($category);
        return view('admin.product-edit');
    }
    public function destroy($id)
    {
        // $Product=Product::whereId($id)->first();
        // if($Product->delete())
        // {
        //     Session::flash("msg","Successfully deleted");
        //     return redirect()->back();
        // }else{
        //     Session::flash("error","Opps an error occurred");
        //     return redirect()->back();
        // }
        // // return $Product;
    }
}
