<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Link Shortener</title>
    <link rel="stylesheet" href="{{URL::asset('css/materialize.css')}}">    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="{{URL::asset('js/materialize.js')}}"></script>    
    <script src="{{URL::asset('js/jquery-3.6.1.min.js')}}"></script>    
    
</head>
    <body>
        <nav>
            <div class="container">
                <div class="nav-wrapper">
                <a href="{{url('/')}}" class="brand-logo" style="margin-left: 10px">Link Shortener</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <a href="{{url('/about')}}">About</a>
                    </li>            
                </ul>
                </div>
            </div>
        </nav> 
        
            @yield('body')
        
    </body>
</html>