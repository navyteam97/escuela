@if ($errors->any())
<p>Por favor contemple la advertencia e intente nuevamente</p>
@foreach ($errors->all() as $error)
<div class="alert alert-danger">
    <strong>{{ $error }}</strong>
</div>
@endforeach
@endif