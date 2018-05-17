<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Link HD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://ee.test/vendor/tcg/voyager/assets/css/app.css">

        <!-- Styles -->
        <style>
            html, body {
            background-image:url('http://ee.test/vendor/tcg/voyager/assets/images/bg.jpg');
                color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            div.shadow {
    position:absolute;
    max-width:45%;
    max-height:45%;
    top:50%;
    left:50%;
    overflow:visible;
}
img.logo {
    position:relative;
    max-width:100%;
    max-height:100%;
    margin-top:-150%;
    margin-left:-50%;
}
        </style>



    <body>    <div class="shadow"><img class="logo" src="http://ee.test/vendor/tcg/voyager/assets/images/logo.png" /></div>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="logo-title-container"> 
                                                <div class="copy animated fadeIn">
                        

                        </div><h3>Link Help Desk</h3>
                    </div> <!-- .logo-title-container -->
                <div class="title m-b-md">
                   <a href="/forum" style="text-decoration: none; color: white;">FORUM</a> |
                     <a href="/booking" style="text-decoration: none; color: white;">BOOKING</a>
                </div>
                <div class="links">
                    <a href="{{ route('social.auth', ['provider' => 'github']) }}">GitHub</a>
                    <a href="{{ route('social.auth', ['provider' => 'facebook']) }}">Facebook</a>
                    <a href="/login">Login</a>

                </div>
            </div>
        </div>

    </body>
</html>
