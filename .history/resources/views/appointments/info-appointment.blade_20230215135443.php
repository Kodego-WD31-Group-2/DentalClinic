<div class="form-group">
  <label for="appointment_date" class="text-sm font-medium">Preferred Appointment Date:</label>
  <input type="date" id="appointment_date" name="appointment_date" class="form-control" required>
</div>
<div class="form-group">
  <label for="appointment_time" class="text-sm font-medium">Preferred Appointment Time:</label>
  <select id="appointment_time" name="appointment_time" class="form-control" required>
    <option value="Morning">Morning</option>
    <option value="Afternoon">Afternoon</option>
  </select>
</div>         
<div class="form-group">
  <label for="doctor_id">Doctor's Name:</label>
  <select name="doctor_id" class="form-control" required>
    @foreach($doctors as $doctor)
      <option value="{{ $doctor->doctor_id }}">{{ $doctor->first_name }} {{ $doctor->last_name }}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label for="appointment_type" class="text-sm font-medium">Type of Appointment:</label>
  <select id="appointment_type" name="appointment_type" class="form-control" required>
    <option value="Regular Check Up">Regular Check-up</option>
    <option value="Cleaning">Cleaning</option>
    <option value="Emergency">Emergency</option>
  </select>
</div>
<div class="form-group">
  <label for="reason" class="text-sm font-medium">Reason for Appointment:</label>
  <textarea id="reason" name="reason" class="form-control" required></textarea>
</div>
<div class="form-group">
  <label for="dental_history" class="text-sm font-medium">Previous Dental History:</label>
  <textarea id="dental_history" name="dental_history" class="form-control" required></textarea>
</div>