

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
                console.log(result)
            },
            error: function (result) {
                console.log(result)
            }
        });
    }

}


$(document).ready(function () {
    $('#adicionarMarca').click(function () {
        addMarca($('#txtDescricao').val())
    })

})