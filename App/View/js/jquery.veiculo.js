function deleteVeiculo(id){
    $.ajax({
        type: "GET",
        url: "/veiculo/delete?id=" + id,        
        dataType: 'json',
        success: function (result) {       
            console.log(result)
        },
        error: function (result) {
            console.log(result)
        }
    });
}

$(document).ready(function(){
    $("#placa").inputmask({mask: 'AAA-9999'});
    $("#ano").inputmask({mask: '9999'});
    
    $('.btn-delete').click(function(event){
        deleteVeiculo(event.target.id)

        window.location.reload(true); 
    })
})