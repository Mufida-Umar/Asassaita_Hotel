<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/rooms.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="js/dashboard.js"></script>


    <title>Document</title>
</head>
<body>
    @include('admin.components.sidebar')
    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
         @include('admin.components.navbar')
        <!-- End of Navbar -->

        <main>
            <div class="header">
                <div class="left">
                    <h1>Rooms</h1>
                   
                </a>
            </div>        

        </main>

    </div>

    <script src="{{asset('js/dashboard.js')}}"></script>

</body>
</html>