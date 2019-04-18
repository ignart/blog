 <form action="{{ route('comments.store') }}" method="POST">

     @csrf

     <input type="hidden" name="post" value="{{ $post->id }}">

     @input(['label' => 'Name', 'name' => 'author', 'value' => ''])

     @input(['label' => 'Email', 'name' => 'email', 'value' => ''])

     @textarea(['label' => 'Comment', 'name' => 'content', 'value' => ''])

     @include('components.form.submit')


 </form>