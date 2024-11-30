@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Add Team Member</h2>
    <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <!-- <div class="form-group">
            <label for="birth_date">Birth Date:</label>
            <input type="date" name="birth_date" class="form-control" required>
        </div> -->
        <div class="form-group">
            <label for="position">Position:</label>
            <input type="text" name="position" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="squad_number">Squad Number:</label>
            <input type="number" name="squad_number" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="previous_club">Previous Club:</label>
            <input type="text" name="previous_club" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jumlah_gol">Jumlah Gol</label>
            <input type="text" name="jumlah_gol" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
