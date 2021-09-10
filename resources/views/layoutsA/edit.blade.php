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
<form enctype="multipart/form-data" action="{{ route('articles.store') }}" method="post">
  @csrf
<div class="mb-3">
  <label  class="form-label">Nom</label>
  <input type="text" class="form-control"  placeholder="nom" name="nom" value="{{$article->nom}}" >
</div>
<div class="mb-3">
  <label  class="form-label">Description</label>
  <input type="text" class="form-control"  name="description" placeholder="description" value="{{$article->description}}">
</div>
<div class="mb-3">
  <label  class="form-label">Date</label>
  <input type="text" class="form-control" name="date" placeholder="date" value="{{$article->date}}">
</div>
<div class="mb-3">
  <select class="form-select" aria-label="Default select example" name="user_id">

    @foreach ($data as $value)
        <option value="{{$value->id}} ">{{$value->prenom}} </option>
    @endforeach
    
  </select>


</div>


  
<button type="submit" >Create</button>
  </form>
    
@endsection