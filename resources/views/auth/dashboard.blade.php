@extends('layouts.base')
@section('content')
    <section class="row wrap full-screen" id="register-image">

        <div class="xLarge-12 large-12 medium-12 small-12 xSmall-12" >

            <div class="margin-arround center">
                @if(isset($success))
                    <div class="alert alert-success">
                        {{$success}}
                    </div>
                @endif
            </div>

        </div>

    </section>
@endsection
