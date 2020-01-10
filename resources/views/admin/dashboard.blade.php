@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Dashboard
        <small>it all starts here</small>
      </h1>
      
    </section>

    

    <!-- Main content -->
    <section class="content">

    <a href="{{route('resep.create')}}" class="btn btn-info" > <i class="fa fa-plus"></i>Tambah Data</a>
    <!-- <button type="button" class="btn btn-info">Tambah Data</button> -->

    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($admin as $item)
  <tr>
    <td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
    <td class="text-center">
      @if($item->image != null)
        <img src="{{asset('storage/'.$item->image)}}" width="50" height="50">
        @else 
        <p class="text-center">NO PHOTO</p>
        @endif
    </td>
    <td class="text-center">{{$item->name}}</td>
    <td class="text-center">{{$item->description}}</td>
    <td class="text-center">{{$item->category}}</td>
    <td>
      <a href="{{route('resep.edit',['id'=>$item->id])}}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
      <form action="{{route('resep.delete',['id'=>$item->id])}}" method="post">
          @csrf
          <input type="hidden" name="_method" value="delete">
          <button type="submit" class="btn btn-danger btn-sm" value="Hapus"><i class="fa fa-trash"></i></button>
      </form>
  </td>

  </tr>
  @endforeach
  </tbody>
</table>

    </section>
    <!-- /.content -->

@endsection