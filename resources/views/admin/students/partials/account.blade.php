<div>
    <p class="mb-1 text-success">সর্বমোট জমা : <strong>{{ $student->formatted_total_paid }}</strong></p>
    <p class="mb-1">কোর্স ফি : <strong>{{ $student->formatted_course_fee }}</strong></p>
    <p class="mb-1 {{ $student->due_amount > 0 ? 'text-danger' : 'text-success' }}">
        মোট বাকি : <strong>{{ $student->formatted_due_amount }}</strong>
    </p>
</div>