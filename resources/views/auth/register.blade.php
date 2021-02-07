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
                        {!! $errors->first('classe', '<div class="alert alert-warning" role="alert">:message</div>')!!}
                        <label for="class">Votre classe:</label>
                        <select  class="form-control" name="class" id="class">
                            <option name="seconde_gt_a">Seconde GT A</option>
                            <option name="seconde_gt_b">Seconde GT B</option>
                            <option name="seconde_pro_tisec">Seconde PRO TISEC</option>
                            <option name="seconde_pro_melec">Seconde PRO MELEC</option>
                            <option name="seconde_pro_tbee">Seconde PRO TBEE</option>
                            <option name="seconde_pro_mbc">Seconde PRO MBC</option>
                            <option name="premiere_s">Première SSI</option>
                            <option name="premiere_sti_a">Première STI A</option>
                            <option name="premiere_sti_b">Première STI B</option>
                            <option name="premiere_sti_c">Première STI C</option>
                            <option name="premiere_pro_tisec">Premiere PRO TISEC</option>
                            <option name="premiere_pro_melec">Premiere PRO MELEC</option>
                            <option name="premiere_pro_tbee">Premiere PRO TBEE</option>
                            <option name="premiere_pro_mbc">Premiere PRO MBC</option>
                            <option name="premiere_pro_macon">Premiere PRO Maçon</option>
                            <option name="premiere_pro_ifca">Premiere PRO IFCA</option>
                            <option name="terminal_ssi">Terminal SSI</option>
                            <option name="terminal_sti_a">Terminal STI A</option>
                            <option name="terminal_sti_b">Terminal STI B</option>
                            <option name="terminal_sti_c">Terminal STI C</option>
                            <option name="terminale_pro_tisec">Terminale PRO TISEC</option>
                            <option name="terminale_pro_melec">Terminale PRO MELEC</option>
                            <option name="terminale_pro_tbee">Terminale PRO TBEE</option>
                        </select>
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
