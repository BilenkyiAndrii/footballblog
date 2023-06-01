@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Редагувати категорію: {{ $category->name }}</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('categories.update', $category->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Назва категорії</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
            </div>

            <button type="submit" class="btn btn-primary">Зберегти</button>
        </form>
    </div>
@endsection
