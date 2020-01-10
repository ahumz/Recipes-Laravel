@extends('layouts.master')

@section('content')
<form 
    action="{{route('resep.store')}}"
    method="post"
    enctype="multipart/form-data"
>
@csrf
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-9">
                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <input type="file" id="logo" name="logo">
                        </div>
                        <button type="submit" class="btn btn-primary" value="Hapus"><i class="fa fa-save"></i>Submit</button>
				</div>
				<div class="col-md-2">
				</div>
			</div>
		</div>
	</div>
</div>
  
</form>
@endsection