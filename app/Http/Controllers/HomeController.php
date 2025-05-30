<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use illuminate\Support\Facades\Auth;
use Session;
use Stripe;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\Sub;

class HomeController extends Controller
{
    public function index()
    {
        $product=Product::paginate(6);
        $comment=Comment::orderby('id','desc')->get();
        $reply=Reply::all();
        if(Auth::id())
        {
        $user=auth()->user();
        $count=Cart::where('phone',$user->phone)->count();
        return view('home.userpage',compact('product','count','comment','reply'));
        }
        else{ 
        return view('home.userpage',compact('product','comment','reply'));
    }

    }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            $total_product=Product::all()->count();
            $total_order=Order::all()->count();
            $total_user=User::all()->count();
            $order=order::all();
            $total_revenue=0;
            foreach($order as $order){
                $total_revenue= $total_revenue + $order->price;
            }
            $total_delivered=Order::where('delivery_status','=','delivered')->get()->count();
            $total_processing=Order::where('delivery_status','=','processing')->get()->count();

            return view('admin.home',compact('total_product','total_order','total_user','total_revenue','total_delivered','total_processing'));

        }
        else
        {
            $product=Product::paginate(10);
            $comment=Comment::orderby('id','desc')->get();
            $reply=Reply::all();
            $user=auth()->user();
            $count=Cart::where('phone',$user->phone)->count();
            return view('home.userpage',compact('product','count','comment','reply')); 
        }
    }
    public function product_details($id){
        $product=Product::find($id);
        if(Auth::id())
        {
        $user=auth()->user();
        $count=Cart::where('phone',$user->phone)->count();
        return view('home.product_details',compact('product','count'));
        }
        else{ 
            return view('home.product_details',compact('product'));
        }
       

    }
    public function add_cart(Request $request,$id)
    {
        if(Auth::id())
        {
            $user=Auth::user();
            $userid=$user->id;
            $product=Product::find($id);
            $product_exist_id=Cart::where('product_id','=',$id)->where('user_id','=', $userid)->get('id')->first();
            if($product_exist_id)
            {
                $cart=Cart::find($product_exist_id)->first();
                $quantity=$cart->quantity;
                $cart->quantity=$quantity + $request->quantity;
                if($product->discount_price!=null){
                    $cart->price=$product->discount_price * $cart->quantity ;
    
                }
                else{
                    $cart->price=$product->price * $cart->quantity;
                }
                $cart->save();
                return redirect()->back();

            }
            else
            {
                $cart=new cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;
            $cart->product_title=$product->title;
            if($product->discount_price!=null){
                $cart->price=$product->discount_price * $request->quantity;

            }
            else{
                $cart->price=$product->price * $request->quantity;
            }
            
            $cart->image=$product->image;
            $cart->product_id=$product->id;
            $cart->quantity=$request->quantity;
            $cart->save();
            return redirect()->back();
            }
            
        }
        else
        {
            return redirect('login');
        }

    }
    public function show_cart()
    {
        if(Auth::id())
        {
            $id=Auth::user()->id;
            $user=auth()->user();
            $count=Cart::where('phone',$user->phone)->count();
        
            $cart=Cart::where('user_id','=',$id)->get();
            return view('home.showcart',compact('cart','count'));

        }
        else
        {
            return redirect('/login');
        }
       
    }
    public function remove_cart($id)
    {
        $cart=Cart::find($id);
        $cart->delete();
        return redirect()->back();

    }
    public function clear(){
        $user=Auth::user();
        $userid=$user->id;
        $data=Cart::where('user_id','=',$userid)->get();
        foreach($data as $data){
            $data->delete();

        }
      
       
        return redirect()->back();

    }
    public function cash_order(){
        $user=Auth::user();
        $userid=$user->id;
        $data=Cart::where('user_id','=',$userid)->get();
        foreach($data as $data){
            $order=new order;
            $order->name=$data->name;
            $order->email=$data->email;
            $order->phone=$data->phone;
            $order->address=$data->address;
            $order->user_id=$data->user_id;
            $order->product_title=$data->product_title;
           
            $order->price=$data->price;
            $order->quantity=$data->quantity;
            $order->image=$data->image;
            $order->product_id=$data->product_id;

            $order->payment_status='cash on delivery';
            $order->delivery_status='processing';
            $order->save();
            $cart_id=$data->id;
            $cart=Cart::find($cart_id);
            $cart->delete();

        }
        return redirect()->back()->with('message','We have Received your Order. We will connect with you soon...');
    }
    public function stripe($total){
        $user=auth()->user();
        $count=Cart::where('phone',$user->phone)->count();
        return view('home.stripe',compact('total','count'));

    }
    public function stripePost(Request $request,$total)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $total * 100,
                "currency" => "mad",
                "source" => $request->stripeToken,
                "description" => "Thanks for payment." 
        ]);
        $user=Auth::user();
        $userid=$user->id;
        $data=Cart::where('user_id','=',$userid)->get();
        foreach($data as $data){
            $order=new order;
            $order->name=$data->name;
            $order->email=$data->email;
            $order->phone=$data->phone;
            $order->address=$data->address;
            $order->user_id=$data->user_id;
            $order->product_title=$data->product_title;
           
            $order->price=$data->price;
            $order->quantity=$data->quantity;
            $order->image=$data->image;
            $order->product_id=$data->product_id;

            $order->payment_status='paid';
            $order->delivery_status='processing';
            $order->save();
            $cart_id=$data->id;
            $cart=Cart::find($cart_id);
            $cart->delete();
        }
        Session::flash('success', 'Payment successful!');
              
        return back();
    }
    public function contact()
    {
        
        if(Auth::id())
        {
        $user=auth()->user();
        $count=Cart::where('phone',$user->phone)->count();
        return view('home.contact',compact('count'));
        }
        else{ 
        return view('home.contact');
        }
    }
    public function blog()
    {
        $comment=Comment::all();
        $reply=Reply::all();
        if(Auth::id())
        {
        $user=auth()->user();
        $count=Cart::where('phone',$user->phone)->count();
        return view('home.blog',compact('count','comment','reply'));
        }
        else{ 
        return view('home.blog',compact('comment','reply'));
        }
    }
    public function products()
    {
        $data=Product::all();
        if(Auth::id())
        {
        $user=auth()->user();
        $count=Cart::where('phone',$user->phone)->count();
        return view('home.products',compact('data','count'));
        }
        else{ 
        return view('home.products',compact('data'));
        }
    }
    public function show_order()
    {
        if(Auth::id())
        {
        $userr=Auth::user();
        $userid=$userr->id;
        $order=Order::where('user_id','=',$userid)->get();
        $user=auth()->user();
        $count=Cart::where('phone',$user->phone)->count();
        return view('home.order',compact('count','order'));
        }
        else{ 
            return view('home.order',compact('order'));
        }
      
        
    }
    public function cancel_order($id){
        $order=Order::find($id);
        $order->delivery_status='You canceled the order';
        $order->save();
        return redirect()->back();

    }
    public function add_comment(Request $request)
    {
        if(Auth::id())
        {
            $comment=new Comment;
            $comment->name=Auth::user()->name;
            $comment->user_id=Auth::user()->id;
            $comment->comment=$request->comment;
            $comment->save();
            return redirect()->back();

        }
        else{
            return redirect('login');
        }

    }
    public function add_reply(Request $request)
    {
        if(Auth::id())
        {
           $reply=new Reply;
           $reply->name=Auth::user()->name;
           $reply->user_id=Auth::user()->id;
           $reply->comment_id=$request->commentid;
           $reply->reply=$request->reply;
           $reply->save();

            return redirect()->back();

        }
        else{
            return redirect('login');
        }
    }
    public function product_search(Request $request)
    {

        $search_text=$request->search;
        $data=Product::where('title','LIKE',"%$search_text%")->orwhere('category','LIKE',"%$search_text%")->get();
       
       
        if(Auth::id())
        {
        $user=auth()->user();
        $count=Cart::where('phone',$user->phone)->count();
        return view('home.products',compact('data','count'));
        }
        else{ 
        return view('home.products',compact('data'));
        }

    }
    public function about()
    {
        if(Auth::id())
        {
        $user=auth()->user();
        $count=Cart::where('phone',$user->phone)->count();
        return view('home.about',compact('count'));
        }
        else{ 
        return view('home.about');
        }

    }
    public function subs(Request $request)
    {
        $data=new Sub;
        $data->email=$request->email;
        $data->save();
        return redirect()->back()->with('message','you have successfully subscribed');
       
    }


}

