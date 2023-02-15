<h3 class="text-lg font-medium">Patient Information:</h3>
<div class="form-group">
  <label for="first_name">First Name:</label>
  <input type="text" name="first_name" class="form-control" required>
</div>
<div class="form-group">
  <label for="last_name">Last Name:</label>
  <input type="text" name="last_name" class="form-control" required>
</div>
<div class="form-group">
  <label for="gender" class="text-sm font-medium">Gender:</label>
  <select id="gender" name="gender" class="mt-2 border border-gray-400 rounded p-2 w-full">
    <option value="male">Male</option>
    <option value="female" selected>Female</option>
  </select>
</div>
<div class="form-group">
  <label class="block font-medium mb-2" for="dob">Date of Birth:</label>
  <input value="2000-02-23" class="w-full border border-gray-400 p-2" type="date" id="dob" name="dob">
</div>

<h3 class="text-lg font-medium mt-6">Medical Information:</h3>
<div class="form-group">
  <label class="block font-medium mb-2" for="medications">List of current medications:</label>
  <textarea class="w-full border border-gray-400 p-2" id="medications" name="medications">test</textarea>
</div>
<div class="form-group">
  <label class="block font-medium mb-2" for="allergies">Allergies (if any):</label>
  <textarea class="w-full border border-gray-400 p-2" id="allergies" name="allergies">test</textarea>
</div>
<div class="form-group">
  <label class="block font-medium mb-2" for="medical_conditions">Medical conditions that may affect dental treatment:</label>
  <textarea class="w-full border border-gray-400 p-2" id="medical_conditions" name="medical_conditions">test</textarea>
</div>