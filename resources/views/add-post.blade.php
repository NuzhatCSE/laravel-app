<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add post</title>
    <style>
        .heading{
           
            background-color: blue;
            color: white;
            text-align: center;
            width: 800px;
            height : 100px;
            margin: 0 auto;
            
        }
        .design1{
            border-color: blue;
            width: 400px;
            height: 50px;
           
        }
        .design2{
            border-color: blue;
            width: 400px;
            height: 50px;
           
        }
        .design3{
            background-color: green;
            color: white;
            font-weight: bold;
            font-size : 30px;
            width: 400px;
            height: 50px;
           
        }
    </style>
    
</head>

<body>
    <h1 class = "heading"> Professional Information </h1>

    @if(Session::has('post_add'))
    <span>{{Session::get('post_add')}}</span>
    @endif

    <form action="{{route('save.post')}}" method="post">
        @csrf
         <br><br><center><input class = "design1" placeholder = "postName" type="text" name="name" value=""></center> <br>
         <br><center> <textarea class = "design2" name="description" placeholder ="description"></textarea></center><br>
        <center><input class = "design3" type="submit" value="Submit"></center>

    </form>
</body>

</html>