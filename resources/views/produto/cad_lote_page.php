<!DOCTYPE html>
<html>
<?php
    session_start();
    require_once $_SERVER['DOCUMENT_ROOT'].'/conexao.php';
    include('../verifica_login.php');

    include_once ('../administrativo.php');

    $origens = findParceiros( 'produtor');
    $distribuidores = findParceiros('distribuidor');

    $produtos = findProdCliente();
    $row = mysqli_num_rows($produtos);
		
	if ($row > 0) {
        $rows = $produtos->fetch_array(MYSQLI_NUM);
        $post = array();
        while($row2 = $produtos->fetch_array())
        {
            $posts[] = $row2;
        }
    }

    


    
    //$rows[] = mysql_fetch_array($produtos);
    $prodItem = "";
    function fncAtualizar (){
        $produtos = findProdCliente();
    }



?>



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Frutas Dourado</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
   
    <link rel="stylesheet" href="https://e6t7a8v2.stackpathcdn.com/tutorial/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    
    

</head>

<body>
    <div id="dvPopupStatus" class="popup" data-popup="popup-dadosStatus">

        <div id="dvPopupDadosStatus" class="popup-inner">



            <div id="ToDisplayResultStatus"></div>



        </div>


    </div>

    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">

                    <h3 class="title has-text-grey">Cadastro de Lotes</h3>
                   
                    <div class="box border-primary rounded">
                        <!-- <form action="cad_lote.php" method="POST"> -->


                            <hr />
                            <div style="border:1px solid blue;">
                                <div class="row">
                                    <div class="form-group col-md-7" style="margin-left:5px;">
                                        <label for="name" style="margin-left:5px;">SELECIONE PRODUTO</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-7" style="margin-left:5px;">
                                    <label for="name" style="font-weight: normal;font-style: italic;">Descrição </label>
                                    <!-- <input type="text" class="form-control" name="descricao" disabled> onchange="fncMudaProdJs(this);" -->
                                    <select class="form-control" id="descricao" name="descricao" placeholder="Descrição" onchange="fncMudaProdJs(this);"> <!-- onchange="?findProdSelect(this)"> -->
                                        <option value=""></option>
                                        <?php if ($produtos) : ?>
                                            <?php foreach ($produtos as $produto) : ?>
                                                <option value="<?php echo $produto['id']; ?>" ><?php echo $produto['descricao']; ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                    </div>

                                    <div class="form-group col-md-3" style="margin-left:5px;">
                                        <label for="campo2" style="font-weight: normal;font-style: italic;">NCM</label>
                                        <input type="text"  class="form-control" name="ncm1" id="ncm1" disabled value="">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="campo3"></label>
                                        <input type="hidden" class="form-control" name="id_produto" id="id_produto">
                                    </div>
                                </div>
                                
                                <div class="row" >
                                    <div class="form-group col-md-5" style="margin-left:5px;">
                                        <label for="campo1" style="font-weight: normal;font-style: italic;">GTIN</label>
                                        <input type="text" class="form-control" name="gtin1" id="gtin1" disabled value="">
                                    </div>

                                    <div class="form-group col-md-3" style="margin-left:5px;">
                                        <label for="campo2" style="font-weight: normal;font-style: italic;">Tipo</label>
                                        <input type="text" class="form-control" name="tipo1" disabled> 
                            
                                    </div>
                               
                    
                                    <div class="form-group col-md-2" style="margin-left:5px;">
                                    <!-- <label for="campo3">Data de Cadastro</label>
                                    <input type="text" class="form-control" name="customer['created']" disabled> -->
                                    
                                        <button class="btn btn-primary " id="btnNovoProduto" style="margin-left:10px; vertical-align:middle;">Novo Produto</button>                
                                            
                                        
                                    </div>
                           
                                </div>
                                
                                <!-- <div class="form-group col-md-7" style="margin-left:5px;">
                                        <label for="name">Origem Declarada</label>
                                        <table>
                                            <tr>
                                                <td>
                                                    <select class="form-control" id="distribuidor_decl" name="origem_decl" placeholder="Origem declarada" onchange="fncMudaOrigemJs(this);" style="width: 400px;" > <!-- onchange="?findProdSelect(this)"> ->
                                                        <option value=""></option>
                                                      
                                                    </select>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary" id="btnNovoProdutor" style="margin-left:10px;">Novo Produtor</button>                
                                                </td>
                                            </tr>
                                        </table>

                                    </div>    

                                    <-- <div class="form-group col-md-2" style="margin-left:5px;">
                                        
                                    </div> ->
                            
                            
                                </div>                 -->
                            </div>
                            <hr />
                            

                            <h3 class="title has-text-grey">Dados do Lote</h3>                        
                            
                            <div style="border:1px solid blue;">
                                <br>
                                <div class="row" >
                                    <div class="control" style="margin-left:5px;">

                                            <table>

                                                <tr>
                                                    <td width="200px;">
                                                        <div class="form-group col-md-5" style="margin-left:5px;">
                                                            <label for="campo3">Quantidade</label>
                                                            <input name="quantidade" type="number" min="0" class="form-control input is-large" style="width: 200px;" placeholder="" autofocus=""><!--    -->
                                                        </div>
                                                    </td>

                                                    <td width="200px;">
                                                        <div class="form-group col-md-7" style="margin-left:5px;">
                                                            <label for="campo2">Unidade</label>
                                                            <select class="form-control" id="unidade_lote" name="unidade_lote" placeholder="" style=" width:300px;">
                                                                <option value="CAIXA">CAIXA</option>
                                                                <option value="KG">Quilo</option>
                                                                <option value="GRAMA">GRAMA</option>
                                                                <option value="LITRO">LITRO</option>
                                                                <option value="MIL_UNIDADES">MIL UNIDADES</option>    
                                                                <option value="SACA">SACA</option>
                                                                <option value="TONELADA">TONELADA</option>
                                                                <option value="UNIDADE">UNIDADE</option>
                                                            </select>
                                                        </div>          
                                                    </td>
                                                    <td>
                                                        <div class="form-group col-md-7" style="margin-left:5px;">
                                                            <label for="campo3">Origem</label>
                                                            <!-- <input type="text" class="form-control" name="customer['zip_code']"> -->
                                                            <select class="form-control" id="origem" name="origem" placeholder="
                                                            Origem" >
                                                                <option value="AF">AFEGANISTÃO</option>
                                                                <option value="ZA">ÁFRICA DO SUL</option>
                                                                <option value="AL">ALBÂNIA</option>
                                                                <option value="DE">ALEMANHA</option>
                                                                <option value="AD">ANDORRA</option>
                                                                <option value="AO">ANGOLA</option>
                                                                <option value="AI">ANGUILLA</option>
                                                                <option value="MK">ANTIGA REPÚBLICA IUGOSLAVA DA MACEDÔNIA</option>
                                                                <option value="AG">ANTÍGUA E BARBUDA</option>
                                                                <option value="AN">ANTILHAS HOLANDESAS</option>
                                                                <option value="SA">ARÁBIA SAUDITA</option>
                                                                <option value="DZ">ARGÉLIA</option>
                                                                <option value="AR">ARGENTINA</option>
                                                                <option value="AM">ARMÊNIA</option>
                                                                <option value="AW">ARUBA</option>
                                                                <option value="AU">AUSTRÁLIA</option>
                                                                <option value="AT">ÁUSTRIA</option>
                                                                <option value="AZ">ARZEBAIDJÃO</option>
                                                                <option value="BS">BAHAMAS</option>
                                                                <option value="BD">BANGLADESH</option>
                                                                <option value="BB">BARBADOS</option>
                                                                <option value="BH">BAREINE</option>
                                                                <option value="BY">BELARUS</option>
                                                                <option value="BE">BÉLGICA</option>
                                                                <option value="BZ">BELIZE</option>
                                                                <option value="BJ">BENIN</option>
                                                                <option value="BM">BERMUDA</option>
                                                                <option value="BO">BOLÍVIA</option>
                                                                <option value="BA">BÓSNIA E HERZEGÓVINA</option>
                                                                <option value="BW">BOTSWANA</option>
                                                                <option value="BR" selected="true">BRASIL</option>
                                                                <option value="BN">BRUNEI DARUSSALAM</option>
                                                                <option value="BG">BULGÁRIA</option>
                                                                <option value="BF">BURKINA FASO</option>
                                                                <option value="BI">BURUNDI</option>
                                                                <option value="BT">BUTÃO</option>
                                                                <option value="CV">CABO VERDE</option>
                                                                <option value="CM">CAMARÕES</option>
                                                                <option value="KH">CAMBOJA</option>
                                                                <option value="CA">CANADÁ</option>
                                                                <option value="QA">CATAR</option>
                                                                <option value="KZ">CAZAQUISTÃO</option>
                                                                <option value="TD">CHADE</option>
                                                                <option value="CL">CHILE</option>
                                                                <option value="ES">ESPANHA</option>
                                                                <option value="CY">CHIPRE</option>
                                                                <option value="CO">COLÔMBIA</option>
                                                                <option value="KM">COMORES</option>
                                                                <option value="CG">CONGO</option>
                                                                <option value="CI">COSTA DO MARFIM</option>
                                                                <option value="CR">COSTA RICA</option>
                                                                <option value="HR">CROÁCIA</option>
                                                                <option value="CU">CUBA</option>
                                                                <option value="DK">DINAMARCA</option>
                                                                <option value="DJ">DJIBUTI</option>
                                                                <option value="DM">DOMINICA</option>
                                                                <option value="EG">EGITO</option>
                                                                <option value="SV">EL SALVADOR</option>
                                                                <option value="AE">EMIRADOS ÁRABES UNIDOS</option>
                                                                <option value="EC">EQUADOR</option>
                                                                <option value="ER">ERITRÉIA</option>
                                                                <option value="SK">ESLOVÁQUIA</option>
                                                                <option value="SI">ESLOVÊNIA</option>
                                                                <option value="TW">TAIWAN, PROVÍNCIA DA CHINA</option>
                                                                <option value="CN">CHINA</option>
                                                                <option value="EE">ESTÔNIA</option>
                                                                <option value="ET">ETIÓPIA</option>
                                                                <option value="RU">FEDERAÇÃO RUSSA</option>
                                                                <option value="FJ">FIJI</option>
                                                                <option value="PH">FILIPINAS</option>
                                                                <option value="FI">FINLÂNDIA</option>
                                                                <option value="FR">FRANÇA</option>
                                                                <option value="GA">GABÃO</option>
                                                                <option value="GM">GÂMBIA</option>
                                                                <option value="GH">GANA</option>
                                                                <option value="GE">GEÓRGIA</option>
                                                                <option value="GS">GEÓRGIA DO SUL E ILHAS SANDWICH DO SUL</option>
                                                                <option value="GI">GIBRALTAR</option>
                                                                <option value="GD">GRANADA</option>
                                                                <option value="GR">GRÉCIA</option>
                                                                <option value="GL">GROELÂNDIA</option>
                                                                <option value="GT">GUATEMALA</option>
                                                                <option value="GG">GUERNSEY</option>
                                                                <option value="GY">GUIANA</option>
                                                                <option value="GN">GUINÉ</option>
                                                                <option value="GW">GUINÉ BISSAU</option>
                                                                <option value="GQ">GUINÉ EQUATORIAL</option>
                                                                <option value="HT">HAITI</option>
                                                                <option value="NL">HOLANDA</option>
                                                                <option value="HN">HONDURAS</option>
                                                                <option value="HK">HONG-KONG</option>
                                                                <option value="HU">HUNGRIA</option>
                                                                <option value="YE">IÊMEN</option>
                                                                <option value="BV">ILHA BOUVET</option>
                                                                <option value="KY">ILHAS CAIMAN</option>
                                                                <option value="CK">ILHAS COOK</option>
                                                                <option value="FO">ILHAS FAROE</option>
                                                                <option value="FK">ILHAS FALKLAND (MALVINAS)</option>
                                                                <option value="MP">ILHAS MARIANA DO NORTE</option>
                                                                <option value="SB">ILHAS SALOMÃO</option>
                                                                <option value="TC">ILHAS TURKS E CAICOS</option>
                                                                <option value="VG">ILHAS VIRGENS BRITÂNICAS</option>
                                                                <option value="IN">ÍNDIA</option>
                                                                <option value="ID">INDONÉSIA</option>
                                                                <option value="IR">IRÃ (REPÚBLICA ISLÂMICA DO)</option>
                                                                <option value="IQ">IRAQUE</option>
                                                                <option value="IE">IRLANDA</option>
                                                                <option value="IS">ISLÂNDIA</option>
                                                                <option value="IL">ISRAEL</option>
                                                                <option value="IT">ITÁLIA</option>
                                                                <option value="JM">JAMAICA</option>
                                                                <option value="JP">JAPÃO</option>
                                                                <option value="JE">JERSEY</option>
                                                                <option value="JO">JORDÂNIA</option>
                                                                <option value="KI">KIRIBATI</option>
                                                                <option value="KW">KUWAIT</option>
                                                                <option value="LA">LAOS</option>
                                                                <option value="LS">LESOTO</option>
                                                                <option value="LV">LETÔNIA</option>
                                                                <option value="LB">LÍBANO</option>
                                                                <option value="LR">LIBÉRIA</option>
                                                                <option value="LY">LÍBIA</option>
                                                                <option value="LI">LIECHTENSTEIN</option>
                                                                <option value="LT">LITUÂNIA</option>
                                                                <option value="LU">LUXEMBURGO</option>
                                                                <option value="MO">MACAU</option>
                                                                <option value="MG">MADAGASCAR</option>
                                                                <option value="MY">MALÁSIA</option>
                                                                <option value="MW">MALAWI</option>
                                                                <option value="MV">MALDIVAS</option>
                                                                <option value="ML">MALI</option>
                                                                <option value="MT">MALTA</option>
                                                                <option value="MA">MARROCOS</option>
                                                                <option value="MU">MAURÍCIO</option>
                                                                <option value="MR">MAURITÂNIA</option>
                                                                <option value="MX">MÉXICO</option>
                                                                <option value="MM">MIANMAR</option>
                                                                <option value="MZ">MOÇAMBIQUE</option>
                                                                <option value="MC">MÔNACO</option>
                                                                <option value="MN">MONGÓLIA</option>
                                                                <option value="MS">MONT SERRAT</option>
                                                                <option value="ME">MONTENEGRO</option>
                                                                <option value="NA">NAMÍBIA</option>
                                                                <option value="NR">NAURU</option>
                                                                <option value="NP">NEPAL</option>
                                                                <option value="NI">NICARÁGUA</option>
                                                                <option value="NE">NÍGER</option>
                                                                <option value="NG">NIGÉRIA</option>
                                                                <option value="NO">NORUEGA</option>
                                                                <option value="NZ">NOVA ZELÂNDIA</option>
                                                                <option value="OM">OMÃ</option>
                                                                <option value="PW">PALAU</option>
                                                                <option value="PA">PANAMÁ</option>
                                                                <option value="PG">PAPUA E NOVA GUINÉ</option>
                                                                <option value="PK">PAQUISTÃO</option>
                                                                <option value="PY">PARAGUAI</option>
                                                                <option value="PE">PERU</option>
                                                                <option value="PL">POLÔNIA</option>
                                                                <option value="PT">PORTUGAL</option>
                                                                <option value="KE">QUÊNIA</option>
                                                                <option value="KG">QUIRGUISTÃO</option>
                                                                <option value="GB">REINO UNIDO</option>
                                                                <option value="CF">REPÚBLICA CENTRO AFRICANA</option>
                                                                <option value="KR">REPÚBLICA DA CORÉIA</option>
                                                                <option value="MD">REPÚBLICA DA MOLDOVA</option>
                                                                <option value="CD">REPÚBLICA DEMOCRÁTICA DO CONGO</option>
                                                                <option value="DO">REPÚBLICA DOMINICANA</option>
                                                                <option value="KP">REPÚBLICA POPULAR DEMOCRÁTICA DA CORÉIA</option>
                                                                <option value="CZ">REPÚBLICA TCHECA</option>
                                                                <option value="TZ">REPÚBLICA UNIDA DA TANZÂNIA</option>
                                                                <option value="RO">ROMÊNIA</option>
                                                                <option value="RW">RUANDA</option>
                                                                <option value="EH">SAARA OCIDENTAL</option>
                                                                <option value="WS">SAMOA</option>
                                                                <option value="SH">SANTA HELENA</option>
                                                                <option value="LC">SANTA LÚCIA</option>
                                                                <option value="KN">SÃO CRISTÓVÃO E NEVIS</option>
                                                                <option value="SM">SÃO MARINO</option>
                                                                <option value="ST">SÃO TOMÉ E PRÍNCIPE</option>
                                                                <option value="VC">SÃO VICENTE E GRANADINAS</option>
                                                                <option value="SN">SENEGAL</option>
                                                                <option value="SL">SERRA LEOA</option>
                                                                <option value="RS">SÉRVIA</option>
                                                                <option value="SC">SEYCHELLES</option>
                                                                <option value="SG">SINGAPURA</option>
                                                                <option value="SY">SÍRIA</option>
                                                                <option value="SO">SOMÁLIA</option>
                                                                <option value="LK">SRI LANKA</option>
                                                                <option value="SZ">SUAZILÂNDIA</option>
                                                                <option value="SD">SUDÃO</option>
                                                                <option value="SE">SUÉCIA</option>
                                                                <option value="CH">SUÍÇA</option>
                                                                <option value="SR">SURINAME</option>
                                                                <option value="SJ">SVALBARD E JAN MAYEN</option>
                                                                <option value="TJ">TADJIQUISTÃO</option>
                                                                <option value="TH">TAILÂNDIA</option>
                                                                <option value="US">ESTADOS UNIDOS DA AMÉRICA</option>
                                                                <option value="TP">TIMOR LESTE</option>
                                                                <option value="TG">TOGO</option>
                                                                <option value="TO">TONGA</option>
                                                                <option value="TT">TRINDAD E TOBAGO</option>
                                                                <option value="TN">TUNÍSIA</option>
                                                                <option value="TM">TURCOMENISTÃO</option>
                                                                <option value="TR">TURQUIA</option>
                                                                <option value="TV">TUVALU</option>
                                                                <option value="UA">UCRÂNIA</option>
                                                                <option value="UG">UGANDA</option>
                                                                <option value="UY">URUGUAI</option>
                                                                <option value="UZ">UZBEQUISTÃO</option>
                                                                <option value="VU">VANUATU</option>
                                                                <option value="VA">VATICANO</option>
                                                                <option value="VE">VENEZUELA</option>
                                                                <option value="VN">VIETNÃ</option>
                                                                <option value="ZM">ZÂMBIA</option>
                                                                <option value="ZW">ZIMBÁBWE</option>


                                                                
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>

                                        
                                    </div>
                                </div>
                                <br/>                        
                            </div>
                           
                            <div style="border:1px solid green; margin-top: 5px;">
                                <div class="row" >
                                    <div class="control">
                                        <div class="form-group col-md-7" style="margin-left:5px;">
                                            <label for="name">Origem Declarada</label>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <select class="form-control" id="distribuidor_decl" name="origem_decl" placeholder="Origem declarada" onchange="fncMudaOrigemJs(this);" style="width: 400px;" > <!-- onchange="?findProdSelect(this)"> -->
                                                            <option value=""></option>
                                                            <?php if ($origem) : ?>
                                                                <?php foreach ($origens as $origem) : ?>
                                                                    <option value="<?php echo $origem['id']; ?>" ><?php echo $produto['razao_social']; ?></option>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-primary" id="btnNovoProdutor" style="margin-left:10px;">Novo Produtor</button>                
                                                    </td>
                                                </tr>
                                            </table>

                                        </div>    

                                        <!-- <div class="form-group col-md-2" style="margin-left:5px;">
                                            
                                        </div> -->
                                
                                
                                    </div>
                                </div>

                                <div class="row" >
                                    <div class="control">
                                        <div class="form-group col-md-4" style="margin-left:5px;">
                                            <label for="name" style="color:silver">CNPJ</label>
                                            <input type="text" class="form-control" name="origem_cnpj" disabled>                     
                                            <input type="hidden" class="form-control" name="origem_id" disabled>                     
                                        </div>    
                                        <div class="form-group col-md-4" style="margin-left:5px;">
                                            <label for="name" style="color:silver">Inscr. Estadual</label>
                                            <input type="text" class="form-control" name="origem_inscr" disabled>                     
                                        </div>    
                                        <div class="form-group col-md-3" style="margin-left:5px;">
                                            <label for="name" style="color:silver">Telefone</label>
                                            <input type="text" class="form-control" name="origem_fone" disabled>                     
                                        </div> 
                                    </div>
                                </div>

                                <div class="row" >
                                    <div class="control">
                                        <div class="form-group col-md-7" style="margin-left:5px;">
                                            <label for="name" style="color:silver">Endereço</label>
                                            <input type="text" class="form-control" name="origem_endereco" disabled>                                        
                                        </div>    
                                        <div class="form-group col-md-2" style="margin-left:5px;">
                                            <label for="name" style="color:silver">Número</label>
                                            <input type="text" class="form-control" name="origem_numero" disabled>                     
                                        </div>    
                                        <div class="form-group col-md-4" style="margin-left:5px;">
                                            <label for="name" style="color:silver">Complemento</label>
                                            <input type="text" class="form-control" name="origem_complemento" disabled>                     
                                        </div> 
                                    </div>
                                </div>

                                <div class="row" >
                                    <div class="control">
                                        <div class="form-group col-md-3" style="margin-left:5px;">
                                            <label for="name" style="color:silver">Bairro</label>
                                            <input type="text" class="form-control" name="origem_endereco" disabled>                                        
                                        </div>    
                                        <div class="form-group col-md-3" style="margin-left:5px;">
                                            <label for="name" style="color:silver">Cidade</label>
                                            <input type="text" class="form-control" name="origem_cidade" disabled>                     
                                        </div>    
                                        <div class="form-group col-md-2" style="margin-left:5px;">
                                            <label for="name" style="color:silver">UF</label>
                                            <input type="text" class="form-control" name="origem_uf" disabled>                     
                                        </div> 
                                        <div class="form-group col-md-2" style="margin-left:5px;">
                                            <label for="name" style="color:silver">CEP</label>
                                            <input type="text" class="form-control" name="origem_cep" disabled>                     
                                        </div> 
                                    </div>
                                </div>

                               
                            </div>
                       
                            <div style="border:1px solid yellow; margin-top: 5px;">                     
                                <div class="row" >
                                    <div class="control">
                                
                                        <div class="form-group col-md-7" style="margin-left:5px;">
                                            <label for="name">Distribuidor</label>
                                            <!-- <input type="text" class="form-control" name="descricao" disabled> onchange="fncMudaProdJs(this);" -->
                                            

                                            <table>
                                                <tr>
                                                    <td>
                                                        <select class="form-control" id="distribuidor" name="distribuidor" placeholder="Distribuidor" onchange="fncMudaDistrJs(this);" style="width: 400px;" >  <!-- onchange="?findProdSelect(this)"> -->
                                                            <option value=""></option>
                                                            <?php if ($distribuidores) : ?>
                                                                <?php foreach ($distribuidores as $distribuidor) : ?>
                                                                    <option value="<?php echo $distribuidor['id']; ?>" ><?php echo $distribuidor['descricao']; ?></option>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-primary" id="btnNovoDistribuidor" style="margin-left:10px;">Novo Distribuidor</button>                
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>    
                                      
                                    </div>
                                </div>

                                <div class="row" >
                                    <div class="control">
                                        <div class="form-group col-md-4" style="margin-left:5px;">
                                            <label for="name" style="color:silver">CNPJ</label>
                                            <input type="text" class="form-control" name="origem_cnpj" disabled>                     
                                            <input type="hidden" class="form-control" name="origem_id" disabled>                     
                                        </div>    
                                        <div class="form-group col-md-4" style="margin-left:5px;">
                                            <label for="name" style="color:silver">Inscr. Estadual</label>
                                            <input type="text" class="form-control" name="origem_inscr" disabled>                     
                                        </div>    
                                        <div class="form-group col-md-3" style="margin-left:5px;">
                                            <label for="name" style="color:silver">Telefone</label>
                                            <input type="text" class="form-control" name="origem_fone" disabled>                     
                                        </div> 
                                    </div>
                                </div>

                                <div class="row" >
                                    <div class="control">
                                        <div class="form-group col-md-7" style="margin-left:5px;">
                                            <label for="name" style="color:silver">Endereço</label>
                                            <input type="text" class="form-control" name="origem_endereco" disabled>                                        
                                        </div>    
                                        <div class="form-group col-md-2" style="margin-left:5px;">
                                            <label for="name" style="color:silver">Número</label>
                                            <input type="text" class="form-control" name="origem_numero" disabled>                     
                                        </div>    
                                        <div class="form-group col-md-4" style="margin-left:5px;">
                                            <label for="name" style="color:silver">Complemento</label>
                                            <input type="text" class="form-control" name="origem_complemento" disabled>                     
                                        </div> 
                                    </div>
                                </div>

                                <div class="row" >
                                    <div class="control">
                                        <div class="form-group col-md-3" style="margin-left:5px;">
                                            <label for="name" style="color:silver">Bairro</label>
                                            <input type="text" class="form-control" name="origem_endereco" disabled>                                        
                                        </div>    
                                        <div class="form-group col-md-3" style="margin-left:5px;">
                                            <label for="name" style="color:silver">Cidade</label>
                                            <input type="text" class="form-control" name="origem_cidade" disabled>                     
                                        </div>    
                                        <div class="form-group col-md-2" style="margin-left:5px;">
                                            <label for="name" style="color:silver">UF</label>
                                            <input type="text" class="form-control" name="origem_uf" disabled>                     
                                        </div> 
                                        <div class="form-group col-md-2" style="margin-left:5px;">
                                            <label for="name" style="color:silver">CEP</label>
                                            <input type="text" class="form-control" name="origem_cep" disabled>                     
                                        </div> 
                                    </div>
                                </div>
                                
                            </div>
                            <br>
                            <br>                                
                            <!-- <a href="../parceiros/cad_parceiros_page.php" style="margin-left:40px;">
                                    <img src="../images/trator.png" style="height:25px;height:25px;"  onerror="this.onerror=null;" alt="Produtor"> </img> Cadastrar Produtor / Distribuidor            
                                </a>
                            <br/> -->
                            <!-- <button type="submit" class="button is-block is-link is-large is-fullwidth">Salvar Produto</button> -->
                            <div id="actions" class="row">
                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                                <a href="../produtos/list_prod_page.php" class="btn btn-default">Cancelar</a>
                                </div>
                            </div>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <br/>
    <br/>
    <br/>                                                        
    <hr>
    <?php include_once('../footer.php'); ?>
    
    <!-- 
    <div id="dvPopupStatus" class="popup" data-popup="popup-dadosStatus">

        <div id="dvPopupDadosStatus" class="popup-inner">



            <div id="ToDisplayResultStatus"></div>



        </div>


    </div> -->

    <script type="text/javascript">

        //$(document).ready(function(){

             //var bool = "<php echo $bool ?>"; 

            // numeric value, both with and without quotes
            //var num = <php echo $num ?>; // 7
            //var str_num = "<php echo $num ?>"; // "7" (a string)
            var str1 =<?php echo json_encode($rows );?>;
            var posts1 =<?php echo json_encode($rows );?>;
            
            function array_values (input) {
                // http://jsphp.co/jsphp/fn/view/array_values
                // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
                // +      improved by: Brett Zamir (http://brett-zamir.me)
                // *     example 1: array_values( {firstname: 'Kevin', surname: 'van Zonneveld'} );
                // *     returns 1: {0: 'Kevin', 1: 'van Zonneveld'}
                var tmp_arr = [],
                    key = '';

                if (input && typeof input === 'object' && input.change_key_case) { // Duck-type check for our own array()-created PHPJS_Array
                    return input.values();
                }

                for (key in input) {
                    tmp_arr[tmp_arr.length] = input[key];
                }

                return tmp_arr;
            }

            function fncAttValue(ArrInt, objName, data){

                $.each(data, function() {
                    var key = Object.keys(this)[ArrInt];
                    var value = this[key];

                    console.log('data[key] - ' + key + ':' + value + " -- " + objName);
                    document.getElementById(objName).value = value
                    //$('#' + objName ).val(value);
                }); 
                
            }

            function fncMudaProdJs(sel){

                var vId = sel.value;
                console.log('fncMudaProdJs 0' + vId);


                //var v = document.findbyId('').value;
                $.ajax({    //create an ajax request to display.php
                    type: "POST",
                    url: "../functions_mysql_php.php?id=" + vId,             
                    //data: {id: vId, table: "tb_produtos"},
                    dataType: "json",   //expect html to be returned                
                    success: function(response){                    
                        //$("#responsecontainer").html(response); 
                        console.log('response' + response);
                        console.log('fncMudaProdJs 1');
                        // console.log('response' + response['id']);
                        // console.log('response' + response['descricao']);
                        // console.log('response' + response['GTIN']);
                        // for(key in response) {
                        //     if(response.hasOwnProperty(key)) {
                        //         var value = response[key];
                        //         console.log('data[key] - ' + response[key] + ':' + value);
                        //     }
                        // }
                        
                            fncAttValue(0,"id_produto", response);
                            //fncAttValue(2,"unidade", response);
                            fncAttValue(3,"ncm1", response);
                            fncAttValue(4,"gtin1", response);
                            fncAttValue(5,"tipo1", response);
                            fncAttValue(5,"tipo1", response);
                            
                            

                        

                        
                    },
                    error: function (jqXHR, exception) {
                        console.log('ERROR fncMudaProdJs' );
                        console.log('ERROR jqXHR' + jqXHR.responseText );
                        console.log('ERROR exception' + exception );
                    }

                });
                
                console.log('fncMudaProdJs 2');
            
            }

            function load_new_content(){
                var selected_option_value=$("#select1 option:selected").val(); //get the value of the current selected option.

                $.post("functions_mysql_php.php", {id: selected_option_value},
                    function(data){ //this will be executed once the `script_that_receives_value.php` ends its execution, `data` contains everything said script echoed.
                        //$("#place_where_you_want_the_new_html").html(data);
                        alert(data); //just to see what it returns
                    }
                );
            }
            // everything here will be executed once index.php has finished loading, so at the start when the user is yet to do anything.
            //$("#descricao").change(load_new_content()); //this translates to: "when the element with id='select1' changes its value execute load_new_content() function"
        //});
           

    </script>

    <script>

        $('#btnNovoProduto').on('click', function (e) {
            $('#ToDisplayResultStatus').load('../produtos/cad_produto_page_modal.php');
            $("#dvPopupStatus").hide().fadeIn(350);
        });

        $('#btnNovoProdutor').on('click', function (e) {
            $('#ToDisplayResultStatus').load('../produtos/cad_parceiros.php');
            $("#dvPopupStatus").hide().fadeIn(350);
        });

        $('#btnNovoDistribuidor').on('click', function (e) {
            $('#ToDisplayResultStatus').load('../produtos/cad_parceiros.php');
            $("#dvPopupStatus").hide().fadeIn(350);
        });
    </script>

</body>

</html>


