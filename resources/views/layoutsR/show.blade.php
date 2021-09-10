@extends('template.welcome')

@section('content')



<div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ $role->nom }}</li>
      
    </ul>
  </div>
  </form>
    
@endsection