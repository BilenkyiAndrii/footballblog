@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Список ролей</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a.button {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4;
            text-decoration: none;
        }

        button.delete-button {
            background-color: #d9534f;
            border-color: #d43f3a;
        }
        .navbar {
            background-color: #f5f5f5;
            padding: 10px;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .navbar li {
            display: inline-block;
            margin-right: 10px;
        }

        .navbar li a {
            text-decoration: none;
            padding: 6px 12px;
            color: #333;
        }

        .navbar li a:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<h1>Список ролей</h1>

<a class="button" href="{{ route('roles.create') }}">Додати роль</a>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Назва</th>
        <th>Дії</th>
    </tr>
    </thead>
    <tbody>
    @foreach($roles as $role)
        <tr>
            <td>{{ $role->id }}</td>
            <td>{{ $role->name }}</td>
            <td>
                <a class="button" href="{{ route('roles.show', ['id' => $role->id]) }}">Переглянути</a>
                <a class="button" href="{{ route('roles.edit', ['id' => $role->id]) }}">Редагувати</a>
                <form action="{{ route('roles.destroy', ['id' => $role->id]) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="button delete-button" type="submit">Видалити</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
@endsection
