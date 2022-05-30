@extends('layouts.master')
@section('content')
<h1>Edit Data Siswa</h1>
        <form action="/siswa/{{ $siswa->id }}/update" method="POST">
            @csrf
            <div class="mb-3">
              <label for="nd" class="form-label">NPM</label>
              <input name="nama_depan" type="text" class="form-control" id="nd" value="{{ $siswa->npm }}">
            </div>
            <div class="mb-3">
                <label for="nb" class="form-label">Nama</label>
                <input name="nama_belakang" type="text" class="form-control" id="nb" value="{{ $siswa->nama }}">
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
@endsection