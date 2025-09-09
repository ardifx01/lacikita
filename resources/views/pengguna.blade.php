@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<!-- Page-header start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Pengguna</h5>
                    <p class="m-b-0">Selamat datang di toko (nama toko)</p>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index.html"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Pengguna</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page-header end -->
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                @if (session('success'))
                <div class="notifications" data-type="success" data-from="top" data-align="center" data-icon="fa fa-check">
                    {{ session('success') }}
                </div>
                @endif
                <div class="row">
                    <!-- Card kecil di sebelah kiri -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Tambah Pengguna</h5>
                            </div>
                            <div class="card-block">
                                <form action="{{ route('pengguna.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input name="name" type="text" class="form-control"
                                                placeholder="Nama Lengkap" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input name="nik" type="number" class="form-control" placeholder="NIK"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <select class="form-control" name="gender" id="" required>
                                                <option value="">-- Jenis Kelamin --</option>
                                                <option value="Laki-laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input name="no_hp" type="number" class="form-control"
                                                placeholder="Nomor HP" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input name="email" type="email" class="form-control"
                                                placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button type="submit"
                                                class="btn btn-success btn-sm btn-block waves-effect waves-light text-center">SIMPAN</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Card besar di sebelah kanan -->
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5>Daftar Pengguna Aplikasi</h5>
                                <span>terdiri dari <code>level</code> administrator, pemilik toko, dan kasir</span>
                            </div>
                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    <table id="usersTable" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th style="text-align: left;">NO</th>
                                                <th style="text-align: left;">NAMA LENGKAP</th>
                                                <th style="text-align: left;">NIK</th>
                                                <th style="text-align: left;">AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($users as $user)
                                            <tr>
                                                <td style="text-align: left;">{{ $loop->iteration }}</td>
                                                <td style="text-align: left;">{{ $user->name }}</td>
                                                <td style="text-align: left;">{{ $user->nik }}</td>
                                                <td style="text-align: left;">
                                                    <button class="btn waves-effect waves-light btn-light btn-sm">
                                                        <i class="icofont icofont-user"></i>
                                                    </button>
                                                    <button class="btn waves-effect waves-light btn-danger btn-sm btn-delete"
                                                        data-id="{{ $user->id }}"
                                                        data-name="{{ $user->name }}">
                                                        <i class="icofont icofont-bin"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="4" class="text-center">Tidak ada data pengguna</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row end -->
            </div>
        </div>
    </div>
</div>

<button class="btn btn-primary" onclick="$('#confirmDeleteModal').modal('show')">Test Modal</button>

<!-- Modal Konfirmasi Delete -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="deleteMessage">Apakah Anda yakin ingin menghapus user ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(document).on('click', '.btn-delete', function() {
            var userId = $(this).data('id');
            var userName = $(this).data('name');

            // Set action form delete ke route resource
            var url = "{{ route('pengguna.destroy', ':id') }}";
            url = url.replace(':id', userId);
            $('#deleteForm').attr('action', url);

            // Tampilkan pesan konfirmasi dengan nama user
            $('#deleteMessage').text('Apakah Anda yakin ingin menghapus user "' + userName + '"?');

            // Tampilkan modal
            $('#confirmDeleteModal').modal('show');
        });
    });
</script>
@endsection