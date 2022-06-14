
@extends('layouts.app')

@section('content')
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>COFFEBOt</title>
    <style type="text/css">
		
        
/*         html, body {
             min-height: 100%;
        }

        body{

            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            flex-flow: column;
            justify-content: center;
            
        }
      
        .contenedor{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .imagen{

            display: flex;
            justify-content: center;
            margin-top: 50px;
            width: 500px;
            height: 500px;           

        }
        .imagen img{
            width: 100%;
            height: 100%;
        }
   */

   @charset "utf-8";
   html, body {
            min-height: 200%;
        }

        body{

            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            flex-flow: column;
            justify-content: center;
            
        }

        p{
            font-family: 'Ubuntu', sans-serif;
        }

        .wrapper {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px;
        }

        .tarjeta{

            margin-left: 10%;
            display:flex;
            flex-direction:column;
            justify-content:space-between;
            width:500px;
            height: 510px;
            border: 1px solid lightgray;
            box-shadow: 2px 2px 8px 4px #d3d3d3d1;
            border-radius:15px;
            font-family: sans-serif;
        }

        .tarjeta2{

            margin-left: 10%;
            display:flex;
            flex-direction:column;
            justify-content:space-between;
            width:420px;
            border: 1px solid lightgray;
            box-shadow: 2px 2px 8px 4px #d3d3d3d1;
            border-radius:15px;
            font-family: sans-serif;
        }

        .tarjeta3{

            margin-left: 10%;
            display:flex;
            flex-direction:column;
            justify-content:space-between;
            width:420px;
            border: 1px solid lightgray;
            box-shadow: 2px 2px 8px 4px #d3d3d3d1;
            border-radius:15px;
            font-family: sans-serif;
        }

        .titulo{
            font-size: 24px;
            padding: 10px 10px 0 10px;;
        }
        .cuerpo{
            padding: 20px;
        }
      

    </style>
</head>
<body>
   

<br><br><br><br><br>
<div class="wrapper">
    <div class="tarjeta">
        <div class="titulo">
            Nuestros camareros
        </div>

    <div class="cuerpo">
        <iframe width="450px" height="400px" src="https://www.youtube.com/embed/dDa0Bp7gs3c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <p>En este video puedes observar como trabajan nuestros camareros</p>
    <br>
    </div>
    </div>
   
    <div class="tarjeta2">
        <div class="titulo">
            Una tarjeta básica
        </div>

    <div class="cuerpo">
        <img src="" alt="muestra">
            lorem ipsum
    </div>
    </div>

    <div class="tarjeta3">
        <div class="titulo">
            Una tarjeta básica
        </div>

    <div class="cuerpo">
        <img src="" alt="muestra">
            lorem ipsum
    </div>
    </div>
</div>    
        

</body>
</html>


        

@endsection