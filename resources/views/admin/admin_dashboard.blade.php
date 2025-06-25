<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/admin/dashboard.css')}}">

    <title>Admin Dashboard</title>
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
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">
                                Analytics
                            </a></li>
                    </ul>
                </div>
                           </div>            

                           <ul class="insights">
                            <li><i class='bx bx-user'></i>
                                <span class="info">
                                    <h3>
                                        {{ $bookings->count() }}
                                    </h3>
                                    <p>Reservations</p>
                                </span>
                            </li>
                            <li><i class='bx bx-bed'></i>
                                <span class="info">
                                    <h3>
                                        {{ $checkedIn->count() }}
                                    </h3>
                                    <p>Checked-In</p>
                                </span>
                            </li>
                            <li>
                                <i class='bx bx-door-open'></i>
                                <span class="info">
                                    <h3>
                                        {{ $availableRooms->count() }}
                                    </h3>
                                    <p>Available Rooms</p>
                                </span>
                            </li>
                            
                          
                        </ul>


            <div class="bottom-data">
                <div class="orders">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Checked-In</h3>
                        <i class='bx bx-filter'></i>
                        <i class='bx bx-search'></i>
                    </div>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Room</th>
            <th>Check-Out Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($checkedIn as $booking)
        <tr>
            <td>{{ $booking->fullName }}</td>
            <td>{{ $booking->assignedRoom->name ?? '-' }}</td>
            <td>{{ $booking->checkOut }}</td>
            <td><span class="status-active">Active</span></td>
            <td>
                <form action="{{ route('booking.checkout', $booking->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="checkout-btn">Check-Out</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>                </div>

                <!-- Reminders -->

                <!-- End of Reminders-->

            </div>

        </main>

    </div>
    {{-- <script src="{{asset('js/dashbaord.js')}}"></script> --}}
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

    <script src="js/dashboard.js"></script>
</body>

</html>