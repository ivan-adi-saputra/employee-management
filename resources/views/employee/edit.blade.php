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

        .error-message {
            color: red;
            font-size: 0.875rem;
            margin-top: 5px;
        }

        .error-summary {
            color: red;
            background-color: #f8d7da;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .error-summary ul {
            list-style-type: none;
            padding-left: 0;
        }

        .error-summary ul li {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>

    <h2>Form Edit Pengguna</h2>

    @if ($errors->any())
        <div class="error-summary">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('employee.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="first_name">Nama Depan</label>
        <input type="text" id="first_name" name="first_name" value="{{ old('first_name', $employee->first_name) }}"
            required>
        @error('first_name')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <label for="last_name">Nama Belakang</label>
        <input type="text" id="last_name" name="last_name" value="{{ old('last_name', $employee->last_name) }}"
            required>
        @error('last_name')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email', $employee->email) }}" required>
        @error('email')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <label for="phone">Telepon</label>
        <input type="text" id="phone" name="phone" value="{{ old('phone', $employee->phone) }}">
        @error('phone')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <label for="address">Alamat</label>
        <input type="text" id="address" name="address" value="{{ old('address', $employee->address) }}">
        @error('address')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <label for="gender">Jenis Kelamin</label>
        <select id="gender" name="gender" required>
            <option value="male" {{ old('gender', $employee->gender) == 'male' ? 'selected' : '' }}>Laki-laki
            </option>
            <option value="female" {{ old('gender', $employee->gender) == 'female' ? 'selected' : '' }}>Perempuan
            </option>
        </select>
        @error('gender')
            <div class="error-message">{{ $message }}</div>
        @enderror

        <button type="submit">Simpan Perubahan</button>
    </form>

</body>

</html>
