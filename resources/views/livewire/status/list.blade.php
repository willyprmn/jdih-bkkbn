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

                    <h2 class="card-title">List Status Peraturan</h2>
                </header>
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <a href="{{ 'status-add' }}" class="btn btn-primary">Tambah <i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>STATUS PERATURAN</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($status as $s)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $s->status_name }}</td>
                                <td>
                                    <a href="{{ 'status-change/'.$s->id }}" class="text-decoration-none"><span><i class="fa fa-pencil" style="color: #3399ff;" title="Edit"></i></span></a>
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