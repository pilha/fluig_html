$(document).ready(function () {

    // validate
    $("#form-contact-us").validate({
        rules: {
            "contact-us-email": {
                email: true
            }
        },
        messages: {
            "contact-us-name": "Digite seu nome",
            "contact-us-email": "Digite um email válido",
            "contact-us-phone": "Digite seu telefone",
            "contact-us-cpf": "Digite seu CPF",
            "uploadFile": "Selecione um arquivo PDF, DOC ou JPG",
            "selectSubject": "Selecione um assunto",
            "contact-us-company": "Digite o nome da sua empresa",
            "contact-us-cnpj": "Digite seu CNPJ"
        }
    });

    $(".input-upload-file").change(function () {
        $(this).prev(".text-input-file").val($(this).val());
    });

    // mask
    $("#contact-us-phone").mask('(99)9999-9999?9');
    $("#contact-us-cpf").mask('999.999.999-99');
    $("#contact-us-cnpj").mask('99.999.999/9999-99');

});