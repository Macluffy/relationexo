@extends('template.welcome')

@section('content')



<div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ $user->nom }}</li>
      <li class="list-group-item">{{ $user->prenom }}</li>
      <li class="list-group-item">{{ $user->age }}</li>
      <li class="list-group-item">{{ $user->naissance }}</li>
      <li class="list-group-item">{{ $user->email }}</li>
      <li class="list-group-item">{{ $user->password }}</li>
      <li class="list-group-item">
        <img src="{{asset('img/'. $user->photo)}} " alt="">
      </li>
      <li class="list-group-item">{{ $user->role_id }}</li>
     
    </ul>
  </div>
  </form>
    
@endsection