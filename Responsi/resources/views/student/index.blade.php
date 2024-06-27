<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
        }
        .container {
            margin-top: 30px;
            max-width: 1200px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: center;
            padding: 12px;
        }
        th {
            background-color: #f8f9fa;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #ffe5b4;
        }
        tr:nth-child(odd) {
            background-color: #ffd9b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Data Mahasiswa</h2>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Prodi</th>
                    <th>Kelas</th>
                    <th>Angkatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $index => $student)
                <tr>
                    <td>{{$index + 1}}</td>
                    <td>{{$student->nama}}</td>
                    <td>{{$student->nim}}</td>
                    <td>{{$student->prodi}}</td>
                    <td>{{$student->kelas}}</td>
                    <td>{{$student->angkatan}}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="students/edit/{{$student->id}}" class="btn btn-warning btn-sm mx-1">Edit</a>
                            <a href="students/delete/{{$student->id}}" class="btn btn-danger btn-sm mx-1" onclick="return confirm('Hapus data atas nama {{$student->nama}}?')">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-between mt-4">
            <a href="/students/form" class="btn btn-primary btn-sm">Tambah Data</a>
            <a href="/" class="btn btn-secondary btn-sm">Logout</a>
        </div>
    </div>
</body>
</html>
