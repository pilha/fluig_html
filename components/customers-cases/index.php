<?php
$url_base = "../components/customers-cases";
?>

<!-- CSS SPECIFIC -->
<link href="<?php echo $url_base ?>/css/style.css" rel="stylesheet">
<!-- JS SPECIFIC -->


<div class="container container_customers_cases">
    <div class="row clearfix">
        <div class="col-md-12">
            <h2>Nossos clientes</h2>
            <p class="desc_page_customers">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="col-sm-8 no-padding no-pd-xs">
            <form class="form-horizontal">
                <fieldset>
                    <!-- Select Basic -->
                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-6 col-12-mobile no-padding clearfix">
                        <div class="clearfix col-md-12 box-select box-select-options">  
                            <label for="selectSegment">Segmento:</label>
                            <input placeholder="Selecione" name="selectSegment" id="selectSegment" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">

                            <div class="clearfix box-checkbox selectSegmentBox">       
                                <div class=" col-md-12 no-padding ">
                                    <input type="checkbox" id="test1" />
                                    <label for="test1">teste 1</label>
                                </div>
                                <div class=" col-md-12 no-padding">
                                    <input type="checkbox" id="test2" />
                                    <label for="test2">teste 2</label>
                                </div>
                                <div class=" col-md-12 no-padding">
                                    <input type="checkbox" id="test3" />
                                    <label for="test3">teste 3</label>
                                </div>
                                <div class=" col-md-12 no-padding">
                                    <input type="checkbox" id="test4" />
                                    <label for="test4">teste 4</label>
                                </div>
                                <div class=" col-md-12 no-padding">
                                    <input type="checkbox" id="test5" />
                                    <label for="test5">teste 5</label>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <!-- Select Basic -->
                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-6 col-12-mobile no-padding clearfix">
                        <div class="clearfix col-md-12 box-select box-select-options">  
                            <label for="selectCard">Card:</label>
                            <input placeholder="Selecione" name="selectCard" id="selectCard" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">

                            <div class="clearfix box-checkbox selectCardBox">       
                                <div class=" col-md-12 no-padding ">
                                    <input type="checkbox" id="test6" />
                                    <label for="test6">teste 1</label>
                                </div>
                                <div class=" col-md-12 no-padding">
                                    <input type="checkbox" id="test7" />
                                    <label for="test7">teste 2</label>
                                </div>
                                <div class=" col-md-12 no-padding">
                                    <input type="checkbox" id="test8" />
                                    <label for="test8">teste 3</label>
                                </div>
                                <div class=" col-md-12 no-padding">
                                    <input type="checkbox" id="test9" />
                                    <label for="test9">teste 4</label>
                                </div>
                                <div class=" col-md-12 no-padding">
                                    <input type="checkbox" id="test10" />
                                    <label for="test10">teste 5</label>
                                </div>
                            </div>
                        </div>
                    </div> 

                </fieldset>
            </form>
        </div> 
        <div class="col-sm-4">
            <form class="form-horizontal">
                <fieldset>
                    <div class="form-group">
                        <label class="col-lg-7 col-md-9 col-md-offset-3 col-lg-offset-5" for="textinput">Pesquisar por nome:</label>  
                        <div class="col-lg-7 col-md-9 col-md-offset-3 col-lg-offset-5">
                            <input id="inputSearch" name="inputSearch" type="text" placeholder="Digite o nome" class="form-control">
                            <button id="buttonSearch" name="buttonSearch" class="btn"></button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>  
    </div>
    <hr>
