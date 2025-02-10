<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Pengguna</title>
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
            background: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background: #218838;
        }
    </style>
</head>

<body>

    <h2>Form Edit Pengguna</h2>

    @if ($errors->any())
        <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 10px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="{{ old('first_name', $data->first_name) }}"
            required>
        @error('first_name')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="{{ old('last_name', $data->last_name) }}" required>
        @error('last_name')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email', $data->email) }}" required>
        @error('email')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <button type="submit">Simpan Perubahan</button>
    </form>

</body>

</html>
