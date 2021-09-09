@extends('template.welcome')

@section('content')

@if ($errors->any())
<div class="alert alert-danger" >
    <ul>
        @foreach ($errors->all() as $error )
            <li>{{ $error }}</li>
        @endforeach
    </ul>

</div>
@endif
<form  action="{{ route('commentaires.store') }}" method="post">
    @csrf
<div class="mb-3">
    <label  class="form-label">nom</label>
    <input type="text" class="form-control"  placeholder="nom" name="nom" value="{{ old('nom') }}" >
  </div>
  <div class="mb-3">
    <label  class="form-label">prenom</label>
    <input type="text" class="form-control"  name="prenom" placeholder="prenom" value="{{ old('prenom') }}">
  </div>
  <div class="mb-3">
    <label  class="form-label">dateDePublication</label>
    <input type="text" class="form-control" name="dateDePublication" placeholder="dateDePublication" value="{{ old('dateDePublication') }}">
  </div>
  <div class="mb-3">
    <label  class="form-label">contenu</label>
    <input type="text" class="form-control" name="contenu"  placeholder="contenu" value="{{ old('contenu') }}">
  </div>

  <div class="mb-3">
    <label  class="form-label">video_id</label>
    <input class="form-control" rows="3" name="video_id" value="{{ old('video_id') }}">
  </div>

  
<button type="submit" >Create</button>
  </form>
    
@endsection