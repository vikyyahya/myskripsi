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
        <h4>Pesan</h4>
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
                    <th class="text-center">Nama Pengirim</th>
                    <th class="text-center">Pesan</th>
                    <th class="text-center" width="8%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users ?? '' as $s)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$s->user_id}}</td>
                    <td>{{$s->pesan}}</td>
                    <td>
                        <div class="btn-group">

                            <a href="/edituser/{{$s->id}}" class="btn btn-warning" data-toggle="tootip" data-placement="bottom" title="Edit">
                                lihat
                            </a>
                            <a href="/edituser/{{$s->id}}" class="btn btn-success" data-toggle="tootip" data-placement="bottom" title="Edit">
                                jawab
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