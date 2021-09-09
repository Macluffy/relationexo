@extends('template.welcome')


@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">dateDePublication</th>
      <th scope="col">contenu</th>
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
      <td>{{ $value->dateDePublication }}</td>
      <td>{{ $value->contenu }}</td>
      <td>{{ $value->video_id }}</td>
      <td class="d-flex">
          <a href="{{ route('commentaires.show', $value->id) }}" class=" btn btn-info">SHOW</a>
          <a href="{{ route('commentaires.edit', $value->id) }}" class=" m-2 btn btn-success">EDIT</a>
          <form action="{{ route('commentaires.destroy', $value->id) }}" method="Post">
              @csrf
              @method('DELETE')
              <button type="submit" class=" btn btn-danger">DELETE</button>
          </form>
      </td>
    </tr>
        @endforeach

        <a href="{{ route('commentaires.create') }}" class="btn btn-secondary">Creer une video</a>

  </tbody>
</table>







@endsection