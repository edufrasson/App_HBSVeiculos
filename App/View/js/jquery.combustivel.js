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

function populateTableCombustivel(id, descricao){
    $('#tableCombustivel').append(`<tr> <td>${id}</td> <td> ${descricao}</td> </tr>`)
}

$(document).ready(function () {
    $('#adicionarCombustivel').click(function () {
        addCombustivel($('#txtDescricao').val())
    })    
})