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
            font-size: 30px;
            margin: auto;
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

            img{
                margin: auto;
                width:230px;
                height: 230px;
            }

            </style>
</head>
<body>


<div class="wrapper">

 <div class="flip-container">
    <div class="card">
      <div class="front">
           <p>Expresso</p> 
      </div>
      <div class="back">
        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw0NDQ0NDQ0NDQ0NDQ0NDQ4NDg8NDQ0NFREWFxURFRUYHSghGBolGxUVITEhJSkrLjAuFx8zODMtNygtLisBCgoKDg0OGhAQGS4lHSU3KystNi03KystNS0tLTMrLTUrLS01Ky0tLS0rLS0tLS0tLy0tNy0rNysrLSstNzctK//AABEIALwBDAMBIgACEQEDEQH/xAAcAAADAQEBAQEBAAAAAAAAAAAAAQIDBAYFBwj/xAA7EAACAgEBBQUFBQcEAwAAAAAAAQIRAwQFEiExUQZBYXGRE1KBocEUQpKxwiIjMnKistEHQ1OCVGJk/8QAGQEBAAMBAQAAAAAAAAAAAAAAAAEDBAIF/8QAIBEBAAICAgMAAwAAAAAAAAAAAAECAxEEIRMxQRJhkf/aAAwDAQACEQMRAD8A/SAAAgAAAAAAAAAAAAAADABAMYCAdAAgGFAIRVCAQDABAMQAAAAAAAAAAAAAAAAAAAAAAAAAAAADAAAY6AQDodAKgHQ6AmgoqgoBUFDoKAmgoqgoCRFUFASIoQCEUIBAAAAAAAAAAAAAAAAAADAQwodAADSHQCHQ6HQCodDodATQ6KoKAmgougoCKCi6CgIoKLoVARQqLoVATQi6FQECLomgJAYgEAxAAAAAAAAwAAAYhgBQDQBQ0gKSASRSQJFUAqHQ0h0AqCiqHQE0FFUFATQUVQUBNCouhUBFCo0oVAZtCaLaE0Bm0Ki6FQEUKi2iWgJEUICRgACAYAAAMAGgQ0A0NAhoBpDSBIpIASKSBIpIBJDodDSAXj0MFqb/AIMeSS61GC/qaYtZllCWHdf8U5Rl5bjf0KXtE6TxteMZKXqnXyCVKWX/AI4Lzyu/lFlJZX3Y1/3k/wBKNseOT6efI0nwVbq89/iBw6jUbvBd3N9Ssc3LinDyd2Z5sKfc/wASMlCu5+qOdp07N3J0h+OS/SUoS6ejVHMs7S5P4yRtpc88lpbia53x/Jk7Rosk1F1K1fe4y3fi6pFULVxyKLftWuSqMYpcX42zPRtvFBvi2rd2+8kaUS0W0JoIZtCaLaJaAhoTLZLAhiKYmBIhsQAAAADAYDQ0JFIBopISKSAEWhJFIBpDSBFJACQ0hpDoDn1WmeT2dPd3J73mt1r6kvSzlLi5KP8A6y5/U2zT3XHxtfImWrS7ynJNZnUytpE/HbFpJRSpLu4kTin4HB9sfczDVbQlj48/Mqty6V9u4wWl15ca6nLkSXe2cq2/fCkaS2t4RfwsV5eO3pM8e8e3LqpN8E6MNNOeOamuKVp8WrXwO2e1a+5D8KKhtR+C8kjrzVnpz4rR27WpzxunKmrV9e7iy9JGscFadKuHK0zgz66Uoy49x07Ek5abE3zftH/XI6xzq2viLx1t1tEtGjJaL1KGiWW0JoDNks0aJaAzYmW0S0BDEUyQEAAAxoSKSAaRSQJGiQCSLSGolpASkUkUkNICUiqKoKASQx0OgPg9rdZPT48E4VxzuDTXBr2U39DzsO00N6smOS8Yu16M+z/qDw0mKXu6rH88eRfU/Mc+pqfM8jmxbydPX4VKWx9v07Q7Tw5acZNeaDa2qxKLuaXnwPKdntRZr2nz1ifkUWrM07XRjrF9Q1eqwvlmxrzkjRbRxwVfaMTX86Pz3Lq/E5p6sqxY7UncLb0rPt+kZdt6dLjlx/BpkLb+nX378k2fmk9SfR02U2Ra7NbFR7XUdpowjJxhKV0lf7K4tL6nuuzc3LQ6aTVOWJSrzbZ+N6nJ+wvGUf7l/g/Z+zkK0GjX/wAuB+sEzXx9zaZlj5MRFY07qFRpQUbGJnQqNaFQSxcSXE3aJaCGDiQ0dDiZuIGDRLRtKJm0BmxFNEgWkXFCSLigKii0hKi011QFJFJCUl1XqNSXVeoSpIdCU49V6jU49V6gVQULfj1Xqh78feXqA6Cg34+8vVBvx95eqA8v/qQq2a5e7qdI/XKo/qPxXX52sh+5dvYRnsrWcV+xHHm5/wDHljN/KLPwTa3CfxZmy0ibNWDJNavV9nNb+R9Db2XLLA3DHGbyrchvLea6yXcq6s892VeO3LNkUYR+796b6Uu417SbZytb0HuRg08cPupLla7yrxQt887eezY81SpJ1l9iqf8AHk71HrVO34MNXpHCajGcZJY1kyZJPchBN0vXu5t9D52s21qckXCeT9mTt1GKde7y5eAntzVNyfta3kk6jFJeXDn4nUYoTPIl066DwTjjlOMpNRk1HeqN8k77z6GkzHncmqyZZqWSTlK48Wknw4dx9jRN8B44c+aZfX1GXhjXWa/KR/QOgxbmDDD3MOKHpFI/nzRYfa6vS4ffyKL+Liv1H9Gby6r1L8ddM+a29FQUPeXVeot5dV6lqkqE0PeXVCtdUAmJodrqJsCWiGjRksIZSRnJG7RDi+gHPJEUbyg+j9CHjl7r9ALAdBQSQDodAIB0OgEA6CgAYUFAADoKA5NraVajS6nA/wDewZsX4oNfU/n3ayclCfvxjPo+Ks/o6jxPajsVg1knLG8ekk3Jtwi9x8ebj/hrmV3iZ7hbjtEdS/J9lZKZptedwkvA+5LsTq8M5KH71Kt2UYyUWvFvgvVnPr+zOuSp4JcV3VJV8Cqdx8W1rE/Xg8iJjBnqJ9kNoc1pcj8o2OHY7aP/AIs1/NFxRz+a6MH7h5vDje8j7eiR9vQ9g9oz4/Z10TuTfyZ9jZ3YTM5RWbNj074cMimpNvuScUTEzPwvjrSN/lH9hx9h9P7ba+mVWsb9o/8Arcv0o/bzyXY3s7h0mSeRY/3yUovNKe85RbSjUVwjwTPXUaKxqGK8xM9AAodHTggHQUAAOgAQDoKAQwoYCAYAc9BRVDoCaCiqCgJodFUFATQUVQ6Amgoqh0BFBRdBQE0cWtjxfRq1/bL9HzPoUZajG5RpVfjya70B5XE93I14nrNjO8TT41N8+PCkeY2jps0MqlHT5ZJtXKG5KK8+N0fS021XpotSxSm3TrGss2vioV8wPvzwY3zhB+cYnPPFBcoRXlFI+LPtdHl9k1X4Dp2btmGpluvFqMXC7ljlK/RAfK7ZZ3HBCKbVzb+Ci/q0fB7PYryQb/24PI/5nyXrL5HtNv7Ahq8aftZQ3Iy3Vuc267ufcfA2fszPihkTwtTm1TbShurl4977l3Aeh2PD925+/J1/KuH536nefD0ks8IqLaqKSSSpJdDvx533gdo6MI5UWprqBpQUSpFKSAKHQKSGAqChjoCaCiqCgJoKKoKAwABgIYAAAAwAAAAGAAAwAACgGBDiZzxJm4qA5HjkuTJ38iOxolxA5vtMu8ylqGzrljRhPCBg52It4iXBgTbKU2SybA2WVlLMzn3gsDrjnZpHMccTSIHZHMaLIccTWIHUpjswiWmBqBKZQHPYWIAHY7JACrAQAMZIwGMkYDGSMBjJACgEADCgABUS4lgBjKBnLGdDRLQHLLGZyxHY0Q0BxPELcZ1SiTugYxRpEdFJAOJrFERNIoC0VElFoCkUSigP/9k=" alt="">
      </div>
    </div>
  </div> 

  

    <div class="flip-container">
       <div class="card">
         <div class="front">
           <p>Ristretto</p>
         </div>
         <div class="back">
           <img src="https://es.jura.com/-/media/global/images/coffee-recipes/images-redesign-2020/ristretto_2000x1400px.jpg?la=es&hash=ECB7434312DBFB4C31CA2DD976AFCDEF8EC5DD48" alt="">
         </div>
       </div>
     </div> 


        <div class="flip-container">
           <div class="card">
             <div class="front">
               <p>Macchiato</p>
             </div>
             <div class="back">
               <img src="https://es.jura.com/-/media/global/images/coffee-recipes/images-redesign-2020/espresso_macchiato_2000x1400px.jpg?h=1400&la=es&w=2000&hash=F0CA5BAA7986AD122D643698823D6E5EAA514E1E" alt="">
             </div>
           </div>
         </div> 

         <div class="flip-container">
            <div class="card">
              <div class="front">
                <p>Americano</p>
              </div>
              <div class="back">
                <img src="https://s7d1.scene7.com/is/image/mcdonalds/t-mcdonalds-americano-1:1-3-product-tile-desktop?wid=765&hei=472&dpr=off" alt="">
              </div>
            </div>
          </div> 

          <div class="flip-container">
            <div class="card">
              <div class="front">
                <p>Lungo</p>
              </div>
              <div class="back">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw0NDg4NDQ0NDQ0NDQ0NDQ0NDQ8NDQ0NFREWFhURFRUYHCkgGBolHRUVITEhJSkrLi4uFx8zOD8sNygtLisBCgoKDg0OFRAQFS0dHR0tKy0tLSstLS0rLSsrLSsrLS0tLSsrLS0tLS0tLSstLS0tLS0rKy0rLS0tLS0tMS0tK//AABEIALwBDAMBEQACEQEDEQH/xAAcAAADAAMBAQEAAAAAAAAAAAAAAQIDBAUGBwj/xABFEAACAQMABQYKBA0FAQAAAAAAAQIDBBEFBhIhcRMxQVGBkQciM1JhkqGxwdEjQnLSJDJDU2Jjc4Kis8LD4RQlNFSyFf/EABoBAQADAQEBAAAAAAAAAAAAAAABAgMEBQb/xAAwEQEAAgECAwQJBAMAAAAAAAAAAQIDETEEIUETFDJRBRIiQlJhcYGhU5HB4RUj0f/aAAwDAQACEQMRAD8A+kBAAAAAAAAAAAAAAAAAAYAAAAAAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGAAADAMAAAAYAMAIAAAABAAAAAAAAAAAAAAAAAAAAAAAAAMAAYAA8AABgAwA8AGAFgAwAAIAAQAAgAAAAAAAAAAAAAAAAAAAYAAwHgAwA8AGAHgAwAYAMAGADABgBYAMAIBAACAQAAAAAAAAAAAAAAAADAYAAwHgB4ATa5unGcLnwBbpvCw49vR3BJchN/lEvs09/tkwKVpLpq1O6l90Bu3x9eo/U+EQEqC86frL5AWraPnVPWXyATox86ou2L96AXJLz59qh8ghkVtnml/D/kJYq1Jw37munDw137vaBji01lNNPma5ggAIBAIAAQAAAAAAAAAAAMAwA8ANIB4AeAHgB4A5N1tS0hQpqUoxVnXqSSbWWqtNR5uMu9hLrQjJblPP245fswBtUk3z47Mr5gZHT9K94GGomuZJ9uAMac/NXrr5AXtVPNj6wESVT9WuLkwJ2Knn01whN/EDYpU5Y8o+yMV8wMdzbwlGUZJyzF/jtyXdzAcvQq/BqXCWeO0whu4AWAJwAgEAAIAAAAAAYAAAMAAoB4AaQDSApIB4A41WaWk1nOFo/n41/8ABS1613leKzO0MtXTUVJwhTlJp47ew5Lcbz0rXV014WdNZs27S9rTfk9ldiIrxGW3TQnBSOrdnUqY+quLLzkvpupFKOXdVa+1unGK9GTkyZc2vK2jopjx6bMXK1/zq7pGPa5v1Jadnj+FkhcVV+VXtL1z5Y99WcOP4WZXFTz13ZNo4jJ5s5wU8mWnVk/rxXGD+BvTPaesfszthrHRsxqzXNOi+1pmsZLfJn2cfMuWcspxxhc6kpIvXLrOkwrbHp1c3Qm+2pv9p/MkaROuzOY0bzRKEtALACwAsAIBAIBgIAAYAAAMCgGgGBSQDSArADSA5l1j/US5sqnS488jyuMie11jyj+Xdg8H3RColJ5jne+k5O1tE82/qaxyb9tOn0JrtydOPLHkyvSfNtyqwS6TecsRGzL1Jc6ve0U97fcjlvxVInaW9cNtGCWlbZc8n3FO+Y/KVuwyMUtOWq+t7B3ynwynu+TzY56w2a+s+4jvVJ92Uxw+TzYlrLaLfl5XoJrxUfDJPD380y1qodEG3wRp3m0+6r3bzldprBym0ox2VgtTJed0WxVjq6WhKrqW1Ob3uXKfzJI9LBGmOHBm8ct1o1ZpwAsAJoCWgEAgEAAAAAAADAaApANAUkA0gKSApIBpAfLvCDXq0tJznRq1KU1ZWm+EnHP0lfc+tcTkzxEzzepwlYnHz85ebt9edI057Mp0qyy/KUkn3xaOacNZbzWHr9Ba416zSlb036Y1JR96ZWKeqpamvV3rjWNxjmVvLsmn8C811hlGPnu8hpXXy3p1HGVvXz6OTf8AUYTws2nlLevKHNq6+Wb/ACN16tL75XuV/OFu0iGrU11tHzULntVL75McFbzhPaw1amuFB/i29X96UF7smkcHPmicrBDWtyzs20V9qq37FEt3aI6o9eZZo6fry/FhRjwjJv2svGGqJdjVu4uK86m3Vlsqm3sxSgvYaxSI2Z2iH0jUWONGWf7Ob76kjrrs87N45dxosyS0AmgJaATAlgIBAIAAAABgNANAUgGgKSApICkglSQQeAPl/hHh/uE312Ft7Ktc5c3ierwc/wCv7z/D5nV8o+Jl0dE7vc6lpOXYU6qW2es0nBbD4F+jGu75BrN/yZdhei8uLULqpySBMIbFr8SlmlHXtkRCz2Op1PdXl1U37iY3ZXfRtSY40ZZemgn3tv4nTXaHnZfHLtNFmaWgJaATAlgSwEwJYCAAAAAYFIBoCkBSQDQFoCkgGkBSQHzfwmQxeUn59i16tZ/fObNHN6XBz7M/V8qut1V8TJ1Tu9rqTPx0ZzurbZ7LSvk3wZadmNd3xvWV/hEzTHsvZxpl1JSSgIDZtPiUs0o7Nqiq72urC2bW7n1U5e5l67scnR9I1VpbGjrGL51Z2+eLpp/E6KeGHn5fHb6um0WZk0BLAlgSwJYCYEsBAIAAYDAaApAUgKSApICkEqQQpICkgPnnhQp/hFlLola3sO1ToNfEwzdHfwc8rfZ8kv8AdVfEwjZ2Tu9ZqXL6SJnbcnZ7jSvk3wJnZlXd8c1j/wCRLsNMeybONM0ZyklACW3ac3aUs0ps7VqVaPZ6Mexou7l+hNewtDC/ih9YsaPJ0aNPzKVOHqxS+B1Rs8yZ1mWVolCWgE0BLQEtAS0BLQEsCQEAAMBoCkgKSAtIC0gKSApIBpAVgBpAeH8KUPFsZ/rq9H1qLl/bMc20OzhN5fG9KLFRmEO6Xf1Rq4qRMrLdHvNJ1VyT4CZZ1jm+Q6wvNeXYa49i7jzNWMpCAEty0W5FLNqbO1a9BVeXubGjtWEKX/YuKNLjtVIxL1c155/R9aaOp5qcAGAFgCXECXECXECGgIaAloCWAgGgKSAtIDIkBaiBaQFJANICsAGAk8AeT8JtLNjTqfmb22lwU26X9wyzR7Lo4Xx6fJ8R01HEzmh6MtzV6riceKKXWh7rSFbNJ8DNGj5hp1/TPgdGPZS7kSNWMkEAJbtr0Gdm9Xbs0QmX0rQdDaloyl13EazX7OLqf0o0x7w5M0+J9JwdLgGADASWAE0BLQQlxAxuIESiBjaAhoCQLSAuKAyRQFpAZEgKSCVJAPAFYAMAPAHA19o7eir3dl06PLpemlJVP6SmSNay24edMtXwnWCPjZ9LOOHqzDBomeJLiVumHtbirml2GSdHz/TflXwOnFsyyOTI1YyAaDATo37Zb0Z2bVduwXjRXW0iqZfWdVqO1e0V0W9pUnwlLZh7mzfFu8/PPKXusG7lGAFgBNAJgJoCWghDQESQGOSAxyQEYAtIC4oDIsAWmutAWpLrXeEmpLrXeBSnHrXeA1OPWu8B7cetd6Ae3Hzl3gPbj5y70Br6QpRrUK1FuLVWjVpc6+tFr4kTGsTCazpMS/OOkW5UqcpLxuThteiWMP2nBE83vWjk0rF4khZFYev280l9kwX0eL0x5Q6cWzDJDly5zZgEglTiE6N22W8yltEPQ6FhtVqa65Iqi2z7BqTBOrd1XjcqNGPZtSl74nVieZnnaHrdpda7zVgW0utd4C2l1oBZXWgFldYCbATCEsCWgIcX1AY5QfU+4CHTl5r7gLCQAAADAAGAAMBgADQHwjWay5KpdU/zV5cwXoi6jnD+GUTzb8rzD6DD7eKs/J5ui8S7S1tkxD0tCrmkuBzzu1iOTzGlvxzpxOfLDnOO82c+ikgnQ1zojVaI5t62iZS2iHptWIZrxfRFNkQzy8ofXtTqWLXb/PVqlTs3RX/k7Mezyc0+07poyAAAAMAAAAAAYAAAauADABgB4AMAPABgAwA8AGAHgAwB8m8IVns39ziKUalG3uW28ZbUqUsdfko9553FR6tvW83uejskTT1J3h8+msSI11h1TGkuta1vo8GNo5tK7ONpJZZ0YnPlhpOJrqw9VUaZEytFGWnQbfMVm0Na4bTOzeoUJLoMpvDbsZjo9TqtbVHykowlJpY3RbLU9qeTi4n2Y5vs2iaHJW9GDWHGlDaXVJrL9rZ6FY0iIeNadZmW1glU8AGADADwAAGADABgBgAABr4AMAPABgAwA8AGADADwAYAeADAGOdhRrN8pBOWzhTTcZ7Pm7S34383MRNYndMWmNngtYNTdH8q/FlDL3qChFdySMJ4as7To66cdlrvz+rXtdQ7WpJQo15w2tyVSKnvx1rBz24K87X/AB/bsp6ViN8f5Fz4JKknuuaLXpU0/cI4XLHvR+zSfSmGd8c/u1J+CCt/2aS9b5FuwzfFH5Un0jh/Tn8EvBLUXPd0l+5KXyLd3ydbQj/J442x/n+nSWpNC2pylUqRqOEW8RoKG0+rLk8dxjPo6bTzyT9mlvTl/dxxBaOsreKm3QhLZSxtpPDfVhIvX0ZhifambfWf+OXJ6W4i+06fR6rQ8FyUJuMIym3jYhGCjFvCSx6MHbWlaRpWNIefa9rzradZdtSRZVQDwAYAMAGAHgAwAYAMAGADABgDBgB4AMAGAHgAwAYAeADADwAYAMAYrqU4xbg8S+q2srPpA8zppzrSUsKEsJSi84b60+rjgB6Fk41Ke1jMZxfiyjPp/RbJHtOURAxzqIDWq7wOFrFUUaEk5xzKUUo7Sy9+WTA85BvY2YxqTlKWfEhtJL0ttL2kodanXreIn9HTppKMNzk8LCcsbubo95VLcheTA3KF6+kDbp3eQM8a6YGVSTAoBgABgAwAYAMAGAMAAAAMAAAGAAADAAGAnHIGtVs4y6ANKtoqL54p8UBg/wDmKPMscG0AOx9M/Xl8wJdgulZ4tsC6Wj4LmhFcIoDP/pkBDtEA1aLqAyRt11AZI0QMsaYGaKAyJgWmBQAAAAAAAa4DAAAAAYAAAMAAYAAAMAwBLigJdJAS6KAXIgHJAHJANUgGqYDUAKUAGogUogPADAAAAAAADXyAZAMgPIBkAAAGAAMAAYAAwAAAYAAAAAAAMAAAGAAAAAAAAAwADVAAAAAYAAAMAAYAAwAAAYAAwAAAYAAAAAAwAAAAAAAYAAAAH//Z" alt="">
              </div>
            </div>
          </div> 

          <div class="flip-container">
            <div class="card">
              <div class="front">
                <p>Carajillo</p>
              </div>
              <div class="back">
                <img src="https://imag.bonviveur.com/foto-principal-de-cremaet.jpg" alt="">
              </div>
            </div>
          </div> 

          <div class="flip-container">
            <div class="card">
              <div class="front">
                <p>Café bombón</p>
              </div>
              <div class="back">
                <img src="https://t2.rg.ltmcdn.com/es/posts/1/0/3/cafe_bombon_41301_orig.jpg" alt="">
              </div>
            </div>
          </div> 

          <div class="flip-container">
            <div class="card">
              <div class="front">
                <p>Café irlandés</p>
              </div>
              <div class="back">
                <img src="https://cdn.kiwilimon.com/recetaimagen/36985/th5-640x640-46347.jpg" alt="">
              </div>
            </div>
          </div> 

          <div class="flip-container">
            <div class="card">
              <div class="front">
                <p>Azteca</p>
              </div>
              <div class="back">
                <img src="https://www.gastronomiavasca.net/uploads/image/file/6838/w700_caf__azteca.jpg" alt="">
              </div>
            </div>
          </div> 
</div>



</body>
</html>


        
@endsection