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
<<<<<<< HEAD
  <div class="divform">
<<<<<<< HEAD
      <p>Expérience : {{ Auth::user()->experience }}</p>
=======
=======
>>>>>>> ac07775242bfdba09afb428b4a59bfc419834c3a

  <div class="divform">
    <form method ="POST" action="">  @csrf
      <h2 class="formtitre">PROFIL</h2>
      <label for="pseudo">Votre Pseudo : {{ Auth::user()->nickname }}</label>
      {{-- <input type="text" name="pseudo" /> --}}
      <input type="submit" name="submit" class="submit" value="Modifier" />

      <label for="pseudo">Votre Nom : {{ Auth::user()->name  }}</label>
      {{-- <input type="text" name="nom" /> --}}
      <input type="submit" name="submit" class="submit" value="Modifier" />

<<<<<<< HEAD
>>>>>>> a6dd3722b6a9f3ea3a4a7fa9c17ee4b327564569
    <form method="POST"> @csrf

      <h2 class="formtitre">PROFIL</h2>
      <label for="pseudo">Pseudo : {{ Auth::user()->nickname }}</label>
      <input type="text" name="pseudo" required/>
      <label for="pseudo">Nom : {{ Auth::user()->name }}</label>
      <input type="text" name="nom"/>
      <label for="pseudo">Prenom : {{ Auth::user()->firstname }}</label>
      <input type="text" name="prenom"/>
      <label for="pseudo">Ville : {{ Auth::user()->city }}</label>

      <input type="text" name="ville"/>
      <input type="submit" name="submit" class="submit" value="Valider" />

    </form>
=======

      <label for="pseudo"> Votre Prénom : {{ Auth::user()->firstname }}</label>
      {{-- <input type="text" name="prenom" /> --}}
      <input type="submit" name="submit" class="submit" value="Modifier" />
>>>>>>> ac07775242bfdba09afb428b4a59bfc419834c3a

      <label for="pseudo">Votre ville : {{ Auth::user()->city }}</label>
      {{-- <input type="text" name="ville"/> --}}
      <input type="submit" name="submit" class="submit" value="Modifier" />


</form>
</div>
</main>
@endsection
