<div class="col-lg-3 mb-4">

    <div class="card h-100">

        <div class="card-header d-flex flex-column">

            <a href="{{ route('posts.show', ['id' => $post->id]) }}"><h5>{{ $post->name }}</h5></a>
            <small class="text-muted"> {{ $post->created_at }} </small>

        </div>

        <div class="card-body">

            {{ $post->content }}

        </div>

    </div>

</div>