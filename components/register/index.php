<?php
$url_base = "../components/register";
?>

<!-- CSS SPECIFIC -->
<link href="<?php echo $url_base ?>/css/style.css" rel="stylesheet">
<!-- JS SPECIFIC -->


<div class="container container-register">
    <div class="row clearfix">
        <div class="col-lg-offset-5 col-md-offset-4 col-sm-offset-4 col-lg-7 col-md-8 col-sm-8">
            <h2>Conheça o fluig</h2>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 menu-left-partners">
            <div class="col-md-12 menu-left-partners-center">
                <ul id="menu-parceiros-2" class="list-unstyled">
                    <li class=""><a href="https://www.fluig.com/programa-de-parceiros/">Programa de Parceiros</a></li>
                    <li class=""><a href="https://www.fluig.com/beneficios/">Benefícios</a></li>
                    <li class="active"><a href="https://www.fluig.com/cadastre-se/">Cadastre-se</a></li>
                </ul>
            </div>
        </div>
        <div class=" col-lg-7 col-md-8 col-sm-8 col-lg-offset-2 box-text-register-r">
            <div class="col-md-12 box-text-register-r-center">
                <p>
                    Após o preenchimento do formulário, a equipe fluig entrará em contato via e-mail para agendamento de uma demonstração virtual.
                </p>
            </div>
        </div>

        <div class="col-lg-7 col-md-8 col-sm-8 col-lg-offset-2 box-form-register clearfix">
            <div class="col-md-12 col-sm-12 col-md-offset-0 box-center-form-register">
                <form class="form-horizontal" id="form-register">
                    <fieldset>

                        <!--form part 1-->
                        <div class="form-register-part-1">
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-2 no-pd-md-l col-sm-offset-0 col-sm-12 ">
                                    <legend>Cadastre seu perfil completo na loja para avaliação</legend>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-5 control-label label-left no-pd-md-l" for="register-name">Nome*</label>  
                                <div class="col-md-10 col-sm-9 col-xs-9 col-xs-7 no-pd-l">
                                    <input id="register-name" name="register-name" type="text" placeholder="" class="form-control input-md" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-5 control-label label-left no-pd-md-l" for="register-email">E-mail* </label>  
                                <div class="col-md-4 col-sm-9 col-xs-7 no-pd-l">
                                    <input id="register-email" name="register-email" type="email" placeholder="" class="form-control input-md" required="">
                                </div>

                                <label class="col-md-2 col-sm-3 col-xs-5 control-label label-left no-pd-md-l" for="register-office">Cargo</label>  
                                <div class="col-md-4 col-sm-9 col-xs-7 no-pd-l">
                                    <input id="register-office" name="register-office" type="text" placeholder="" class="form-control input-md">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-5 control-label label-left no-pd-md-l" for="register-phone">Telefone*</label>  
                                <div class="col-md-4 col-sm-9 col-xs-7 no-pd-l">
                                    <input id="register-phone" name="register-phone" type="text" placeholder="" class="form-control input-md" required="">
                                </div>

                                <label class="col-md-2 col-sm-3 col-xs-5 control-label label-left no-pd-md-l" for="register-cell">Celular</label>  
                                <div class="col-md-4 col-sm-9 col-xs-7 no-pd-l">
                                    <input id="register-cell" name="register-cell" type="text" placeholder="" class="form-control input-md">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-5 control-label label-left no-pd-md-l" for="register-site">Site</label>  
                                <div class="col-md-4 col-sm-9 col-xs-7 no-pd-l">
                                    <input id="register-site" name="register-site" type="text" placeholder="" class="form-control input-md">
                                </div>
                                <label class="col-md-2 col-sm-3 col-xs-5 control-label label-left no-pd-md-l" for="register-cep">Cep</label>  
                                <div class="col-md-4 col-sm-9 col-xs-7 no-pd-l">
                                    <input id="register-cep" name="register-cep" type="text" placeholder="" class="form-control input-md">
                                </div>                               
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-5 control-label label-left no-pd-md-l" for="register-address">Endereço </label>  
                                <div class="col-md-4 col-sm-9 col-xs-7 no-pd-l">
                                    <input id="register-address" name="register-address" type="text" placeholder="" class="form-control input-md">
                                </div>

                                <label class="col-md-2 col-sm-3 col-xs-5 control-label label-left no-pd-md-l" for="register-number">Nº</label>  
                                <div class="col-md-4 col-sm-9 col-xs-7 no-pd-l">
                                    <input id="register-number" name="register-number" type="number" placeholder="" class="form-control input-md">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-5 control-label label-left no-pd-md-l" for="register-district">Bairro</label>  
                                <div class="col-md-4 col-sm-9 col-xs-7 no-pd-l">
                                    <input id="register-district" name="register-district" type="text" placeholder="" class="form-control input-md">
                                </div>

                                <label class="col-md-2 col-sm-3 col-xs-5 control-label label-left no-pd-md-l" for="register-complement">Complemento</label>  
                                <div class="col-md-4 col-sm-9 col-xs-7 no-pd-l">
                                    <input id="register-complement" name="register-complement" type="text" placeholder="" class="form-control input-md">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-5 control-label label-left no-pd-md-l" for="register-state">Estado</label>  
                                <div class="col-md-4 col-sm-9 col-xs-7 no-pd-l">
                                    <input id="register-state" name="register-state" type="text" placeholder="" class="form-control input-md">
                                </div>

                                <label class="col-md-2 col-sm-3 col-xs-5 control-label label-left no-pd-md-l" for="register-city">Cidade</label>  
                                <div class="col-md-4 col-sm-9 col-xs-7 no-pd-l">
                                    <input id="register-city" name="register-city" type="text" placeholder="" class="form-control input-md">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-6 col-md-offset-2 col-sm-5 col-sm-offset-3 col-xs-7 control-label label-left no-pd-l text-left label-required">* Preenchimento obrigatório</label>  
                                <div class="col-md-4 col-sm-4 col-xs-5 no-pd-l text-right buttom-form">
                                    <input id="" name="" class="btn btn-magento" type="submit" value="AVANÇAR">
                                </div>
                            </div>
                        </div>
                        <div class="form-register-part-2">
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4 no-pd-md-l col-sm-offset-0 col-sm-12 ">
                                    <legend>Cadastre todas as informações de sua empresa</legend>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="register-company">Empresa*</label>  
                                <div class="col-md-7 col-sm-7 col-xs-7 col-xs-8 no-pd-l">
                                    <input id="register-company" name="register-company" type="text" placeholder="" class="form-control input-md" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="register-cnpj">CNPJ*</label>  
                                <div class="col-md-7 col-sm-7 col-xs-7 col-xs-8 no-pd-l">
                                    <input id="register-cnpj" name="register-cnpj" type="text" placeholder="" class="form-control input-md" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="register-selectCoreBusiness">Core Business</label>  
                                <div class="clearfix box-select box-select-options col-md-7 col-sm-7 col-xs-8 col-xs-7 no-pd-l">  
                                    <input placeholder="Selecione" name="register-selectCoreBusiness" id="register-selectCoreBusiness" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">
                                    <input name="register-selectCoreBusinessHidden" id="register-selectCoreBusinessHidden" type="hidden">
                                    <div class="clearfix box-checkbox box-radios selectCoreBusinessBox">       
                                        <div class=" col-md-12 no-padding ">
                                            <input type="radio" id="test4">
                                            <label for="test4">teste 1</label>
                                        </div>
                                        <div class=" col-md-12 no-padding">
                                            <input type="radio" id="test5">
                                            <label for="test5">teste 2</label>
                                        </div>
                                        <div class=" col-md-12 no-padding">
                                            <input type="radio" id="test6">
                                            <label for="test6">teste 3</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="register-selectFoundationDate">Data de Fundação</label>  
                                <div class="clearfix box-select box-select-options col-md-7 col-sm-7 col-xs-8 col-xs-7 no-pd-l">  
                                    <input placeholder="Selecione" name="register-selectFoundationDate" id="register-selectFoundationDate" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">
                                    <input name="register-selectFoundationDateHidden" id="register-selectFoundationDateHidden" type="hidden">
                                    <div class="clearfix box-checkbox box-radios selectFoundationDateBox">       
                                        <div class=" col-md-12 no-padding ">
                                            <input type="radio" id="test4">
                                            <label for="test4">teste 1</label>
                                        </div>
                                        <div class=" col-md-12 no-padding">
                                            <input type="radio" id="test5">
                                            <label for="test5">teste 2</label>
                                        </div>
                                        <div class=" col-md-12 no-padding">
                                            <input type="radio" id="test6">
                                            <label for="test6">teste 3</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="register-selectAnnualBilling">Faturamento Anual</label>  
                                <div class="clearfix box-select box-select-options col-md-7 col-sm-7 col-xs-8 col-xs-7 no-pd-l">  
                                    <input placeholder="Selecione" name="register-selectAnnualBilling" id="register-selectAnnualBilling" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">
                                    <input name="register-selectAnnualBillingHidden" id="register-selectAnnualBillingHidden" type="hidden">
                                    <div class="clearfix box-checkbox box-radios selectAnnualBillingBox">       
                                        <div class=" col-md-12 no-padding ">
                                            <input type="radio" id="test4">
                                            <label for="test4">teste 1</label>
                                        </div>
                                        <div class=" col-md-12 no-padding">
                                            <input type="radio" id="test5">
                                            <label for="test5">teste 2</label>
                                        </div>
                                        <div class=" col-md-12 no-padding">
                                            <input type="radio" id="test6">
                                            <label for="test6">teste 3</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="register-selectNumberEmployees">Número de Funcionários</label>  
                                <div class="clearfix box-select box-select-options col-md-7 col-sm-7 col-xs-8 col-xs-7 no-pd-l">  
                                    <input placeholder="Selecione" name="register-selectNumberEmployees" id="register-selectNumberEmployees" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">
                                    <input name="register-selectNumberEmployeesHidden" id="register-selectNumberEmployeesHidden" type="hidden">
                                    <div class="clearfix box-checkbox box-radios selectNumberEmployeesBox">       
                                        <div class=" col-md-12 no-padding ">
                                            <input type="radio" id="test4">
                                            <label for="test4">teste 1</label>
                                        </div>
                                        <div class=" col-md-12 no-padding">
                                            <input type="radio" id="test5">
                                            <label for="test5">teste 2</label>
                                        </div>
                                        <div class=" col-md-12 no-padding">
                                            <input type="radio" id="test6">
                                            <label for="test6">teste 3</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="register-selectCurrentFlag">Bandeira atual</label>  
                                <div class="clearfix box-select box-select-options col-md-7 col-sm-7 col-xs-8 col-xs-7 no-pd-l">  
                                    <input placeholder="Selecione" name="register-selectCurrentFlag" id="register-selectCurrentFlag" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">
                                    <input name="register-selectCurrentFlagHidden" id="register-selectCurrentFlagHidden" type="hidden">
                                    <div class="clearfix box-checkbox box-radios selectCurrentFlagBox">       
                                        <div class=" col-md-12 no-padding ">
                                            <input type="radio" id="test4">
                                            <label for="test4">teste 1</label>
                                        </div>
                                        <div class=" col-md-12 no-padding">
                                            <input type="radio" id="test5">
                                            <label for="test5">teste 2</label>
                                        </div>
                                        <div class=" col-md-12 no-padding">
                                            <input type="radio" id="test6">
                                            <label for="test6">teste 3</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="register-selectNumberCustomers">Número de Clientes</label>  
                                <div class="clearfix box-select box-select-options col-md-7 col-sm-7 col-xs-8 col-xs-7 no-pd-l">  
                                    <input placeholder="Selecione" name="register-selectNumberCustomers" id="register-selectNumberCustomers" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">
                                    <input name="register-selectNumberCustomersHidden" id="register-selectNumberCustomersHidden" type="hidden">
                                    <div class="clearfix box-checkbox box-radios selectNumberCustomersBox">       
                                        <div class=" col-md-12 no-padding ">
                                            <input type="radio" id="test4">
                                            <label for="test4">teste 1</label>
                                        </div>
                                        <div class=" col-md-12 no-padding">
                                            <input type="radio" id="test5">
                                            <label for="test5">teste 2</label>
                                        </div>
                                        <div class=" col-md-12 no-padding">
                                            <input type="radio" id="test6">
                                            <label for="test6">teste 3</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="register-selectNumberSellers">Número de Vendedores</label>  
                                <div class="clearfix box-select box-select-options col-md-7 col-sm-7 col-xs-8 col-xs-7 no-pd-l">  
                                    <input placeholder="Selecione" name="register-selectNumberSellers" id="register-selectNumberSellers" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">
                                    <input name="register-selectNumberSellersHidden" id="register-selectNumberSellersHidden" type="hidden">
                                    <div class="clearfix box-checkbox box-radios selectNumberSellersBox">       
                                        <div class=" col-md-12 no-padding ">
                                            <input type="radio" id="test4">
                                            <label for="test4">teste 1</label>
                                        </div>
                                        <div class=" col-md-12 no-padding">
                                            <input type="radio" id="test5">
                                            <label for="test5">teste 2</label>
                                        </div>
                                        <div class=" col-md-12 no-padding">
                                            <input type="radio" id="test6">
                                            <label for="test6">teste 3</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="register-selectNumberDevelopers">Número de desenvolvedores</label>  
                                <div class="clearfix box-select box-select-options col-md-7 col-sm-7 col-xs-8 col-xs-7 no-pd-l">  
                                    <input placeholder="Selecione" name="register-selectNumberDevelopers" id="register-selectNumberDevelopers" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">
                                    <input name="register-selectNumberDevelopersHidden" id="register-selectNumberDevelopersHidden" type="hidden">
                                    <div class="clearfix box-checkbox box-radios selectNumberDevelopersBox">       
                                        <div class=" col-md-12 no-padding ">
                                            <input type="radio" id="test4">
                                            <label for="test4">teste 1</label>
                                        </div>
                                        <div class=" col-md-12 no-padding">
                                            <input type="radio" id="test5">
                                            <label for="test5">teste 2</label>
                                        </div>
                                        <div class=" col-md-12 no-padding">
                                            <input type="radio" id="test6">
                                            <label for="test6">teste 3</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="register-selectMatrix">Matriz</label>  
                                <div class="clearfix box-select box-select-options col-md-7 col-sm-7 col-xs-8 col-xs-7 no-pd-l">  
                                    <input placeholder="Selecione" name="register-selectMatrix" id="register-selectMatrix" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">
                                    <input name="register-selectMatrixHidden" id="register-selectMatrixHidden" type="hidden">
                                    <div class="clearfix box-checkbox box-radios selectMatrixBox">       
                                        <div class=" col-md-12 no-padding ">
                                            <input type="radio" id="test4">
                                            <label for="test4">teste 1</label>
                                        </div>
                                        <div class=" col-md-12 no-padding">
                                            <input type="radio" id="test5">
                                            <label for="test5">teste 2</label>
                                        </div>
                                        <div class=" col-md-12 no-padding">
                                            <input type="radio" id="test6">
                                            <label for="test6">teste 3</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left no-pd-l label-f-sn" for="register-radio-affiliates">Possui filiais?</label>
                                <div class="col-md-2 col-sm-2 col-xs-3 no-padding"> 
                                    <label class="radio-inline label-left" for="register-radio-affiliates-s">
                                        <input type="radio" name="register-radio-affiliates" id="register-radio-affiliates-s" value="s">
                                        Sim
                                    </label> 
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-3 no-padding"> 
                                    <label class="radio-inline label-left" for="register-radio-affiliates-n">
                                        <input type="radio" name="register-radio-affiliates" id="register-radio-affiliates-n" value="n">
                                        Não
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-8 col-md-offset-4 col-sm-5 col-sm-offset-5 col-xs-8 control-label label-left no-pd-l text-left label-required">* Preenchimento obrigatório</label>  
                            </div>
                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-4 col-sm-3 col-sm-offset-5 col-xs-6 no-pd-l buttom-form">
                                    <button id="" name="" class="btn btn-magento">VOLTAR</button>
                                </div>  
                                <div class="col-md-3 col-sm-4 col-xs-6 no-pd-l text-right buttom-form">
                                    <input id="" name="" class="btn btn-magento" type="submit" value="ACANÇAR">
                                </div>
                            </div>  
                        </div>
                        <div class="form-register-part-3">
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-2 no-pd-md-l col-sm-12">
                                    <legend>Diga quais os seus interesses na Parceria com a fluig Store</legend>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2 col-xs-8 control-label label-left no-pd-l text-left" for="register-radio-bpm">Gestão de processos (BPM)</label>
                                <div class="col-md-3 col-sm-4 col-xs-4 no-pd-l label-sn"> 
                                    <label class="radio-inline label-left" for="register-radio-bpm-s">
                                        <input type="radio" name="register-radio-bpm" id="register-radio-bpm-s" value="s">
                                        Sim
                                    </label> 
                                    <label class="radio-inline label-left" for="register-radio-bpm-n">
                                        <input type="radio" name="register-radio-bpm" id="register-radio-bpm-n" value="n">
                                        Não
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2 col-xs-8 control-label label-left no-pd-l text-left" for="register-radio-ecm">Gestão de documentos (ECM)</label>
                                <div class="col-md-3 col-sm-4 col-xs-4 no-pd-l label-sn"> 
                                    <label class="radio-inline label-left" for="register-radio-ecm-s">
                                        <input type="radio" name="register-radio-ecm" id="register-radio-ecm-s" value="s">
                                        Sim
                                    </label> 
                                    <label class="radio-inline label-left" for="register-radio-ecm-n">
                                        <input type="radio" name="register-radio-ecm" id="register-radio-ecm-n" value="n">
                                        Não
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2 col-xs-8 control-label label-left no-pd-l text-left" for="register-radio-idm">Gestão de identidade (IDM)</label>
                                <div class="col-md-3 col-sm-4 col-xs-4 no-pd-l label-sn"> 
                                    <label class="radio-inline label-left" for="register-radio-idm-s">
                                        <input type="radio" name="register-radio-idm" id="register-radio-idm-s" value="s">
                                        Sim
                                    </label> 
                                    <label class="radio-inline label-left" for="register-radio-idm-n">
                                        <input type="radio" name="register-radio-idm" id="register-radio-idm-n" value="n">
                                        Não
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2 col-xs-8 control-label label-left no-pd-l text-left" for="register-radio-social">Colaboração / Rede Social <br>Colaborativa (social)</label>
                                <div class="col-md-3 col-sm-4 col-xs-4 no-pd-l label-sn"> 
                                    <label class="radio-inline label-left" for="register-radio-social-s">
                                        <input type="radio" name="register-radio-social" id="register-radio-social-s" value="s">
                                        Sim
                                    </label> 
                                    <label class="radio-inline label-left" for="register-radio-social-n">
                                        <input type="radio" name="register-radio-social" id="register-radio-social-n" value="n">
                                        Não
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2 col-xs-8 control-label label-left no-pd-l text-left" for="register-radio-esb">Integração entre sistemas (ESB)</label>
                                <div class="col-md-3 col-sm-4 col-xs-4 no-pd-l label-sn"> 
                                    <label class="radio-inline label-left" for="register-radio-esb-s">
                                        <input type="radio" name="register-radio-esb" id="register-radio-esb-s" value="s">
                                        Sim
                                    </label> 
                                    <label class="radio-inline label-left" for="register-radio-esb-n">
                                        <input type="radio" name="register-radio-esb" id="register-radio-esb-n" value="n">
                                        Não
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2 col-xs-8 control-label label-left no-pd-l text-left" for="register-radio-wcm">Criação de portais (wcm)</label>
                                <div class="col-md-3 col-sm-4 col-xs-4 no-pd-l label-sn"> 
                                    <label class="radio-inline label-left" for="register-radio-wcm-s">
                                        <input type="radio" name="register-radio-wcm" id="register-radio-wcm-s" value="s">
                                        Sim
                                    </label> 
                                    <label class="radio-inline label-left" for="register-radio-wcm-n">
                                        <input type="radio" name="register-radio-wcm" id="register-radio-wcm-n" value="n">
                                        Não
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2 col-xs-8 control-label label-left no-pd-l text-left" for="register-radio-analytics">Analytics</label>
                                <div class="col-md-3 col-sm-4 col-xs-4 no-pd-l label-sn"> 
                                    <label class="radio-inline label-left" for="register-radio-analytics-s">
                                        <input type="radio" name="register-radio-analytics" id="register-radio-analytics-s" value="s">
                                        Sim
                                    </label> 
                                    <label class="radio-inline label-left" for="register-radio-analytics-n">
                                        <input type="radio" name="register-radio-analytics" id="register-radio-analytics-n" value="n">
                                        Não
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-2 col-sm-10 col-sm-offset-2 no-pd-l box-interest-news">
                                    <input type="checkbox" id="interest-news" checked="checked">
                                    <label for="interest-news" class="label-left"> Tenho interesse em receber novidades do fluig</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-2 col-xs-9 control-label label-left no-pd-l text-left label-required">* Preenchimento obrigatório</label>  
                            </div>
                            <div class="form-group">
                                <div class="col-md-5 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-6 no-pd-l buttom-form">
                                    <button id="" name="" class="btn btn-magento">VOLTAR</button>
                                </div>  
                                <div class="col-md-4 col-sm-5 col-xs-6 no-pd-l text-right buttom-form">
                                    <input id="" name="" class="btn btn-magento" type="submit" value="ACANÇAR">
                                </div>
                            </div>  
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- JS SPECIFIC -->
<script src="<?php echo $url_base ?>/js/script.js" type="text/javascript"></script>
<!-- END JS SPECIFIC -->