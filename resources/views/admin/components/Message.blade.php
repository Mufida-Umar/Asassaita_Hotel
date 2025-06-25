<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/admin/message.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/dasboard.css')}}">
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
                    <h1>Messages</h1>
                    
            </div>        
            <h2>Contact Messages</h2>
            <table class="message-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Surname</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Received At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $msg)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $msg->firstname }}</td>
                        <td>{{ $msg->lastname }}</td>
                        <td>{{ $msg->phone }}</td>
                        <td>{{ $msg->email }}</td>
                        <td>{{ $msg->message }}</td>
                        <td>{{ $msg->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>        </main>

    </div>

    <script src="{{asset('js/dashboard.js')}}"></script>

</body>
</html>