<?php
$url_base = "../components/contact-us";
?>

<!-- CSS SPECIFIC -->
<link href="<?php echo $url_base ?>/css/style.css" rel="stylesheet">
<!-- JS SPECIFIC -->


<div class="container container-contact-us">
    <div class="row clearfix">
        <div class="col-md-10 col-md-12 col-sm-12 col-xs-12 col-md-offset-1">
            <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-8">
                <h2>Fale Conosco</h2>
            </div>
            <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 box-text-contact-us clearfix">
                <div class="col-md-12 col-xs-12 col-sm-12 box-text-contact-us-center">
                    <div class="col-md-4 col-sm-4 col-xs-6 no-padding box-text-contact">
                        <p>
                            <b>Você quer enviar uma <br>mensagem para:</b>
                        </p>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-3 col-mobile-12 no-pd-l"> 
                        <label class="radio-inline label-left" for="radio-client-s">
                            <input type="radio" name="contact-us-radio-client" id="radio-client-s" value="s" checked="checked">
                            <p>
                                Equipe de Suporte
                            </p>
                        </label> 
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-3 col-mobile-12 no-pd-l"> 
                        <label class="radio-inline label-left" for="radio-client-n">
                            <input type="radio" name="radio-client" id="radio-client-n" value="n">
                            <p>
                                Equipe de Vendas
                            </p>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 box-form-contact-us clearfix">
                <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-0 box-center-form-contact-us">
                    <form class="form-horizontal" id="form-contact-us">
                        <fieldset>
                            <div class="form-part-1">
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="contact-us-company">Nome da empresa *</label>  
                                    <div class="col-md-6 col-sm-7 col-xs-8 col-xs-7 no-pd-l">
                                        <input id="contact-us-company" name="contact-us-company" type="text" placeholder="" class="form-control input-md" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="contact-us-name">Seu Nome *</label>  
                                    <div class="col-md-6 col-sm-7 col-xs-8 col-xs-7 no-pd-l">
                                        <input id="contact-us-name" name="contact-us-name" type="text" placeholder="" class="form-control input-md" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="contact-us-email">Email para contato * </label>  
                                    <div class="col-md-6 col-sm-7 col-xs-8 col-xs-7 no-pd-l">
                                        <input id="contact-us-email" name="contact-us-email" type="email" placeholder="" class="form-control input-md" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="contact-us-phone">Telefone *</label>  
                                    <div class="col-md-6 col-sm-7 col-xs-8 col-xs-7 no-pd-l">
                                        <input id="contact-us-phone" name="contact-us-phone" type="text" placeholder="" class="form-control input-md" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="selectDepartment">Departamento</label>  
                                    <div class="clearfix box-select box-select-options col-md-6 col-sm-7 col-xs-8 col-xs-7 no-pd-l">  
                                        <input placeholder="Selecione" name="selectDepartment" id="selectDepartment" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">
                                        <input name="selectDepartmentHidden" id="selectDepartmentHidden" type="hidden">
                                        <div class="clearfix box-checkbox box-radios selectDepartmentBox">       
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
                                    <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="contact-us-office">Cargo *</label>  
                                    <div class="col-md-6 col-sm-7 col-xs-8 col-xs-7 no-pd-l">
                                        <input id="contact-us-office" name="contact-us-office" type="text" placeholder="" class="form-control input-md" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="selectNumberEmployees">Número de Funcionários</label>  
                                    <div class="clearfix box-select box-select-options col-md-6 col-sm-7 col-xs-8 col-xs-7 no-pd-l">  
                                        <input placeholder="Selecione" name="selectNumberEmployees" id="selectNumberEmployees" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">
                                        <input name="selectNumberEmployeesHidden" id="selectNumberEmployeesHidden" type="hidden">
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
                                    <label class="col-md-4 col-sm-5 col-xs-7 control-label label-left no-pd-l" for="radio-demonstration">Deseja ver uma demonstração?</label>
                                    <div class="col-md-4 col-sm-6 col-xs-5 no-pd-l label-sn"> 
                                        <label class="radio-inline label-left" for="radio-demonstration-s">
                                            <input type="radio" name="radio-demonstration" id="radio-demonstration-s" value="s" checked="checked">
                                            Sim
                                        </label> 
                                        <label class="radio-inline label-left" for="radio-demonstration-n">
                                            <input type="radio" name="radio-demonstration" id="radio-demonstration-n" value="n">
                                            Não
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-5 col-xs-7 control-label label-left no-pd-l" for="radio-client">É cliente TOTVS?</label>
                                    <div class="col-md-4 col-sm-6 col-xs-5 no-pd-l label-sn"> 
                                        <label class="radio-inline label-left" for="radio-client-s">
                                            <input type="radio" name="radio-client" id="radio-client-s" value="s" checked="checked">
                                            Sim
                                        </label> 
                                        <label class="radio-inline label-left" for="radio-client-n">
                                            <input type="radio" name="radio-client" id="radio-client-n" value="n">
                                            Não
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="selectProductLine">Se sim, qual a linha de produto?</label>  
                                    <div class="clearfix box-select box-select-options col-md-6 col-sm-7 col-xs-8 col-xs-7 no-pd-l">  
                                        <input placeholder="Selecione" name="selectProductLine" id="selectProductLine" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">
                                        <input name="selectProductLineHidden" id="selectProductLineHidden" type="hidden">
                                        <div class="clearfix box-checkbox box-radios selectProductLineBox">       
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
                                    <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="contact-us-cnpj">CNPJ * </label>  
                                    <div class="col-md-6 col-sm-7 col-xs-7 col-xs-8 no-pd-l">
                                        <input id="contact-us-cnpj" name="contact-us-cnpj" type="text" placeholder="" class="form-control input-md" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="contact-us-cnpj">Mensagem * </label>  
                                    <div class="col-md-6 col-sm-7 col-xs-7 col-xs-8 no-pd-l">
                                        <textarea class="form-control" id="contact-us-msg" name="contact-us-msg"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-7 col-md-offset-4 col-sm-7 col-sm-offset-5 no-pf-l box-interest-news">
                                        <input type="checkbox" id="interest-news" checked="checked">
                                        <label for="interest-news" class="label-left"> Tenho interesse em receber novidades do fluig</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-md-offset-4 col-sm-4 col-xs-7 col-sm-offset-5 no-padding control-label label-left label-required text-left" for="contact-us-phone">* Preenchimento obrigatório</label>
                                    <div class="col-md-3 col-sm-3 col-xs-5 no-pd-l text-right buttom-form">
                                        <input id="" name="" class="btn btn-magento" type="submit" value="ENVIAR">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>




















            <div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 box-form-contact-us clearfix">
                <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-0 box-center-form-contact-us">
                    <form class="form-horizontal" id="form-contact-us">
                        <fieldset>
                            <div class="form-part-1">
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="contact-us-company">Nome da empresa *</label>  
                                    <div class="col-md-6 col-sm-7 col-xs-8 col-xs-7 no-pd-l">
                                        <input id="contact-us-company" name="contact-us-company" type="text" placeholder="" class="form-control input-md" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="contact-us-name">Seu Nome *</label>  
                                    <div class="col-md-6 col-sm-7 col-xs-8 col-xs-7 no-pd-l">
                                        <input id="contact-us-name" name="contact-us-name" type="text" placeholder="" class="form-control input-md" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="contact-us-email">Email para contato * </label>  
                                    <div class="col-md-6 col-sm-7 col-xs-8 col-xs-7 no-pd-l">
                                        <input id="contact-us-email" name="contact-us-email" type="email" placeholder="" class="form-control input-md" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="contact-us-phone">Telefone *</label>  
                                    <div class="col-md-6 col-sm-7 col-xs-8 col-xs-7 no-pd-l">
                                        <input id="contact-us-phone" name="contact-us-phone" type="text" placeholder="" class="form-control input-md" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="selectCompany Size">Tamanho da Empresa*</label>  
                                    <div class="clearfix box-select box-select-options col-md-6 col-sm-7 col-xs-8 col-xs-7 no-pd-l">  
                                        <input placeholder="Selecione" name="selectCompany Size" id="selectCompany Size" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">
                                        <input name="selectCompany SizeHidden" id="selectCompany SizeHidden" type="hidden">
                                        <div class="clearfix box-checkbox box-radios selectCompany SizeBox">       
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
                                    <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="selectOffice">Seu cargo na empresa</label>  
                                    <div class="clearfix box-select box-select-options col-md-6 col-sm-7 col-xs-8 col-xs-7 no-pd-l">  
                                        <input placeholder="Selecione" name="selectOffice" id="selectOffice" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">
                                        <input name="selectOfficeHidden" id="selectOfficeHidden" type="hidden">
                                        <div class="clearfix box-checkbox box-radios selectOfficeBox">       
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
                                    <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="selectDepartment">Departamento</label>  
                                    <div class="clearfix box-select box-select-options col-md-6 col-sm-7 col-xs-8 col-xs-7 no-pd-l">  
                                        <input placeholder="Selecione" name="selectDepartment" id="selectDepartment" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">
                                        <input name="selectDepartmentHidden" id="selectDepartmentHidden" type="hidden">
                                        <div class="clearfix box-checkbox box-radios selectDepartmentBox">       
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
                                    <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="selectNumberEmployees">Número de Funcionários</label>  
                                    <div class="clearfix box-select box-select-options col-md-6 col-sm-7 col-xs-8 col-xs-7 no-pd-l">  
                                        <input placeholder="Selecione" name="selectNumberEmployees" id="selectNumberEmployees" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">
                                        <input name="selectNumberEmployeesHidden" id="selectNumberEmployeesHidden" type="hidden">
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
                                    <label class="col-md-4 col-sm-5 col-xs-7 control-label label-left no-pd-l" for="radio-demonstration">Deseja ver uma demonstração?</label>
                                    <div class="col-md-4 col-sm-6 col-xs-5 no-pd-l label-sn"> 
                                        <label class="radio-inline label-left" for="radio-demonstration-s">
                                            <input type="radio" name="radio-demonstration" id="radio-demonstration-s" value="s" checked="checked">
                                            Sim
                                        </label> 
                                        <label class="radio-inline label-left" for="radio-demonstration-n">
                                            <input type="radio" name="radio-demonstration" id="radio-demonstration-n" value="n">
                                            Não
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-5 col-xs-7 control-label label-left no-pd-l" for="radio-client">É cliente TOTVS?</label>
                                    <div class="col-md-4 col-sm-6 col-xs-5 no-pd-l label-sn"> 
                                        <label class="radio-inline label-left" for="radio-client-s">
                                            <input type="radio" name="radio-client" id="radio-client-s" value="s" checked="checked">
                                            Sim
                                        </label> 
                                        <label class="radio-inline label-left" for="radio-client-n">
                                            <input type="radio" name="radio-client" id="radio-client-n" value="n">
                                            Não
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-5 col-xs-5 control-label label-left" for="selectProductLine">Se sim, qual a linha de produto?</label>  
                                    <div class="clearfix box-select box-select-options col-md-6 col-sm-7 col-xs-8 col-xs-7 no-pd-l">  
                                        <input placeholder="Selecione" name="selectProductLine" id="selectProductLine" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">
                                        <input name="selectProductLineHidden" id="selectProductLineHidden" type="hidden">
                                        <div class="clearfix box-checkbox box-radios selectProductLineBox">       
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
                                    <label class="col-md-4 col-sm-5 col-xs-5  col-sm-offset-3 col-xs-8 control-label label-left no-pd-l text-left" for="radio-bpm">Gestão de processos (BPM)</label>
                                    <div class="col-md-3 col-sm-4 col-xs-4 no-pd-l label-sn"> 
                                        <label class="radio-inline label-left" for="radio-bpm-s">
                                            <input type="radio" name="radio-bpm" id="radio-bpm-s" value="s" checked="checked">
                                            Sim
                                        </label> 
                                        <label class="radio-inline label-left" for="radio-bpm-n">
                                            <input type="radio" name="radio-bpm" id="radio-bpm-n" value="n">
                                            Não
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-5 col-xs-5  col-sm-offset-3 col-xs-8 control-label label-left no-pd-l text-left" for="radio-ecm">Gestão de documentos (ECM)</label>
                                    <div class="col-md-3 col-sm-4 col-xs-4 no-pd-l label-sn"> 
                                        <label class="radio-inline label-left" for="radio-ecm-s">
                                            <input type="radio" name="radio-ecm" id="radio-ecm-s" value="s" checked="checked">
                                            Sim
                                        </label> 
                                        <label class="radio-inline label-left" for="radio-ecm-n">
                                            <input type="radio" name="radio-ecm" id="radio-ecm-n" value="n">
                                            Não
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-5 col-xs-5  col-sm-offset-3 col-xs-8 control-label label-left no-pd-l text-left" for="radio-idm">Gestão de identidade (IDM)</label>
                                    <div class="col-md-3 col-sm-4 col-xs-4 no-pd-l label-sn"> 
                                        <label class="radio-inline label-left" for="radio-idm-s">
                                            <input type="radio" name="radio-idm" id="radio-idm-s" value="s" checked="checked">
                                            Sim
                                        </label> 
                                        <label class="radio-inline label-left" for="radio-idm-n">
                                            <input type="radio" name="radio-idm" id="radio-idm-n" value="n">
                                            Não
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-5 col-xs-5  col-sm-offset-3 col-xs-8 control-label label-left no-pd-l text-left" for="radio-social">Colaboração / Rede Social <br>Colaborativa (social)</label>
                                    <div class="col-md-3 col-sm-4 col-xs-4 no-pd-l label-sn"> 
                                        <label class="radio-inline label-left" for="radio-social-s">
                                            <input type="radio" name="radio-social" id="radio-social-s" value="s" checked="checked">
                                            Sim
                                        </label> 
                                        <label class="radio-inline label-left" for="radio-social-n">
                                            <input type="radio" name="radio-social" id="radio-social-n" value="n">
                                            Não
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-5 col-xs-5  col-sm-offset-3 col-xs-8 control-label label-left no-pd-l text-left" for="radio-esb">Integração entre sistemas (ESB)</label>
                                    <div class="col-md-3 col-sm-4 col-xs-4 no-pd-l label-sn"> 
                                        <label class="radio-inline label-left" for="radio-esb-s">
                                            <input type="radio" name="radio-esb" id="radio-esb-s" value="s" checked="checked">
                                            Sim
                                        </label> 
                                        <label class="radio-inline label-left" for="radio-esb-n">
                                            <input type="radio" name="radio-esb" id="radio-esb-n" value="n">
                                            Não
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-5 col-xs-5  col-sm-offset-3 col-xs-8 control-label label-left no-pd-l text-left" for="radio-wcm">Criação de portais (wcm)</label>
                                    <div class="col-md-3 col-sm-4 col-xs-4 no-pd-l label-sn"> 
                                        <label class="radio-inline label-left" for="radio-wcm-s">
                                            <input type="radio" name="radio-wcm" id="radio-wcm-s" value="s" checked="checked">
                                            Sim
                                        </label> 
                                        <label class="radio-inline label-left" for="radio-wcm-n">
                                            <input type="radio" name="radio-wcm" id="radio-wcm-n" value="n">
                                            Não
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-5 col-xs-5  col-sm-offset-3 col-xs-8 control-label label-left no-pd-l text-left" for="radio-analytics">Analytics</label>
                                    <div class="col-md-3 col-sm-4 col-xs-4 no-pd-l label-sn"> 
                                        <label class="radio-inline label-left" for="radio-analytics-s">
                                            <input type="radio" name="radio-analytics" id="radio-analytics-s" value="s" checked="checked">
                                            Sim
                                        </label> 
                                        <label class="radio-inline label-left" for="radio-analytics-n">
                                            <input type="radio" name="radio-analytics" id="radio-analytics-n" value="n">
                                            Não
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-7 col-md-offset-4 col-sm-7 col-sm-offset-5 no-pf-l box-interest-news">
                                        <input type="checkbox" id="interest-news" checked="checked">
                                        <label for="interest-news" class="label-left"> Tenho interesse em receber novidades do fluig</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-md-offset-4 col-sm-4 col-xs-7 col-sm-offset-5 no-padding control-label label-left label-required text-left" for="contact-us-phone">* Preenchimento obrigatório</label>
                                    <div class="col-md-3 col-sm-3 col-xs-5 no-pd-l text-right buttom-form">
                                        <input id="" name="" class="btn btn-magento" type="submit" value="ENVIAR">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- JS SPECIFIC -->
<script src="<?php echo $url_base ?>/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo $url_base ?>/js/jquery.maskedinput-1.3.1.min.js" type="text/javascript"></script>
<script src="<?php echo $url_base ?>/js/script.js" type="text/javascript"></script>
<!-- END JS SPECIFIC -->