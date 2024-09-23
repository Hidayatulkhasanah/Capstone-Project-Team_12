@extends("admin.components.app")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

@section('contents')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Wisata</h1>
        </div><!-- End Page Title -->

        <a href="{{ route('create_tour') }}" class="btn btn-primary mb-3">+ Tambah Paket</a>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        

                                        <th scope="col">Nama</th>
                                        <th scope="col">Fasilitas</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach ($tours as $tour)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $tour->tour_name }}</td>
                                        <td>{{ $tour->destination }}</td>
                                        <td>@currency($tour->price)</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('show_tour', ['id' => $tour->id]) }}" 
                                                    class="btn btn-info btn-sm me-2" title="View">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="{{ route('edit_tour', ['id' => $tour->id]) }}" 
                                                    class="btn btn-warning btn-sm me-2" title="Edit">
                                                    <i class="fa fa-pen"></i>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-sm" 
                                                    data-bs-toggle="modal" data-bs-target="#hapusModal{{ $tour->id }}" 
                                                    title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="hapusModal{{ $tour->id }}" tabindex="-1"
                                                aria-labelledby="hapusModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="hapusModalLabel">Konfirmasi</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST"
                                                            action="{{ route('destroy_tour', $tour->id) }}">
                                                            @csrf
                                                            <div class="modal-body">
                                                                Apakah Anda yakin ingin menghapus paket
                                                                {{$tour->tour_name }}?
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
