<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Cuti</title>

</head>

<body>

    <div class="container">
        <h2>Detail Cuti</h2>

        <div class="detail"><span>Nama Pengguna:</span> {{ $leave->employee->first_name }}
            {{ $leave->employee->last_name }}
        </div>
        <div class="detail"><span>Tanggal Mulai Cuti:</span> {{ $leave->start_date }}</div>
        <div class="detail"><span>Tanggal Akhir Cuti:</span> {{ $leave->end_date }}</div>
        <div class="detail"><span>Alasan Cuti:</span> {{ $leave->reasons }}</div>
        <div class="detail"><span>Dibuat pada:</span> {{ $leave->created_at->format('d M Y H:i') }}</div>
        <div class="detail"><span>Diupdate pada:</span> {{ $leave->updated_at->format('d M Y H:i') }}</div>

        <div class="actions">
            <a href="{{ route('leave.edit', $leave->id) }}" class="edit">Edit</a>

            <form action="{{ route('leave.destroy', $leave->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete"
                    onclick="return confirm('Yakin ingin menghapus data cuti ini?')">Hapus</button>
            </form>
        </div>
    </div>

</body>

</html>
