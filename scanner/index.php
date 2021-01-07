<html>

<head>
    <meta name="description" content="QR Code scanner" />
    <meta name="keywords" content="qrcode,qr code,scanner,barcode,javascript" />
    <meta name="language" content="English" />
    <meta name="Revisit-After" content="1 Days" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/root.css">
    <link href="../fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="../img/icon/qr_code.png"/>
    <title>Scanner QR Code</title>

    <style type="text/css">
        #main {
            margin: 50px auto;
            overflow: auto;
            width: 100%;
        }

        #header {
            margin: 30px 0 15px 10px;
        }

        #mainbody {
            background: white;
            width: 100%;
            display: none;
        }

        #footer {
            background: white;
        }

        #v {
            width: 80%;
        }

        #qr-canvas {
            display: none;
        }

        #qrfile {
            width: 320px;
            height: 240px;
        }

        #mp1 {
            text-align: center;
            font-size: 35px;
        }

        #imghelp {
            position: relative;
            left: 0px;
            top: -160px;
            z-index: 100;
            font: 18px arial, sans-serif;
            background: #f0f0f0;
            margin-left: 35px;
            margin-right: 35px;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 20px;
        }

        .selector {
            margin: 0;
            padding: 0;
            cursor: pointer;
            margin-bottom: -5px;
        }

        #result {
            padding: 20px;
            width: 70%;
        }

        ul {
            margin-bottom: 0;
        }

        li {
            display: inline;
            padding-right: 0.5em;
            padding-left: 0.5em;
            font-weight: bold;
        }

        .bnt_scanner a {
            text-decoration: none;
            color: var(--gray);
            font-size:20px;
            padding:10px;
            border:2px solid var(--green);
        }

        #footer a {
            color: black;
        }

        .tsel {
            padding: 0;
        }
    </style>

    <script type="text/javascript" src="llqrcode.js"></script>
    <script type="text/javascript" src="plusone.js"></script>
    <script type="text/javascript" src="webqr.js"></script>
</head>

<body>
<?php require_once '../menu/home.php' ?>
    <div id="main">
        <div id="header">
          
            <ul class="bnt_scanner">
                <li><a href="create.html">Criar QR Code</a></li>
            </ul>
        </div>
        <div id="mainbody">
            <table class="tsel" border="0" width="100%">
                <tr>
                    <td valign="top" align="center" width="50%">
                        <table class="tsel" border="0">
                            <tr>
                                <td><img class="selector" id="webcamimg" onclick="setwebcam()" align="left" /></td>
                                <td><img class="selector" id="qrimg"  onclick="setimg()" align="right" /></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <div id="outdiv">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <div id="result"></div>
                    </td>
                </tr>
            </table>
            
        </div>&nbsp;
     
    </div>
    <canvas id="qr-canvas" width="800" height="600"></canvas>
    <script type="text/javascript">
        load();
    </script>
</body>

</html>