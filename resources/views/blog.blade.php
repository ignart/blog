<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div class="container pt-5">

    <div class="row">

        <div class="col-lg-4">

            <div class="card">

                <div class="card-header">

                    <h5 class="card-title mb-2">{{ $title }}</h5>
                    <small class="text-muted">{{ $date }}</small>

                </div>

                <div class="card-body">

                    {{ $content }}

                </div>

            </div>

        </div>

    </div>

</div>