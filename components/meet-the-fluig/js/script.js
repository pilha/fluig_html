$(document).ready(function () {

    // validate
    $("#form-meet-the-fluig").validate({
        rules: {
            "meet-the-fluig-email": {
                email: true
            }
        },
        messages: {
            "meet-the-fluig-name": "Digite seu nome",
            "meet-the-fluig-email": "Digite um email válido",
            "meet-the-fluig-phone": "Digite seu telefone",
            "meet-the-fluig-cpf": "Digite seu CPF",
            "uploadFile": "Selecione um arquivo PDF, DOC ou JPG",
            "selectSubject": "Selecione um assunto",
            "meet-the-fluig-company": "Digite o nome da sua empresa",
            "meet-the-fluig-cnpj": "Digite seu CNPJ"
        }
    });

    $(".input-upload-file").change(function () {
        $(this).prev(".text-input-file").val($(this).val());
    });

    // mask
    $("#meet-the-fluig-phone").mask('(99)9999-9999?9');
    $("#meet-the-fluig-cpf").mask('999.999.999-99');
    $("#meet-the-fluig-cnpj").mask('99.999.999/9999-99');

});