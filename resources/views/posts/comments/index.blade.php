<div class="row">

    <div class="col-12 mt-5">

        <div class="border-top mb-4"></div>

        <h2 class="mb-4">Comments</h2>

        @include('posts.comments.create', compact('post'))

        <hr class="my-3">

        @forelse ($comments as $comment )

            <div class="card text-white bg-dark mb-3">
                <div class="card-header">
                    <h5>{{ $comment->author }}</h5>
                    <span class="text-muted">{{ $comment->email }}</span>
                </div>
                <div class="card-body">
                    <p class="mb-0">{{ $comment->content }}</p>
                </div>
            </div>

        @empty

            No commnets

        @endforelse

    </div>

</div>