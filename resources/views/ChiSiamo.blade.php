<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chi Siamo</title>

        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body{
                font-family: sans-serif;
            }
            header{
                height: 150px;
                color: white;
                background-color: #0f0e17;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            ul{
                display: flex;
            }
            ul li{
                list-style: none;
                padding: 0 20px;
                font-size: 20px;
            }
            ul li a{
                text-decoration: none;
                color: white;
            }

            main{
                height: calc(100vh - 150px);
                background-color: #a7a9be;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        </style>
    </head>

    <body>
        <header>
            <ul>
                <li><a href="/">Home</a></li>
                @foreach($menu as $voceMenu)
                <li><a href="{{$voceMenu}}">{{$voceMenu}}</a></li>
                @endforeach
            </ul>
        </header>

        <main>
        <h1>Chi Siamo</h1>
        </main>
    </body>
</html>