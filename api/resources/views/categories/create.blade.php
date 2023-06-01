@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Додати категорію</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('categories.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Назва</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
            </div>

            <button type="submit" class="btn btn-primary">Додати</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Скасувати</a>
        </form>
    </div>
@endsection
