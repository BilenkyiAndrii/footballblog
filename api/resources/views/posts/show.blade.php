<!DOCTYPE html>
<html>
<head>
    <title>Деталі посту</title>
    <link rel="stylesheet" href="{{ asset('show.css') }}">
</head>
<body>
<div class="container">
    <h1>Деталі посту</h1>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Зображення</th>
            <th>Назва</th>
            <th>Опис</th>
            <th>Категорія</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $post->id }}</td>
            <td><img src="{{ asset('storage/images/posts/' . $post->image) }}" alt="Зображення" class="post-image"></td>
            <td>{{ $post->name }}</td>
            <td class="description">{{ Str::limit($post->description, 150) }}</td>
            <td>{{ \App\Models\Category::find($post->category_id)->name }}</td>
        </tr>
        </tbody>
    </table>

    <a href="{{ route('posts.index') }}" class="back-link">Назад до списку постів</a>
</div>
</body>
</html>
