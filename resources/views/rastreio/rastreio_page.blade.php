<!DOCTYPE html>
<html>



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Frutas Dourado - Rastreio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet"> --}}

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">

    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">


    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../register/commons.css" />
    <link rel="stylesheet" href="../register/styles.css" />

    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/jquery.animateNumber.min.js"></script>
    <script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="../js/google-map.js"></script>
    <script src="../js/main.js"></script>

    <script src="http://maps.googleapis.com/maps/api/js">
    </script>

    <script>
        // function initialize() {
        //     var mapProp = {
        //         center: new google.maps.LatLng(-13.6924922,-41.8297403),
        //         zoom: 5,
        //         mapTypeId: google.maps.MapTypeId.ROADMAP
        //     };
        //     var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        // }

        // function initMap() {
        // // The location of Uluru
        // //-13.6924922,-41.8275516
        // var uluru = {lat: -13.6922766, lng: -41.8291719};
        // // The map, centered at Uluru
        // var map = new google.maps.Map(
        //     document.getElementById('googleMap'), {zoom: 4, center: uluru});
        // // The marker, positioned at Uluru
        // var marker = new google.maps.Marker({position: uluru, map: map});
        // }

        // google.maps.event.addDomListener(window, 'load', initialize);
    </script>


</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">

                    <h3 class="title has-text-grey">Sistema de Rastreabilidade - Frutas Dourado</h3>

                    <div class="box">
                        <form action="../produtos/edit_prod.php" method="post">

                            <!-- area de campos do form -->
                            <hr />
                            <div class="row">
                                <table style="border:1px solid #cccccc; border-spacing: 10px 10px;" width="50%" cellpadding="10" border="0" align="center">
                                    <tbody>
                                        <tr>
                                            <td align="right">
                                                <p class="lead divcenter bottommargin" style="max-width: 800px;"> <b>PRODUTO:</b> </p>
                                            </td>
                                            <td align="left">
                                                <p id="lbl_produto" class="lead divcenter bottommargin" style="max-width: 800px;"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                <p class="lead divcenter bottommargin" style="max-width: 800px;"> <b>UNIDADE:</b> </p>
                                            </td>
                                            <td align="left">
                                                <p id="lbl_unidade" class="lead divcenter bottommargin" style="max-width: 800px;"> </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                <p class="lead divcenter bottommargin" style="max-width: 800px;"> <b>QUANTIDADE:</b> </p>
                                            </td>
                                            <td align="left">
                                                <p id="lbl_quantidade" class="lead divcenter bottommargin" style="max-width: 800px;"> </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                <p class="lead divcenter bottommargin" style="max-width: 800px;"> <b>NCM:</b> </p>
                                            </td>
                                            <td align="left">
                                                <p id="lbl_ncm" class="lead divcenter bottommargin" style="max-width: 800px;"> </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                <p class="lead divcenter bottommargin" style="max-width: 800px;"> <b>ORIGEM:</b> </p>
                                            </td>
                                            <td align="left">
                                                <p id="lbl_origem" class="lead divcenter bottommargin" style="max-width: 800px;"> </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                <p class="lead divcenter bottommargin" style="max-width: 800px;"> <b>GTIN:</b> </p>
                                            </td>
                                            <td align="left">
                                                <p id="lbl_gtin" class="lead divcenter bottommargin" style="max-width: 800px;"> </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right">
                                                <p class="lead divcenter bottommargin" style="max-width: 800px;"> <b>LOTE:</b> </p>
                                            </td>
                                            <td align="left">
                                                <p id="lbl_lote" class="lead divcenter bottommargin" style="max-width: 800px;"> </p>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <br />
                            <br />
                            <p class="lead divcenter bottommargin" style="max-width: 800px; font-size:medium; ">Clique no mapa para ser redirecionado para a localização de produção declarada: </p>
                            <div id="section-contact" class="page-section notoppadding">
                                <div class="row noleftmargin norightmargin bottommargin-lg common-height">

                                    <!-- <div id="headquarters-map" class="col-lg-8 col-md-6 gmap d-none d-md-block" style="height: 408px; position: relative; overflow: hidden;">
                                        <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                            <div class="gm-err-container">
                                                <div class="gm-err-content">
                                                    <div class="gm-err-icon"><img src="RWA%20Sistema%20Rastreamento%20NVLAKLVM3VFX9KE4_arquivos/icon_error.png" draggable="false" style="user-select: none;"></div>
                                                    <div class="gm-err-title">Ops! Algo deu errado.</div>
                                                    <div class="gm-err-message">Esta p�gina n�o carregou o Google Maps corretamente. Consulte o console JavaScript para ver detalhes t�cnicos.


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div id="googleMap" class="col-lg-8 col-md-6 gmap d-none d-md-block" style="height: 408px; position: relative; overflow: hidden;">
                                    </div> -->
                                    <!-- <label>Clique para visualizar a localização de produção declarada</label> -->
                                    <a id="iFrame_Google" href="#"  target="_blank" title="Ver localização declarada de produção"><img src="../images/google-maps.webp"  class="col-lg-8 col-md-6 gmap d-none d-md-block" style="height: 408px; position: relative; overflow: hidden;" /></a>
                                    <!-- <iframe id="iFrame_Google" class="col-lg-8 col-md-6 gmap d-none d-md-block" style="height: 408px; position: relative; overflow: hidden;" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=52.70967533219885, -8.020019531250002&amp;q=1%20Grafton%20Street%2C%20Dublin%2C%20Ireland&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br /> -->

                                    <div class="col-lg-4 col-md-6" style="background-color: rgb(245, 245, 245); height: 408px;">
                                        <div class="col-padding max-height">
                                            <h3 class="font-body t400 ls1"> </h3>
                                            <div style="font-size: 16px; line-height: 1.7;">
                                                <address style="line-height: 1.7;">
                                                    <strong>ORIGEM DECLARADA:</strong><br>
                                                    <label id="lbl_prod_razao"></label><br />
                                                    <label id="lbl_prod_cnpj"></label><br />
                                                    <label id="lbl_prod_inscr_estadual"></label><br />
                                                    <label id="lbl_prod_endereco"></label> <label id="lbl_prod_numero"></label> <label id="lbl_prod_complemento"></label> <label id="lbl_prod_bairro"></label><br />
                                                    <label id="lbl_prod_cidade"></label>, <label id="lbl_prod_uf"></label><br />
                                                    <label id="lbl_prod_cep"></label><br />
                                                </address>
                                                <div class="clear topmargin-sm"></div>
                                                <address style="line-height: 1.7;">
                                                    <strong>DISTRIBUIDOR:</strong><br>
                                                    <label id="lbl_distr_razao"></label><br />
                                                    <label id="lbl_distr_cnpj"></label><br />
                                                    <label id="lbl_distr_inscr_estadual"></label><br />
                                                    <label id="lbl_distr_endereco"></label> <label id="lbl_distr_numero"></label> <label id="lbl_distr_complemento"></label> <label id="lbl_distr_bairro"></label><br />
                                                    <label id="lbl_distr_cidade"></label>, <label id="lbl_distr_uf"></label><br />
                                                    <label id="lbl_distr_cep"></label><br />
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <hr />
    <?php include_once('../footer.php'); ?>

