@if (session('msg'))

<div class="alert alert-success" role="alert">

    {{ session('msg') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

@elseif (session('registration'))
<div class="alert alert-danger" role="alert">

    {{ session('registration') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
