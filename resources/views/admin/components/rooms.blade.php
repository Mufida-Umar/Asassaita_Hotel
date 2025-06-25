<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/admin/rooms.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">

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
</div>
            <!-- Room Add Form -->
<form class="room-form" action="{{ route('rooms.store') }}" method="POST" style="margin-bottom: 2rem;">
    @csrf
    <h2>Add New Room</h2>
    <div>
        <label for="name">Room Name:</label>
        <input type="text" name="name" required>
   
        <label>Room Type:</label>
         <select name="type" required>
            <option value="" disabled selected>Select Room Type</option>
            <option value="standard">Standard</option>
            <option value="single">Single</option>
            <option value="double">Double</option>
            <option value="suite">Suite</option>
            <option value="deluxe">Deluxe</option>
        </select>
        <label for="status">Room Status:</label>
        
        <select name="status" required>
            <option value="" disabled selected>Select Room Status</option>
            <option value="available">Available</option>
            <option value="occupied">Occupied</option>
        </select>
    </div>
        <button type="submit">Add Room</button>
</form>

            <!-- Rooms Table -->
            <h2>Available Rooms</h2>
<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Room Name</th>
            <th>Type</th>
            <th>Status</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rooms as $room)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $room->name }}</td>
            <td>{{ $room->type }}</td>
            <td>
                @if(in_array($room->id, $assignedRoomIds))
                    <span style="color:red;">Occupied</span>
                @elseif($room->status == 'available')
                    <span style="color:green;">Available</span>
                @else
                    <span style="color:red;">Occupied</span>
                @endif
            </td>
            <td>{{ $room->created_at->format('Y-m-d') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
        </main>

    

    <script src="{{asset('js/dashboard.js')}}"></script>

</body>
</html>