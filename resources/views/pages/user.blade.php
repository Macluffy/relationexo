@extends('template.welcome')


@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Age</th>
      <th scope="col">Naissance</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Photo</th>
      <th scope="col">ID</th>
      <th scope="col">Button</th>
    </tr>
  </thead>
  <tbody>


      @foreach ($data as $value)
          
     
    <tr>
      <th scope="row">{{ $value->id }}</th>
      <td>{{ $value->nom }}</td>
      <td>{{ $value->prenom }}</td>
      <td>{{ $value->age }}</td>
      <td>{{ $value->naissance }}</td>
      <td>{{ $value->email }}</td>
      <td>{{ $value->password }}</td>
      <td>{{ $value->photo }}</td>
      <td>{{ $value->role_id }}</td>
      <td class="d-flex">
          <a href="{{ route('users.show', $value->id) }}" class=" btn btn-info">SHOW</a>
          <a href="{{ route('users.edit', $value->id) }}" class=" m-2 btn btn-success">EDIT</a>
          <form action="{{ route('users.destroy', $value->id) }}" method="Post">
              @csrf
              @method('DELETE')
              <button type="submit" class=" btn btn-danger">DELETE</button>
          </form>
      </td>
    </tr>
        @endforeach

        <a href="{{ route('users.create') }}" class="btn btn-secondary">Creer un user</a>

  </tbody>
</table>







@endsection