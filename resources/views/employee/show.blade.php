<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .container {
            max-width: 400px;
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        .detail {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .detail span {
            font-weight: bold;
        }

        .actions {
            margin-top: 20px;
            text-align: center;
        }

        .actions a {
            display: inline-block;
            padding: 8px 12px;
            margin: 5px;
            text-decoration: none;
            color: white;
            border-radius: 4px;
        }

        .edit {
            background: #007bff;
        }

        .edit:hover {
            background: #0056b3;
        }

        .delete {
            background: #dc3545;
        }

        .delete:hover {
            background: #a71d2a;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Detail Pengguna</h2>

        <div class="detail"><span>Nama Depan:</span> {{ $employee->first_name }}</div>
        <div class="detail"><span>Nama Belakang:</span> {{ $employee->last_name }}</div>
        <div class="detail"><span>Email:</span> {{ $employee->email }}</div>
        <div class="detail"><span>Telepon:</span> {{ $employee->phone }}</div>
        <div class="detail"><span>Alamat:</span> {{ $employee->address }}</div>
        <div class="detail"><span>Jenis Kelamin:</span> {{ ucfirst($employee->gender) }}</div>
        <div class="detail"><span>Dibuat pada:</span> {{ $employee->created_at->format('d M Y H:i') }}</div>
        <div class="detail"><span>Diupdate pada:</span> {{ $employee->updated_at->format('d M Y H:i') }}</div>

        <div class="actions">
            <a href="{{ route('admin.edit', $employee->id) }}" class="edit">Edit</a>

            <form action="{{ route('admin.destroy', $employee->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete"
                    onclick="return confirm('Yakin ingin menghapus pengguna ini?')">Hapus</button>
            </form>
        </div>
    </div>

</body>

</html>
