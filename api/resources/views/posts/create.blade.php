@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('addoredit.css') }}">
    <div class="container">
        <h1>Створити новий пост</h1>
        <form method="POST" action="/posts" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="image">Зображення</label>
                <input type="file" name="image" id="image" class="form-control-file" onchange="previewImage(event)">
                <img id="imagePreview" src="#" alt="Preview" style="max-width: 200px; display: none;">
            </div>

            <div class="form-group">
                <label for="name">Назва посту</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="description">Опис</label>
                <textarea name="description" id="description" class="form-control" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label for="category">Категорія</label>
                <select name="category_id" id="category" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Створити пост</button>
        </form>
    </div>

    <script>
        function previewImage(event) {
            var image = document.getElementById('imagePreview');
            image.style.display = "block";
            image.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
@endsection
