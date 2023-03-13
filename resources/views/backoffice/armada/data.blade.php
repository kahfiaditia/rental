@extends('backoffice.layouts.main')
@section('container')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 text-muted mb-4 font-13">
                            <div class="header-title">
                                <h4 class="page-title mb-2">
                                    {{-- {{ $menu }} --}}
                                </h4>
                                <div class="float-right align-item-center mt-2">
                                    <a href="{{ route('armada.create') }}"
                                        class="btn btn-info px-4 align-self-center report-btn">Tambah Armada</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Armada</th>
                                <th>Harga 12 Jam</th>
                                <th>Harga 12 All</th>
                                <th>Harga Full</th>
                                <th>Harga Full All IN</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- {{ dd($armada) }} --}}
                            @foreach ($armada as $list)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        @if ($list->image != null)
                                            <img src="{{ URL::asset('files/armada/' . $list->image) }}" width="45x"
                                                alt="profile-armada" class="rounded-circle" />
                                        @endif
                                    </td>
                                    <td class="text-center">
                                       {{ $list->merk }}
                                    </td>
                                    <td class="text-center">
                                        {{ "Rp " . number_format($list->harga_12,2,',','.') }}
                                     </td>
                                     <td class="text-center">
                                        {{ "Rp " . number_format($list->harga_12_all,2,',','.') }}
                                     </td>
                                     <td class="text-center">
                                        {{ "Rp " . number_format($list->harga_full,2,',','.') }}
                                     </td>
                                     <td class="text-center">
                                        {{ "Rp " . number_format($list->harga_full_all,2,',','.') }}
                                     </td>
                                                                        
                                    <td>{{ $list->aktif == 1 ? 'Aktif' : 'Tidak Aktif' }}</td>
                                    <td>
                                        <?php $id = Crypt::encryptString($list->id); ?>
                                        <form class="delete-form" action="{{ route('armada.destroy', $id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('armada.edit', $id) }}" class="btn btn-warning btn-sm"
                                                    data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="mdi mdi-pencil"></i>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-sm delete_confirm"
                                                    data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <i class="mdi mdi-trash-can"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
