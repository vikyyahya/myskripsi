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
        <h4>Report</h4>
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
                    <th class="text-center">Dokumen</th>
                    <th class="text-center">Progres</th>
                    <th class="text-center">Status Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users ?? '' as $s)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$s->users->name}}</td>
                    <td>{{$s->produks->nama_produk}}</td>
                    <td>{{$s->keterangan}}</td>
                    <td>
                        <img style="width:50px;height:50px;" class="img-fluid" src="{{ URL::to('/') }}/uploads/{{$s->bukti_pembayaran}}">
                        <a href="{{ URL::to('/') }}/uploads/{{$s->bukti_pembayaran}}"> lihat</a>
                    </td>
                    <th class="text-center">{{$s->progress}}</th>

                    @if ($s->status_pembayaran == '1')
                    <td>
                        <p class=" text-success">Terkonfirmasi</p>
                    </td>

                    </td>
                    @else
                    <td>Belum Terkonfirmasi</td>

                    @endif

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