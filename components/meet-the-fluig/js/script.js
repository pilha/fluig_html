$(document).ready(function () {

    // validate
    $("#form-work-with-us").validate({
        rules: {
            "work-with-us-email": {
                email: true
            }
        },
        messages: {
            "work-with-us-name": "Digite seu nome",
            "work-with-us-email": "Digite um email válido",
            "work-with-us-phone": "Digite seu telefone",
            "work-with-us-cpf": "Digite seu CPF",
            "uploadFile": "Selecione um arquivo PDF, DOC ou JPG",
            "selectSubject": "Selecione um assunto"
        }
    });

    $(".input-upload-file").change(function () {
        $(this).prev(".text-input-file").val($(this).val());
    });

    // mask
    $("#work-with-us-phone").mask('(99)9999-9999?9');
    $("#work-with-us-cpf").mask('999.999.999-99');

});