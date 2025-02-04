
@extends('layout.main')


<div class="container">
    <h2>Edit Data </h2>

    <form method="POST" action="/project/{{ $project->id }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <table class="table">
        <tr>
            <td style="width: 25%"><label for="nama_project" class="form-label">Nama Project</label></td>
            <td style="width: 75%"> <input type="text" class="form-control" id="nama_project" name="nama_project" value="{{ old('nama_project', $project->nama_project) }}" required style="width: 100%; height:50px;">
                @error('nama_project')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </td>
        </tr>

        <tr>
            <td><label for="gambar" class="form-label">Gambar Project</label></td>
            <td>    <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" style="width: 100%; height:50px;">
                @if($project->gambar)
                <div>
                    <img src="{{ asset('storage/' . $project->gambar) }}" alt="gambar" width="100">
                </div>
                @endif
            </td>
        </tr>
        
        <tr>
            <td><button type="submit" class="btn btn-primary">Submit</button></td>
        </tr>
        </table>
        </div>
    </form>
</div>


