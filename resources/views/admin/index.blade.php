@extends('layouts.master')

@section('content')
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
      @if($item->foto != null)
        <img src="{{asset('storage/'.$item->image)}}" width="50" height="50">
        @else 
        <p class="text-center">NO PHOTO</p>
        @endif
    </td>
    <td class="text-center">{{$item->name}}</td>
    <td class="text-center">{{$item->description}}</td>
    <td class="text-center">{{$item->category}}</td>
    <td>
      <a href="{{route('admin.edit',['id'=>$item->id])}}" class="btn btn-sm btn-success">Edit</a>
      <form action="{{route('admin.destroy',['id'=>$item->id])}}" method="post">
          @csrf
          <input type="hidden" name="_method" value="delete">
          <input type="submit" class="btn btn-danger btn-sm" value="Hapus">
      </form>
  </td>

  </tr>
  @endforeach
  </tbody>
</table>
@endsection