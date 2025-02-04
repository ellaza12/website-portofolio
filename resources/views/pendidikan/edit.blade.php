@extends('layout.main')

<div class="container">
    <h2>Edit Data</h2>

    <form method="POST" action="/pendidikan/ {{ $pendidikan->id }}">
        @method('PUT')
        @csrf
        <table class="table">
        <tr>
            <td style="width: 25%"><label for="institusi" class="form-label">Institusi</label></td>
            <td style="width: 75%"><input type="text" class="form-control" id="institusi" name="institusi" value="{{ old('institusi', $pendidikan->institusi) }}" required style="width: 100%; height:50px;">
                @error('institusi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </td>
        </tr>

        <tr>
            <td><label for="nama_sekolah" class="form-label">Nama Sekolah</label></td>
            <td>    <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="{{ old('nama_sekolah',$pendidikan->nama_sekolah) }}" required style="width: 100%; height:50px;">
                @error('nama_sekolah')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </td>
        </tr>

        <tr>
            <td><label for="rentang_waktu" class="form-label">Rentang Waktu</label></td>
            <td>   <input type="text" class="form-control" id="rentang_waktu" name="rentang_waktu" value="{{ old('rentang_waktu', $pendidikan->rentang_waktu) }}" required style="width: 100%; height:50px;">
                @error('rentang_waktu')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </td>
        </tr>
        
        <tr>
            <td><button type="submit" class="btn btn-primary">Submit</button></td>
        </tr>
        </div>
        </table>
    </form>
</div>