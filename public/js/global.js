/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function search_professionals(){
    $.ajax({
        url: '/professionals/'+$('#specialtie').val(),
        method: 'get',

        success: (response) => {
            $('#professionals').html(response);
        },
        error: () => {
            console.log('Deu erro')
        },
        complete: () => {
            console.log('Executado depois de erro/sucesso')
        }
    })
}
function form_schedule(id){
    $.ajax({
        url: '/form_schedule/'+id,
        method: 'get',

        success: (response) => {
            $('#schedule').html(response);
        },
        error: () => {
            console.log('Deu erro')
        },
        complete: () => {
            console.log('Executado depois de erro/sucesso')
        }
    })
}
function init_schedule(id){
    date = $('#date').val();
    time = $('#time').val();
    datetime = date+' '+time+':00';
    if(date == ''){
        $('#message').html("Escolha uma data");
        $('#modal_title').html("Data inexistente");
    }else if(time == ''){
        $('#message').html("Escolha um horário");
        $('#modal_title').html("Horário inexistente");
    }else{
        $('#button').html("Salvar");
        $.ajax({
            url: '/form_patient/'+id,
            method: 'get',

            success: (response) => {
                $('#message').html(response);
                $('#modal_title').html("Marque a consulta");
                $('#consultation').val(datetime);
                $("#button").attr("onclick", "mark_consult()");
                
            },
            error: () => {
                console.log('Deu erro')
            },
            complete: () => {
                console.log('Executado depois de erro/sucesso')
            }
        })
        
    }
}
function mark_consult(datetime){
    var url = '/schedule/store';
    var formData = new FormData(document.getElementById('form_schedule'));
    fetch(url, {
    method: "POST",
            body: formData
    }).then(function (data) {

        data.text()
                .then(function (result) {
                    //window.location.href = "{{ route('jogo.fichas.concluir', ['id' => $fichaUser->id]) }}";
                    $('#alert').html(result);
                    $('#professionals').html('');
                    $('#schedule').html('');
                    setTimeout(remove_alert, 5000);
                });
//            $('#alert').html(data);
    console.log('Request success: ', data);
    }).catch(function (error) {
    console.log('Request failure: ', error);
        });
}
function remove_alert(){
   $("#alert").html('');
}

//function search_specialties() {
//    $.ajax({
//        headers: {x-access-token: "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJmZWVnb3ciLCJhdWQiOiJwdWJsaWNhcGkiLCJpYXQiOjE2NDQyNDAzODQsImxpY2Vuc2VJRCI6IjEwNSJ9._v3HJr5GUYAc14WW6HDxM5BlxAl-1KJeaqq2OfG67sM"},
//        url: 'https://api.feegow.com/v1/api/company/list-unity',
//        method: 'get',
//
//        success: (response) => {
//            alert(response);
//        },
//        error: () => {
//            console.log('Deu erro');
//        },
//        complete: () => {
//            console.log('Executado depois de erro/sucesso');
//        }
//    })
//}