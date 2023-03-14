@extends('backoffice.layouts.main')
@section('container')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">{{ $menu }}</h4>
                    <form class="" action="{{ route('armada.update', Crypt::encryptString($data->id)) }}"
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Nama Armada</label>
                            <input type="text" class="form-control" name="merk" value="{{ $data->merk }}" required
                                placeholder="Contoh Avanza" />
                            <small class="text-danger">{{ $errors->first('merk') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Jenis Armada <code>*</code></label>
                            <select class="form-control" name="model" id="model" required>
                                <option value="">-- Pilih Model --</option>
                                <option value="1" {{ $data->model == 1 ? 'selected' : '' }}> Matic</option>
                                <option value="2" {{ $data->model == 2 ? 'selected' : '' }}> Manual</option>
                                <option value="3" {{ $data->model == 3 ? 'selected' : '' }}> Manual dan Matic</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="foto" value="{{ old('foto') }}"
                                placeholder="Foto" />
                            <input type="hidden" name="file_old" value="{{ $data->foto }}">
                            <?php if($data->foto){ ?>
                            <img src="{{ asset('files/armada/' . $data->foto) }}" alt="" width="100px;"
                                class="rounded avatar-md">
                            <?php } ?>
                            <small class="text-danger">{{ $errors->first('foto') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Layanan <code>*</code></label>
                            <select class="form-control" name="layanan" id="layanan" required>
                                <option value="">-- Pilih Layanan --</option>
                                <option value="1" {{ $data->layanan == 1 ? 'selected' : '' }}> All IN DALAM KOTA</option>
                                <option value="2" {{ $data->layanan == 2 ? 'selected' : '' }}> DILUAR OPERASIONAL DALKOT</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Harga 12 Jam</label>
                            <input type="number" class="form-control" name="harga_12" value="{{ $data->harga_12 }}"
                                placeholder="Harga" />
                            <small class="text-danger">{{ $errors->first('harga_12') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Harga 12 Jam All In</label>
                            <input type="number" class="form-control" name="harga_12_all" value="{{ $data->harga_12_all }}" required
                                placeholder="Harga" />
                            <small class="text-danger">{{ $errors->first('harga_12_all') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Harga Full</label>
                            <input type="number" class="form-control" name="harga_full" value="{{ $data->harga_full }}" required
                                placeholder="Harga" />
                            <small class="text-danger">{{ $errors->first('harga_full') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Harga Full All</label>
                            <input type="number" class="form-control" name="harga_full_all" value="{{ $data->harga_full_all }}" required
                                placeholder="Harga" />
                            <small class="text-danger">{{ $errors->first('harga_full_all') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Tagline 1</label>
                            <input type="text" class="form-control" name="tagline1" value="{{ $data->tagline1 }}" required
                                placeholder="Harga" />
                            <small class="text-danger">{{ $errors->first('tagline1') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Tagline 2</label>
                            <input type="text" class="form-control" name="tagline2" value="{{ $data->tagline2 }}" required
                                placeholder="Harga" />
                            <small class="text-danger">{{ $errors->first('tagline2') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea id="elm1" name="deskripsi">{{ $data->deskripsi }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" name="status" value="aktif"
                                    {{ $data->aktif == 1 ? 'checked' : '' }} id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Aktif</label>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Submit
                            </button>
                            <a href="{{ route('armada.index') }}" type="reset"
                                class="btn btn-secondary waves-effect m-l-5">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Foto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="{{ URL::asset('files/armada/' . $data->image) }}" width="100%" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
