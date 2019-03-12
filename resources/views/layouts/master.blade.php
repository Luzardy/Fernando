<html>
<head>

    <style>
        body{
            background-color: grey;
            color: white;
        }
        .kolom1{
            width:100%;
        }
        .box1{
            background-color: white;
            color: black;
            text-align: center;
            height: 50%;
            width: 70%;
            padding: 5px;
            border: 2px solid blue;
            float: right;
            

        }
        .box2{
            background-color: blue;
            color: white;
            text-align: center;
            height: 50%;
            width: 20%;
            padding: 5px;
            float: left;   
            border: 2px solid white;         
        }

    </style>
</head>
<body>

      

<div class="kolom1">
    <div class="box1">
        @yield('content')
    </div>    


    <div class="box2">
        @include('layouts.sidebar')
    </div>
</div>
</body>
</html>