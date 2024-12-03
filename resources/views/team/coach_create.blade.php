
@extends('layouts.master')

@section('content')
<div class="container" style="max-width: 400px; margin: 70px auto; background-color: #f8f9fa; padding: 20px; border-radius: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); height: auto; display: flex; flex-direction: column; justify-content: center;">
    <h2 style="text-align: center; margin-bottom: 20px; color: #343a40;">Add New Coach</h2>

    <form action="{{ route('coaches.store') }}" method="POST" enctype="multipart/form-data" style="width: 100%;">
        @csrf
        <div class="form-group" style="margin-bottom: 15px;">
            <label for="name" style="font-weight: bold; color: #495057;">Coach Name:</label>
            <input type="text" name="name" id="name" class="form-control" style="border-radius: 5px; border: 1px solid #ced4da; padding: 10px;" value="{{ old('name') }}" required>
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
            <label for="jabatan" style="font-weight: bold; color: #495057;">Jabatan:</label>
            <input type="text" name="jabatan" id="jabatan" class="form-control" style="border-radius: 5px; border: 1px solid #ced4da; padding: 10px;" value="{{ old('jabatan') }}" required>
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
            <label for="image" style="font-weight: bold; color: #495057;">Image:</label>
            <input type="file" name="image" id="image" class="form-control-file" style="padding: 10px;">
        </div>

        <div class="form-group" style="display: flex; justify-content: space-between; margin-top: 20px;">
            <button type="submit" class="btn btn-primary" style="width: 48%; background-color: #007bff; border: none; padding: 10px; border-radius: 5px; transition: background-color 0.3s ease;">Save</button>
            <a href="{{ route('coaches.index') }}" class="btn btn-secondary" style="width: 48%; border: none; padding: 10px; border-radius: 5px; text-align: center;">Cancel</a>
        </div>
    </form>
</div>
@endsection