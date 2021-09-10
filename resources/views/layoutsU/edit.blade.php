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
<form  action="{{ route('users.store') }}" method="post">
  @csrf
<div class="mb-3">
  <label  class="form-label">nom</label>
  <input type="text" class="form-control"  placeholder="nom" name="nom" value="{{ $user->nom }}" >
</div>
<div class="mb-3">
  <label  class="form-label">prenom</label>
  <input type="text" class="form-control"  name="prenom" placeholder="prenom" value="{{ $user->prenom }}">
</div>
<div class="mb-3">
  <label  class="form-label">age</label>
  <input type="text" class="form-control" name="age" placeholder="age" value="{{ $user->age }}">
</div>
<div class="mb-3">
  <label  class="form-label">naissance</label>
  <input type="text" class="form-control" name="naissance"  placeholder="naissance" value="{{ $user->naissance }}">
</div>

<div class="mb-3">
  <label  class="form-label">email</label>
  <input type="text" class="form-control" name="email"  placeholder="email" value="{{ $user->email }}">
</div>

<div class="mb-3">
  <label  class="form-label">password</label>
  <input type="text" class="form-control" name="password"  placeholder="password" value="{{ $user->password }}">
</div>

<div class="mb-3">
  <label  class="form-label">photo</label>
  <input type="text" class="form-control" name="photo"  placeholder="photo" value="{{ $user->photo }}">
</div>

div class="mb-3">
  <select class="form-select" aria-label="Default select example" name="role_id">

    @foreach ($data as $value)
        <option value="{{$value->id}} ">{{$value->nom}} </option>
    @endforeach
    
  </select>


</div>




<button type="submit" >Create</button>
</form>
    
@endsection