<div>
    <p class="mb-1">নাম : <strong>{{ $student->name }}</strong></p>
    <p class="mb-1">জন্ম তারিখ : <strong>{{ $student->date_of_birth->format('d M Y') }}</strong></p>
    <p class="mb-1">রক্তের গ্রুপ : <strong>{{ $student->blood_group }}</strong></p>
    <p class="mb-1">আইডি : <strong>{{ $student->id }}</strong></p>
    <p class="mb-1">ভর্তি তারিখ : <strong>{{ $student->admission_date->format('d M Y') }}</strong></p>
    <p class="mb-1">অভিভাবকের নাম : <strong>{{ $student->guardian_name }}</strong></p>
    <p class="mb-1">ই-মেইল : <strong>{{ $student->email }}</strong></p>
    <p class="mb-1">অভিভাবকের ফোন : <strong>{{ $student->guardian_phone }}</strong></p>
</div>