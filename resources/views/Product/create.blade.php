
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>($error)</li>
            @endforeach
        </ul>
        @endif
    
    </div>
    <form method="POST" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name">
        </div>
        <div>
            <label>QTY</label>
            <input type="number" name="qty" placeholder="qty">
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="price">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="des">
        </div>
        <div>
            <input type="submit" name ="submit" value="Submit">
        </div>
    </form>
    
</body>
</html>