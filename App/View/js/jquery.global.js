$(document).ready(function(){
    $('.table-style').DataTable({
        "language": {
            "info": "Mostrando _START_ - _END_ de _TOTAL_ registros",
            "infoEmpty": "Mostrando 0 - 0 de 0 registros",
            "infoFiltered":   "(Filtrado em _MAX_ registros totais)",
            "paginate": {
                "first":      "Primeiro",
                "last":       "Último",
                "next":       "Próximo",
                "previous":   "Anterior"
            },
            "search": "Pesquisar:",
            "lengthMenu":     "Mostrar _MENU_ registros",
            "zeroRecords": "Nenhum registro encontrado!",
          }        
    });

    $('#exportButton').click(function(){
        $.ajax({
            type: "GET",
            url: "/export",       
            success: function (){       
                swal({  
                    title: "Sucesso!",  
                    text: "Os dados foram exportados corretamente!!",  
                    icon: "success",  
                    button: "OK",  
                  });  
            },
            error: function (){
                swal({  
                    title: "Erro!",  
                    text: "Os dados não foram exportados corretamente!",  
                    icon: "error",  
                    button: "OK",  
                  });  
            }
        });
    })

    $('#importButton').click(function(){
        $.ajax({
            type: "GET",
            url: "/import",       
            success: function (){       
                swal({  
                    title: "Sucesso!",  
                    text: "Os dados foram importados corretamente!!",  
                    icon: "success",  
                    button: "OK",  
                  });  
            },
            error: function (){
                swal({  
                    title: "Erro!",  
                    text: "Os dados não foram importados corretamente!",  
                    icon: "error",  
                    button: "OK",  
                  });  
            }
        });
    })
})