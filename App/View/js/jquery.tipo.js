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
                populateTableTipo(result.response_data.id, result.response_data.descricao)
            },
            error: function (result) {
                console.log(result)
            }
        });
    }

}

function populateTableTipo(id, descricao){
    $('#tableTipo').append(`<tr> <td>${id}</td> <td> ${descricao}</td> </tr>`)
}

$(document).ready(function () {
    $('#adicionarTipo').click(function () {
        addTipo($('#txtDescricao').val())
    })
   
})