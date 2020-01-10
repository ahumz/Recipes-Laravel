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
                        <div class="form-group">
                            <label for="warnaheader">Warna Header</label>
                            <input type="text" class="form-control @error('warnaheader') is-invalid @enderror"  id="warnaheader" name="warnaheader" value="{{ old('warnaheader') }}"/>
                        </div>
                        <div class="form-group">
                            <label for="highlight">Highlight</label>
                            <input type="text" class="form-control @error('highlight') is-invalid @enderror"  id="highlight" name="highlight" value="{{ old('highlight') }}"/>
                        </div>
                        <div class="form-group">
                            <label for="gambarhover">Gambar Hover</label>
                            <input type="file" id="gambarhover" name="gambarhover">
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