<div class="col-lg-3 mb-4">

    <div class="card h-100">

        <div class="card-header d-flex flex-column">

            <a href="{{ route('posts.show', ['id' => $post->id]) }}"><h5>{{ $post->name }}</h5></a>
            <small class="text-muted"> {{ $post->created_at }} </small>


            @if ($post->Trashed())
            <small class="text-danger mt-3">

                Ištrintas {{ $post->deleted_at }}

                <form action="{{ route('posts.restore') }}" method="POST">
                    @csrf

                    <input type="hidden" name="id" value="{{ $post->id }}">

                    <button class="btn btn-sm btn-success" type="submit">Atkurti</button>
                </form>

            </small>
            @endif

        </div>

        <div class="card-body">

            {{ $post->content }}

        </div>

        <div class="card-footer">

            <p>Kategorijos

                @foreach ($post->categories as $category)
                    <span class="badge badge-info badge-pill mr-1">{{ $category->name }}</span>
                @endforeach

            </p>

        Comments {{ $post->comments_count }}

        </div>

    </div>

</div>