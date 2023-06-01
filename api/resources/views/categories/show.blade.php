@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Категорія: {{ $category->name }}</h1>

        <p><strong>ID:</strong> {{ $category->id }}</p>

        <a href="{{ route('categories.index') }}" class="btn btn-primary">Повернутись назад</a>
    </div>
@endsection
