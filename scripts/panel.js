function cerrarModalAgregar(Objeto){
    $(Objeto).click(function(){
        $("#agregarUsuario").removeClass("is-active");
        $("body").removeClass("is-clipped");
    })
}

function cerrarModalModificar(Objeto){
    $(Objeto).click(function(){
        $("#modificarUsuario").removeClass("is-active");
        $("body").removeClass("is-clipped");
    })
}

function cerrarModalEliminar(Objeto){
    $(Objeto).click(function(){
        $("#eliminarUsuario").removeClass("is-active");
        $("body").removeClass("is-clipped");
    })
}

$(document).ready(function(){

    cerrarModalAgregar(".modal-background");
    cerrarModalAgregar(".delete");

    cerrarModalModificar(".modal-background");
    cerrarModalModificar(".delete");

    cerrarModalEliminar(".modal-background");
    cerrarModalEliminar(".delete");

    $(".agregarUsuario").click(function(){
        $("#agregarUsuario").addClass("is-active");
        $("body").addClass("is-clipped");
    })

    $(".modificarUsuario").click(function(){
        let idRegisto = ($(this).attr("id"));
        idRegisto = idRegisto.substring(1);
        const nombre = $(`#n${idRegisto}`).text();
        const usuario = $(`#u${idRegisto}`).text();
        const correo = $(`#c${idRegisto}`).text();

        $("#mId").val(idRegisto);
        $("#mNombre").val(nombre);
        $("#mUsuario").val(usuario);
        $("#mCorreo").val(correo);

        $("#modificarUsuario").addClass("is-active");
        $("body").addClass("is-clipped");
    })

    $(".eliminarUsuario").click(function(){
        let idRegisto = ($(this).attr("id"));
        idRegisto = idRegisto.substring(1);
        const nombre = $(`#n${idRegisto}`).text();
        const usuario = $(`#u${idRegisto}`).text();
        const correo = $(`#c${idRegisto}`).text();

        $("#eId").val(idRegisto);
        $("#eNombre").val(nombre);
        $("#eUsuario").val(usuario);
        $("#eCorreo").val(correo);

        $("#eliminarUsuario").addClass("is-active");
        $("body").addClass("is-clipped");
    })
})