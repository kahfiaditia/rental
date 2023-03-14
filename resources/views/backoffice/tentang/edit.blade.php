@extends('backoffice.layouts.main')
@section('container')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">{{ $menu }}</h4>
                    <form class="" action="{{ route('tentang.update', Crypt::encryptString($data->id)) }}"
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Nama Website</label>
                            <input type="text" class="form-control" name="nama" value="{{ $data->nama }}" required
                                placeholder="Contoh Avanza" />
                            <small class="text-danger">{{ $errors->first('nama') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Logo 120 x 26</label>
                            <input type="file" class="form-control" name="foto" value="{{ old('foto') }}"
                                placeholder="Foto" />
                            <input type="hidden" name="file_old" value="{{ $data->foto }}">
                            <?php if($data->foto){ ?>
                            <img src="{{ asset('files/logo/' . $data->foto) }}" alt="" width="100px;"
                                class="rounded avatar-md">
                            <?php } ?>
                            <small class="text-danger">{{ $errors->first('foto') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Email 1<code>*</code></label>
                            <input type="email" class="form-control" name="email1" value="{{ $data->email1 }}"
                                placeholder="contoh dd@gmail.com" />
                            <small class="text-danger">{{ $errors->first('email1') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Email 2</label>
                            <input type="email" class="form-control" name="email2" value="{{ $data->email2 }}"
                                placeholder="contoh dd@gmail.com" />
                            <small class="text-danger">{{ $errors->first('email2') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Telp 1<code>*</code></label>
                            <input type="number" class="form-control" name="telp1" value="{{ $data->telp1 }}"
                                placeholder="contoh 62896556666" required/>
                            <small class="text-danger">{{ $errors->first('telp1') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Telp 2<code>*</code></label>
                            <input type="number" class="form-control" name="telp2" value="{{ $data->telp2 }}"
                                placeholder="contoh 62896556666"/>
                            <small class="text-danger">{{ $errors->first('telp2') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{ $data->alamat }}" required
                                placeholder="Contoh Jalan Laksamana" />
                            <small class="text-danger">{{ $errors->first('alamat') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <input type="text" class="form-control" name="kecamatan" value="{{ $data->kecamatan }}" required
                                placeholder="Harga" />
                            <small class="text-danger">{{ $errors->first('kecamatan') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <input type="text" class="form-control" name="Provinsi" value="{{ $data->Provinsi }}" required
                                placeholder="Harga" />
                            <small class="text-danger">{{ $errors->first('Provinsi') }}</small>
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Submit
                            </button>
                            <a href="{{ route('tentang.index') }}" type="reset"
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
                        <img src="{{ URL::asset('files/logo/' . $data->image) }}" width="100%" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
