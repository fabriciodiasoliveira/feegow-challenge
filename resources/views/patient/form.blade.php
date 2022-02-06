<form id="form_schedule" action="{{ route("schedule.store") }}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-12">
            Informe os dados do atendimento
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label for="name" class="col-md-4 col-form-label">nome:</label>
            <input id="patient_professional_id" type="hidden" name="professional_id" value="{{ $id }}"/>
            <input id="consultation" type="hidden" name="consultation"/>
            <input id="name" class="form-control" type="text" name="name"/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label for="cpf" class="col-md-4 col-form-label ">CPF:</label>
            <input id="cpf" class="form-control" type="text" name="cpf"/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label for="birth" class="col-md-4 col-form-label">Nascimento:</label>
            <input id="birth" class="form-control" type="date" name="birth"/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label for="how_known" class="col-md-4 col-form-label">Como nos conheceu:</label>
            <select id="how_known" name="how_known" class="form-control">
                <option>Um colega informou</option>
                <option>Internet</option>
                <option>Um dos médicos informou</option>
                <option>Achou pelo plano de saúde</option>
                <option>Foi uma emergência</option>
            </select>
        </div>
    </div>
</form>