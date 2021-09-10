@extends('template.welcome')

@section('content')



<div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
        
      <li class="list-group-item">{{ $article->nom }}</li>
      <li class="list-group-item">{{ $article->description }}</li>
      <li class="list-group-item">{{ $article->date }}</li>
      <li class="list-group-item">{{ $article->user_id }}</li>
    </ul>
  </div>
  </form>
    
@endsection