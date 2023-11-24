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
        <h2 class="mb-5">Dashboard</h2>
        <div class="col justify-content-start">
            <div class="col-12 mb-5">
                <h5 style="margin-bottom:20px">Data Kejuruan</h5>

                <table class="table">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">Kode Kejuruan</th>
                            <th scope="col">Jurusan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jurusan as $jurusan)
                            <tr>
                                <td>{{ $jurusan->kode_kejurusan }}</td>
                                <td>{{ $jurusan->jurusan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-12">
                <h5 style="margin-bottom:20px">Data Alumni</h5>
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alumni as $alumni)
                            <tr>
                                <td>{{ $alumni->nim }}</td>
                                <td>{{ $alumni->nama_lengkap }}</td>
                                <td>{{ $alumni->jurusan }}</td>
                                <td>{{ $alumni->tempat_lahir }}</td>
                                <td>{{ $alumni->tgl_lahir }}</td>
                                <td>{{ $alumni->alamat }}</td>
                                <td>{{ $alumni->pekerjaan }}</td>
                                <td>{{ $alumni->ipk }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
