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
    <div class="container d-flex justify-center flex-column pb-5">
        <h2 style="margin-bottom:20px" class="text-center">Form Input Alumni</h2>
        <div class="w-30">
            <form action="/create_alumni" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="kd_kejuruan" class="form-label">NIM</label>
                    <input type="text" class="form-control" id="kd_kejurusan" name="nim">
                </div>
                <div class="mb-3">
                    <label for="kd_kejuruan" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="kd_kejurusan" name="nama_lengkap">
                </div>
                <div class="mb-3">
                    <label for="kd_kejuruan" class="form-label">Jurusan</label>
                    <select class="form-select" aria-label="kd_kejuruan" name="kode_kejuruan">
                        <option selected>Pilih jurusan</option>
                        @foreach ($data as $juruan)
                            <option value={{ $juruan->kode_kejurusan }}>{{ $juruan->jurusan }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="mb-3">
                    <label for="kd_kejuruan" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="kd_kejurusan" name="tempat_lahir">
                </div>
                <div class="mb-3">
                    <label for="kd_kejuruan" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="kd_kejurusan" name="tgl_lahir">
                </div>
                <div class="mb-3">
                    <label for="kd_kejuruan" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="kd_kejurusan" name="alamat">
                </div>
                <div class="mb-3">
                    <label for="kd_kejuruan" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" id="kd_kejurusan" name="pekerjaan">
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">IPK</label>
                    <input type="text" class="form-control" id="jurusan" name="ipk">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
