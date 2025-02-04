@extends('layout.main')

<div class="container">
    <h2> Add pelatihan </h2>
    <form method="POST" action="{{ route('pelatihan.store') }}" enctype="multipart/form-data">
        @csrf
        <table class="table">
        <tr>
            <td style="width: 25%"><label for="nama_pelatihan" class="form-label">Nama Pelatihan</label></td>
            <td style="width: 75%">   <input type="text" class="form-control" id="nama_pelatihan" name="nama_pelatihan" value="{{ old('nama_pelatihan') }}" required style="width: 100%; height:50px;">
                @error('nama_pelatihan')
                    <div class="text-danger"> {{ $message }}</div>
                @enderror
            </td>
        </tr>
        <tr>
            <td><label for="deskripsi" class="form-label">Deskripsi</label></td>
            <td> <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ old('deskripsi') }}" required style="width: 100%; height:50px;">
                @error('deskripsi')
                    <div class="text-danger"> {{ $message }}</div>
                @enderror
            </td>
        </tr>
        
        <tr>
            <td><label for="gambar" class="form-label">Gambar</label></td>
            <td>    <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required style="width: 100%; height:50px;">
                @error('gambar')
                    <div class="text-danger"> {{ $message }}</div>
                @enderror
            </td>
        </tr>

        <tr>
            <td><button type="submit" class="btn btn-primary">Submit</button></td>
        </tr>
        </table>
        </div>
    </form>
</div>