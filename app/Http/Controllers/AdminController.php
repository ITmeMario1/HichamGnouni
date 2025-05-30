<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use PDF;

class AdminController extends Controller
{
    public function view_catagory()
    {
        $data=Category::all();
        return view('admin.catagory',compact('data'));
    }
    public function add_catagory(Request $request)
    {
        $data=new Category;
        $data->category_name=$request->catagory;
        $data->save();
        return redirect()->back()->with('message','Category Added Successfully');
       
    }
    public function delete_category($id)
    {
        $data=Category::find($id);
        $data->delete();
        return redirect()->back()->with('message','Category Deleted Successefully');
    }
    public function view_product(){
        $category=Category::all();
        return view('admin.product',compact('category'));
    }
    public function add_product(Request $request){
        $product=new Product;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->discount_price=$request->discount;
        $product->category=$request->category;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;
        $product->save();
        return redirect()->back()->with('message','Product Added Successfully');


    }
    public function show_product() {
        $product=Product::all();
        return view('admin.show_product',compact('product'));
        
    }
    public function delete_product($id){
        $product=Product::find($id);
        $path = public_path('/product/' . $product->image);

            if(file_exists($path)) {
                unlink($path);
            }
        $product->delete();
        return redirect()->back()->with('message','Product Deleted Successfully');
    }
    public function update_product($id)
    {
        $product=Product::find($id);
        $category=Category::all();
        return view('admin.update_product',compact('product','category'));
    }
    public function update_product_confirm(Request $request ,$id)
    {
        $product=Product::find($id);
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->discount_price=$request->discount;
        $product->category=$request->category;
        $image=$request->image;
        if($image){ 
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;
    }
        $product->save();
        return redirect('/show_product')->with('message','Product Updated Successfully');

    }
    public function order()
    {
        $product=Order::all();
        return view('admin.order',compact('product'));
    }
    public function delivered($id)
    {
        $order=Order::find($id);
        $order->delivery_status="Delivered";
        $order->payment_status="Paid";
        $order->save();
        return redirect()->back();
    }
    public function searchdata(Request $request){
        $searchText=$request->search;
        $product=Order::where('name','LIKE',"%$searchText%")->orWhere('phone','LIKE',"%$searchText%")->orWhere('product_title','LIKE',"%$searchText%")->get();
        return view('admin.order',compact('product'));
    }
    public function print_pdf($id){
        $order=order::find($id);
        $pdf=PDF::loadView('admin.pdf',compact('order'));
        return $pdf->download('order_details.pdf');
    }


}
