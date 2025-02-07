@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Student</h2>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Reg No</label>
            <input type="text" name="reg_no" class="form-control">
        </div>
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="full_name" class="form-control">
        </div>
        <div class="form-group">
            <label>Course</label>
            <input type="text" name="course" class="form-control">
        </div>
        <div class="form-group">
            <label>Year of Study</label>
            <input type="text" name="year_of_study" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Save</button>
    </form>
</div>
@endsection
