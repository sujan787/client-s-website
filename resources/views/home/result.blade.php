<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>STUDY POINT LIVE</title>
    <style>
    body{
         background: #fff url(https://i.pinimg.com/originals/fd/b0/9c/fdb09cd5e747f5c8330f998f11efb0a1.gif) no-repeat center;
           background-size: 100%;
            height: 100vh;
            width: 100%;
            position: fixed;
           
    }
        .part-1 {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }

        .result {
            width: 40rem;
            height: 33rem;
            border-radius: 30px;
            box-shadow: 0 0.125rem 1.675rem rgb(0 0 0 / 68%);

        }

        .result h1 {
            background: greenyellow;
            text-align: center;
            color: white;
            box-shadow: 0 1.125rem 1.675rem rgb(0 0 0 / 43%);
            border-radius: 29px 29px 2px 0px;
            padding: 9px;
        }

        .result h3 {
            text-align: center;
            color: greenyellow;
            font-size: 19px;
        }

        .result span {
            text-align: center;
            color: #fff;
        }

        .pin {
            position: absolute;
            width: 67px;
            top: -4%;
            left: 6%;

        }

        @media (max-width:991px) {
            .result h3 {

                font-size: 17px;
            }
            .pin {
  
    width: 54px;
    top: -5%;
    left: 8%;
}

body{
    background-size: 190%;
}


.result {
    width: 21rem;
        height: 25rem;
}
        }
    </style>
</head>

<body>

   
    <section class="part-1">

        <div class="result bg-dark position-relative">
 <img src="{{asset('img/pin.png')}}" class="pin" alt="">
            <h1>RESULT</h1>

            <div class="maindiv mx-5 my-5">
                <h3>Student ID : <span>{{$users->email}}</span></h3>
                <h3>Student Name : <span>{{$users->name}}</span></h3>
                <h3>Subject Name : <span>{{$exam->subject}}</span></h3>
                
                <h3>Total Marks : <span>{{$result->total_marks}}</span></h3>
               
                <h3>Final Marks : <span>{{$result->final_marks}}</span></h3>

            </div>

            <a href="{{route('home')}}" class="btn btn-outline-info w-100 ">HOME</a>
            
                 <a href="{{route('pdf_converter')}}" class="btn btn-outline-info w-100 mt-2" >Donload PDF</a>
        
               
        </div>



    </section>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>

</html>