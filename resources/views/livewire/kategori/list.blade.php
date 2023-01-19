<div>
    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                        <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                    </div>

                    <div>
                        @if(session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show">{{ session('message') }}</div>
                        @endif
                    </div>

                    <h2 class="card-title">List Kategori Peraturan</h2>
                </header>
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <a href="{{ 'kategori-add' }}" class="btn btn-primary">Tambah <i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>KATEGORI PERATURAN</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori as $k)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $k->kategori_name }}</td>
                                <td>
                                    <a href="{{ 'kategori-change/'.$k->id }}" class="text-decoration-none"><span><i class="fa fa-pencil" style="color: #3399ff;" title="Edit"></i></span></a>
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