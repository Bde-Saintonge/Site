<!-- Initialisation du contenu HTML   -->
@extends('layouts.base')

@section('content')
    <section class="row wrap full-screen" id="register-image">

        <div class="xLarge-12 large-12 medium-12 small-12 xSmall-12" >

            <div class="margin-arround center">

                <form method="post" action="/register">
                    @csrf
                    <div class="form-group">
                        {!! $errors->first('lastname', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                        <label for="lastname">Votre nom de famille:</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" value="{{ old('lastname') }}">
                    </div>
                    <div class="form-group">
                        {!! $errors->first('name', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                        <label for="name">Votre prénom:</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        {!! $errors->first('email', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                        <label for="email">Votre email:</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email">
                    </div>
                    <div class="form-group">
                        {!! $errors->first('password', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password"  value="{{ old('password') }}"id="password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirmer votre mot de passe:</label>
                        <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" id="password_confirmation">
                    </div>
                    <div class="form-group form-check">
                        {!! $errors->first('agree', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                        <input type="checkbox" class="form-check-input"  name="agree" id="check" checked>
                        <label class="form-check-label" for="check">Accepter les termes et la politique de confidentialité.</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>



                </form>
            </div>

        </div>

    </section>
@endsection

<!-- Fin de l'Initialisation du contenu HTML -->
