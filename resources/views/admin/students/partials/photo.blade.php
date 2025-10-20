<div class="text-center">
    <img src="{{ $student->photo_url }}" 
         alt="Student Photo" 
         class="img-thumbnail mb-2 student-photo" 
         data-id="{{ $student->id }}"
         style="width: 80px; height: 80px; object-fit: cover; cursor: pointer;">
    <label for="file{{ $student->id }}" class="btn btn-warning btn-sm w-100">
        <i class="fa-solid fa-upload"></i> ছবি আপলোড
    </label>
    <input type="file" id="file{{ $student->id }}" class="d-none photo-upload" data-id="{{ $student->id }}">
</div>