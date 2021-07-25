@foreach($posts as $post)

    <h2><a href="{{ route('posts.show', ['office_slug' => $post->office->slug, 'post_slug' => $post->slug]) }}">{{ $post->name }}</a></h2>
    <p>
        <small>
            Le: <a href="{{ route('posts.office', ['office_slug' => $post->office->slug]) }}">{{ $post->office->name }}</a>
            vous propose l'article intitulé <i>"{{$post->name}}"</i> rédigé par: <a href="{{ route('posts.user', ['id' => $post->user->id]) }}">{{ $post->user->name }}</a>
            ajouté le {{ $post->created_at->format('d M Y') }}
        </small>
    </p>
    <p>
        {{ $post->getExcerpt() }}
    </p>
    <p class="text-right">
        <a href="{{ route('posts.show', ['office_slug' => $post->office->slug, 'post_slug' => $post->slug]) }}" class="btn btn-primary">Read more...</a>
    </p>
@endforeach

