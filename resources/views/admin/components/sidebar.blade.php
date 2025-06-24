<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <!-- Sidebar -->
        <div class="sidebar">
            <a href="#" class="logo">
                <div class="logo-name"><span>ASASSAITA</span></div>
            </a>
            <ul class="side-menu">
                <li class="active"><a href="{{route('dashboard')}}"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
                <li ><a href="{{route('booking.index')}}"><i class='bx bx-store-alt'></i>Booking</a></li>
                <li ><a href="{{route('dashboard.rooms')}}"><i class='bx bx-analyse'></i>Rooms</a></li>
                <li><a href="{{route('dashboard.message')}}"><i class='bx bx-group'></i>Message</a></li>
                <li><a href="{{route('dashboard.profile')}}"><i class='bx bx-group'></i>Profile</a></li>
                <li><a href="{{route('dashboard.setting')}}"><i class='bx bx-cog'></i>Settings</a></li>
            </ul>
            <ul class="side-menu">
                <li>
                    <a href=""><i class='bx bx-log-out-circle'></i>
                        <form class="logout" action="{{route('logout')}}" method="post">
                            @csrf
                                               <button class="logout">
                                Logout</button>
                        </form></a>
                    
                </li>
            </ul>
        </div>
        <!-- End of Sidebar -->
</body>
</body>
</html>