</div>
<div class="container transition">
    <div class="row no-padding box-customers">            
        <div class="col-md-2 col-sm-3 col-xs-4 box_img_center box_customer_img box_customer_open col-6-mobile" data-id="1">
            <div class="col-md-12 customer-img">
                <img src="<?php echo $url_base ?>/images/customer.jpg" alt="customer">   
                <div class="icons-customer-img">
                    <img src="<?php echo $url_base ?>/images/icon_pdf.png" alt="pdf">   
                    <img src="<?php echo $url_base ?>/images/icon_video.png" alt="video">   
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4 box_img_center box_customer_img box_customer_open col-6-mobile" data-id="2">
            <div class="col-md-12 customer-img">
                <img src="<?php echo $url_base ?>/images/customer.jpg" alt="customer">   
                <div class="icons-customer-img">
                    <img src="<?php echo $url_base ?>/images/icon_video.png" alt="video">   
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4 box_img_center box_customer_img box_customer_open col-6-mobile" data-id="3">
            <div class="col-md-12 customer-img">
                <img src="<?php echo $url_base ?>/images/customer.jpg" alt="customer">   
                <div class="icons-customer-img">
                    <img src="<?php echo $url_base ?>/images/icon_pdf.png" alt="pdf">    
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4 box_img_center box_customer_img box_customer_open col-6-mobile" data-id="4">
            <div class="col-md-12 customer-img">
                <img src="<?php echo $url_base ?>/images/customer.jpg" alt="customer">   
            </div> 
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4 box_img_center box_customer_img box_customer_open col-6-mobile" data-id="5">
            <div class="col-md-12 customer-img">
                <img src="<?php echo $url_base ?>/images/customer.jpg" alt="customer">   
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4 box_img_center box_customer_img box_customer_open col-6-mobile" data-id="6">
            <div class="col-md-12 customer-img">
                <img src="<?php echo $url_base ?>/images/customer.jpg" alt="customer">   
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4 box_img_center box_customer_img box_customer_open col-6-mobile" data-id="7">
            <div class="col-md-12 customer-img">
                <img src="<?php echo $url_base ?>/images/customer.jpg" alt="customer">   
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4 box_img_center box_customer_img box_customer_open col-6-mobile" data-id="8">
            <div class="col-md-12 customer-img">
                <img src="<?php echo $url_base ?>/images/customer.jpg" alt="customer">   
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4 box_img_center box_customer_img box_customer_open col-6-mobile" data-id="9">
            <div class="col-md-12 customer-img">
                <img src="<?php echo $url_base ?>/images/customer.jpg" alt="customer">   
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4 box_img_center box_customer_img box_customer_open col-6-mobile" data-id="10">
            <div class="col-md-12 customer-img">
                <img src="<?php echo $url_base ?>/images/customer.jpg" alt="customer">   
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4 box_img_center box_customer_img box_customer_open col-6-mobile" data-id="11">
            <div class="col-md-12 customer-img">
                <img src="<?php echo $url_base ?>/images/customer.jpg" alt="customer">   
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4 box_img_center box_customer_img box_customer_open col-6-mobile" data-id="12">
            <div class="col-md-12 customer-img">
                <img src="<?php echo $url_base ?>/images/customer.jpg" alt="customer">   
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4 box_img_center box_customer_img box_customer_open col-6-mobile" data-id="13">
            <div class="col-md-12 customer-img">
                <img src="<?php echo $url_base ?>/images/customer.jpg" alt="customer">   
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4 box_img_center box_customer_img box_customer_open col-6-mobile" data-id="14">
            <div class="col-md-12 customer-img">
                <img src="<?php echo $url_base ?>/images/customer.jpg" alt="customer">   
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4 box_img_center box_customer_img box_customer_open col-6-mobile" data-id="15">
            <div class="col-md-12 customer-img">
                <img src="<?php echo $url_base ?>/images/customer.jpg" alt="customer">   
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4 box_img_center box_customer_img box_customer_open col-6-mobile" data-id="16">
            <div class="col-md-12 customer-img">
                <img src="<?php echo $url_base ?>/images/customer.jpg" alt="customer">   
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4 box_img_center box_customer_img box_customer_open col-6-mobile" data-id="17">
            <div class="col-md-12 customer-img">
                <img src="<?php echo $url_base ?>/images/customer.jpg" alt="customer">   
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4 box_img_center box_customer_img box_customer_open col-6-mobile" data-id="18">
            <div class="col-md-12 customer-img">
                <img src="<?php echo $url_base ?>/images/customer.jpg" alt="customer">   
            </div>
        </div>
    </div>
</div>
<!--<div class="container box-info-customer clearfix">-->
<div class="box-info-customer col-md-12 col-sm-12 col-xs-12 ">
    <div class="close-box-info-customer">

    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- A class "info-customer-video" só deve ser inserida caso o cliente tenha vídeo--> 
            <div class="info-customer info-customer-video col-md-12 transition">
                <div class="info-customer-desc">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.
                    Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                </p>

                <a href="#" alt="Acesse o site"><img src="<?php echo $url_base ?>/images/site_customer.png" alt="Site cliente Cliente">Acesse o site</a>
                <a href="#" alt="Baixar o pdf"> <img src="<?php echo $url_base ?>/images/download_customer.png" alt="Download pdf Cliente">Baixar o pdf</a>
                <p class="text-testimony">
                    Nam venenatis metus nunc, gravida pharetra lorem consectetur sit amet. Nulla facilisi. Donec eleifend nisi ut nisl finibus dapibus. Duis quis
                    magna erat. Cras efficitur lacus et lacus gravida pellentesque. 
                </p>
                <p class="name-testimony">
                    <b>Carlos Roberto</b><br>
                    Diretor Executivo NeoPlastic
                </p>
                </div>
                <iframe width="40%" height="250px" src="https://www.youtube.com/embed/TOQqWydC408" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!-- JS SPECIFIC -->
<script src="<?php echo $url_base ?>/js/script.js" type="text/javascript"></script>
<!-- END JS SPECIFIC -->