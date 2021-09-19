@extends('layouts.base')
@section('content')
    <section class="row wrap full-screen" id="register-image">

        <div class="xLarge-12 large-12 medium-12 small-12 xSmall-12" >

            {!! $errors->first('error', '<div class="alert alert-warning center" role="alert">:message</div>')!!}

            <div class="margin-arround center">
                @if(isset($success))
                    <div class="alert alert-success">
                        {{$success}}
                    </div>
                @endif

            </div>
        </div>

        <div class="xLarge-12 large-12 medium-12 small-12 xSmall-12">
            <div class="margin-arround center">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Numéro d'article</th>
                        <th scope="col">Name</th>
                        <th scope="col">Dâte d'écriture</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <th>{{$post->name}}</th>
                            <th>{{$post->updated_at}}</th>
                            <th>
                                <button type="button" class="btn btn-primary">
                                    <a target="_blank"  href="/admin/{{$post->id}}/validate">Valider</a>
                                </button>
                                <button type="button" class="btn btn-primary">
                                    <a target="_blank"  href="/admin/{{$post->id}}/edit">Modifier</a>
                                </button>
                                <button type="button" class="btn btn-danger">
                                    <a target="_blank"  href="/admin/{{$post->id}}/delete">Supprimer</a>
                                </button>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
@endsection
