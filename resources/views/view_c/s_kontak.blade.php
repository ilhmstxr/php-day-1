@if ($kontak->isEmpty())
    <h6>Siswa Belum memiliki kontak</h6>
@else
    @foreach ($kontak as $item)
        {{-- <div class="card">
            <div class="card-header">
                <strong>{{ $item->jenis_kontak }}</strong>
            </div>


            <div class="card-body">
                <h1>{{ $item->pivot->deskripsi }}</h1>
            </div>

            <div class="card-footer d-flex justify-content-end">
                <a href="{{ route('master_contact.edit', $item->id) }}" class="btn btn-sm btn-warning "><i
                        class="fas fa-edit"></i></a>
                <a href="{{ route('master_contact.hapus', $item->id) }}" class="btn btn-sm btn-danger "><i
                        class="fas fa-trash"></i></a>
            </div>
        </div> --}}

        <div class="card">

            <div class="card-header">
                <h5 class="card-title">{{ $item->jenis_kontak }}</h5>
            </div>

            <div class="card-body">
                <p class="card-text">{{ $item->pivot->deskripsi }}</p>
            </div>

            <div class="card-footer d-flex justify-content-end">
                <a href="{{ route('master_contact.edit', $item->pivot->id) }}" class="btn btn-sm btn-warning "><i
                        class="fas fa-edit"></i></a>
                <a href="{{ route('master_contact.hapus', $item->id) }}" class="btn btn-sm btn-danger "><i
                        class="fas fa-trash"></i></a>
            </div>
        </div>
    @endforeach
@endif

{{-- $@if ($kontak->isEmpty())
    <h6>siswa belum memiliki kontak</h6>
@else
    <h1>ok</h1>
@endif --}}

{{-- @if ($kontak->isEmpty())
<h6>Siswa belum memiliki project</h6>
@else
@foreach ($kontak as $item)
    <div class="card">
        <div class="card-header">
            <strong>{{ $item->jenis_kontak}}</strong>
        </div>

        <div class="card-body">
            <strong>Tipe Sosmed</strong>
            <p>{{ $item->jenis_kontak}}</p>
            <strong>Deskripsi Project</strong>
            <p>{{ $item->pivot->deskripsi}}</p>
        </div>

        <div class="card-footer">
            <a href="{{ route('master_contact.edit' , $item -> id) }}" class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>
            <a href="{{ route('master_contact.hapus' , $item -> id) }}" class="btn btn-sm btn-danger btn-circle"><i class="fas fa-trash"></i></a>
        </div>
    </div>
@endforeach
@endif --}}
