@if ($kontak->isEmpty())
    <h6>Siswa Belum memiliki kontak</h6>
@else
    @foreach ($kontak as $item)
        <div class="card">
            <div class="card-header">
                <strong>{{ $item->jenis_kontak }}</strong>
            </div>

            {{-- {{ $item->pivot->deskripsi }} --}}
            <div class="card-body">
                <h1>{{ $item->pivot->deskripsi }}</h1>
            </div>  

            <div class="card-footer d-flex justify-content-end">
                 {{-- <a href="{{ route('master_contact.edit', $item->id) }}" class="btn btn-sm btn-warning "><i 
                        class="fas fa-edit"></i></a> 
                 <a href="{{ route('master_contact.hapus', $item->id) }}" class="btn btn-sm btn-danger "><i
                        class="fas fa-trash"></i></a>  --}}
            </div>
        </div>
    @endforeach
@endif

{{-- @if ($kontak-> isEmpty())
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