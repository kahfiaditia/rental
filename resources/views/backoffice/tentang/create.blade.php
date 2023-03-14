@extends('backoffice.layouts.main')
@section('container')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">
                        {{-- {{ $menu }} --}}
                    </h4>
                    <form class="" action="{{ route('tentang.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nama Website <code>*</code></label>
                            <input type="text" class="form-control" name="nama" value="{{ old('nama') }}" required
                                placeholder=" Contoh : Rent A Car" required/>
                            <small class="text-danger">{{ $errors->first('nama') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Logo 120 x 26<code>*</code></label>
                            <input type="file" class="form-control" name="foto" value="{{ old('foto') }}"
                                placeholder="Gambar" required/>
                            <small class="text-danger">{{ $errors->first('foto') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Email 1<code>*</code></label>
                            <input type="email" class="form-control" name="email1" value="{{ old('email1') }}"
                                placeholder="contoh dd@gmail.com" required/>
                            <small class="text-danger">{{ $errors->first('email1') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Email 2</label>
                            <input type="email" class="form-control" name="email2" value="{{ old('email2') }}" 
                                placeholder="contoh dd@gmail.com" />
                            <small class="text-danger">{{ $errors->first('email2') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Telp 1<code>*</code></label>
                            <input type="number" class="form-control" name="telp1" value="{{ old('telp1') }}" 
                                placeholder="contoh 628566777555" required/>
                            <small class="text-danger">{{ $errors->first('telp1') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Telp 2</label>
                            <input type="number" class="form-control" name="telp2" value="{{ old('telp2') }}"
                                placeholder="contoh 628566777555" />
                            <small class="text-danger">{{ $errors->first('telp2') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" 
                                placeholder="contoh Jalan" required/>
                            <small class="text-danger">{{ $errors->first('alamat') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <input type="text" class="form-control" name="kecamatan" value="{{ old('kecamatan') }}" 
                                placeholder="contoh Parung Panjang" />
                            <small class="text-danger">{{ $errors->first('kecamatan') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <input type="text" class="form-control" name="Provinsi" value="{{ old('Provinsi') }}" 
                                placeholder="Contoh Sumbawa" />
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
@endsection
