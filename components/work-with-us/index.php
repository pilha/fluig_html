<?php
$url_base = "../components/work-with-us";
?>

<!-- CSS SPECIFIC -->
<link href="<?php echo $url_base ?>/css/style.css" rel="stylesheet">
<!-- JS SPECIFIC -->


<div class="container container-work-with-us">
    <div class="row clearfix">
        <div class="col-lg-8 col-md-7">
            <h2>Trabalhe Conosco</h2>
            <div class="col-md-9 no-padding box-text-work-with-us">
                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut iaculis dolor turpis,
                    Phasellus pretium, sapien at interdum tempus, sem risus pharetra erat.</p>
            </div>
        </div>
        <div class="col-lg-8 col-md-7 col-sm-7 no-padding box-image-work-with-us">
            <img src="<?php echo $url_base ?>/images/img-work-with-us.png" slt="trabalhe conosco" class="img-resonsive"> 
        </div>

        <div class="col-lg-4 col-md-5 no-padding box-form-work-with-us clearfix">
            <div class="col-lg-11 col-md-12 col-md-offset-0 col-sm-5 col-sm-offset-7 box-center-form-work-with-us">

                <form class="form-horizontal" id="form-work-with-us">
                    <fieldset>

                        <div class="form-group">
                            <label class="col-md-4 col-sm-4 col-xs-4 control-label label-left" for="work-with-us-name">Nome *</label>  
                            <div class="col-md-8 col-sm-8 col-xs-8 col-xs-8 no-pd-l">
                                <input id="work-with-us-name" name="work-with-us-name" type="text" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 col-sm-4 col-xs-4 control-label label-left" for="work-with-us-email">E-mail * </label>  
                            <div class="col-md-8 col-sm-8 col-xs-8 col-xs-8 no-pd-l">
                                <input id="work-with-us-email" name="work-with-us-email" type="email" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 col-sm-4 col-xs-4 control-label label-left" for="work-with-us-phone">Telefone *</label>  
                            <div class="col-md-8 col-sm-8 col-xs-8 col-xs-8 no-pd-l">
                                <input id="work-with-us-phone" name="work-with-us-phone" type="text" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 col-sm-4 col-xs-4 control-label label-left" for="work-with-us-cpf">CPF * </label>  
                            <div class="col-md-8 col-sm-8 col-xs-8 col-xs-8 no-pd-l">
                                <input id="work-with-us-cpf" name="work-with-us-cpf" type="text" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="clearfix col-md-12 col-sm-12 col-xs-12 box-select box-select-options no-padding">  
                                <label class="col-md-4 col-sm-4 col-xs-4 control-label label-left" for="selectSubject">Assunto:</label>
                                <div class="col-md-8 col-sm-8 col-xs-8 col-xs-8 no-pd-l">
                                    <input placeholder="Selecione" name="selectSubject" id="selectSubject" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false" required>
                                    <input name="selectSubjectHidden" id="selectSubjectHidden" type="hidden">
                                    <div class="clearfix box-checkbox box-radios selectSubjectBox" style="display: none;">       
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
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 col-sm-4 col-xs-4 control-label label-left no-pd-t" for="work-with-us-file">Anexar <br>Currículo *</label>
                            <div class="col-md-8 col-sm-8 col-xs-8 col-xs-8 no-pd-l">
                                <input id="uploadFile" name="uploadFile" placeholder="Selecione um arquivo" type="text" class="form-control text-input-file" required/>
                                <input id="work-with-us-file" type="file" class=" input-upload-file" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-7 col-sm-5 col-xs-7 no-pd-r control-label label-required" for="work-with-us-submit">* Preenchimento obrigatório</label>
                            <div class="col-md-5 col-sm-7 col-xs-5 no-pd-l text-right buttom-form">
                                <input id="work-with-us-submit" name="work-with-us-submit" class="btn btn-green" type="submit" value="ENVIAR">
                            </div>
                        </div>
                        
                    </fieldset>
                </form>

            </div>
        </div>
    </div>
    <hr>
</div>


<!-- JS SPECIFIC -->
<script src="<?php echo $url_base ?>/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo $url_base ?>/js/jquery.maskedinput-1.3.1.min.js" type="text/javascript"></script>
<script src="<?php echo $url_base ?>/js/script.js" type="text/javascript"></script>
<!-- END JS SPECIFIC -->