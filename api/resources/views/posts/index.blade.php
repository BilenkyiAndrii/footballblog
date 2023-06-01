@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <link rel="stylesheet" href="{{ asset('pagination.css') }}">
    <div class="container">
        <h1>Список постів</h1>

        <a class="button" href="{{ route('posts.create') }}">Додати пост</a>

        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Зображення</th>
                <th>Назва</th>
                <th>Опис</th>
                <th>Категорія</th>
                <th>Дії</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td><img src="{{ asset('storage/images/posts/' . $post->image) }}" alt="Зображення"></td>
                    <td>{{ $post->name }}</td>
                    <td class="description">{{ Str::limit($post->description, 150) }}</td>
                    <td>{{ \App\Models\Category::find($post->category_id)->name }}</td>
                    <td>
                        <a class="button" href="{{ route('posts.show', ['id' => $post->id]) }}">Переглянути</a>
                        <a class="button" href="{{ route('posts.edit', ['id' => $post->id]) }}">Редагувати</a>
                        <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="POST"
                              style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="button delete-button" type="submit">Видалити</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination">
            @include('pagination', ['paginator' => $posts])
    </div>
@endsection
