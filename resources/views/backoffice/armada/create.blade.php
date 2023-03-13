@extends('backoffice.layouts.main')
@section('container')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">
                        {{-- {{ $menu }} --}}
                    </h4>
                    <form class="" action="{{ route('armada.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nama Armada <code>*</code></label>
                            <input type="text" class="form-control" name="merk" value="{{ old('merk') }}" required
                                placeholder=" Contoh Avanza" required/>
                            <small class="text-danger">{{ $errors->first('merk') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Jenis Armada <code>*</code></label>
                            <select class="form-control" name="model" id="model" required>
                                <option value="">-- Pilih Model --</option>
                                <option value="1"> Matic</option>
                                <option value="2"> Manual</option>
                                <option value="3"> Manual dan Matic</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Gambar Armda (700px * 500px) <code>*</code></label>
                            <input type="file" class="form-control" name="foto" value="{{ old('foto') }}"
                                placeholder="Gambar" required/>
                            <small class="text-danger">{{ $errors->first('foto') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Layanan</label>
                            <select class="form-control" name="layanan" id="layanan">
                                <option value="">-- Pilih Layanan --</option>
                                <option value="1"> All IN DALAM KOTA</option>
                                <option value="2"> DILUAR OPERASIONAL DALKOT</option>
                            </select>
                            <small class="text-danger">{{ $errors->first('layanan') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Harga 12 Jam </label>
                            <input type="number" class="form-control" name="harga_12" value="{{ old('harga_12') }}"
                                placeholder="contoh 500000" />
                            <small class="text-danger">{{ $errors->first('harga_12') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Harga 12 Jam All In<code>*</code></label>
                            <input type="number" class="form-control" name="harga_12_all" value="{{ old('harga_12_all') }}" 
                                placeholder="contoh 500000" />
                            <small class="text-danger">{{ $errors->first('harga_12_all') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Harga Full <code>*</code></label>
                            <input type="number" class="form-control" name="harga_full" value="{{ old('harga_full') }}" 
                                placeholder="contoh 500000" />
                            <small class="text-danger">{{ $errors->first('harga_full') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Harga Full All In <code>*</code></label>
                            <input type="number" class="form-control" name="harga_full_all" value="{{ old('harga_full_all') }}" required
                                placeholder="contoh 500000" />
                            <small class="text-danger">{{ $errors->first('harga_full_all') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Tagline 1</label>
                            <input type="text" class="form-control" name="tagline1" value="{{ old('tagline1') }}" 
                                placeholder="contoh Bersih" />
                            <small class="text-danger">{{ $errors->first('tagline1') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Tagline 2</label>
                            <input type="text" class="form-control" name="tagline2" value="{{ old('tagline2') }}" 
                                placeholder="contoh Nyaman" />
                            <small class="text-danger">{{ $errors->first('tagline2') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Fitur 1</label>
                            <input type="text" class="form-control" name="fitur1" value="{{ old('fitur1') }}" 
                                placeholder="Toll" />
                            <small class="text-danger">{{ $errors->first('fitur1') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Fitur 2</label>
                            <input type="text" class="form-control" name="fitur2" value="{{ old('fitur2') }}" 
                                placeholder="Driver" />
                            <small class="text-danger">{{ $errors->first('fitur2') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea id="elm1" name="deskripsi"></textarea>
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
@endsection
