@extends('home')

@section('content')

<div class="row m-3">
	<div class="col-md-12">
		<form action="/updateproduk/{{$produk->id}}" method="POST" enctype="multipart/form-data">

			@csrf

			<div class="card" style="border-top: 3px solid">
				<div class="card-header">
					<h3 class="card-title">Tambah Produk</h3>
				</div>

				<div class="card-body">

					@if($errors->any())
					<div class="alert alert-danger">
						{{implode('', $errors->all(':message'))}}
					</div>
					@endif

					<div class="form-group">
						<label>Nama Produk</label>
						<input type="text" name="nama_produk" value="{{$produk->nama_produk}}" placeholder="" class="form-control" required autofocus>
					</div>

					<div class="form-group">
						<label>Title</label>
						<input type="text" name="title" value= "{{$produk->title}}" placeholder="" class="form-control">
					</div>

                    <div class="form-group">
						<label>Diskripsi</label>
						<input type="text" name="diskripsi" value= "{{$produk->diskripsi}}" placeholder="" class="form-control">
					</div>

                    <div class="form-group">
						<label>Type</label>
						{{ Form::select('type', $type, $produk->type, ['placeholder' => 'Pilih Type..', 'required', 'class' => 'form-control']) }}
					</div>

                    <div class="form-group">
                        <label>Gambar</label>

                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="file">
                                <label class="custom-file-label" for="exampleInputFile">{{$produk->gambar ?? 'Pilih Gambar'}}</label>
                            </div>
                          
                        </div>

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