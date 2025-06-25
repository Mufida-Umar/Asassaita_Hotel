<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/admin/booking.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/dashboard.css')}}">
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
                    <h1>Bookings</h1>
                    <button class="Admin-Reservation" >
                     <i class='bx bx-plus'></i>
                         Make Reservation
                    </button>                             
                </div>
               
            </div>

            <!-- Bookings Table (Pending Assignment) -->
<h2>Pending Bookings</h2>
<table>
    <thead>
        <tr>
            <th>S/N</th>
            <th>Full Name</th>
            <th>Check-In</th>
            <th>Check-Out</th>
            <th>Room Type</th>
            <th>Guest</th>
            <th>Assign Room</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bookings as $booking)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $booking->fullName }}</td>
            <td>{{ $booking->checkIn }}</td>
            <td>{{ $booking->checkOut }}</td>
            <td>{{ $booking->roomType }}</td>
            <td>{{ $booking->guest }}</td>
            <td>
                <form action="{{ route('booking.assignRoom', $booking->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <select name="room_id" required>
                        <option value="">Select Room</option>
                                           
                        @foreach($availableRooms as $room)
                            <option value="{{ $room->id }}">{{ $room->name }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="assign-btn">Assign</button>
                </form>
            </td>
            <td>
                <form action="{{ route('booking.delete', $booking->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
                <a href="#" 
                class="edit-btn" 
                data-bs-toggle="modal" 
                data-bs-target="#editBookingModal"
                data-id="{{ $booking->id }}"
                data-fullname="{{ $booking->fullName }}"
                data-checkin="{{ $booking->checkIn }}"
                data-checkout="{{ $booking->checkOut }}"
                data-roomtype="{{ $booking->roomType }}"
                data-guest="{{ $booking->guest }}"
                >Edit</a>            </td>
        </tr>
        @endforeach
    </tbody>
</table>

            <!-- Checked-In Bookings -->
            <h2>Checked-In Bookings</h2>
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
            </table>        </main>


    </div>
<!-- Reservation Modal -->
<div id="reservationModal" class="modal" style="display:none;">
    <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <h2>Make Reservation</h2>
        <form action="{{ route('booking.store') }}" method="POST" class="booking__form">
            @csrf
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required>

            <label for="checkIn">Check-in Date:</label>
            <input type="date" id="checkIn" name="checkIn" required>

            <label for="checkOut">Check-out Date:</label>
            <input type="date" id="checkOut" name="checkOut" required>

            <label for="roomType">Room Type:</label>
            <input type="text" id="roomType" name="roomType" required>

            <label for="guest">Guest:</label>
            <input type="number" id="guest" name="guest" required>

            <button type="submit" class="submit-btn">Reserve</button>
        </form>
    </div>
</div>


<!-- Edit Booking Modal -->
<div class="modal" id="editBookingModal" tabindex="-1" style="display:none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="editBookingForm" method="POST">
          @csrf
          @method('PUT')
          <div class="modal-header">
            <h5 class="modal-title">Edit Booking</h5>
            <button type="button" class="close" onclick="closeEditModal()">&times;</button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="booking_id" id="edit-booking-id">
            <label>Full Name:</label>
            <input type="text" name="fullName" id="edit-fullName" class="form-control" required>
            <label>Check-In:</label>
            <input type="date" name="checkIn" id="edit-checkIn" class="form-control" required>
            <label>Check-Out:</label>
            <input type="date" name="checkOut" id="edit-checkOut" class="form-control" required>
            <label>Room Type:</label>
            <input type="text" name="roomType" id="edit-roomType" class="form-control" required>
            <label>Guest:</label>
            <input type="number" name="guest" id="edit-guest" class="form-control" required>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save Changes</button>
            
            <button type="button" class="btn btn-secondary" onclick="closeEditModal()"></button>
          </div>
        </form>
      </div>
    </div>
  </div>


<script>

document.querySelectorAll('.edit-btn').forEach(function(btn) {
    btn.onclick = function(e) {
        e.preventDefault();
        document.getElementById('edit-booking-id').value = this.dataset.id;
        document.getElementById('edit-fullName').value = this.dataset.fullname;
        document.getElementById('edit-checkIn').value = this.dataset.checkin;
        document.getElementById('edit-checkOut').value = this.dataset.checkout;
        document.getElementById('edit-roomType').value = this.dataset.roomtype;
        document.getElementById('edit-guest').value = this.dataset.guest;
        document.getElementById('editBookingForm').action = '/admin/bookings/' + this.dataset.id + '/edit';
        document.getElementById('editBookingModal').style.display = 'block';
    };
});

function closeEditModal() {
    document.getElementById('editBookingModal').style.display = 'none';
}

// Reservation Modal Button and Close Functionality
    document.querySelector('.Admin-Reservation').onclick = function() {
        document.getElementById('reservationModal').style.display = 'flex';
    };
    document.getElementById('closeModal').onclick = function() {
        document.getElementById('reservationModal').style.display = 'none';
    };
    // Optional: Close modal when clicking outside content
    window.onclick = function(event) {
        var modal = document.getElementById('reservationModal');
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    };
</script>

    <script src="js/dashboard.js"></script>
    <script src="{{asset('js/dashboard.js')}}"></script>

</body>
</html>