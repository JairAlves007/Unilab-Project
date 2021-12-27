@if (session('msg'))

<div class="alert alert-success" role="alert">

  {{ session('msg') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true"><i class="fas fa-times small text-success"></i></span>
  </button>

</div>

@elseif (session('error_alert'))
<div class="alert alert-danger" role="alert">

  {{ session('error_alert') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true"><i class="fas fa-times small text-success"></i></span>
  </button>
</div>
@endif
