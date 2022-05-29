<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Edit Data Siswa</h1>
        <form action="/siswa/{{ $siswa->id }}/update" method="POST">
            @csrf
            <div class="mb-3">
              <label for="nd" class="form-label">Nama Depan</label>
              <input name="nama_depan" type="text" class="form-control" id="nd" value="{{ $siswa->nama_depan }}">
            </div>
            <div class="mb-3">
                <label for="nb" class="form-label">Nama Belakang</label>
                <input name="nama_belakang" type="text" class="form-control" id="nb" value="{{ $siswa->nama_belakang }}">
            </div>
            <div class="mb-3">
                <label for="jk" class="form-label">Pilih Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select" id="jk">
                    <option value="Laki-Laki" @if ($siswa->jenis_kelamin == "Laki-Laki") selected @endif>Laki-Laki</option>
                    <option value="Perempuan" @if ($siswa->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
                  </select>
            </div>
            <div class="mb-3">
                <label for="ag" class="form-label">Agama</label>
                <input name="agama" type="text" class="form-control" id="ag" value="{{ $siswa->agama }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $siswa->alamat }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary float-end">Update</button>
         </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>