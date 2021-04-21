<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="{{ URL::asset('public/js/admin_page.js') }}"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('public/css/admin_page.css') }}" rel="stylesheet"> 
        <title>LFC Management</title>
    </head>
    <body style="background-color: rgb(66, 59, 58);">
        <div class="row" style="background-color: rgb(66, 59, 58);">
            <a href="{{ url('/') }}">
                <img src="public/images/logo-liverpool.png" class="rounded-circle user_img" style="width: 100px; margin-left: 50px; margin-top: 20px">
            </a>
        </div> 
        <div class="row" style="background-color: rgb(66, 59, 58);">
            @include('admin.search')
        </div> 
        <div class="row">
            <div class="col-sm-2">
                <nav class="navbar navbar-dark">
                    <ul class="navbar-nav">
                        <li class="nav-item active my-2">
                            <a class="nav-link fa fa-desktop hover" href="{{ url('/show-player') }}">  Overall</a>
                        </li>                        
                        <li class="nav-item active my-2">
                            <a class="nav-link fa fa-pencil hover" href="{{ url('/insert-player') }}">  Insert</a>
                        </li>
                        <li class="nav-item active my-2">
                            <a class="nav-link fa fa-edit hover" href="{{ url('/update-player') }}">  Edit</a>
                        </li>
                        <li class="nav-item active my-2">
                            <a class="nav-link fa fa-remove hover" href="{{ url('/delete-player') }}">  Delete</a>
                        </li>
                        <li class="nav-item active"></li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-10" style="background-color: brown;">
                @yield('player_page')
            </div>
        </div>
    </body>
</html>