<form>
    <div class="row">
        <div class="col-md-12">
            Marque a consulta com Dr. {{ $professional->name }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label for="date" class="col-form-label text-md-right">Marque uma data:</label>
        </div>
        <div class="col-md-9">
            <input id="professional_id" type="hidden" name="professional_id" value="{{ $professional->id }}"/>
            <input id="date" class="form-control" type="date" name="date">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label for="time" class="col-form-label text-md-right">Marque um horário:</label>
        </div>
        <div class="col-md-9">
            <input id="time" class="form-control" type="time" name="time">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="init_schedule({{ $professional->id }})">
                Marque a consulta
            </button>
        </div>
    </div>
</form>