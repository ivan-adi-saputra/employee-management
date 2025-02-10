<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }
    </style>
</head>

<body>

    <h2>Daftar Pengguna</h2>
    <a href="{{ route('admin.create') }}">Tambah</a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->first_name }}</td>
                    <td>{{ $item->last_name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <a href="{{ route('admin.show', $item->id) }}">Show</a> |
                        <a href="{{ route('admin.edit', $item->id) }}">Edit</a> |
                        <form action="{{ route('admin.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Admin not found</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>

</html>
