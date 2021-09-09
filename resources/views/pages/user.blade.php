@extends('template.welcome')


@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Description</th>
      <th scope="col">Duration</th>
      <th scope="col">Image</th>
      <th scope="col">Button</th>
    </tr>
  </thead>
  <tbody>


      @foreach ($data as $value)
          
     
    <tr>
      <th scope="row">{{ $value->id }}</th>
      <td>{{ $value->titre }}</td>
      <td>{{ $value->description }}</td>
      <td>{{ $value->duration }}</td>
      <td>{{ $value->image }}</td>
      <td class="d-flex">
          <a href="{{ route('videos.show', $value->id) }}" class=" btn btn-info">SHOW</a>
          <a href="{{ route('videos.edit', $value->id) }}" class=" m-2 btn btn-success">EDIT</a>
          <form action="{{ route('videos.destroy', $value->id) }}" method="Post">
              @csrf
              @method('DELETE')
              <button type="submit" class=" btn btn-danger">DELETE</button>
          </form>
      </td>
    </tr>
        @endforeach

        <a href="{{ route('videos.create') }}" class="btn btn-secondary">Creer une video</a>

  </tbody>
</table>







@endsection