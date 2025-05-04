<div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="exampleModalLabel{{ $item->id }}">Konfirmasi Hapus {{ $title }}</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
            </div>
            <div class="modal-body text-start">
                <div class="row mb-2">
                    <div class="col-6">Nama</div>
                    <div class="col-6">: {{ $item->nama }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-6">Email</div>
                    <div class="col-6 text-white">: <span class="badge bg-primary">{{ $item->email }}</span></div>
                </div>
                <div class="row mb-2">
                    <div class="col-6">Jabatan</div>
                    <div class="col-6 text-white">
                        : @if ($item->jabatan == 'Admin')
                            <span class="badge bg-dark">{{ $item->jabatan }}</span>
                        @else
                            <span class="badge bg-info">{{ $item->jabatan }}</span>
                        @endif
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-6">Status</div>
                    <div class="col-6 text-white">
                        : @if ($item->is_tugas == false)
                            <span class="badge bg-danger">Belum Ditugaskan</span>
                        @else
                            <span class="badge bg-success">Sudah Ditugaskan</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times"></i> Tutup
                </button>
                <form action="{{ route('userDestroy', $item->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger">
                        <i class="fas fa-trash"></i> Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>