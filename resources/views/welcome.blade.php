<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            * {margin: 0;padding: 0;font-family: sans-serif;border:0;-webkit-box-sizing: border-box;-moz-box-sizing:
            border-box;-ms-box-sizing: border-box;box-sizing: border-box;}
            
            a:link, a:visited, a:active,a:hover {text-decoration: none;outline:0;}
            
            .sidemenu {background:#f2f2f2;position:absolute;left:-200px;top:0;width:200px;height:100%;overflow:hidden;transition:
            left .5s;}
            .sidemenu ul {list-style:none;padding:20px}
            .sidemenu ul li {display:block;border-bottom:1px solid #FFF}
            .sidemenu ul li a:link,.sidemenu ul li a:active,.sidemenu ul li a:visited
            {display:block;padding:8px;color:#000;transition: 0.3s;}
            .sidemenu ul li a:hover {background:#FFF;}
            
            .contenedor {display:inline;float:left;width:100%;padding:20px;transition: margin-left .5s;}
            
            .toggle {display:block;width:40px;height:40px;background:#f2f2f2 url(toggle.png) 50% 50% no-repeat}
        </style>
    </head>
    <body style="background-color: red">
        <div class="sidemenu">
            <nav>
                <ul>
                    <li><a href="#">OPCI&Oacute;N 1</a></li>
                    <li><a href="#">OPCI&Oacute;N 2</a></li>
                    <li><a href="#">OPCI&Oacute;N 3</a></li>
                </ul>
            </nav>
        </div>
        <div class="contenedor">
            <a href="#" class="toggle"></a>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
                    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
 

    </body>
</html>
