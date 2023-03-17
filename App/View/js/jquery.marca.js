
function addMarca(id, descricao) {
    if (descricao !== "") {
        $.ajax({
            type: "POST",
            url: "/marca/save",
            data: {
                id: id,
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

function getMarcaById(id){
    $.ajax({
        type: "GET",
        url: "/marca/get-by-id?id=" + id,        
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

function deleteMarca(id){
    $.ajax({
        type: "GET",
        url: "/marca/delete?id=" + id,        
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
        getMarcaById(event.target.id);        
    })

    $('.btn-delete').click(function(event){
        deleteMarca(event.target.id);

        window.location.reload(true); 
    })
})