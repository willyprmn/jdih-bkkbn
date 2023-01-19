<div>
    <section class="card">
        <header class="card-header">
            <div class="card-actions">
                <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
            </div>

            <h2 class="card-title">Form Tambah Dokumen Peraturan dan Perundangan</h2>
        </header>
        <div class="card-body" style="display: block;">
            <form wire:submit.prevent="submit" class="form-horizontal form-bordered">
                
                <div class="form-group row">
                    <label class="col-lg-3 control-label text-lg-right pt-2" for="inputRounded">Judul peraturan</label>
                    <div class="col-lg-6">
                        <input wire:model="judul" type="text" class="form-control input-rounded" autofocus>
                    </div>
                </div>    

                <div class="form-group row">
                    <label class="col-lg-3 control-label text-lg-right pt-2">Kategori peraturan</label>
                    <div class="col-lg-6">
                        <select wire:model="kategori_id" data-plugin-selectTwo class="form-control populate">
                            @foreach ($kategori as $k)
                            <option value="{{ $k->id}}">{{ $k->kategori_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- <div class="form-group row">
                    <label class="col-lg-3 control-label text-lg-right pt-2" for="inputRounded">Tentang</label>
                    <div class="col-lg-9">
                        <input wire:model="tentang" type="text" class="form-control input-rounded">
                    </div>
                </div>
              

                <div class="form-group row">
                    <label class="col-lg-3 control-label text-lg-right pt-2" for="inputRounded">Nomor Peraturan</label>
                    <div class="col-lg-4">
                        <input wire:model="nomor" name="nomor" type="text" class="form-control input-rounded" id="inputRounded">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 control-label text-lg-right pt-2">Status peraturan</label>
                    <div class="col-lg-6">
                        <select wire:model="status_id" data-plugin-selectTwo class="form-control populate">
                            @foreach ($status as $s)
                            <option 
                                value="{{ $s->id}}">
                                {{ $s->status_name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 control-label text-lg-right pt-2">Peraturan yang dicabut</label>
                    <div class="col-lg-6">
                        <select wire:model="per_cabut" data-plugin-selectTwo class="form-control populate" data-plugin-options='{ "minimumInputLength": 2 }'>
                           @foreach ($dokumen as $d)
                            <option value="none"></option>
                            <option value="{{ $d->id }}">{{ $d->judul }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 control-label text-lg-right pt-2">Tahun</label>
                    <div class="col-lg-2">
                    <input wire:model="tahun" name="tahun" type="number" class="form-control input-rounded" id="inputRounded" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==4) return false;" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 control-label text-lg-right pt-2">Tanggal Penetapan</label>
                    <div class="col-lg-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                            <input wire:model="tanggal" name="tanggal" type="text" data-plugin-datepicker="" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 control-label text-lg-right pt-2">File Upload</label>
                    <div class="col-lg-6">
                        <input wire:model="fileUpload" name="fileUpload" type="file" class="form-control input-rounded" 
                        data-show-remove="false" data-max-file-size="20M"
                        data-allowed-file-extensions="pdf"
                        data-height="120">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 control-label text-lg-right pt-2" for="textareaAutosize">Deskripsi</label>
                    <div class="col-lg-6">
                        <textarea wire:model="deskripsi" class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize="" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 89px;"></textarea>
                    </div>
                </div> -->

                <div class="row justify-content-end">
                    <div class="col-sm-9">
                        <button wire:loading.remove wire:target="submit" type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </div>
                </div>

            </form>
        </div>
    </section>
</div>

