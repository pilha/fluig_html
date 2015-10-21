<?php
$url_base = "../components/search-customers";
?>

<!-- CSS SPECIFIC -->
<link href="<?php echo $url_base ?>/css/style.css" rel="stylesheet">
<!-- JS SPECIFIC -->


<div class="container container_search_customers">
    <div class="row clearfix">
        <div class="col-md-12">
            <h2>Encontre um Parceiro</h2>
            <p class="desc_page_search_customers">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pellentesque ullamcorper volutpat. Sed euismod nisi ante, id condimentum metus hendrerit et.
                Pellentesque id viverra turpis, quis tincidunt metus.</p>
        </div>
        <div class="col-sm-12 no-padding no-pd-xs">
            <form class="form-horizontal">
                <fieldset>
                    <!-- Select Basic -->
                    <div class="col-lg-1 col-md-2 col-sm-4 col-xs-6 col-12-mobile no-padding clearfix">
                        <div class="clearfix col-md-12 box-select box-select-options">  
                            <label for="selectState">Estado:</label>
                            <input name="selectState" id="selectState" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false" value="SP">
                            <input name="selectStateHidden" id="selectStateHidden" type="hidden" >

                            <div class="clearfix box-checkbox box-radios selectStateBox">       
                                <div class=" col-md-12 no-padding ">
                                    <input type="radio" name="teste" id="test1" />
                                    <label for="test1">SP</label>
                                </div>
                                <div class=" col-md-12 no-padding">
                                    <input type="radio" name="teste" id="test2" />
                                    <label for="test2">RJ</label>
                                </div>
                                <div class=" col-md-12 no-padding">
                                    <input type="radio" name="teste" id="test3" />
                                    <label for="test3">MG</label>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <!-- Select Basic -->
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 col-12-mobile no-padding clearfix">
                        <div class="clearfix col-md-12 box-select box-select-options">  
                            <label for="selectCity">Cidade:</label>
                            <input placeholder="Selecione" name="selectCity" id="selectCity" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">
                            <input name="selectCityHidden" id="selectCityHidden" type="hidden" >

                            <div class="clearfix box-checkbox box-radios selectCityBox">       
                                <div class=" col-md-12 no-padding ">
                                    <input type="radio" id="test4" />
                                    <label for="test4">teste 1</label>
                                </div>
                                <div class=" col-md-12 no-padding">
                                    <input type="radio" id="test5" />
                                    <label for="test5">teste 2</label>
                                </div>
                                <div class=" col-md-12 no-padding">
                                    <input type="radio" id="test6" />
                                    <label for="test6">teste 3</label>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <!-- Select Basic -->
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 col-12-mobile no-padding clearfix">
                        <div class="clearfix col-md-12 box-select box-select-options">  
                            <label for="selectCategory">Categoria:</label>
                            <input placeholder="Selecione" name="selectCategory" id="selectCategory" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">
                            <input name="selectCategoryHidden" id="selectCategoryHidden" type="hidden" >

                            <div class="clearfix box-checkbox selectCategoryBox">       
                                <div class=" col-md-12 no-padding ">
                                    <input type="checkbox" id="test7" />
                                    <label for="test7">teste 1</label>
                                </div>
                                <div class=" col-md-12 no-padding">
                                    <input type="checkbox" id="test8" />
                                    <label for="test8">teste 2</label>
                                </div>
                                <div class=" col-md-12 no-padding">
                                    <input type="checkbox" id="test9" />
                                    <label for="test9">teste 3</label>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <!-- Select Basic -->
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 col-12-mobile no-padding clearfix">
                        <div class="clearfix col-md-12 box-select box-select-options">  
                            <label for="selectSpeciality">Especialidade:</label>
                            <input placeholder="Selecione" name="selectSpeciality" id="selectSpeciality" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">
                            <input name="selectSpecialityHidden" id="selectSpecialityHidden" type="hidden" >

                            <div class="clearfix box-checkbox selectSpecialityBox">       
                                <div class=" col-md-12 no-padding ">
                                    <input type="checkbox" id="test10" />
                                    <label for="test10">teste 1</label>
                                </div>
                                <div class=" col-md-12 no-padding">
                                    <input type="checkbox" id="test11" />
                                    <label for="test11">teste 2</label>
                                </div>
                                <div class=" col-md-12 no-padding">
                                    <input type="checkbox" id="test12" />
                                    <label for="test12">teste 3</label>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <!-- Select Basic -->
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 col-12-mobile no-padding clearfix">
                        <div class="clearfix col-md-12 box-select box-select-options">  
                            <label for="selectSegment">Segmento:</label>
                            <input placeholder="Selecione" name="selectSegment" id="selectSegment" type="text" class="form-control input_dropdown" readonly="readonly" aria-invalid="false">
                            <input name="selectSegmentHidden" id="selectSegmentHidden" type="hidden" >

                            <div class="clearfix box-checkbox selectSegmentBox">       
                                <div class=" col-md-12 no-padding ">
                                    <input type="checkbox" id="test13" />
                                    <label for="test13">teste 1</label>
                                </div>
                                <div class=" col-md-12 no-padding">
                                    <input type="checkbox" id="test14" />
                                    <label for="test14">teste 2</label>
                                </div>
                                <div class=" col-md-12 no-padding">
                                    <input type="checkbox" id="test15" />
                                    <label for="test15">teste 3</label>
                                </div>
                            </div>
                        </div>
                    </div> 
                </fieldset>
            </form>
        </div> 
    </div>
    <hr>
