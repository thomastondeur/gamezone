@extends('layouts.app')

@section('title', 'Compte')

@push('styles')
  <link rel="stylesheet" href="{{ url ('css/compte.css')}}">
@endpush

@section('content')
@include('layouts.nav')
<main>
  <div class="zonebleu">
    <h1>MON AVATAR</h1>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        <li><input type="submit" value="Déconnexion"></li>
        </form>
    <div class="rondavatar">
      <div class="rond">

        <a href="#"><img class="imgavatar" src="{{ url('img/avatar_snake.png') }}" /></a>
      </div>
      <div class="rond active">
        <a href="#"><img class="imgavatar" src="{{ url('img/avatar-aigle.png') }}" /></a>
      </div>
      <div class="rond">
        <a href="#"><img class="imgavatar" src="{{ url('img/avatar-loup.png') }}" /></a>
      </div>
      <div class="rond">
        <a href="#"><img class="imgavatar" src="{{ url('img/avatar-skull.png') }}" /></a>
      </div>
    </div>
  </div>
  <div class="divform">
<<<<<<< HEAD
    <form method ="POST">  @csrf
      <h2 class="formtitre">PROFIL</h2>
      <label for="pseudo">Votre Pseudo : {{ Auth::user()->nickname }}</label>
      <input type="text" name="pseudo" required/>
      <label for="pseudo">Votre Nom : {{ Auth::user()->name  }}</label>
      <input type="text" name="nom"/>
      <label for="pseudo"> Votre Prénom : {{ Auth::user()->firstname }}</label>
      <input type="text" name="prenom"/>
      <label for="pseudo">Votre ville : {{ Auth::user()->city }}</label>
=======
    <form method="POST"> @csrf
      <h2 class="formtitre">PROFIL</h2>
      <label for="pseudo">Pseudo : {{ Auth::user()->nickname }}</label>
      <input type="text" name="pseudo" required/>
      <label for="pseudo">Nom : {{ Auth::user()->name }}</label>
      <input type="text" name="nom"/>
      <label for="pseudo">Prenom : {{ Auth::user()->firstname }}</label>
      <input type="text" name="prenom"/>
      <label for="pseudo">Ville : {{ Auth::user()->city }}</label>
>>>>>>> 164fdd189804d246230d8900172f1fe8eaf14701
      <input type="text" name="ville"/>
      <input type="submit" name="submit" class="submit" value="Valider" />
    </form>

    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
    <li><input type="submit" value="Déconnexion"></li>

    </form>
  </div>
</main>
@endsection
