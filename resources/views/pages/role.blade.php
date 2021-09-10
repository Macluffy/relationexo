@extends('template.welcome')


@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Button</th>
    </tr>
  </thead>
  <tbody>


      @foreach ($data as $value)

    <tr>
      <th scope="row">{{ $value->id }}</th>
      <td>{{ $value->nom }}</td>
      <td class="d-flex">
          <a href="{{ route('roles.show', $value->id) }}" class=" btn btn-info">SHOW</a>
          <a href="{{ route('roles.edit', $value->id) }}" class=" m-2 btn btn-success">EDIT</a>
          <form action="{{ route('roles.destroy', $value->id) }}" method="Post">
              @csrf
              @method('DELETE')
              <button type="submit" class=" btn btn-danger">DELETE</button>
          </form>
      </td>
    </tr>
        @endforeach

        <a href="{{ route('roles.create') }}" class="btn btn-secondary">Creer un role</a>

  </tbody>
</table>







@endsection