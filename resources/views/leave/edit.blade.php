<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Cuti</title>
</head>

<body>

    <h2>Edit Cuti Karyawan</h2>

    <form action="{{ route('leave.update', $leave->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="employee_id">Nama Karyawan</label>
        <select name="employee_id" required>
            @foreach ($employees as $employee)
                <option value="{{ $employee->id }}" {{ $leave->employee_id == $employee->id ? 'selected' : '' }}>
                    {{ $employee->first_name }}</option>
            @endforeach
        </select>

        <label for="start_date">Tanggal Mulai</label>
        <input type="date" id="start_date" name="start_date" value="{{ $leave->start_date }}" required>

        <label for="end_date">Tanggal Selesai</label>
        <input type="date" id="end_date" name="end_date" value="{{ $leave->end_date }}" required>

        <label for="reasons">Alasan</label>
        <textarea id="reasons" name="reasons" required>{{ $leave->reasons }}</textarea>

        <button type="submit">Simpan Perubahan</button>
    </form>

</body>

</html>
