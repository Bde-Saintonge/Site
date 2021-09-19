<!-- Initialisation du document HTML   -->
@extends('layouts.base')
@section('content')
    <section class="row wrap full-screen" id="register-image">

        <div class="xLarge-12 large-12 medium-12 small-12 xSmall-12" >

            <div class="margin-arround center">

                <form method="post" action="/login">
                    @csrf
                    <div class="form-group">
                        <h2>Se connecter</h2>
                    </div>
                    <div class="form-group">
                        {!! $errors->first('error', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                        <label for="email">Votre email:</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password"  value="{{ old('password') }}"id="password">
                    </div>
                    <div class="form-group">
                        <a href="/register">Vous n'avez pas de compte ?</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>



                </form>
            </div>

        </div>

    </section>
@endsection
<!-- Fin de l'Initialisation du document HTML -->
