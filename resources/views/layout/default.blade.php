<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Smart-Time Support</title>
        <link rel="icon" href="/images/favicon.ico" sizes="32x32" />

        <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
        <meta http-equiv="Content-Language" content="nl" />

        <meta name="author" content="Smart-Time" />
        <meta name="copyright" content="Alle rechten voorbehouden door Smart-Time" />
        <meta name="robots" content="noindex,nofollow" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="/css/style.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
            *{font-family: 'Roboto', sans-serif;}
            body{display: flex;width: 400px;margin: auto;flex-wrap: wrap;}
            body header{margin: auto;width: 400px;padding: 10px 0px;}
            body main{margin: auto;width: 400px;padding: 40px 0px;}

            #logo{width: 100%;display: block;}
            #logotitle{display: block;width: 100%;text-transform: uppercase;font-weight: bold;font-size: 2rem;margin-top: 30px;text-align: center;}

            #applications{display: flex;flex-wrap: wrap;width: 100%;}
            #applications a{display: block;margin: 20px auto;width: 300px;}
            #applications img{display: block;width: 100%;}

            form{width: 100%;display: flex;}
            form input[type=text]{display: block;width: 60%;padding: 10px 10px;border: 1px solid #D4D4D4;}
            form input[type=submit]{display: block;width: 40%;background-color: rgb(255, 0, 25);border: none;color: white;padding: 5px 0px;font-weight: bold;font-size: 1.2rem;}

        </style>
    </head>
    <body>
        <header>
            <img id='logo' src='/images/logo.png'>
            <span id='logotitle'>Remote support</span>
        </header>
        <main>
            @yield('content')
        </main>
    </body>
</html>