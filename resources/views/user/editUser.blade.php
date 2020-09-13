@extends('home')

@section('content')

<div class="row m-3">
	<div class="col-md-12">
		<form action="/upadateuser/{{$user->id}}" method="POST">

			@csrf

			<div class="card" style="border-top: 3px solid">
				<div class="card-header">
					<h3 class="card-title">Edit User</h3>
				</div>

				<div class="card-body">

					@if($errors->any())
					<div class="alert alert-danger">
						{{implode('', $errors->all(':message'))}}
					</div>
					@endif

					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="name" value="{{$user->name}}" placeholder="" class="form-control" required autofocus>
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" value="{{$user->email}}" placeholder="" class="form-control">
					</div>

					<div class="form-group">
						<label>No Telepon</label>
						<input type="number" name="tlp" value="{{$user->tlp}}" placeholder="" class="form-control">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
					</div>

					<div class="form-group">
						<label>Konfirmasi Password</label>
						<input type="password" name="syncpassword" placeholder="" class="form-control">
					</div>

					<div class="form-group">
						<label>Level</label>
						{{ Form::select('level', $level, $user->level, ['placeholder' => 'Pilih user level...', 'required', 'class' => 'form-control']) }}
					</div>

					<div class="card-footer">

						<a href="/users" class="btn btn-default">Back</a>
						&nbsp;&nbsp;
						<input type="submit" value="Save" class="pull-right btn btn-primary">

					</div>

				</div>
			</div>
		</form>

	</div>
</div>



@endsection