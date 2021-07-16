<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit post</title>
    <style>
        
        .design1{
            border-color: blue;
            background-color: yellow;
            width: 400px;
            height: 50px;
           
        }
        .design2{
            border-color: blue;
            background-color: yellow;
            width: 400px;
            height: 50px;
           
        }
         .design3{
            background-color: magenta;
            color: white;
            font-weight: bold;
            font-size : 30px;
            width: 400px;
            height: 50px;
           
        }
    </style>
</head>

<body>

    @if(Session::has('post_update'))
    <span>{{Session::get('post_update')}}</span>
    @endif

    <form action="{{route('update.post')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$post->id}}">
        Post: <br><input class = "design1" type="text" name="name" value="{{$post->name}}"> <br>
        description: <br> <textarea class = "design2" name="description">{{$post->description}} </textarea><br>
        <input class = "design3" type="submit" value="Submit">

    </form>
</body>

</html>