$(document).ready(function(){
    var idEliminar=-1;
    var fila;
    $(".btnEliminar").click(function(){ 
        idEliminar=$(this).data('id');
        fila=$(this).parent('td').parent('tr'); 
    });
    $(".eliminar").click(function(){
        $.ajax({
            url: "eliminacion.php",
            method:"POST",
            data:{ 
            id:idEliminar
        }
        }).done(function(res){
            $(fila).fadeOut(1000);
        });
       
    });
});

