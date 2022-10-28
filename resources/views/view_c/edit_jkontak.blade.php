@extends('master.admin')
@section('title', 'Jenis Kontak')
@section('content-title', 'Edit jenis Kontak ')
@section('content')

 <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('master_project.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    
                    <label for="nama">JENIS KONTAK</label>
                    <input type="text" class="form-control" id="jenis_kontak" name="jenis_kontak" value="{{$jkontak->jenis_kontak }}">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="simpan">
                    <a href="{{ route('master_contact.index') }}" class="btn btn-danger">Batal</a>
                </div>
            </form>
        </div>
    </div>

@endsection