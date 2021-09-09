@extends('template.welcome')

@section('content')



<div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
        <li><img src="{{ $video->img }}" alt=""></li>
      <li class="list-group-item">{{ $video->titre }}</li>
      <li class="list-group-item">{{ $video->description }}</li>
      <li class="list-group-item">{{ $video->url }}</li>
      <li class="list-group-item">{{ $video->duration }}</li>
    </ul>
  </div>
  </form>
    
@endsection