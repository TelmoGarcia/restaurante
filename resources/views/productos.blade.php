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

        .flip-container {
            background-color: transparent;
            width: 250px;
            height: 250px;
            border: 1px solid #ccc;
            perspective: 1000px; 
            }
            .card {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 1s;
            transform-style: preserve-3d;
            }
            .flip-container:hover .card {
            transform: rotateY(180deg);
            }
            .front, .back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 5rem;
            }
            .front {
                background-color: #CDD1C4;
                display:flex;
                flex-direction:column;
                justify-content:space-between;
                width:250px;
                height: 250px;
                border: 1px solid #d3d3d3d1;
                box-shadow: 2px 2px 8px 4px #ec8b8bd1;
                border-radius:15px;
                font-family: sans-serif;
            }
            .back {
                background-color: #CDD1C4;
                display:flex;
                flex-direction:column;
                justify-content:space-between;
                width:250px;
                height: 250px;
                border: 1px solid #d3d3d3d1;
                box-shadow: 2px 2px 8px 4px #ec8b8bd1;
                border-radius:15px;
                font-family: sans-serif;
                transform: rotateY(180deg);
            }
            </style>
</head>
<body>


<div class="wrapper">

 <div class="flip-container">
    <div class="card">
      <div class="front">
        <p>A</p>
      </div>
      <div class="back">
        <p>B</p>
      </div>
    </div>
  </div> 

  

    <div class="flip-container">
       <div class="card">
         <div class="front">
           <p>A</p>
         </div>
         <div class="back">
           <p>B</p>
         </div>
       </div>
     </div> 


        <div class="flip-container">
           <div class="card">
             <div class="front">
               <p>A</p>
             </div>
             <div class="back">
               <p>B</p>
             </div>
           </div>
         </div> 

         <div class="flip-container">
            <div class="card">
              <div class="front">
                <p>A</p>
              </div>
              <div class="back">
                <p>B</p>
              </div>
            </div>
          </div> 

          <div class="flip-container">
            <div class="card">
              <div class="front">
                <p>A</p>
              </div>
              <div class="back">
                <p>B</p>
              </div>
            </div>
          </div> 

          <div class="flip-container">
            <div class="card">
              <div class="front">
                <p>A</p>
              </div>
              <div class="back">
                <p>B</p>
              </div>
            </div>
          </div> 

          <div class="flip-container">
            <div class="card">
              <div class="front">
                <p>A</p>
              </div>
              <div class="back">
                <p>B</p>
              </div>
            </div>
          </div> 

          <div class="flip-container">
            <div class="card">
              <div class="front">
                <p>A</p>
              </div>
              <div class="back">
                <p>B</p>
              </div>
            </div>
          </div> 
</div>



</body>
</html>


        
@endsection