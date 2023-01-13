<div>
    <section class="card">
        <header class="card-header">
            <div class="card-actions">
                <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
            </div>

            <h2 class="card-title">Form Produk Hukum</h2>
        </header>
        <div class="card-body" style="display: block;">
            <form wire:submit.prevent="submit" class="form-horizontal form-bordered">
                
                <div class="form-group row">
                    <label class="col-lg-3 control-label text-lg-right pt-2">Kategori</label>
                    <div class="col-lg-6">
                        <select wire:model="katSelected" data-plugin-selectTwo class="form-control populate">
                            @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id}}">{{ $kategori->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 control-label text-lg-right pt-2" for="inputRounded">Judul peraturan</label>
                    <div class="col-lg-6">
                        <input wire:model="judul" type="text" class="form-control input-rounded" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 control-label text-lg-right pt-2" for="inputRounded">Tentang</label>
                    <div class="col-lg-9">
                        <input wire:model="tentang"  type="text" class="form-control input-rounded">
                    </div>
                </div>
              

                <div class="form-group row">
                    <label class="col-lg-3 control-label text-lg-right pt-2" for="inputRounded">Nomor Peraturan</label>
                    <div class="col-lg-4">
                        <input wire:model="noper" name="noper" type="text" class="form-control input-rounded" id="inputRounded">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 control-label text-lg-right pt-2">Status peraturan</label>
                    <div class="col-lg-6">
                        <select wire:model="katStatus" data-plugin-selectTwo class="form-control populate">
                          
                            <option value="Berlaku">Berlaku</option>
                            <option value="Pencabutan">Pencabutan</option>
                            <option value="Rancangan">Rancangan</option>
                            <option value="Tidak Berlaku">Tidak Berlaku</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 control-label text-lg-right pt-2">Peraturan yang dicabut</label>
                    <div class="col-lg-6">
                        <select wire:model="perCabut" data-plugin-selectTwo class="form-control populate" data-plugin-options='{ "minimumInputLength": 2 }'>
                           @foreach ($produks as $produk)
                            <option value="none"></option>
                            <option value="{{ $produk->id}}">{{ $produk->judul}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

               

                <div class="form-group row">
                    <label class="col-lg-3 control-label text-lg-right pt-2">Tahun</label>
                    <div class="col-lg-2">
                    <input wire:model="tahun" name="tahun" type="number" class="form-control input-rounded" id="inputRounded" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==4) return false;" /> 
                     
                     {{-- <input class="form-control" data-plugin-maxlength="" maxlength="20">  --}}
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-lg-3 control-label text-lg-right pt-2">Tanggal Penetapan</label>
                    <div class="col-lg-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                            <input wire:model="tglPenetapan" name="tglPenetapan" type="text" data-plugin-datepicker="" class="form-control">
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
                    <label class="col-lg-3 control-label text-lg-right pt-2" for="textareaAutosize">Abstraksi</label>
                    <div class="col-lg-6">
                        <textarea wire:model="abstrak" class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize="" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 89px;"></textarea>
                    </div>
                </div>

                <div class="row justify-content-end">
                    <div class="col-sm-9">
                        <button wire:loading.remove wire:target="submit" type="submit" 
                        class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                </div>

            </form>
        </div>
    </section>
</div>

