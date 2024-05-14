
function toogleSideNav(x) {
    var activo = x.classList.contains('active');
    if (activo) document.getElementById("mySidenav").style.width = "0";
    else document.getElementById("mySidenav").style.width = "100%";
    x.classList.toggle("active");
}





function infoRegistro(numeroCoordenada) {
    $.ajax({
        url: "controller.php?numeroCoordenada=" + numeroCoordenada,
        success: function(result) {
            $("#boxCoordenada").html(result);
        }
    });
} //infoRegistro





function mostrarRegistro(archivo) {
    var myModal = new bootstrap.Modal(document.getElementById("modalRegistro"), {});
    document.onreadystatechange = function() {
        myModal.show();
    };
}






function mostrarImg(nameImg, rutaImg){
    const myModal    = new bootstrap.Modal($("#modalRegistro"));
    //const modalHader = $('#modalRegistroTitulo');
    const modalBody  = $('#modalRegistroBody');
    //modalHader.html(nameImg);
    modalBody.html('<img alt="'+nameImg+'" src="'+rutaImg+'" style="width:100%; height:auto">');
    myModal.show();
}


function envioFormulario() {
    Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: '¡Gracias por tu mensaje!, nosotros nos podremos en contacto contigo.',
        showConfirmButton: false,
        timer: 1800
    })
}

