<div class="form-group mb-4">
  <label class="block text-sm font-medium text-blue-600 p-2" for="phone_number">
    Phone Number:
  </label>
  <input class="form-control block w-full p-2 border rounded-md shadow-sm" required type="tel" id="phone_number" name="phone_number" value="{{ old('phone_number') }}">
</div>

<div class="form-group mb-4">
  <label class="block text-sm font-medium text-blue-600 p-2" for="email">
    Email Address:
  </label>
  <input class="form-control block w-full p-2 border rounded-md shadow-sm" required type="email" id="email" name="email" value="{{ old('email') }}">
</div>

<div class="form-group mb-4">
  <label class="block text-sm font-medium text-blue-600 p-2" for="emergency_contact_name">
    Emergency Contact Name:
  </label>
  <input class="form-control block w-full p-2 border rounded-md shadow-sm" required type="text" id="emergency_contact_name" name="emergency_contact_name" value="{{ old('emergency_contact_name') }}">
</div>

<div class="form-group mb-4">
  <label class="block text-sm font-medium text-blue-600 p-2" for="emergency_contact_number">
    Emergency Contact Phone Number:
  </label>
  <input class="form-control block w-full p-2 border rounded-md shadow-sm" required type="tel" id="emergency_contact_number" name="emergency_contact_number" value="{{ old('emergency_contact_number') }}">
</div>
