<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3">
        @if (session('sukses'))
        <div class="alert alert-success" role="alert">
            <div class="row">
                <div class="col-6">{{ session('sukses') }}</div>
                <div class="col-6"><button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></div>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-6">
                <h1>Data Siswa</h1>
            </div>
            <div class="col-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Data Siswa
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Input Data Siswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/siswa/create" method="POST">
                                @csrf
                                <div class="mb-3">
                                  <label for="nd" class="form-label">Nama Depan</label>
                                  <input name="nama_depan" type="text" class="form-control" id="nd">
                                </div>
                                <div class="mb-3">
                                    <label for="nb" class="form-label">Nama Belakang</label>
                                    <input name="nama_belakang" type="text" class="form-control" id="nb">
                                </div>
                                <div class="mb-3">
                                    <label for="jk" class="form-label">Pilih Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-select" id="jk">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                      </select>
                                </div>
                                <div class="mb-3">
                                    <label for="ag" class="form-label">Agama</label>
                                    <input name="agama" type="text" class="form-control" id="ag">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                             </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-hover">
            <tr>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data_siswa as $siswa)
            <tr>
                <td>{{ $siswa->nama_depan }}</td>
                <td>{{ $siswa->nama_belakang }}</td>
                <td>{{ $siswa->jenis_kelamin }}</td>
                <td>{{ $siswa->agama }}</td>
                <td>{{ $siswa->alamat }}</td>
                <td><a href="/siswa/{{ $siswa->id }}/edit" class="btn btn-warning btn-sm">Edit</a></td>
            </tr>
            @endforeach
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
