
<h3 class="text-lg font-medium text-blue-600">Patient Information:</h3>


<div class="flex flex-col md:flex-row md:space-x-4">
  <div class="flex-1">
    //////1
    //////2
  </div>
  <div class="flex-1">
    /////3
  </div>
</div>



<h3 class="text-lg font-medium text-blue-600 mt-6">Medical Information:</h3>
<div class="form-group">
  <label for="medications" class="block font-medium mb-2">List of current medications:</label>
  <textarea class="form-control border-blue-300 focus:ring-blue-500 focus:border-blue-500" required id="medications" name="medications">{{ old('medications') }}</textarea>
</div>
<div class="form-group">
  <label for="allergies" class="block font-medium mb-2">Allergies (if any):</label>
  <textarea class="form-control border-blue-300 focus:ring-blue-500 focus:border-blue-500" required id="allergies" name="allergies">{{ old('allergies') }}</textarea>
</div>
<div class="form-group">
  <label for="medical_conditions" class="block font-medium mb-2">Medical conditions that may affect dental treatment:</label>
  <textarea class="form-control border-blue-300 focus:ring-blue-500 focus:border-blue-500" required id="medical_conditions" name="medical_conditions">{{ old('medical_conditions') }}</textarea>
</div>