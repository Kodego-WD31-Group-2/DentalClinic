<div class="flex flex-col md:flex-row md:space-x-4">
  <div class="flex-1">
    <div class="form-group">
      <label class="block font-medium mb-2 text-blue-700" for="special_instructions">Special instructions or requests:</label>
      <textarea class="form-control block w-full p-2 border rounded-md shadow-sm" required id="special_instructions" name="special_instructions">{{ old('special_instructions') }}</textarea>
    </div>
    <div class="form-group">
      <label class="block font-medium mb-2 text-blue-700" for="referral_source">Referral source (if referred by another individual or office):</label>
      <input class="form-control block w-full p-2 border rounded-md shadow-sm" required type="text" id="referral_source" name="referral_source" value="{{ old('referral_source') }}">
    </div>
  </div>
  <div class="flex-1">
    <div class="form-group">
      <label class="block font-medium mb-2 text-blue-700" for="hear_about_practice">How did you hear about our practice?:</label>
      <select class="form-control block w-full p-2 border rounded-md shadow-sm" required id="hear_about_practice" name="hear_about_practice">
        <option value="">-- Please select an option --</option>
        <option value="Search Engine" {{ old('hear_about_practice') == 'Search Engine' ? 'selected' : '' }}>Search Engine</option>
        <option value="Social Media" {{ old('hear_about_practice') == 'Social Media' ? 'selected' : '' }}>Social Media</option>
        <option value="Friend or Family" {{ old('hear_about_practice') == 'Friend or Family' ? 'selected' : '' }}>Friend or Family</option>
        <option value="Advertisement" {{ old('hear_about_practice') == 'Advertisement' ? 'selected' : '' }}>Advertisement</option>
        <option value="Other" {{ old('hear_about_practice') == 'Other' ? 'selected' : '' }}>Other</option>
      </select>
    </div>
  </div>
</div>
