@extends('home')

@section('content')

{{-- Notifikasi form validasi --}}
@if ($errors->has('file'))
<span class="invalid-feedback" role="alert">
    <strong>{{$errors->first('file')}}</strong>
</span>
@endif

{{-- notifikasi sukses --}}
@if ($sukses = Session::get('sukses'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <i class="icon fas fa-check"></i> {{ $sukses }}
</div>
@endif

{{-- <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#importExcel">
    <i class="fas fa-file-excel"></i> Import Excel
</button> --}}

<br/>

<a href="/addproduk" class="btn btn-primary ml-3">
    <i class="fa fa-plus nav-icon"> Tambah Produk</i>
</a>

<br/>
<br/>

<div class="card m-3" style="border-top: 2px solid">

    <div class="card-header ">
        <h4>User</h4>
    </div>

    <div class="card-body">
        <table class="table table-striped table-responsive table table-bordered" id="myTable">
            <thead >
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Produk</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Diskripsi</th>
                    <th class="text-center">Type</th>
                    <th class="text-center">Gambar</th>
                    <th class="text-center" width="8%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produk ?? '' as $s)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$s->nama_produk}}</td>
                    <td>{{$s->title}}</td>                 
                    <td>{{$s->diskripsi}}</td>                 
                    <td>{{$s->type}}</td>                 
                    <td>
                    <img style="width:50px;height:50px;" class="img-fluid" src="{{ URL::to('/') }}/uploads/{{$s->gambar}}">

                    </img>
                    </td>                 
                    <td>
                        <div class="btn-group">

                            <!-- URL::to('/admin/category/detail.id='.$cate-id -->
                            <!-- <a href="#" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom"
                                title="Info">
                                <i class="fa fa-info-circle nav-icon"></i>
                            </a> -->

                            <a href="/ubahproduk/{{$s->id}}" class="btn btn-warning  btn-sm" data-toggle="tootip"
                                data-placement="bottom" title="Edit">
                                <i class="fa fa-edit nav-icon"></i>
                            </a>

                            <a onClick="return confirm('Yakin ingin menghapus data?')" href="/hapusproduk/{{$s->id}}"
                                class="btn btn btn-danger btn-sm">
                                <i class="fa fa-trash nav-icon"></i>
                            </a>

                        </div>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection