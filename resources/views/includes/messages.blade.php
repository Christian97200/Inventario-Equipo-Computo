@if (count($errors))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Error</strong> Revisa los siguientes datos:
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
