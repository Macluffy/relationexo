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
<form enctype="multipart/form-data" action="{{ route('videos.store') }}" method="post">
    @csrf
<div class="mb-3">
    <label  class="form-label">Url</label>
    <input type="text" class="form-control"  placeholder="url" name="url" value="{{$video->url }}" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Image</label>
    <input type="file" class="form-control"  name="img" placeholder="image" value="{{$video->img }}" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Duration</label>
    <input type="text" class="form-control" name="duration" placeholder="duration"  value="{{$video->duration }}" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Titre</label>
    <input type="text" class="form-control" name="titre"  placeholder="Titre" value="{{$video->titre }}" >
  </div>

  <div class="mb-3">
    <label  class="form-label">Description</label>
    <textarea class="form-control" rows="3" name="description"  value="{{$video->description }}" ></textarea>
  </div>

  
<button type="submit" >Create</button>
  </form>
    
@endsection