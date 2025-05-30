<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order PDF</title>
</head>
<body>
    <h1>Order Details</h1>
    Customer Name :<h3 style="color:blue">{{$order->name}} </h3>
    Customer Email :<h3 style="color:blue">{{$order->email}} </h3>
    Customer Phone :<h3 style="color:blue">{{$order->phone}} </h3>
    Customer address :<h3 style="color:blue">{{$order->address}} </h3>
    Customer Id :<h3 style="color:blue">{{$order->user_id}} </h3>
    Product Name :<h3 style="color:blue">{{$order->product_title}} </h3>
    Product price :<h3 style="color:blue">{{$order->price}} </h3>
    Product quantity :<h3 style="color:blue">{{$order->quantity}} </h3>
    Payment Status :<h3 style="color:blue">{{$order->payment_status}} </h3>
    Product Id : <h3 style="color:blue">{{$order->product_id}} </h3>
    <br><br>
   
    <img height="250" width="450" src="product/{{$order->image}}" alt="">

</body>
</html>