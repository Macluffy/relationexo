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
<form  action="{{ route('roles.store') }}" method="post">
    @csrf
<div class="mb-3">
    <label  class="form-label">nom</label>
    <input type="text" class="form-control"  placeholder="nom" name="nom" value="{{ old('nom') }}" >
  </div>


  
<button type="submit" >Create</button>
  </form>
    
@endsection