<div class="row">
    @foreach($professionals as $professional)
    <div class="col-md-6">
        {{ $professional->name }}
    </div>
    <div class="col-md-6">
        <a class="btn btn-primary" href="#">Marcar consulta</a>
    </div>
    @endforeach
</div>