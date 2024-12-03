@extends('layouts.master')

@section('content')
<div class="container" style="max-width: 600px; margin: 50px auto; background-color: #f8f9fa; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <h2 style="text-align: center; margin-bottom: 20px; color: #343a40;">Add Team Member</h2>
    <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group" style="margin-bottom: 15px;">
            <label for="name" style="font-weight: bold; color: #495057;">Name:</label>
            <input type="text" name="name" class="form-control" style="border-radius: 5px; border: 1px solid #ced4da; padding: 10px;" required>
        </div>
        <div class="form-group" style="margin-bottom: 15px;">
            <label for="position" style="font-weight: bold; color: #495057;">Position:</label>
            <input type="text" name="position" class="form-control" style="border-radius: 5px; border: 1px solid #ced4da; padding: 10px;" required>
        </div>
        <div class="form-group" style="margin-bottom: 15px;">
            <label for="squad_number" style="font-weight: bold; color: #495057;">Squad Number:</label>
            <input type="number" name="squad_number" class="form-control" style="border-radius: 5px; border: 1px solid #ced4da; padding: 10px;" required>
        </div>
        <div class="form-group" style="margin-bottom: 15px;">
            <label for="previous_club" style="font-weight: bold; color: #495057;">Previous Club:</label>
            <input type="text" name="previous_club" class="form-control" style="border-radius: 5px; border: 1px solid #ced4da; padding: 10px;" required>
        </div>
        <div class="form-group" style="margin-bottom: 15px;">
            <label for="jumlah_gol" style="font-weight: bold; color: #495057;">Jumlah Gol</label>
            <input type="text" name="jumlah_gol" class="form-control" style="border-radius: 5px; border: 1px solid #ced4da; padding: 10px;" required>
        </div>
        <div class="form-group" style="margin-bottom: 15px;">
            <label for="image" style="font-weight: bold; color: #495057;">Image:</label>
            <input type="file" name="image" class="form-control" style="border-radius: 5px; border: 1px solid #ced4da; padding: 10px;">
        </div>
        <button type="submit" class="btn btn-primary" style="width: 100%; background-color: #007bff; border: none; padding: 10px; border-radius: 5px; transition: background-color 0.3s ease;">Save</button>
    </form>
</div>
@endsection

