<div class="form-group">
  <label for="appointment_date" class="text-sm font-medium">Preferred Appointment Date:</label>
  <input type="date" id="appointment_date" name="appointment_date" class="form-control" value="{{ old('appointment_date') }}" required>
</div>
<div class="form-group">
  <label for="appointment_time" class="text-sm font-medium">Preferred Appointment Time:</label>
  <select id="appointment_time" name="appointment_time" class="form-control" required>
    <option value="">-- Please select an option --</option>
    <option value="Morning" {{ old('appointment_time') == 'Morning' ? 'selected' : '' }}>Morning</option>
    <option value="Afternoon" {{ old('appointment_time') == 'Afternoon' ? 'selected' : '' }}>Afternoon</option>
  </select>
</div>         
<div class="form-group">
  <label for="doctor_id">Doctor's Name:</label>
  <select name="doctor_id" class="form-control" required>    
    <option value="">-- Please select an option --</option>
    @foreach($doctors as $doctor)
      <option value="{{ $doctor->doctor_id }}" {{ old('doctor_id') == $doctor->doctor_id ? 'selected' : '' }}>{{ $doctor->first_name }} {{ $doctor->last_name }}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label for="appointment_type" class="text-sm font-medium">Type of Appointment:</label>
  <select id="appointment_type" name="appointment_type" class="form-control" required>    
    <option value="">-- Please select an option --</option>
    <option value="Regular Check Up" {{ old('appointment_type') == 'Regular Check Up' ? 'selected' : '' }}>Regular Check-up</option>
    <option value="Cleaning" {{ old('appointment_type') == 'Cleaning' ? 'selected' : '' }}>Cleaning</option>
    <option value="Emergency" {{ old('appointment_type') == 'Emergency' ? 'selected' : '' }}>Emergency</option>
  </select>
</div>
<div class="form-group">
  <label for="reason" class="text-sm font-medium">Reason for Appointment:</label>
  <textarea id="reason" name="reason" class="form-control" required>{{ old('reason') }}</textarea>
</div>
<div class="form-group">
  <label for="dental_history" class="text-sm font-medium">Previous Dental History:</label>
  <textarea id="dental_history" name="dental_history" class="form-control" required>{{ old('dental_history') }}</textarea>
</div>