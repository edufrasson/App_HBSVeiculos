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
                populateTableFabricante(result.response_data.id, result.response_data.descricao)
            },
            error: function (result) {
                console.log(result)
            }
        });
    }

}

function populateTableFabricante(id, descricao){
    $('#tableFabricante').append(`<tr> <td>${id}</td> <td> ${descricao}</td> </tr>`)
}

$(document).ready(function () {
    $('#adicionarFabricante').click(function () {
        addFabricante($('#txtDescricao').val())
    })    
})