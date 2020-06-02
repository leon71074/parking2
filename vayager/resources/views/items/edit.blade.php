<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    {!! Form::model($itme, ['url'=>'itmes/'.$item->id,'method'=>'patch','files'=>true]) !!}
    @include('items._form')

{!! Form::close() !!}


</body>
</html>
