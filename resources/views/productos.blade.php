@extends('layouts.app')
@section('content')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>COFFEBOt</title>
    <style type="text/css">


   @charset "utf-8";
   html{
            min-height: 150%;
        }

        body{

            display: flex;
            flex-direction: column;
            min-height: 200%;
            font-family: Arial, Helvetica, sans-serif;
            display: absolute;
            flex-flow: column;
            justify-content:center;
            
        }

       

        p{
            font-family: 'Ubuntu', sans-serif;
        }

        .wrapper {

            margin: 5em auto;
            display: flex;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 15px;
        }

        .apreton{
            
            display: flex;
            
    
        }

        .tarjeta{

            background-color: #CDD1C4;
            margin-bottom: 5%;
            margin-left: 15%;
            margin-right:5%;
            display:flex;
            flex-direction:column;
            justify-content:space-between;
            width:300px;
            height: 210px;
            border: 1px solid #d3d3d3d1;
            box-shadow: 2px 2px 8px 4px #ec8b8bd1;
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
   


<div class="wrapper">
    <div class="tarjeta">
        <div class="titulo">
            Expresso o Café solo
        </div>

    <div class="cuerpo">
        
    <p></p>
    <br>
    </div>
    </div>
   
    <div class="tarjeta">
        <div class="titulo">
            Ristretto
        </div>

    <div class="cuerpo">
        
    </div>
    </div>

    <div class="tarjeta">
        <div class="titulo">
            Cortado o Macchiato
        </div>

        <div class="cuerpo">

        </div>
    </div>

    <div class="tarjeta">
        <div class="titulo">
            Americano
        </div>

        <div class="cuerpo">

        </div>
    </div>

    <div class="tarjeta">
        <div class="titulo">
            Lungo/largo
        </div>

        <div class="cuerpo">

        </div>
    </div>

    <div class="tarjeta">
        <div class="titulo">
            Carajillo
        </div>

        <div class="cuerpo">

        </div>
    </div>

    <div class="tarjeta">
        <div class="titulo">
            Cortado o Macchiato
        </div>

        <div class="cuerpo">

        </div>
    </div>

    <div class="tarjeta">
        <div class="titulo">
            Cortado o Macchiato
        </div>

        <div class="cuerpo">

        </div>
    </div>

    <div class="tarjeta">
        <div class="titulo">
            Cortado o Macchiato
        </div>

        <div class="cuerpo">

        </div>
    </div>

</div>    
        

</body>
</html>


        
@endsection