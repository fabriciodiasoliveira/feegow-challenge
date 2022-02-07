@if($result_test == "Falso")
<div class="alert alert-success zero_absolute animate__animated animate__backInRight" role="alert">
    Consulta marcada para {{ $patient_name }} com dr(a) {{ $professional }} em {{ $consultation }}
</div>
@else
<div class="alert alert-danger zero_absolute animate__animated animate__bounceIn" role="alert">
    {{ $result_test }}
</div>
@endif