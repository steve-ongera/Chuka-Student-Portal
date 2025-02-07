@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Student Details</h2>
    <table class="table">
        <tr>
            <th>Full Name:</th>
            <td>{{ $student->full_name }}</td>
        </tr>
        <tr>
            <th>Registration Number:</th>
            <td>{{ $student->reg_no }}</td>
        </tr>
        <tr>
            <th>Course:</th>
            <td>{{ $student->course }}</td>
        </tr>
        <tr>
            <th>Year of Study:</th>
            <td>{{ $student->year_of_study }}</td>
        </tr>
    </table>
    <a href="{{ route('students.index') }}" class="btn btn-primary">Back to Students</a>
</div>
@endsection
