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


<a href="/adduser" class="btn btn-primary m-3">
    <i class="fa fa-plus nav-icon"></i>
</a>


<div class="card m-3" style="border-top: 2px solid">

    <div class="card-header ">
        <h4>Order</h4>
        <div class="card-tools mr-1">
            <form action="/users/cari" method="GET">
                @csrf
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="cari" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                        <button type="submit" value="cari" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <div class="card-body ">
        <table class="table table-striped table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">User</th>
                    <th class="text-center">Produk</th>
                    <th class="text-center">Keterangan</th>
                    <th class="text-center">Status Pembayaran</th>
                    <th class="text-center" width="8%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users ?? '' as $s)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$s->id_user}}</td>
                    <td>{{$s->id_produk}}</td>
                    <td>{{$s->keterangan}}</td>
                    <td>{{$s->status_pembayaran}}</td>
                    <td>
                        <div class="btn-group">

                            <a href="/admin/konfirmasi/{{$s->id}}" class="btn btn-primary  btn-sm" data-toggle="tootip" data-placement="bottom" title="Edit">
                                konfirmasi
                            </a>

                            <!-- <a onClick="return confirm('Yakin ingin menghapus data?')" href="/user/{{$s->id}}/delete" class="btn btn btn-danger btn-sm">
                                <i class="fa fa-trash nav-icon"></i>
                            </a> -->

                        </div>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            {{$users->links()}}
        </ul>
    </div>
</div>

@endsection