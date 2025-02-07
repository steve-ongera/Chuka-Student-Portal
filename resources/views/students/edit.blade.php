@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Edit Student</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('students.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="full_name" class="form-label">Full Name:</label>
                    <input type="text" name="full_name" class="form-control" value="{{ $student->full_name }}" required>
                </div>

                <div class="mb-3">
                    <label for="reg_no" class="form-label">Registration Number:</label>
                    <input type="text" name="reg_no" class="form-control" value="{{ $student->reg_no }}" required>
                </div>

                <div class="mb-3">
                    <label for="course" class="form-label">Course:</label>
                    <input type="text" name="course" class="form-control" value="{{ $student->course }}" required>
                </div>

                <div class="mb-3">
                    <label for="year_of_study" class="form-label">Year of Study:</label>
                    <input type="text" name="year_of_study" class="form-control" value="{{ $student->year_of_study }}" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Update Student
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
