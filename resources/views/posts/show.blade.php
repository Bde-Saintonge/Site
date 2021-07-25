<h1>{{ $post->name }}</h1>
<p>
    <small>
        Le: <a href="{{ route('posts.office', ['office_slug' => $post->office->slug]) }}">{{ $post->office->name }}</a>
        vous propose l'article intitulé <i>"{{$post->name}}"</i> rédigé par: <a href="{{ route('posts.user', ['id' => $post->user->id]) }}">{{ $post->user->name }}</a>
        ajouté le {{ $post->created_at->format('d M Y') }}
    </small>
</p>

{!! $post->html !!}

<p>&nbsp;</p>




