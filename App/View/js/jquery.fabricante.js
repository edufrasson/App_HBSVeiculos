function addFabricante(descricao) {
    if (descricao !== null) {
        $.ajax({
            type: "POST",
            url: "/fabricante/save",
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


function getFabricanteById(id){
    $.ajax({
        type: "GET",
        url: "/fabricante/get-by-id?id=" + id,        
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

function deleteFabricante(id){
    $.ajax({
        type: "GET",
        url: "/fabricante/delete?id=" + id,        
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
        getFabricanteById(event.target.id);        
    })

    $('.btn-delete').click(function(event){
        deleteFabricante(event.target.id);

        window.location.reload(true); 
    })
})