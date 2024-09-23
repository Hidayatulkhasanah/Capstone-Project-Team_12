@extends("admin.components.app")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
@section('contents')
<main id="main" class="main">
<div class="pagetitle">
    <h1>Riwayat Transaksi</h1>
</div>
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    {{-- <h5 class="card-title">Datatables</h5>
                    <p>Add lightweight datatables to your project with using the <a
                            href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple
                            DataTables</a> library. Just add <code>.datatable</code> class name to any table you
                        wish to conver to a datatable</p> --}}

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($riwayat as $show)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $show->name }}</td>
                                <td>{{ $show->email }}</td>
                                <td>{{ $show->alamat }}</td>
                                <td>
                                    @if($show->status == 'paid')
                                    <span class="badge bg-success">{{ $show->status }}</span>
                                    @elseif($show->status == 'unpaid')
                                        <span class="badge bg-danger">{{ $show->status }}</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex">
                                    <a href="{{ route('show_transaksi', ['id' => $show->id]) }}"
                                        class="btn btn-info btn-sm me-2" title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" 
                                    data-bs-toggle="modal" data-bs-target="#hapusModal{{ $show->id }}" 
                                    title="Delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="hapusModal{{ $show->id }}" tabindex="-1"
                                        aria-labelledby="hapusModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="hapusModalLabel">Konfirmasi</h5>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form method="POST"
                                                    action="{{ route('destroy_riwayat', $show->id) }}">
                                                    @csrf
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus transaksi
                                                        {{$show->name }}?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Tidak</button>
                                                        <button type="submit" class="btn btn-danger">Ya</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                </div>
            </div>

        </div>
    </div>
</section>
</main><!-- End #main -->
@endsection