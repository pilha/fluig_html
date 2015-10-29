$(document).ready(function () {

    // validate
    $("#form-register").validate({
        rules: {
            "register-email": {
                email: true
            }
        },
        messages: {
            "register-name": "Digite seu nome",
            "register-email": "Digite um email válido",
            "register-phone": "Digite seu telefone"           
        }
    });

    $(".input-upload-file").change(function () {
        $(this).prev(".text-input-file").val($(this).val());
    });

    // mask
    $("#register-phone").mask('(99)9999-9999?9');
    $("#register-cell").mask('(99)9999-9999?9');
    $("#register-cep").mask('99999-999');
    $("#register-cnpj").mask('99.999.999/9999-99');






    $("#register-cep").change(function () {
        var cep_code = $(this).val();
        if (cep_code.length <= 0)
            return;
        $.get("http://apps.widenet.com.br/busca-cep/api/cep.json", {code: cep_code},
        function (result) {
            if (result.status !== 1) {
                alert(result.message || "Houve um erro desconhecido, digite um cep válido.");
                return;
            }

            $("input#register-cep").val(result.code);
            $("input#register-state").val(result.state);
            $("input#register-city").val(result.city);
            $("input#register-district").val(result.district);
            $("input#register-address").val(result.address);
            $("input#register-state").val(result.state);
        });
    });




});