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
  <label  class="form-label">contenu</label>
  <input type="text" class="form-control" name="contenu"  placeholder="contenu" value="{{$commentaire->contenu}}">
</div>

<div class="mb-3">
  <select class="form-select" aria-label="Default select example" name="article_id">

    @foreach ($data as $value)
        <option value="{{$value->id}} ">{{$value->nom}} </option>
    @endforeach
    
  </select>


</div>

  
<button type="submit" >Create</button>
  </form>
    
@endsection