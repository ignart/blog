<link href="{{ asset('css/app.css') }}" rel="stylesheet">


<h1>Profile</h1>

<ul>
    <li>{{ $name }}</li>
    <li>{{ $email }}</li>
    <li>{{ $phone }}</li>
</ul>

<br>


<h1>About</h1>

<ul>
    @forelse($interests as $interest)

        <li>{{ $interest }}</li>

        @empty

        <p>hello</p>

    @endforelse
</ul>