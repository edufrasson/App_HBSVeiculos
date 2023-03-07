function addMarca(descricao) {
    if (descricao !== null) {
        $.ajax({
            type: "POST",
            url: "/marca/save",
            data: {
                descricao: descricao
            },
            dataType: 'json',
            success: function (result) {
                console.log(result.response_data)
                populateTableMarca(result.response_data.id, result.response_data.descricao)
            },
            error: function (result) {
                console.log(result)
            }
        });
    }

}

function populateTableMarca(id, descricao){
    $('#tableMarca').append(`<tr> <td>${id}</td> <td> ${descricao}</td> </tr>`)
}

$(document).ready(function () {
    $('#adicionarMarca').click(function () {
        addMarca($('#txtDescricao').val())
    })

})