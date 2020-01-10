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
                            <label for="name">Judul</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"  placeholder="Name" value="{{ old('name') }}" maxlength="20"/>    
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="8">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Image</label>
                            <input type="file" id="image" name="image">
                        </div>
                        <div class="form-group">
                            <label for="time">Time</label>
                            <input type="text" class="form-control @error('time') is-invalid @enderror"  id="tgl_lahir" name="time" value="{{ old('time') }}"/>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input type="text" class="form-control @error('category') is-invalid @enderror"  id="category" name="category" value="{{ old('category') }}"/>
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating</label>
                            <input type="text" class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating" value="{{ old('rating') }}"/>
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