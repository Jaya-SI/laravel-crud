@extends('layouts.master')
@section('content')
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
                          <label for="nd" class="form-label">NPM</label>
                          <input name="npm" type="text" class="form-control" id="nd">
                        </div>
                        <div class="mb-3">
                            <label for="nb" class="form-label">Nama</label>
                            <input name="nama" type="text" class="form-control" id="nb">
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
        <th>NPM</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    @foreach ($data_siswa as $siswa)
    <tr>
        <td>{{ $siswa->npm }}</td>
        <td>{{ $siswa->nama }}</td>
        <td>{{ $siswa->jenis_kelamin }}</td>
        <td>{{ $siswa->agama }}</td>
        <td>{{ $siswa->alamat }}</td>
        <td>
            <a href="/siswa/{{ $siswa->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
            <a href="/siswa/{{ $siswa->id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Dihapus ?')">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
   
