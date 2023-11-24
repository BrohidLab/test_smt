<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test SMT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    @include('component.navbar');
    <div class="container">
        <h2 class="text-center" style="margin-bottom:20px">Data Alumni</h2>
        <a href="/tambah_alumni" class="btn btn-success mb-3">Tambah data</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-info" role="alert">
                {{ $message }}
            </div>
        @endif

        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tgl Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">IPK</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $alumni)
                    <tr>
                        <td>{{ $alumni->nim }}</td>
                        <td>{{ $alumni->nama_lengkap }}</td>
                        <td>{{ $alumni->jurusan }}</td>
                        <td>{{ $alumni->tempat_lahir }}</td>
                        <td>{{ $alumni->tgl_lahir }}</td>
                        <td>{{ $alumni->alamat }}</td>
                        <td>{{ $alumni->pekerjaan }}</td>
                        <td>{{ $alumni->ipk }}</td>
                        <td><a href="/edit_alumni/{{ $alumni->id }}" class="btn btn-primary">Edit</a> <a
                                href="/delete_alumni/{{ $alumni->id }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
