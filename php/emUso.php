<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/icon/car_ocup.png"/>
    <link href="../fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    
    <script src="../scanner/webqr.js"></script>
    <script type="text/javascript" src="../js/carros.js"></script>

    <title>Carros em uso</title>
</head>
<body>
    <?php require_once '../menu/home.php' ?>
    <div class="container_disp container__ocup">
    <div class="cont_titulo">
        <div class="titulo">
                <h1>Em uso</h1>
        </div>
        <div class="gif_titulo">
            <img src="../img/icon/usoCar.gif" alt="">
        </div>
    </div>
        

        <div class="box_disp box_status">
            <div class="icon_status__titu"><span>Quant</span></div>
            <div class="local_status__titu"><span>Area</span></div>
        </div>
        <!--/nomes da tabela-->
        <div class="box_disp">
        <div class="icon_status"><P id="cartotal"></P>
                <script>
                    document.getElementById("cartotal").innerHTML= Number(localStorage.getItem("Totalocupado"));
                  </script>
            </div>
                <div class="local_status">
                    <div class="localizacoes_status">
                        <div class="localizacao_status">
                            <P>Matriz</P> 
                        </div>
                        <div class="localizacao_status">
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </div>
                    
                    <div class="mapa_local">

                        <div class="container__cliente">
                            <div class="quant__cliente">
                            <p id="ocupadototal"></p>
                            <script>
                             ContadorEstoqueDB();
                            </script>
                            </div>
                            <div class="img_cliente">
                                <img src="../img/logo-cliente/honda.png" alt="">
                            </div>  
                            <div class="nome__cliente">
                                <p>Honda</p>
                            </div>                         
                        </div>

                        <div class="container__cliente">
                            <div class="quant__cliente">
                                <p>5</p>
                            </div>
                            <div class="img_cliente">
                                <img src="../img/logo-cliente/sony.png" alt="">
                            </div>  
                            <div class="nome__cliente">
                                <p>Sony</p>
                            </div>                         
                        </div>

                        <div class="container__cliente">
                            <div class="quant__cliente">
                            <p>5</p>
                            </div>
                            <div class="img_cliente">
                                <img src="../img/logo-cliente/samsung.jpg" alt="">
                            </div>  
                            <div class="nome__cliente">
                                <p>Samsung</p>
                            </div>                         
                        </div>

                    </div>
                </div>
            </div>     
              
            <div class="box_disp">
            <div class="icon_status"><P>20</P></div>
                <div class="local_status">
                    <div class="localizacoes_status">
                        <div class="localizacao_status">
                            <P>Filial</P> 
                        </div>
                        <div class="localizacao_status">
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </div>
                    <div class="mapa_local"></div>
                </div>
            </div>    

            <div class="box_disp">
               

            <div class="icon_status"><P id="totcli"></P>
            </div>
                <div class="local_status">
                    <div class="localizacoes_status">
                        <div class="localizacao_status">
                            <P>Clientes</P> 
                        </div>
                        <div class="localizacao_status">
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </div>
                    <div class="mapa_local">

                    <div class="container__cliente">
                            <div class="quant__cliente">
                            <p id="clientetotal"></p>
                            <script>
                                ContadorClienteDB();
                             </script>
                            </div>
                            <div class="img_cliente">
                                <img src="../img/logo-cliente/honda.png" alt="">
                            </div>  
                            <div class="nome__cliente">
                                <p>Honda</p>
                            </div>                         
                        </div>

                        <div class="container__cliente">
                            <div class="quant__cliente">
                                <p>10</p>
                            </div>
                            <div class="img_cliente">
                                <img src="../img/logo-cliente/sony.png" alt="">
                            </div>  
                            <div class="nome__cliente">
                                <p>Sony</p>
                            </div>                         
                        </div>

                        <div class="container__cliente">
                            <div class="quant__cliente">
                                <p>10</p>
                            </div>
                            <div class="img_cliente">
                                <img src="../img/logo-cliente/samsung.jpg" alt="">
                            </div>  
                            <div class="nome__cliente">
                                <p>Samsung</p>
                            </div>                         
                        </div>

                        

                        
                    </div>
                </div>
            </div>  
            
 
    </div><!--fim box_disp-->
    </div><!--fim box_disp-->
    </div> 
</body>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/extencao_aba.js"></script>
</html>