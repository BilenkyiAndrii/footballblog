
<!DOCTYPE html>
<html>
<head>
    <title>Деталі ролі</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
            margin-top: 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        p {
            margin-top: 0;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Деталі ролі</h1>

    <label>ID:</label>
    <p>{{ $role->id }}</p>

    <label>Назва:</label>
    <p>{{ $role->name }}</p>

    <a href="{{ route('roles.index') }}">Назад до списку ролей</a>
</div>
</body>
</html>
