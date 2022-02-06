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
    if(date == ''){
        $('#message').html("Escolha uma data");
    }else if(time == ''){
        $('#message').html("Escolha um horário");
    }else{
        $('#button').html("Salvar");
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
}
function mark_consult(datetime){
    
}
/*function search_specialties() {
    $.ajax({
        x-access-token: "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJmZWVnb3ciLCJhdWQiOiJwdWJsaWNhcGkiLCJpYXQiOiIxNy0wOC0yMDE4IiwibGljZW5zZUlEIjoiMTA1In0.UnUQPWYchqzASfDpVUVyQY0BBW50tSQQfVilVuvFG38"
        url: 'https://api.feegow.com/v1/api/company/list-unity',
        method: 'get',

        success: (response) => {
            alert(response);
        },
        error: () => {
            console.log('Deu erro')
        },
        complete: () => {
            console.log('Executado depois de erro/sucesso')
        }
    })
}*/