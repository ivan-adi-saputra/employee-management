<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Cuti</title>
</head>

<body>

    <h2>Tambah Cuti Karyawan</h2>

    <form action="{{ route('leave.store') }}" method="POST">
        @csrf

        <label for="employee_id">Nama Karyawan</label>
        <select name="employee_id" required>
            @foreach ($employees as $employee)
                <option value="{{ $employee->id }}">{{ $employee->first_name }}</option>
            @endforeach
        </select>

        <label for="start_date">Tanggal Mulai</label>
        <input type="date" id="start_date" name="start_date" required>

        <label for="end_date">Tanggal Selesai</label>
        <input type="date" id="end_date" name="end_date" required>

        <label for="reasons">Alasan</label>
        <textarea id="reasons" name="reasons" required></textarea>

        <button type="submit">Simpan</button>
    </form>

</body>

</html>
