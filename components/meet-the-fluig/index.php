<?php
$url_base = "../components/meet-the-fluig";
?>

<!-- CSS SPECIFIC -->
<link href="<?php echo $url_base ?>/css/style.css" rel="stylesheet">
<!-- JS SPECIFIC -->


<div class="container container-meet-the-fluig">
    <div class="row clearfix">
        <div class="col-lg-offset-5 col-md-offset-4 col-sm-offset-4 col-lg-7 col-md-8 col-sm-8">
            <h2>Conheça o fluig</h2>
        </div>
        <div class="col-lg-5 col-md-4 col-sm-4 box-text-meet-the-fluig-l">
            <div class="col-lg-8 col-md-10 no-padding">
                <p>Fluig é uma plataforma de gestão que unifica processos, documentos e identidades para a sua empresa. Tudo isso em uma interface de comunicação colaborativa que pode ser acessada de qualquer lugar e a qualquer hora.</p>
            </div>
        </div>
        <div class=" col-lg-7 col-md-8 col-sm-8 box-text-meet-the-fluig-r">
            <div class="col-md-12 box-text-meet-the-fluig-r-center">
                <p>
                    Após o preenchimento do formulário, a equipe fluig entrará em contato via e-mail para agendamento de uma demonstração virtual.
                </p>
            </div>
        </div>

        <div class="col-lg-7 col-md-8 col-sm-8 box-form-meet-the-fluig clearfix">
            <div class="col-md-12 col-sm-12 col-md-offset-0 box-center-form-meet-the-fluig">
                <form class="form-horizontal" id="form-meet-the-fluig">
                    <fieldset>

                        <!--form part 1-->
                        <div class="form-part-1">
                            <div class="form-group">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label label-left" for="meet-the-fluig-name">Nome*</label>  
                                <div class="col-md-7 col-sm-9 col-xs-9 col-xs-8 no-pd-l">
                                    <input id="meet-the-fluig-name" name="meet-the-fluig-name" type="text" placeholder="" class="form-control input-md" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label label-left" for="meet-the-fluig-email">E-mail* </label>  
                                <div class="col-md-7 col-sm-9 col-xs-9 col-xs-8 no-pd-l">
                                    <input id="meet-the-fluig-email" name="meet-the-fluig-email" type="email" placeholder="" class="form-control input-md" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label label-left" for="meet-the-fluig-phone">Telefone*</label>  
                                <div class="col-md-7 col-sm-9 col-xs-9 col-xs-8 no-pd-l">
                                    <input id="meet-the-fluig-phone" name="meet-the-fluig-phone" type="text" placeholder="" class="form-control input-md" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label label-left" for="meet-the-fluig-company">Empresa*</label>  
                                <div class="col-md-7 col-sm-9 col-xs-9 col-xs-8 no-pd-l">
                                    <input id="meet-the-fluig-company" name="meet-the-fluig-company" type="text" placeholder="" class="form-control input-md" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label label-left" for="meet-the-fluig-cnpj">CNPJ* </label>  
                                <div class="col-md-7 col-sm-9 col-xs-9 col-xs-8 no-pd-l">
                                    <input id="meet-the-fluig-cnpj" name="meet-the-fluig-cnpj" type="text" placeholder="" class="form-control input-md" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 col-md-offset-3 col-sm-5 col-sm-offset-3 col-xs-8 control-label label-left no-pd-l text-left" for="radio-bpm">Gestão de processos (BPM)</label>
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
                                <label class="col-md-4 col-md-offset-3 col-sm-5 col-sm-offset-3 col-xs-8 control-label label-left no-pd-l text-left" for="radio-ecm">Gestão de documentos (ECM)</label>
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
                                <label class="col-md-4 col-md-offset-3 col-sm-5 col-sm-offset-3 col-xs-8 control-label label-left no-pd-l text-left" for="radio-idm">Gestão de identidade (IDM)</label>
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
                                <label class="col-md-4 col-md-offset-3 col-sm-5 col-sm-offset-3 col-xs-8 control-label label-left no-pd-l text-left" for="radio-social">Colaboração / Rede Social <br>Colaborativa (social)</label>
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
                                <label class="col-md-4 col-md-offset-3 col-sm-5 col-sm-offset-3 col-xs-8 control-label label-left no-pd-l text-left" for="radio-esb">Integração entre sistemas (ESB)</label>
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
                                <label class="col-md-4 col-md-offset-3 col-sm-5 col-sm-offset-3 col-xs-8 control-label label-left no-pd-l text-left" for="radio-wcm">Criação de portais (wcm)</label>
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
                                <label class="col-md-4 col-md-offset-3 col-sm-5 col-sm-offset-3 col-xs-8 control-label label-left no-pd-l text-left" for="radio-analytics">Analytics</label>
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
                                <div class="col-md-8 col-md-offset-3 col-sm-9 col-sm-offset-3 no-padding box-interest-news">
                                    <input type="checkbox" id="interest-news" checked="checked">
                                    <label for="interest-news" class="label-left"> Tenho interesse em receber novidades do fluig</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-md-offset-3 col-sm-5 col-sm-offset-3 col-xs-8 control-label label-left no-pd-l text-left label-required" >* Preenchimento obrigatório</label>  
                                <div class="col-md-3 col-sm-4 col-xs-5 no-pd-l text-right buttom-form">
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


<!-- JS SPECIFIC -->
<script src="<?php echo $url_base ?>/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo $url_base ?>/js/jquery.maskedinput-1.3.1.min.js" type="text/javascript"></script>
<script src="<?php echo $url_base ?>/js/script.js" type="text/javascript"></script>
<!-- END JS SPECIFIC -->