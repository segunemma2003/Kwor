<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Session;
use Alert;
class CategoryController extends Controller
{
    public function index()
    {
        $category=Category::paginate(10);
        return view('admin.category',compact('category'));
    }
    public function create()
    {
        return view('admin.addCategory');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            "name"=>"required|string",
            "description"=>"required"
        ]);



        $category=new Category;
        $category->name=$request->name;
        $category->description=$request->description;
        if($category->save())
        {
            Session::flash("msg","Successfully Saved");
            Alert::success("Successfully Saved");
            return redirect()->back();
        }else{
            Alert::error("Opps an error occurred");
            Session::flash("error","Opps an error occurred");
            return redirect()->back();
        }
    }
    public function show($id)
    {
        $category=Category::whereId($id)->first();
        return $category;
    }
    public function saveOne(Request $request,$id)
    {
        $category=Category::whereId($id)->first();
        $category->name=$request->name;
        $category->description=$request->description;
        if($category->save())
        {
            Session::flash("msg","Successfully edited");
            Alert::success("Successfully edited");
            return redirect()->back();
        }else{
            Alert::error("Opps an error occurred");
            Session::flash("error","Opps an error occurred");
            return redirect()->back();
        }

    }
    public function edit($id)
    {
        $category=Category::whereId($id)->first();
        return $category;
    }
    public function destroy($id)
    {
        $category=Category::whereId($id)->first();
        if($category->delete())
        {
            Alert::success('Successfully deleted');
            Session::flash("msg","Successfully deleted");
            return redirect()->back();
        }else{
            Alert::error("Opps an error occurred");
            Session::flash("error","Opps an error occurred");
            return redirect()->back();
        }
        // return $category;
    }
}