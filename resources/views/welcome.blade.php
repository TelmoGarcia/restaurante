
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
            height: 100%;
        }

        body{

            display: flex;
            flex-direction: column;
            height: 100%;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            flex-flow: column;
            justify-content:center;
            
        }

       

        p{
            font-family: 'Ubuntu', sans-serif;
        }

        .wrapper {
            display: flex;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 9px;
        }

        .apreton{
            
            display: flex;
            
    
        }

        .tarjeta{

            background-color: #CDD1C4;
            margin-left: 10%;
            display:flex;
            flex-direction:column;
            justify-content:space-between;
            width:400px;
            height: 510px;
            border: 1px solid #d3d3d3d1;
            box-shadow: 2px 2px 8px 4px #ec8b8bd1;
            border-radius:15px;
            font-family: sans-serif;
        }

        .tarjeta2{

            background-color: #CDD1C4;
            margin-left: 10%;
            display:flex;
            flex-direction:column;
            justify-content:space-between;
            width:400px;
            border: 1px solid #d3d3d3d1;
            box-shadow: 2px 2px 8px 4px #ec8b8bd1;
            border-radius:15px;
            font-family: sans-serif;
        }

        .tarjeta3{

            background-color: #CDD1C4;
            margin-left: 10%;
            display:flex;
            flex-direction:column;
            justify-content:space-between;
            width:400px;
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
            Nuestros camareros
        </div>

    <div class="cuerpo">
        <iframe width="350px" height="300px" src="https://www.youtube.com/embed/dDa0Bp7gs3c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <p>En este video puedes observar como trabajan nuestros camareros</p>
    <br>
    </div>
    </div>
   
    <div class="tarjeta2">
        <div class="titulo">
            Servicio de Contacto 24/7
        </div>

    <div class="cuerpo">
        <img class="apreton" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUUFBcVFRUYFxcaGyAeGhoaGxogHR0dGhsaGxohIBobICwkGyApHiAbJTYlKS4wMzMzGyI5PjkyPSwyMzABCwsLEA4QHhISHjQpIikyMjIyMjIyMjsyMjIyMjIyMjI0MjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMv/AABEIALcBEwMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAEBQMGAAIHAQj/xAA+EAACAQIEBAMGBAMIAgMBAAABAhEAAwQSITEFQVFhInGBBhMyQpGhscHR8BRS4QcVI2JygqLxU7IzQ5IX/8QAGAEAAwEBAAAAAAAAAAAAAAAAAAECAwT/xAAlEQACAgICAgICAwEAAAAAAAAAAQIRITESQQNRE2EicQQyoUL/2gAMAwEAAhEDEQA/AK/xLEqmVSdGJkjfTlJHOk2MuOZXMlxOWffqBmUjXvAq/cf9gxd1t3NBrkbT0DDb6etUriPspdtNDC4q94Zf/wBCsL+zrEz4B2BIY5Ngfy761Ddt3bajOmZDopIkeh3U0ZxS61t0t7qo0AHM9vpRS32uL7toljlAGpBiSuugeNj586tZIboF4MwuNDZQBtmEnmSBJ0qLjOGezcL6Q2umw20rX+CQO4W4VZWMAjwjsWnz1jlXguuzhbg0Xrt215jnTtCyDHHO4CH4ARNNrFi0CpQsrKviIGjTuNdP+uVF/wAItyybcKt1RIiBmA2Om8/Y0mwZnNJggxHPv5cxUyfoqKrYwxpvvnRUzcywO6noDseUdqH4WHvOLU5Rzn8Klu8VyFcrEEgyD6R+dKrnEHFzOhg9qEr6CTrss/HrToNSpy6iBEx69K0wPEERA8llBlgOU6BtByBI9aC4fwy/i2GZhrsupJ6yAdBVy4V/ZvbzZ77GP/Ghhf8Ac2/oPrSklZUWykY+w9241y0BkY6CegifWmXs9GV89s3CSQYUtqNOldcw3CLKgKlpAo28IP404s2wBFGw0fP44QxZowV5wTofd3QAOwQVMvsjjXj3WGuqDyaFHoXIP1rv4QVtoKeRNr0cl4P7F45FEraBj5rmv/FSKLxPsPjLmjXLSabgux7iCq6GumNdAqFsUBUlLJzC/wD2cYjLAv2zp/KQfTU0j4kMRw7KlyLibAOuo9eY9Yrta3waG4hw6ziE93cRXXvuD1B3B7iikVbODXsTaxToqobbTqwafD015Tt0r3iHCGw7g281wMOQkj6VduOewN4Ov8KfeLMkXGAKx3gZpn7Uifh/EMNcYthbhWIlVLiO2SYpon97K8nGnXQkjqD+leYi617KWDhZnNHLXafWiuIsLpGZArBgDIyseZUA8460TxxQ4tm0Y2IIMLAhdBuCBvzmilsTb0AXeFFlzI5ZAJiOncb1PguF33XMCgI2JbXtIitMVlARbZLXW+IzA+g0JOvKaFs4i5aaLkgfifSjaFhMKwdqbrC+FEaNHP8ApUHFLgW9FoaZdhy5UXc42oBACAHfQSfM86E4feAYspEtAUD4tCCBHITuTQN+kRMLgZQVLEr8CgkqOUgdqy1g83he4bQ5K+bby5CpcR77DvnZCobnIInfcExpyqa5xZXTLchx0O89juDTyTjshv8AB7iqSjpcUfynX6UZwHhtq6hVx4yND0/Sk2Ga2rnMbigbAEA+pIP4U8wiqgDi4RIkyJZfOBz3EDn9R2EaCuHYNVDWOcnUj5YBmo8TwWzbTw3XLGdAQf8AiBQ+IwrrF9LguPuygR4eca66bj7Vp/e6ssKMrfCCR+MbxUvl0UnHsf4fh1kKNJ030M+vOsoKxg8SFEXrcRpvWUXIdROyLerbMp31Hfal3vKlS4QJ5TUDaAsf7JYW4c3ulVuoAIn/AEsI6bVWOKeyuItuGtqt1NmZAFeDr4k2OukrJ1q+W72n7/cUSjg1Vk0fO/EcI9u65uSst8Q3BPUcp136GsyG4AtvxN05/TlpXeOL8Bw+KUrdtq0/Nsw5jxVTrvsA9iWwzqwk+G4Ibn8w0P2p2Okc3v38oyXFIdSCFMg6kSPWBqKkxmHHuc8BXZ500jr6Sf8AjTjjfBca1xM2EuFuqgNoP8ykgfWvU9jMffIi17tREG46jTyEn7UXqhVuxThsNbW0+YZmPPp+lPPZT2N/ikz3ENu2YKsfib/SOnc6edW7g3sTbs5Wun3rjkR4AesHVvX6VbrVvSnybFSF3BuC2cMuSzbCjmd2b/Ux1NN7dnrUiW4qQtFCQOXolNsAeVD3L0Caja8OfLYTQlxy2s0NhFXsIOKO9C3eIb60DisZlEHekV/GSZrNtm6gh++PPWhbmNk71W7vFAp8TAeZpVi/am0oMMGP+XWimyvxiXFuLQ4QHzphY4n1NckwntEC5Zjln970/wANx9CPiB9aGmi4yhI6ZZ4iN6Mt41TtFc3w3GsxhTPSiE9oFXc66gdehECnyaQn44stPtNfwvuXe9aVwiE6gToD8Lbqe461wvE33Yl0zMoAmdSs8j123q2e1nFLrqqvbZbL6Zhpr8u20bwd6r2Aui1auaglgQT9qqLbWTn8kVF0gW3aa0Vu3FYBvhZYzKeWh0+tMsMqYo/4piR4SDEsNztEedGYjGW7lpbZAOn4UK9tEtqSMpjwZZkD+YkkyDyG1DZKjn6NuG4KyjNaup4p3aJjkfKsuWLVi7KgFH0II068+RE0q4ji2YoAwZvlI0MHkRy1o4cHulS94+ELICySDyP/AFVbWRWrwizIlp193o1p5gN8jDWNtiNRO0HtVNvC3axAKQQPpMxXiY1sgVrqgf5RLfoKisraLnV2UiAW0IPXQ6+XepimkxyadD3DGzev3GuKCfdqVHKQYJ+kH0qXg+FQo2bxHOZJPKZE+kUht3BaueI5kKkZucb7dR051Jcw2IR0bxKtwrDKdCDsY5GOoq0iWxrjMFdNxhh1zhInUCCYIAJOppZdwLs6QFDk6j5c3Pb8udWPEcSt27PurRgfM06k89efc86WcEu5zmkTBiek/wBaSY2rF93DXUJXLt0fTXXSRWVa/wC8EGm/0/Ssp4Ci/TW4etCleLWNGhKj0SlygWMVulylQDS1iRsaJzqedJHbpUD4hhz1otoONlgZJ6V7kgUgscRbnUr8S70KQODGcCdakVhSQYyaJTFd60TIaGD3AKgvYgUFevmh/eTTsEgp72tQXb8UNcuULdvVLZpFGuOfOMo3P7Nc+9occ9u97pLjLl+IwCJgEACNTBq2cV4oLCFhq7eFF6nr5Aa1WsLhveMc8MJzOTzY9e2ppJ9sc9Uip4lg3iLszE6yZkflWuFshs08gY9KZ3uEIrOWbKoZso5wCdgNTQ3DLSG4dSU+hIra8HNxd5JuDYNHHj21r3D8MBcrqddIoziKIqE2fCeg2Pp1oC5jDk0kAaTBieeuxPeoy9GlqIytm1auZWRoBjMDswkHYyOYq8cGs2LkMqr+g5R2rmqw6+MtzgAjQnmZGvI8qeezWNazeFvOGHUTBBEg9qlmnjm7yddPDrV22bboGRhBBH71rn/tV7I27BtnL/hFwMw0jNsGI78+dXrAYyQNaZXAlxCjgMpEEHUEUIqcWcCxNhMNfClibZ2POJBI0+leY/FFiC6kK3MqQsdB2pz7e+zj4S4LiAtYZvCeaE/Kfybn+NefiWZEV/EqtIHI+Y/KrS7OdurRo+GKEXFUhNIPen+G4kWQKdf3p9KS8R4jcveEa9hyFLxfdPDEGnVgpKOhumAt3LdxvhdWO3Q6/rQ1nAKEZzcK5TCiNSxqBrLI0SzEqCYnciYjnpWLiCUVQBpOnnpRmhYvR4ttShZpLBhseU602xPFGNv3asYIhRz10EdKCxfCzaRCHzM5jLHWh7eFZXJUMwT4iBoDz9BQ1YK10SXsJeQL7xSF38+2lNcU1tbYe2mRhvBMEbHy61nEOLi7YysNhofTSkl7GAoFBJn4ppK2N1EK/vMdTWU4wnAgUUm2uo5zWU8BUjpljiIO9HrcU7VUlcUTZxBHOsMm9IspQGo3SKWW8caKXGqd6dicQqahuJWyXgdq2Jp0TlApt60PiVjX970bEzQ18SCOf7+9OhqQMt0g0Tbu0C3WvVuxQOg57sjfWoXumoGvChXxFMFELe9S7H8RS2pZjAFA8Q4oqCWaBVO4virl/wAQUi2usaye5pJWxSlxWD3E8Ve/f94QcoBCjovWOvWirfGktqzKQSw0XnPKeQ/7pbhcQqEMCNtRyJiAfOolwxQhnXcHLzkjfyIqqRnb6Jrd65AKC4Sd4B8U7nTWd6GuX3ZwArBto5n0o62zabCep+m3OpUxHjBMO2oLc8pABWR6/WhS+gcfsgIuFQWXwEwzAgx2026TXnEcepUIBCjQAchTHCN4HtsNNQdDoCOu0z+VR2cEiqLgAJXz1APMHnGs+dFofF0AC8pAg8unQ8/vW2DvrnzhiCvI7FR0PWmdvB4Z2LlSZ+UTAjSTHMkHTtS7imGtqc1tGUTsQwBB7Gli6DKydF4fxEZRBp/gcfO5rl+ExYtpnScoHiQkkjrB6VZeF8QDgMDoajR1wkpKjoGIsW79s23AZWGoP1B8wYPpXIvavgyYS4UdFyvqjDTMB+DCdR3710XAY8iKM45gBi8O1sGHiUbow29Dsexq4yM/L4qOO8EC5WC5QZMsY2nTuIEfvWoeK2UiV8ZBklQTpXuCsWveMt1YIMMFYrB6COY1pjw4JZuOAP8ADYjKfTaeZpvdmC1RX0xxFxbgGin05afapb6ojhl+Fp8uv5x6UYxtteuW2EK400iGpbi8E1plDHMu/wBKeBNMlfiGa5M6KsIO/lRnCuItbtOogkzM7yeRBoXHYoh0ZBlaI8I1j8ZqHG32uCbk+8G5Igx32mhqxW0MBfR7ISAAAdtpmdtvWhmwi2kRn1JhhtG43r3CcOV7bH3hVjssCK2D+8t5WOq6axyoWAavY0/v8/5ayqsuGunYMRyrKdfYuT9M6iRWkRUKYgdal97WZuEJc5TUqvrQDGt0vEUqGmN7N2OdEjFdaTrentU0Rz1ooY2tYrrUV64DS23eqV2miyeB4XO37NRO/etLz0sxmMCAknb7/wBaY9BV7ERzpBxTjyr4U8TdKU4riNy+SA2ReXU+ZpIyMGIEsQdxNWo2ZTm0MbqXXm6/iVd4+X0ra7xUZci7HQnTY1raxLoh8DCeoMGamt4ayqFSCWIjMY08h/Wl+xfoaYPhdrwkoIIg+gJmeWwpdxQai3M+MnTn0PrNS2OLBFKNJOkafEQQQY5HQeVBcWYhxc5v/wAY0Any3NCTexuUUsBd63ZCLoFYaMRpIjqPxoQXUDD3SMRHigk67iOfWobN8N4mCkDQK3U89oJ86Ls2UnSVcaqJBUzrpoCp6cqbxslZ0e/3oio8DxN8MbDlXv8AExbPMsp+pERUd0qzBtBmlXG0kc+xIOverDa4XYu2gFUIy6qw3HmRvUuioqRVcDi7iAplYg8hMg0XxDEOVytbcFhALbUSLjSUY5biTlbmCNYJ+ZGFQ4zjRvoEYDPprtEf1p7zQtKrILVkoBNwj/Sv5k/lR3DsZ7hguYlGPzAAqfIEiD1oX3SBTNxC3Qqx+5OnpS53zELEeX2+9FWNS4PB1LAY0MAZp5geIEc65PwLibp4TqB9fIVa8JxlTAg/TasmnFnf45LyIh9v8ACwv20VQ8+8aNc6xBn/ADDlzymq8LsoADpIGvXf8B966lgXtXrT2rihkcQ08/LpHI1zT2j4HdwV0KGFy058Dn7q45MB9RqOcaRdo4/LBwesCvH2Rl94GOaYnyiPI1u+CvXUDMyyJgc+UyalxvDnt5XzC5b3MaR3IqfDY1l+HnqpqkzOhZw3Ee6YuRmYGAN/SjTw1rga7fOUt8MHmdhQuKxH+JnMSRv5URh7t2+IQjKmsE7nsKPsMaF1nEZCVJ2/KsWw2T3maAzbDnqJ15URhrSF2F4QZ/fpU9m4vu3tSPCSR0IP9afVolK9jbC8RQIogaCvaqj23BIDaDvWUcQ+R+hycWFPgZ/Uj8IqZeMMD1Hfekf8ZMSBpRU5oUKBzJMxHUknQUNCUmPrHH7baMcp7/rtTO3iwRoZFUm4nNEzqDDNlJk9juo6QfOtrF8HRf8ADblGzdiDoD0NDgUvK+y82sRrRyX9KoVjjZBhlMjpvPPSm1njA2JI7HQ/eokmjaE4staOKlZxFILXGLY+YVHiOO240YelZ7NWGcUxy2wdaqONe5fMDbpWnEOIG4/OByg0Lfe9lkKVQ8/61rGJzzmQ4j3iEqdT1H9K3s4zLGUTA5j5judtTUvD7sACASx1mNe0nYU2u32yABBJEALBjoCZGtU2jNJ7TF13+IuIGMkHUAkkn/aNhRGCw5cS4JOypt8O5LDX6dKn4dfyDLetHmFYHc6ALMwCYqRMcylltCdQFIIzAAyVPSCTrzigMHuL4SoEm3kb+YN2/lYx20M60sOGuXFDBM6AaAGSD3jnU2Kxd3MFuf4Yb5jrv+FDWrj4Z/i05EagjvypZKdGlhbJBVkZW5NJ0Pda1D5fCx8S6DuKKxrriHUqQH+YjbKOdHWuGWmXW27bAOXI17cj6A+VJtdiSfQBicC7L74EZZzBeesT61NgMbpo0dq2GDAzob8FflJXX1P71oG1w1WYxcAUbneT0GwPWaMPY8p4JsXca45ZVJgfFHhG8yY1/pQy4G4HCjKZEyCIjT9xTg8KvICbVwOI0iVPaNcpPrQWEtPbPvipaT8ImVnmwGo8qaqsCkneTXEcNuAZlYOI27fUg0vbCsBnJHXereMYN2tgTuRoRuToTEEkmeR6gmFD4Zc1xgodCRlJnTQSMoBhjz8qaYnFCyzc8Ssup6fjVn4VeU76Gq2pQOGUQAde0+W1OsPhmuke7/8A1yqJZR1eBsu2AugDQ0D7X31fCsjaszoE6hgSSR5LP1rfhns9eI8Vw7RoNp5+YoD2k9mblq2LiXHcoACLhnRyFzAxpBOo6a8qiKZr/Il+NFbwDI1t0uMQSCAQdAeWm0UuvW3tqpUgo8QenY9xWjBrDlCQT1G1enEZrKIdgfzmtkqOFuzDbtAS7Fj0BrTh+Fd2JRgnSTFMRg7MIwU6EBwSSIPMT9KK4lYtjK9hCIiUGs+nWlyDh2LWQtcVLinMP5T8Q7H97UZi3sBfCiCOeuY/7iZqfB4VC2W5KllAUswXNPxKCYII038qBxGFFu/4yHBkAgQB0gdQIoCyG1wtSAZrKc2uHWyAc2/cVlPkw4oqfujIEa0Y+iXNDukzz30/P0q6/wD85uH/AO1F/wBrH8xROF/s8j475YH4lCQD9WP1p8kRwZVOH4tPdqCwUgagnU9x1oQ8NzFnbMMzHKiiWM9uvblXTsD7AYNIJV3I1lnM/RYH2punDLdv4EUeX67mk5UC8dvLOX4L2avM2e5NpTsBBaBoJO20VZcH7IWWgsGc/wCZiftt9qtl/CBl00qXCWyOVZtyZ0xjFLAsw/spYUaW1HoKW+09i3hrLOiLmkAabSYn0FXe0eoIqDivC7WItm3cEg/XzBpUDkziuNw/vEDK8vz/AOqW2cXc+DeORP67Va+N+yd/CEtbBu2v5lHiA/zL+Y+1VX+Ge4WdTBHy846960TMpJ7QPisOyGZH+0n8wKf8JwYVMx1MS+3pvsORNLcHhw4ZYDXJMSYEBZAg8zrRxxbW4UEkk+GAAS3wnTp3PXzpu2SqTCuINl8JGh0VSNSQBI/0zJmOW9KMLiHtPLzPU7GNN684kl1XDOwDTAUEwo8+lSi9iYbUQvzTofI86SseLM4hjfekKwyKToSI0HPWtG4YpX/5gRPw6fXeP+qBIZ8zMGIHzAEgf0phw7hiXUIzEPEzOnPl9KbwJfl0ScN4ZcYBlAIG8mJGu3c6HWt34jJyIjFgdtgCNDPrW2CxbW5t8100/Gg21Z3DqpnYgnWPPT6GpeXkvSwZfwwDBrmrNqRI+0GRp+FGYLErZAUkFGkrOsGYZW77EHyojAcLsXbOZjNzrmM0l4hh2RgjMAokhuunbnS/tiwacc0Wi3ibQ8QbId/CdCeXn6zS3hfEMt261xwQ2YFiI1zaE+dVq2RPik+W9M8LbW+xIIRxtmghukzoD+NUocSOfJji1bF9lUXIRT42XWAQTA5SSKA4rbGG0t3MxYy3nr8Mctd6lN8tFkqtvKPG6yJnkDMHzrYG2FKW0QxuWAMnlHM+c0N5CMcAHDbJxD5SIX5j26CugcLVLShQAI2FVLh11EuRImd+oIkT3ERPlVxwPDXuwxORf+R9OXrUTfo7f46Syx3hsfSP2348qWvdg+O54f8ASkgsT5xA8z0p/a4AgEh3nuRH4Vz/ANoeBMuKy3HLI4Z1YnU5SAVMfyzy3DA0o32HnkqpFaxN8G4p3gVNj7fvMpVZYKZiBttPWtMbw3IMyzodj9OfeswmKe24LKVBECRpWieMHG1mmZhMXKFCR4hlMx+PKjLHvBaJAJKsqt3kyRHJYHxTrULcPFwM1sbQTI0PXU7AfrU9q3dS3/hstxCIZQfFB+X/ADKOXnRgMthPGOI276IG1gakQJMEyOkbUN/cqsgK3GzgTqdJ/KveD8MsXLZzls3LxRHptUeILYY5Scy/Kw/AjrRY6xbE7pdUkdK8p/aS2QCSSTvrWVPyfQfH9nbWWvGTtRDW5qJrcGgCFkNaraEzM0SFmsyCqA1RBWvu8pqQitTGlLA0SA1hPasUd6kI0ooOQLcWefpVP477Grdf3lpxauc4HhPmBqD3q7FK1ZBRRXI4nxn2Vxlps4thurWzPl4SB9hSGxbuNcAMhwRAbSO0cq+hHwoNVb2l9kziAGRgjjaRoexjUU7pE8E3dnLcZcYzbKBWHxGfzqYYW26RGVo8LDYnow5+e9TcU4JfwzzfQZWOjAypOwE/rUJs/NaOU80Ox/0nl5Gl+hV7C8NeC22tnQ7R3jalOAxXu2gkqQaMwLFiXzZCNIyyfXpTO/dV0KPluCDDAahoJEjlrznz3qU6dMqryhUyrcuBmcIh0aN9Nd/Wm+HS2PDZtiDP+I46b7+JvtSn3SqhuqMrIRmXkykxtyIqW3xt/wD67fPSdp2OlX1gm1eT3HI1jxZpLMPDEKZ3I5isAF5GuOuVEECebETp++dacVsMiJcds1xmkRsAu4A84oNXu3wVGm51J+gmjjeRcqdf4NuC2kW2rZbbFj8wBIHdpn0C963xdi24LG2LRAJzLHaNIGYelJsJduJooBHNT150VieJPkj3eTq06a/jSp2NNVRljBXHUtmSTGnTpqNqjuXCngyw38o385HbWalwlxCIAjkCp279/Lat1vG42RQGfKFLxssmYoTHXoaezXC8x9/c1J+BeQ7nv0q84bFRSbAJlQKNoo1FrOTyd3jioxoe2sWaon9oFy5euWxaGtrMSQdZfJp6BQf91PeJ8TGHtNcOpA8I/mbkP33rmqcbuByWEsSSfMmTVeNPZz/yJx/qatfvZlFwNC6x1A1Pn19KsFvF2HtkPB06bilL3Ll8gBSHHiGbQ6c+w70v4hadD48oJOuU7+g0q6s5+VE1jiAth0DHIZAA5g1vb97aUEpKESCNdKHN1MmUCY5xNSWuIkrkAYnaBrQ1gSlnZ7w97lx2FsDXUyYFEYzBXMym8vgB8RUn6+VL1zIodCQZOYetHHEYlkDESpGhPSm1QJ3hjVODWyBlvEDl8NZVdt3XUAe8I7R11rKXEfNej6JXECK8fFChHSoLgrOzRJBTYsA1j4sEaUA6k1qAaVhQaMUaH/iT+/WsAodkNMAtMURRFrFawT+zSsivFcimhUP7b1sGpPbvmikxFUmJoYKZrYgUIlypRdmqEaYnCpcUo6h1IgqwBB9DVF417ARL4V8p/wDG8lfRt19ZroKtXripaLTPns4K/auslwG3c/lYaHp5juKixb3UjMAATrl59Na7P7R8CTFWyrCGHwONwf07VyP2h4fesuqXFkcm1ho78vKhU3omUWlhkH8RnEkdCxOmaOXmdprbB2rltDcMKBqFO7RPqIk79aHNlyw8OYcgusnv3pqeF4i8sFBbG2p37HpQ2kKm9A9p/eE3HuKp6RIAMbfvrXqWbl1yyEBYgNlIDQN8v51DguH21dluNJXTTbl6mmuM4oqIETTSO5/Qd6Ta6HFNrIhRDnaXIMwYEiduZrbF3XYZAc2xlQfpArZOHXXaLKtcncqpgHnrtTXBcAx1vX3LamdGWf8A2q3jJKi3gUNYCqo90wY/MwYD76GmvC7ost8OY7z166VJxHhmM0LWLkDWdCfopJpahYtEEmYI1nXSI6zU3ZfHjovWCuBoI+E6iisTi0tIXcwo+/YdTS/hsYfDlrpiCW32GkD99ap3F+KviHzj4FPhXoDpJ6n8KhRtm8/Lxj9hnEMe2JcOxyprkDctNyObHtQWLwC5lZiQDsNOXWK0tYtEAO5PIcx36VKmGa9486jTRSDoPOa0So5W+RticO6JNu+zCNp+1AwDaztJbMASekGpb1t1ZUeFVvmGv7NT4jhRVAUfPbO55r10qmJIJ4djLaAQqkd6mw7oztcVBAMHLMgGJIjc0DZS2Fh0Ur/MBt5n4h50VlVLTe6YFYnK0HTnlbQg89ZqKKtg/FMP4z7tgVZcxJnSOfrpUVnikWhbY/ACAK0ust0Fs0MAABJOgHOdK1wOGQW2dwCTooPLmT57U+sizdo0tOoAzEg+R25faKytv7pZtcwE9/615TuIvy9Hdi01gUGhRdr1MTFYWbUFG3Q7CiFuAihb7xQwRsGrVxQ74gCoruMAG9LkPiFOdKEuP0oY48UO2JmmpBxD0u0Ql2lSXanR5G9VYhtavTpU6XKT27kUSl6nyFQ0S/U4uzSpHqUvTspIYMwpTxnggxCFHAyntr6dD3o3DtGp1/fKjBdmkPRzC97EYmzJtOLgnQfCR6860t+z2OuCCgXuzE/YV1TStS4FHFNivFHKr/8AZ5eKlxeHvOehAPaQdPOjfZn2GUDPiRmaToTKiD0O/rXQrjgbUM1z0puQRhFO6Mw+EtoMqgADkBU+VBQD3SKAv4olssx3qbNmvsbvdTaq/wAcwFqDey5WQSTESo1M9dK1fiKW/jZR3JH51X/aD2xt+6uWrcuXUrm+USImTvHaji2yZTUUV7iPFGvHNqEUyg692HX8KVsCrkLHi1APU/gKFS6QN9OQ/fKtnzBldjObWftW1UcTlyyepbzklt/pHpR+Cx4SFupmC7HXbppyoK9dhyV1B1Mdef61piGZsoK5Qdv+qNhdaD+K4xHC+7BJzTMR10ivBirltfEjLIjsa0wgVbpI1AjT+lM+PY9XCL+xFS90i1dW2AYT3qrnKNlkDMPtKjWtMTfVeUP0AZde4gCtf7xcFRBCqwYyOnbpRXGMYLoEQWO1D2JVWwPD4FwuZcrabTqK1u4vwBADI306VJbvMgGbUHSRrr0rw2i6sZ8W8Ecunan+xdYPbeP0Gn3r2vbfA3IBkVlFIds60bwrR7wiqm/tXaEwGP2/GgL3tkJ0tz5tH4KawXjkbOcV2Xq1jcvOprl/3g31/M7Vzy37T3HMKqLrGssSewBGkTJ5VvifaW6BvlOui5YGnw6g5kO8z96r432T8kbwW9roHOlmN4vZT4rijtMn6DWud4jiNy4SXdmHQkx9NqiLltNAB6CqXi9k/N6Lu/tNhx8zHyWpk4/aImSB3U/lVIS2sQNerHb0H51qigrGf0p8EL5JHQMPxW05hLik9J1+hpgt4iuWKNtv3r+VN+H8evIQkh15Btx/u/Wk4eil5PZ0K3jOtF28SDVKw3tLbOjqbZ+o+o1+1P8AD31IDKwYn4QDI7E/kKhpotNPRYUuHofpUqXxSV7dxQWJnrB/c1lvGSYOjcj17GgpFiW9Wy36TJjRG9R3+KIvxMB5kCkMsAxXetHxVVG77S2V3up6Gfwmhm9rMP8A+T/i/wClPJNr2XG5iqHfFxVLv+2FkDTO3+2PxihbvtkuUlEM8sxA/CaOMh/JFdlt4lxhLaFmYKBz/e5rn/GvaC5e/wDjLIg+YNDH6HQdqT43iFy82a4xaNhyHkKGyyQBuY7amtowrJh5PK3haJ7V5idfESYBJ11PU1ti0hhmBjXbnG+nSdJjWmFnCi2okhg2s7BtxlObZSdm2P0rL91ckxsIlozHpJG8dabdGaVivE3QxUDYdqlxplVEdP615ZwhczOUURcw6hl1J0jXnRhFU3ZDacJAyHNvUeIDyHOv5TtR+KUe7DHQgj76H7a1tZghQecjz7UrG43gA/hmy51Jn5h261NhHAuKd9B61JYu5CUY7EgHryoVFyuSmonb8qL9glTwN+MsrpIUCBy51rh+Cq9rNbBZl35/ao7uEuMhJXIm5YkHQbwBvRfCrjOsKRbRdBJ3PUxufwpZ6G6vIFbwdy6BlSFXmQVzeXWKhOKKkIVKkaGeUU4weJa2zgyZOoncHYg0q4tlJIEsTDAxrGo16HektjeiT+8l61le2MSgUAodBzrKqkLIDjEIGnXtQwtDQtOp1jpHfvWVlUjKQyNsFBLDQyAARIIGUDopEzzoLFW2PintHIDYADkKysoexpYNsPhNJNDlhJPLpWVlLsHo8e6ToNB0Fa3rWWKysp9iZ6jgCCPIitzdGaSIHbrWVlAHl6+W5fsUx/jCiWnUkECJE7hjp6CKysooE2OuH+09674NtPExgwO2kkmtMb7QXZKWsqxoWyie41rKypkkOMmJm4jiGJX3rgDoY/8AWKBuOQ0ySSPmMn61lZTQM0e6SINb2101JgDl15VlZTYLZpf5CvLGp2r2so6F/wBBtuyNNPoaN4ZYEkrETDAjmQYE80n1rKypLYLjzoyL8KwSebch6DkKBthnIA+5rKymtE9jM2rqrmGXahbtghBcLSeY/SsrKEUyfC3A5JeSuuhM+tRWWfUKAQOZjkd461lZQwWjbDYMXG1Pn3Nb4jCZLii3JJ5E/nWVlSUkqDGe+AyMsShgSDrp9OvpXnAbyBcryZMiOU1lZT0idsYcUVcPLnxltApGg00A/M0HhMUBqyyfw/pWVlJjiRXOMCTp9hXtZWUh2z//2Q==" width="350px" height="300px">
        
        
        <p>Tenemos servicio de contacto directo con los empleados, para que en caso de 
            duda o problema de servicio, puedas llamar o contactar sin compromiso para que ellos te ayuden.</p>
    </div>
    </div>

    <div class="tarjeta3">
        <div class="titulo">
            Café de alta calidad

            
        </div>

    <div class="cuerpo">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMGpdU7uRMBGybfVkSoA-URWf5FPMBZUCfusIBmUA_PwMPQc5I8gOPNPxUhBGTYW2keD4&usqp=CAU" width="350px" height="300px">
        <p>Las dos variedades más comunes de café son el arábico (con gran cantidad de matices en aroma y sabor) y la variedad robusta(más acido y amargo),¡y nosotros tenemos los dos!</p>
    </div>
    </div>
</div>    
        




</body>
</html>


        

@endsection