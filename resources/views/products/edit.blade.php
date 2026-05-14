<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>Edit a product</h1>
        <div>
           @if ($errors->any())
           <ul>
                @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
           </ul>       
                @endforeach
               
           @endif 
        </div>
        <form method="post" action="{{ route('product.store')}}">
         @csrf
         @method('post')
            <div>
                <label>Name</label>
                <input type="text" name="name" placeholder="name" value="{{$product->name}}">
            </div>    

            <div>
                <label>Qty</label>
                <input type="number" name="qty" placeholder="qty" step="1" value="{{$product->qty}}">
            </div>    

            <div>
                <label>Price</label>
                <input type="number" name="price" placeholder="price" step="0.01" value="{{$product->price}}">
            </div>    
              
            <div>
                <label>Description</label>
                <input type="text" name="description" placeholder="description" value="{{$product->description}}">
            </div> 

           <div>
                <button type="submit">Save a new product</button>
            </div> 
</body>
</html>