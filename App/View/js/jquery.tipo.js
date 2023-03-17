function addTipo(descricao) {
    if (descricao !== null) {
        $.ajax({
            type: "POST",
            url: "/tipo/save",
            data: {
                descricao: descricao
            },
            dataType: 'json',
            success: function (result) {
                console.log(result.response_data)
                
            },
            error: function (result) {
                console.log(result)
            }
        });
    }

}

function getTipoById(id){
    $.ajax({
        type: "GET",
        url: "/tipo/get-by-id?id=" + id,        
        dataType: 'json',
        success: function (result) {       
            $('#txtDescricao').val(result.response_data.descricao);
            $('#id').val(result.response_data.id);
        },
        error: function (result) {
            console.log(result)
        }
    });
}

function deleteTipo(id){
    $.ajax({
        type: "GET",
        url: "/tipo/delete?id=" + id,        
        dataType: 'json',
        success: function (result) {       
            console.log(result)
        },
        error: function (result) {
            console.log(result)
        }
    });
}




$(document).ready(function () {
    $('.btn-edit').click(function(event){  
        getTipoById(event.target.id);        
    })

    $('.btn-delete').click(function(event){
        deleteTipo(event.target.id);

        window.location.reload(true); 
    })
})