<div>
    <section class="card">
        <header class="card-header">
            <div class="card-actions">
                <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
            </div>

            <h2 class="card-title">Form Ubah Kategori Peraturan</h2>
        </header>
        <div class="card-body" style="display: block;">
            <form wire:submit.prevent="update" class="form-horizontal form-bordered">
                
                <div class="form-group row">
                    <label class="col-lg-3 control-label text-lg-right pt-2" for="inputRounded">Kategori peraturan</label>
                    <div class="col-lg-6">
                        <input type="hidden" wire:model="kategori_id">
                        <input wire:model="kategori_name" type="text" class="form-control input-rounded" autofocus>
                    </div>
                </div>
                
                <div class="row justify-content-end">
                    <div class="col-sm-9">
                        <button wire:loading.remove wire:target="submit" type="submit" class="btn btn-success">Update</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </div>
                </div>

            </form>
        </div>
    </section>
</div>

