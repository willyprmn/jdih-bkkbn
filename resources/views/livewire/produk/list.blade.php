<div>
    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                        <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                    </div>

                    <h2 class="card-title">List Peraturan dan Perundangan</h2>
                </header>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <a href="{{ 'produk-add' }}" class="btn btn-success">Tambah <i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>JENIS</th>
                                <th>JUDUL</th>
                                <th>TAHUN</th>
                                <th>STATUS</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produks as $produk)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $produk->jenis->nama }}</td>
                                <td>{{ $produk->judul }}</td>
                                <td>{{ $produk->tahun }}</td>
                                <td>{{ $produk->status_akhir }}</td>
                                <td>
                                    <a href="#" class="text-decoration-none"><span><i class="fa fa-pencil" style="color: #3399ff;" title="Edit"></i></span></a>
                                    <button class="btn btn-outline" onclick="return confirm('Apakah yakin akan dihapus ?')"><span><i class="fa fa-trash" style="color: #ef5350;" title="Hapus"></i></span></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>

</div>