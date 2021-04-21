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
        <script type="text/javascript" src="{{ URL::asset('public/js/main_page.js') }}"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('public/css/main_page.css') }}" rel="stylesheet"> 
        <title>Liverpool Football Club</title>
    </head>
    <body style="background-image:url({{url('public/images/lockerRoom.png')}});">
        <header class="sticky-top">
            <div id="pad" style="background-color: white; height: 130px; box-shadow: 0px 5px 5px #757272;">       
                <a class="nav-link" style="margin-left: 77%; margin-bottom: -20px;" data-toggle="dropdown" href="#">
                    <img src="public/images/logo-liverpool.png" class="rounded-circle user_img" style="width: 40px; margin-right: 5px; padding-left: 5px; padding-right: 5px;">  
                </a>
                <div class="dropdown-menu dropdown-menu-right" style="margin-right: 365px;">
                    <a class="btn btn-outline-light dropdown-item item" style="border-radius: 0;" href="{{ url('/admin') }}">Admin Page</a>
                    <a class="btn btn-outline-light dropdown-item item" style="border-radius: 0;" href="{{ url('Login/trangchu1.php') }}">Sign Out</a>
                </div>
                <img src="public/images/logo-liverpool.png" style="height:150px; margin-left: 350px; margin-right: 654px;">      
                <a href="https://www.facebook.com/LiverpoolFC" target="_blank" class="fa fa-facebook nav-link"></a>
                <a href="https://twitter.com/lfc" target="_blank" class="fa fa-twitter nav-link"></a>
                <a href="https://www.instagram.com/liverpoolfc/" target="_blank" class="fa fa-instagram nav-link"></a>
                <a href="https://www.youtube.com/liverpoolfc" target="_blank" class="fa fa-youtube nav-link"></a>
                <a href="https://www.snapchat.com/add/lfc" target="_blank" class="fa fa-snapchat-ghost nav-link"></a>
                <a href="https://open.spotify.com/playlist/78lxjrcD1yI1KnTcx4zY9d" target="_blank" class="fa fa-spotify nav-link"></a>
            </div>
        </header>
        <div class="container">
            <div class="row" style="background-color: brown; color: white;">
                <h1 style="margin-left: 74%;">Men's First Team</h1>
            </div>
           <div class="row" style="background-color: brown;">
                <input class="form-control my-2 border-0" id="input" style="width: 534px; margin-left: 51.3%; border-radius: 0;" type="text" placeholder="Search Player">
            </div> 
            <div class="row scroll" id="filter" style="background-color: brown; max-height: 1000px;">
            @foreach ($players as $item => $player)  
                <div class="col-sm-3 py-4" id="filtering">
                    <div class="card card_custom card_bg" style="width:250px">
                        <img class="card-img-top p-1 rounded-circle" src="{{$player->image}}" alt="Card image" style="height:250px">
                        <div class="card-body">
                            <h4 class="card-title pb-3 text-light text-center">{{$player->name}}</h4>
                            <button type="button" class="btn btn-default btn_hover float-right" data-toggle="modal" data-target="#modal{{$player->id}}"><h5><span>View Profile</span></h5></button>                
                              <!-- The Modal -->
                            <div class="modal fade" id="modal{{$player->id}}">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">   
                                    <!-- Modal Header -->
                                        <div class="modal-header border-0">
                                            <h4 class="modal-title">{{$player->name}}</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                    <!-- Modal body -->
                                        <div class="modal-body">
                                            <table class="table table-hover">
                                                <tr>
                                                    <th>Position</th>
                                                    <td>{{$player->position}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Squad number</th>
                                                    <td>{{$player->squad_number}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Height</th>
                                                    <td>{{$player->height}} cm</td>
                                                </tr>
                                                <tr>
                                                    <th>Nationality</th>
                                                    <td>{{$player->nation}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Date of birth</th>
                                                    <td>{{$player->birth}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Signed</th>
                                                    <td>{{$player->signed}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Salary</th>
                                                    <td>{{$player->salary}} $</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>                         
                                        <!-- Modal footer -->
                                        <div class="modal-footer border-0">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            @endforeach          
            </div>
            <div class="row" style="background-color: lightgoldenrodyellow; padding-left: 50%;">
                <img src="public/images/logo-2020.png" alt="Liverpool logo" width="100px">
            </div>
            <div class="row" style="background-color: lightgoldenrodyellow; color: rgb(209, 28, 28); padding-bottom: 20px;">             
                <hr style="border: 2px solid brown; width: 200px; margin: auto;">
                <h1>YOU'LL NEVER WALL ALONE</h1>
                <hr style="border: 2px solid brown; width: 200px; margin: auto;">
            </div>
            <div class="row" style="background-color: lightgoldenrodyellow; padding-left: 20%;">
                <img class="mr-5" src="public/images/SC.png" alt="Standard Chartered" width="150px">
                <img class="mr-5" src="public/images/nike.png" alt="Nike" width="150px">
                <img class="mr-5" src="public/images/axa.png" alt="AXA" width="100px" height="100px">
                <img class="mr-5" src="public/images/expedia.png" alt="Expedia" width="150px">
            </div>
            <div class="row" style="background-color: lightgoldenrodyellow; padding-left: 2%;">
                <img class="mr-5" src="public/images/carlsberg.png" alt="Carlsberg" width="150px">
                <img class="mr-5" src="public/images/mauritius.png" alt="Mauritius" width="100px" height="100px">
                <img class="mr-5" src="public/images/mg.png" alt="Morris Garages" width="150px">
                <img class="mr-5" src="public/images/HFC.png" alt="HOLLYFRONTIER" width="100px" height="100px">
                <img class="mr-5" src="public/images/tigerwit.png" alt="Tigerwit" width="100px" height="100px">
                <img class="mr-5" src="public/images/tribus.jpg" alt="Tribus" width="100px" height="100px">
                <img src="public/images/easport.png" alt="EA Sport" width="100px" height="100px">
            </div>
            <div class="row" style="background-color: lightgoldenrodyellow; padding-left: 4%; padding-bottom: 50px;">
                <img class="mr-5" src="public/images/quorn.png" alt="Quorn" width="150px">
                <img class="mr-5" src="public/images/cadbury.png" alt="Cadbury" width="100px" height="100px">
                <img class="mr-5" src="public/images/acronis.png" alt="Acronis" width="150px">
                <img class="mr-5" src="public/images/nhfood.png" alt="NH Food" width="150px">
                <img class="mr-5" src="public/images/joie.png" alt="Joie" width="150px">
                <img src="public/images/mitel.png" alt="Mitel" width="100px" height="100px">
            </div>
            <div class="row" style="background-color: brown; padding-top: 20px">
                <pre style="color: white;"> 
                   © Copyright 2020 The Liverpool Football Club and Athletic Grounds Limited. All rights reserved.
                 Developed and maintained by the LFC Technology and Transformation Team Match Statistics supplied by 
                Opta Sports Data Limited. Reproduced under licence from Football DataCo Limited. All rights reserved. 
                </pre>
            </div>
        </div>
    </body>
</html>