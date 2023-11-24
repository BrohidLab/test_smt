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
        <h2 style="margin-bottom:20px" class="text-center">Form Edit Alumni</h2>
        <div class="w-30">
            <form action="/edit_alumni/{{ $alumni->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" value="{{ $alumni->nim }}" id="nim"
                        name="nim">
                </div>
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" value="{{ $alumni->nama_lengkap }}" id="nama_lengkap"
                        name="nama_lengkap">
                </div>
                <div class="mb-3">
                    <label for="kd_kejuruan" class="form-label">Jurusan</label>
                    <select class="form-select" aria-label="kd_kejuruan" name="kode_kejuruan">
                        <option>Pilih jurusan</option>
                        @foreach ($jurusan as $juruan)
                            @if ($alumni->kode_kejuruan = $juruan->kode_kejurusan)
                                <option selected value="{{ $juruan->kode_kejurusan }}">{{ $juruan->jurusan }}</option>
                            @else
                                <option value="{{ $juruan->kode_kejurusan }}">{{ $juruan->jurusan }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kd_kejuruan" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="kd_kejurusan" value="{{ $alumni->tempat_lahir }}"
                        name="tempat_lahir">
                </div>
                <div class="mb-3">
                    <label for="kd_kejuruan" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="kd_kejurusan" value="{{ $alumni->tgl_lahir }}"
                        name="tgl_lahir">
                </div>
                <div class="mb-3">
                    <label for="kd_kejuruan" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="kd_kejurusan" value="{{ $alumni->alamat }}"
                        name="alamat">
                </div>
                <div class="mb-3">
                    <label for="kd_kejuruan" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" id="kd_kejurusan" value="{{ $alumni->pekerjaan }}"
                        name="pekerjaan">
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">IPK</label>
                    <input type="text" class="form-control" id="jurusan" value="{{ $alumni->ipk }}"
                        name="ipk">
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