</body>

</html>

<script type="text/javascript">
    $(document).ready(function() {
        var sLote = <?php echo $lote ?>;
        //-13.6924922,-41.8297403
        //$('#iFrame_Google').attr('src', 'https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=52.70967533219885, -8.020019531250002&amp;q=1%20Grafton%20Street%2C%20Dublin%2C%20Ireland&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed');
        //$('#iFrame_Google').attr('src', 'https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=-13.6924922,-41.8297403;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed');

        var sLat = -13.6924922;
        var sLon = -41.8297403;
        $('#iFrame_Google').attr('href', 'https://goo.gl/maps/oCV2stsEC83nj1Hm6');
        //$('#iFrame_Google').attr('href', 'https://www.google.com/maps/@' + sLat + ',' + sLon + '');

        //document.getElementById("iFrame_Google").contentDocument.location.reload(true);
        //https://www.google.com/maps/@-10.944512,-37.0737152,15z
        //document.getElementById('iFrame_Google').innerHTML 
        function read_prop(obj, prop) {
            return obj[prop];
        }
        //var sLote1 = JSON.parse(sLote);
        console.log(read_prop(sLote, "descricao_prod"));
        //document.getElementById('lblCNPJ').innerHTML  = read_prop(sLote,"p_cnpj");
        document.getElementById('lbl_produto').innerHTML = read_prop(sLote, "descricao_prod");
        document.getElementById('lbl_unidade').innerHTML = read_prop(sLote, "unidade");
        document.getElementById('lbl_quantidade').innerHTML = read_prop(sLote, "quantidade");
        document.getElementById('lbl_ncm').innerHTML = read_prop(sLote, "ncm");
        document.getElementById('lbl_origem').innerHTML = read_prop(sLote, "origem");


        var sGtin = read_prop(sLote, "gtin");

        if (sGtin) {
            document.getElementById('lbl_gtin').innerHTML = sGtin;

        } else {
            document.getElementById('lbl_gtin').innerHTML = "GTIN NÃO DECLARADO";
        }

        document.getElementById('lbl_lote').innerHTML = read_prop(sLote, "Lote");
        document.getElementById('lbl_prod_razao').innerHTML = read_prop(sLote, "p_razao_social");
        document.getElementById('lbl_prod_cnpj').innerHTML = read_prop(sLote, "p_cnpj");
        document.getElementById('lbl_prod_inscr_estadual').innerHTML = read_prop(sLote, "d_inscr_estadual");
        document.getElementById('lbl_prod_endereco').innerHTML = read_prop(sLote, "p_endereco");
        document.getElementById('lbl_prod_numero').innerHTML = read_prop(sLote, "p_numero");
        document.getElementById('lbl_prod_complemento').innerHTML = read_prop(sLote, "p_compl");
        document.getElementById('lbl_prod_bairro').innerHTML = read_prop(sLote, "p_bairro");
        document.getElementById('lbl_prod_cidade').innerHTML = read_prop(sLote, "p_cidade");
        document.getElementById('lbl_prod_uf').innerHTML = read_prop(sLote, "p_uf");
        document.getElementById('lbl_prod_cep').innerHTML = read_prop(sLote, "p_CEP");

        document.getElementById('lbl_distr_razao').innerHTML = read_prop(sLote, "d_razao_social");
        document.getElementById('lbl_distr_cnpj').innerHTML = read_prop(sLote, "d_cnpj");
        document.getElementById('lbl_distr_inscr_estadual').innerHTML = read_prop(sLote, "d_inscr_estadual");
        document.getElementById('lbl_distr_endereco').innerHTML = read_prop(sLote, "d_endereco");
        document.getElementById('lbl_distr_numero').innerHTML = read_prop(sLote, "d_numero");
        document.getElementById('lbl_distr_complemento').innerHTML = read_prop(sLote, "d_compl");
        document.getElementById('lbl_distr_bairro').innerHTML = read_prop(sLote, "d_bairro");
        document.getElementById('lbl_distr_cidade').innerHTML = read_prop(sLote, "d_cidade");
        document.getElementById('lbl_distr_uf').innerHTML = read_prop(sLote, "d_uf");
        document.getElementById('lbl_distr_cep').innerHTML = read_prop(sLote, "d_CEP");
        //document.getElementById('descr_produto').innerHTML  = read_prop(sLote,"descricao_prod");

        //$('#lblCNPJ').text(read_prop(sLote,"p_cnpj"));
        console.log(sLote);
    });
</script>

<script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAslbCZXAPRpMYksiU0aJgDpJf4u22Azns&callback=initMap">
</script>
