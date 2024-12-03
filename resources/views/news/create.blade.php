@extends('layouts.master')

@section('content')
<div class="container" style="max-width: 500px; margin: 50px auto; background-color: #f8f9fa; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <h2 style="text-align: center; margin-bottom: 20px; color: #343a40;">Create News</h2>

    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group" style="margin-bottom: 15px;">
            <label for="title" style="font-weight: bold; color: #495057;">Title:</label>
            <input type="text" name="title" id="title" class="form-control" style="border-radius: 5px; border: 1px solid #ced4da; padding: 10px;" value="{{ old('title') }}" required>
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
            <label for="description" style="font-weight: bold; color: #495057;">Description:</label>
            <textarea name="description" id="description" class="form-control" style="border-radius: 5px; border: 1px solid #ced4da; padding: 10px;" rows="4" required>{{ old('description') }}</textarea>
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
            <label for="image" style="font-weight: bold; color: #495057;">Image:</label>
            <input type="file" name="image" id="image" class="form-control-file" style="border-radius: 5px; border: 1px solid #ced4da; padding: 10px;">
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
            <label for="date" style="font-weight: bold; color: #495057;">Date:</label>
            <input type="date" name="date" id="date" class="form-control" style="border-radius: 5px; border: 1px solid #ced4da; padding: 10px;" value="{{ old('date') }}" required>
        </div>

        <div class="form-group" style="display: flex; justify-content: space-between; margin-top: 20px;">
            <button type="submit" class="btn btn-primary" style="width: 48%; background-color: #007bff; border: none; padding: 10px; border-radius: 5px; transition: background-color 0.3s ease;">Submit</button>
            <a href="{{ route('news.index') }}" class="btn btn-secondary" style="width: 48%; border: none; padding: 10px; border-radius: 5px; text-align: center;">Cancel</a>
        </div>
    </form>
</div>
@endsection