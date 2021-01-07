<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/root.css">
    <link rel="icon" type="image/png" href="../img/icon/car_disp.png"/>

    <link rel="stylesheet" type="text/css" href="../tabela/vendor/datatables/Responsive-2.2.6/css/responsive.dataTables.css" />
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../tabela/vendor/datatables/datatables.min.css" />
    <script type="text/javascript" src="../js/carros.js"></script>
    <script type="text/javascript" src="../sweetalert/sweetalert2.all.min.js"></script>
    
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-database.js"></script>
    <script type="text/javascript" src="../js/db-firebase.js"></script>


    <title>Rastreamento</title>
    

</head>
<body>
<nav>
     <input id="nav-toggle" type="checkbox">
        <div class="logo">
            <h1>SDRTCP</h1>
        </div>
        <ul class="links">
            <li><a href="#"><i class="fas fa-wrench"></i></a></li>
            <li><a href="#"><i class="fas fa-cog"></i></a></li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>
    <footer>
    <script type="text/javascript">
    InicializaBD();
    </script>
        <div class="box_buton">
            <a href="../scanner/index.php">
                <div class="divisao">
                     <img src="../img/icon/qr_code.png" alt="">   
                </div>
                <div class="divisao">
                <span></span>
                </div>
                <h2>scaner QR Code</h2>
                <p class="infor_buton">Rastreie um carro específico, saiba seu status: <br> Localidade, Disponivel ou Em uso.</p>
            </a>
        </div>

        <div class="box_buton">
            <a href="../php/disp.php">
                <div class="container_buton">
                    <div class="divisao">
                        <img src="../img/icon/car_disp.png" alt="">
                    </div>
                    <div class="divisao">
                    <span id="totaldisponiveis"></span>
                    <script>
                     ContadorDisponivelDB() ;
                    </script>
                    </div>
                </div>
                <h2>Disponíveis</h2>
                <p class="infor_buton">Saiba onde estão e quais carros disponíveis</p>
            </a>
        </div>
        
        <div class="box_buton">
            <a href="../php/emUso.php">
                <div class="container_buton">
                    <div class="divisao">
                        <img src="../img/icon/car_ocup.png" alt="">
                    </div>
                    <div class="divisao">
                    <span id="totalocupado"></span>
                <script>
                 ContadorEmUsoDB()
                </script>
                    </div>
                </div>
                <h2>Em uso</h2>
                <p class="infor_buton">Saiba a sua localização, que produto estão transportanto <br>e para onde, se estar em manutenção ou não.</p>
            </a>
        </div>

    </footer>

    <script src="../tabela/vendor/jquery/jquery-3.5.1.min.js"></script>
    <!-- datatables JS -->
    <script type="text/javascript" src="../tabela/vendor/datatables/datatables.min.js"></script>
    <!-- para usar botones en datatables JS -->
    <script src="../tabela/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="../tabela/vendor/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="../tabela/vendor/datatables/popper/popper.min.js"></script>
    <script src="../tabela/vendor/datatables/Buttons-1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="../tabela/vendor/datatables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="../tabela/vendor/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="../tabela/vendor/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="../tabela/vendor/datatables/Buttons-1.6.5/js/buttons.html5.min.js"></script>
    <script src="../tabela/vendor/datatables/Responsive-2.2.6/js/dataTables.responsive.js"></script>

    <script src="../js/tabela.js"></script>
    <script>
    width = screen.width;
      if(width > 1300){
       document.body.style.zoom = 1.0;
    }
    else{
       document.body.style.zoom = 0.8;
    }  

   
    </script>

</body>

</html>