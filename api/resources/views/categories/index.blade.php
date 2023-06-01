@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Категорії</h1>
        @if(Auth::user()->role_id == 1)
        <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Додати категорію</a>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Назва</th>
                <th>Дії</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-primary">Переглянути</a>
                        @if(Auth::user()->role_id == 1)
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-secondary">Редагувати</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Видалити</button>
                        </form>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
