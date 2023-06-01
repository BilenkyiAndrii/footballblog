@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('show.css') }}">
    <div class="container">
        <h1>Редагувати пост</h1>
        <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="image">Зображення</label>
                <input type="file" name="image" id="image" class="form-control-file" onchange="previewImage(event)">
                <img id="imagePreview" src="{{ asset('storage/images/posts/' . $post->image) }}" alt="Preview" style="max-width: 200px;">
                <img id="preview" src="#" alt="Preview" style="max-width: 200px; display: none;">
            </div>

            <div class="form-group">
                <label for="name">Назва</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $post->name }}">
            </div>

            <div class="form-group">
                <label for="description">Опис</label>
                <textarea name="description" id="description" class="form-control" rows="4">{{ $post->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="category">Категорія</label>
                <select name="category_id" id="category" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Редагувати</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Скасувати</a>
        </form>
    </div>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var preview = document.getElementById('preview');
                preview.src = reader.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