</div>
<div class="container transition clearfix">
    <div class="row no-padding ">            

        <div class="col-md-4 col-sm-4 col-xs-12 box-search-customers customer-img box_with_case" data-id="1">

            <div class="trapezoidBand">
            </div>
            <div class="band">
                <p>
                    PREMIUM
                    PARTNER
                </p>
            </div>
            <div class="col-md-12 col-xs-12 box-search-customers-center">
                <div class="col-md-5 col-sm-12 col-xs-5 box_img_center">
                    <img src="<?php echo $url_base ?>/images/customer.jpg" alt="customer">   
                </div>
                <div class="col-md-7 col-sm-12 col-xs-7 desc-customers no-pd-r no-pd-sm">
                    <p> 
                        <span class="text-bussiness">BUSSINESS </span>
                        <span class="text-developer">DEVELOPER</span>
                        <span class="text-partner">PARTNER</span>  
                    </p>
                    <a href="" alt="" class="site">www.asuris.com.br</a>
                    <p class="ver-mais">Ver mais</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 box-search-customers customer-img box_with_case" data-id="2">
            <div class="col-md-12 col-xs-12 box-search-customers-center" >
                <div class="col-md-5 col-sm-12 col-xs-5 box_img_center">
                    <img src="<?php echo $url_base ?>/images/customer.jpg" alt="customer">   
                </div>
                <div class="col-md-7 col-sm-12 col-xs-7 desc-customers no-pd-r no-pd-sm">
                    <p> 
                        <span class="text-bussiness">BUSSINESS </span>
                        <span class="text-partner">PARTNER</span>  
                    </p>
                    <a href="" alt="" class="site">www.asuris.com.br</a>
                    <p class="ver-mais">Ver mais</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 box-search-customers customer-img box_with_case" data-id="3">
            <div class="col-md-12 col-xs-12 box-search-customers-center">
                <div class="col-md-5 col-sm-12 col-xs-5 box_img_center">
                    <img src="<?php echo $url_base ?>/images/customer.jpg" alt="customer">   
                </div>
                <div class="col-md-7 col-sm-12 col-xs-7 desc-customers no-pd-r no-pd-sm">
                    <p> 
                        <span class="text-bussiness">BUSSINESS </span>
                        <span class="text-partner">PARTNER</span>  
                    </p>
                    <a href="" alt="" class="site">www.asuris.com.br</a>
                    <p class="ver-mais">Ver mais</p>
                </div>
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
            <div class="info-customer info-search-customer col-md-12 transition">
                <div class="col-md-3 box_img_center box-img-customer box-no-float">
                    <img src="<?php echo $url_base ?>/images/customer2.png" alt="Cliente">
                </div>
                <div class="box-no-float info-customer-desc ">
                    <div class="col-md-6 box-text">
                        <h2>ALIANÇA CONSULTORIA</h2>
                        <h3 class="size14">PARCEIRO TOP 5</h3>
                        <p class="size14">Varejo e Serviços</p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.
                            Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient.
                        </p>
                    </div>
                    <div class="col-md-6 box-email">
                        <img src="<?php echo $url_base ?>/images/email.png" alt="Download pdf Cliente">
                        <a href="#" alt="email" class="link_email"> 
                            fernando.vasconcellos@aliancaconsultoria.com.br
                        </a>
                        <a href="#" alt="email" class="link_email"> 
                            rodrigo.gomes@aliancaconsultoria.com.br
                        </a>
                        <a href="#" alt="Acesse o site"><img src="<?php echo $url_base ?>/images/site.png" alt="Site cliente Cliente">www.consultoriaalianca.com.br</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- JS SPECIFIC -->
<script src="<?php echo $url_base ?>/js/script.js" type="text/javascript"></script>
<!-- END JS SPECIFIC -->