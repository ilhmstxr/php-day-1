@extends('master.admin')
@section('title', 'Edit Contact')
@section('content-title', 'Edit Kontak - '. $siswa->nama )
@section('content')

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('master_contact.update', $kontak->id) }}" method="POST">
                @csrf
                @method('put')

                <div class="form-group">
                    <input type="hidden" name="siswa_id" value="{{ $kontak->id }}">
                    <label>Jenis kontak</label>
                    <select type="text" class="form-control" id="jenis_kontak_id" name="jenis_kontak_id">
                        {{-- <option value="">Pilih</option> --}}
                        @foreach ($jenis as $item)
                            <option value="{{ $item->id }}">{{ $item->jenis_kontak }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="nama">DESKRIPSI</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $kontak->deskripsi }}">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="simpan">
                    <a href="{{ route('master_contact.index') }}" class="btn btn-danger">Batal</a>
                </div>
            </form>
        </div>
    </div>


@endsection
