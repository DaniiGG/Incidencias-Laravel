<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            *,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}

            body{
            margin:0;
            line-height:inherit;
            font-family:Arial, sans-serif;
        
        }

        main {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0)),
                url("https://cdn.autobild.es/sites/navi.axelspringer.es/public/media/image/2023/01/nuevos-coches-policia-2928690.jpg") center/cover no-repeat;
        }

           a:visited{
            color:white;
           }
           a:link{
            color:white;
           }
           a{
            text-decoration:none;
           }
           .navbar{
            display:flex;
            justify-content:space-between;
            align-items:center;
            background-color:rgb(18, 18, 18);
            color: white;
            }
            .navbar h1{
             margin-left: 20px;
            }
            .navbar div{
                margin-right: 20px;
            }


            .incidencias{
                margin-top:80px;
                text-align: center;
                font-size: x-large;
                height:70vh;
            }
            .incidencias h1{
                color:white;
            }
            .incidencias p{
                color:white;
                font-size:small;
            }

            .footer{
            display:flex;
            justify-content:space-between;
            align-items:center;
            background-color:rgb(18, 18, 18);
            color: white;
            }
            .footer h1{
             margin-left: 20px;
             font-size:large;
            }
            .footer h2{
              margin-right: 20px;
            }
            .footer p{
                margin-left:-160px
            }

            .footer h2 img{
              width:30px;
              height:30px
            }


           button {
 display: inline-block;
 border-radius: 4px;
 background-color: rgb(18, 18, 18);
 border: none;
 color: #FFFFFF;
 text-align: center;
 font-size: 17px;
 padding: 16px;
 width: 130px;
 transition: all 0.5s;
 cursor: pointer;
 margin: 5px;
}

button span {
 cursor: pointer;
 display: inline-block;
 position: relative;
 transition: 0.5s;
}

button span:after {
 content: '»';
 position: absolute;
 opacity: 0;
 top: 0;
 right: -15px;
 transition: 0.5s;
}

button:hover span {
 padding-right: 15px;
}

button:hover span:after {
 opacity: 1;
 right: 0;
}
            
            
          
        </style>
    </head>
    <body class="antialiased">
        <main>
        <div class="navbar">
            <h1>Incidencias</h1>
            @if (Route::has('login'))
                <div >
                
                    @auth
                        <a href="{{ url('/dashboard') }}" >Dashboard</a>
                        <a href="{{ url('/patrulla/create') }}" >Patrullas</a>
                    @else
                        <a href="{{ route('login') }}" >Log in&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <a href="{{ url('/patrulla/create') }}" >Insertar Patrullas</a>
                        <a href="{{ url('/patrulla/showAll') }}" >Ver patrullas</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" >Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <div class="incidencias">

           <h1>Anotación de incidentes</h1>
           <p>Por favor, anote las incidencias que ocurren a lo largo de la jornada</p>

           <button>
            <a href="#"><span>Anotar</span></a>
            </button>

        </div>
        
        </main>
        <footer>
        <div class="footer">
            <h1>Departamento de Incidencias</h1>

            <p>2024 | Elias Mouimi & Daniel Escobar</p>
          
              <h2>ESP&nbsp;<img src="https://i.pinimg.com/originals/62/23/53/62235301e51631dd37acc95f62e6d676.png"></h2>
        </div>
        </footer>
    </body>
</html>