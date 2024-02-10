<div>
    <div class="d-flex align-items-center justify-content-between mb-5">
        <h3 class="text-dark fw-bold mb-0">Task Kamu</h3>
        <a wire:navigate href="{{ route('task.buat') }}" class="btn btn-primary">Tambah Task Baru</a>
    </div>

    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($tasks->count() > 0)
        @foreach ($tasks as $item)
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h5 class="text-dark fw-semibold">{{ $item->title }}</h5>
                            <p class="text-secondary fs-7">Dibuat pada {{ $item->created_at }}</p>

                            <div class="d-flex align-items-center gap-3">
                                <p class="align-items-center gap-1 mb-0 fs-7">
                                    <i class='bx bx-directions'></i> {{ $item->priority }}
                                </p>
                                <p class="align-items-center gap-1 mb-0 fs-7">
                                    <i class='bx bx-bookmark-alt'></i> {{ $item->status }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            @if ($item->status == 'In Progress')
                                <div class="d-flex justify-content-end gap-2">
                                    <button wire:click="delete({{ $item->id }})"
                                        wire:confirm="Kamu yakin ingin menghapusnya?"
                                        class="btn btn-sm btn-outline-danger">Hapus</button>
                                    <button wire:click="completed({{ $item->id }})"
                                        class="btn btn-sm btn-primary">Complete</button>
                                </div>
                            @else
                                <p class="text-success mb-0 fw-bold">Completed</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p class="text-center text-secondary">Oops! Task masih belum ada</p>
    @endif
</div>
