<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Security Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
    </style>
    <script type="text/javascript">
        function sendHistory(id) {
            $("#not" + id).hide();
            $("#his" + id).show();
        }
    </script>
</head>
<body>
    <div class="container-fluid">
        <div class="row navbar navbar-dark bg-dark mb-3">
            <p class="title">Security Company</p>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card mb-4">
                    <h5 class="card-header card text-white bg-secondary mb-3">Menu</h5>
                    <div class="card-body sideMenu">
                        <ul>
                            <li><a id="menuN" onclick="loadPanel('notifications')">Notifications</a></li>
                            <li><a id="menuH"onclick="loadPanel('history')">History</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card mb-4" id="panelNotifications">
                    <h5 class="card-header card text-white bg-danger mb-3">Notifications</h5>
                    @foreach ($notifications as $notification)
                    <div class="card-body" id="not{{$notification->id}}">
                        <div class="row">
                            <div class="col-lg-9">
                                <h5 class="card-title"><b>Company:</b> {{$notification->button->client->name}}</h5>
                                <p class="card-text"><b>Address:</b> {{$notification->button->client->address}}</p>
                                <p class="card-text"><b>Button:</b> {{$notification->button_id}} ({{$notification->button->location}})</p>
                                <p class="card-text"><b>Phone Number:</b> {{$notification->button->client->phoneNumber}}</p>
                            </div>
                            <div class="col-lg-3">
                               <img width="150px" class="float-right" src="https://media1.giphy.com/media/hqmfJ2HdlyU6jEJBcH/giphy.gif?cid=790b76115d600b13a406e71173cee3e5b1f83dbe4438d0b3&rid=giphy.gif">
																@if(!$notification->button->locked)
																<a href="/{{$notification->button->id}}/unlock">unLock</a>
																@else
																<a href="/{{$notification->button->id}}/lock">Lock</a>
																@endif
                             <button type="button" onclick="sendHistory({{$notification->id}})" id="handled" class="btn btn-success float-right">Mark as seen</button>
                           </div>
                       </div>
                   </div>
               </div>
																@endforeach
             </div>
             <div class="card mb-4" id="panelHistory">
                <h5 class="card-header card text-white bg-info mb-3">History</h5>
                @foreach ($notifications as $notification)
                    <div class="card-body historyItem" id="his{{$notification->id}}">
                        <div class="row">
                            <div class="col-lg-9">
                                <h5 class="card-title"><b>Company:</b> {{$notification->button->client->name}}</h5>
                                <p class="card-text"><b>Address:</b> {{$notification->button->client->address}}</p>
                                <p class="card-text"><b>Button:</b> {{$notification->button_id}} ({{$notification->button->location}})</p>
                                <p class="card-text"><b>Phone Number:</b> {{$notification->button->client->phoneNumber}}</p>
                            </div>
                     </div>
                 </div>
                 @endforeach
            </div>
        </div>
    </div>
</div>
</body>
<script src="main.js"></script>
</html>
