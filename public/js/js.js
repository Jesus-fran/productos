function show_menu() {

    $('#navbar_collapsed').css('height', '100vh');
    $('#navbar_collapsed').css('z-index', '99');
    $('#navbar_collapsed').css('text-align', 'center');
    $('#opcion, #opcion').css('margin-top', '20%');
    $('#opcion, #opcion').css('background-color', 'rgba(0, 0, 0, 0.11)');
}


$('#registrar_user').submit(function() {
    $('#registrar_user').attr('disabled', 'true');
});