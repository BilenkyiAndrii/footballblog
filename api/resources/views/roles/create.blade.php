
<!DOCTYPE html>
<html>
<head>
    <title>Додати нову роль</title>
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

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            padding: 8px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 8px 16px;
            background-color: #337ab7;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #23527c;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Додати нову роль</h1>

    <form action="{{ route('roles.store') }}" method="POST">
        @csrf
        <label for="name">Назва ролі:</label>
        <input type="text" name="name" id="name">
        <button type="submit">Зберегти</button>
    </form>
</div>
</body>
</html>
