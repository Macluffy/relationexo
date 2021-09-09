@extends('template.welcome')

@section('content')



<div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ $commentaire->nom }}</li>
      <li class="list-group-item">{{ $commentaire->prenom }}</li>
      <li class="list-group-item">{{ $commentaire->dateDePublication }}</li>
      <li class="list-group-item">{{ $commentaire->contenu }}</li>
      <li class="list-group-item">{{ $commentaire->video_id }}</li>
    </ul>
  </div>
  </form>
    
@endsection