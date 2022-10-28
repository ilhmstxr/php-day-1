@if ($kontak->isEmpty())
    <h6>Siswa Belum memiliki kontak</h6>
@else
    @foreach ($kontak as $item)
        <div class="card">
            <div class="card-body">
                    <p>{{ $item->jenis_kontak}}={{ $item->pivot->deskripsi  }}</p>      
            </div>

            <div class="card-footer d-flex justify-content-end">
                {{-- <a href="{{ route('master_contact.edit', $item->id) }}" class="btn btn-sm btn-warning "><i class="fas fa-edit"></i></a>
                <a href="{{ route('master_contact.hapus', $item->id) }}" class="btn btn-sm btn-danger "><i class="fas fa-trash"></i></a> --}}
            </div>
        </div>
    @endforeach
@endif
