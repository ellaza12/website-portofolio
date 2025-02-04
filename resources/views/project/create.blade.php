@extends('layout.main')

<div class="container">
    <h2> Add Project </h2>
    <form method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
        @csrf
        <table class="table">
        <tr>
            <td style="width: 15%"><label for="nama_project" class="form-label">Nama</label></td>
            <td style="width: 85%">
                <input type="text" class="form-control" id="nama_project" name="nama_project" value="{{ old('nama_project') }}" required style="width: 100%; height:50px;">
                @error('nama_project')
                    <div class="text-danger"> {{ $message }}</div>
                @enderror
            </td>
        </tr>
        
        <tr>
            <td>
            <label for="gambar" class="form-label">Gambar</label></td>
            <td>
                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required style="width: 100%; height:50px;">
                @error('gambar')
                    <div class="text-danger"> {{ $message }}</div>
                @enderror
            </td>
        <tr>
            <td>
            <button type="submit" class="btn btn-primary">Submit</button>
            </td>
        </tr>
        </div>
    </form>
</table>
</div>