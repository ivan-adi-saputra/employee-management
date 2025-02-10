<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Pengguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            max-width: 400px;
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            margin-top: 15px;
            padding: 10px;
            width: 100%;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>

    <h2>Form Tambah Pengguna</h2>

    @if ($errors->any())
        <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 10px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.store') }}" method="POST">
        @csrf
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
        @error('first_name')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
        @error('last_name')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        @error('password')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <button type="submit">Tambah Pengguna</button>
    </form>

</body>

</html>
