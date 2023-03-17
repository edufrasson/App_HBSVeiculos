function addCombustivel(descricao) {
    if (descricao !== null) {
        $.ajax({
            type: "POST",
            url: "/combustivel/save",
            data: {
                descricao: descricao
            },
            dataType: 'json',
            success: function (result) {
                console.log(result.response_data)
                populateTableCombustivel(result.response_data.id, result.response_data.descricao)
            },
            error: function (result) {
                console.log(result)
            }            
        });
    }
}


function getCombustivelById(id){
    $.ajax({
        type: "GET",
        url: "/combustivel/get-by-id?id=" + id,        
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

function deleteCombustivel(id){
    $.ajax({
        type: "GET",
        url: "/combustivel/delete?id=" + id,        
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
        getCombustivelById(event.target.id);        
    })

    $('.btn-delete').click(function(event){
        deleteCombustivel(event.target.id);

        window.location.reload(true); 
    })
})