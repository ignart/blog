<div class="col-lg-2 mb-4">

    <div class="card h-100">

        <div class="card-header d-flex flex-column h-100 justify-content-center">

           <a href="{{ route('file.show', ['id' => $file->id]) }}"><h5 class="mb-0">{{ $file->file_name }}</h5></a>


        </div>

        <div class="card-body">

            <span>File size: <span class="text-primary">{{ $file->file_size }}</span></span>

        </div>

    </div>

</div>