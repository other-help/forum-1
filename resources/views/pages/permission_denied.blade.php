@extends('layouts.app')
@section('title', '无权限访问')

@section('content')
  <div class="col-md-4 offset-md-4">
    <div class="card ">
      <div class="card-body">
        @if (Auth::check())
          <div class="alert alert-danger text-center mb-0">

Le compte de connexion actuel n'a pas de droits d'accès en arrière-plan.
          </div>
        @else
          <div class="alert alert-danger text-center">

Veuillez vous connecter plus tard
          </div>

          <a class="btn btn-lg btn-primary btn-block" href="{{ route('login') }}">
            <i class="fas fa-sign-in-alt"></i>
            Connexion
          </a>
        @endif
      </div>
    </div>
  </div>
@stop
