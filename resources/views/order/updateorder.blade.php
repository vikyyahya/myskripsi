@extends('home')

@section('content')

<div class="row m-3">
    <div class="col-md-12">
        <form action="/updateprogres/{{$order->id}}" method="POST">

            @csrf

            <div class="card" style="border-top: 3px solid">
                <div class="card-header">
                    <h3 class="card-title">Order</h3>
                </div>

                <div class="card-body">

                    @if($errors->any())
                    <div class="alert alert-danger">
                        {{implode('', $errors->all(':message'))}}
                    </div>
                    @endif

                    <div class="form-group">
                        <label>Progres</label>
                        <input type="text" name="progress" value="{{$order->progress}}" placeholder="" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label>Nama Bank</label>
                        <input type="text" name="nama_bank" value="{{$order->nama_bank}}" placeholder="" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label>No Rekening</label>
                        <input type="text" name="no_rekening" value="{{$order->no_rekening}}" placeholder="" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" value="{{$order->keterangan}}" placeholder="" class="form-control" required autofocus>
                    </div>




                    <div class="card-footer">

                        <a href="/user" class="btn btn-default">Back</a>
                        &nbsp;&nbsp;
                        <input type="submit" value="Save" class="pull-right btn btn-primary">

                    </div>

                </div>
            </div>
        </form>

    </div>
</div>



@endsection