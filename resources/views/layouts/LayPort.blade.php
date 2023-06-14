

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Chamando CDN do boxixon-->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

     <!--Chamando CDN do Bootstrap 5.3-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!--chamando CSS-->
    <link rel="stylesheet" href="/css/portifolio.css">

    <title>Portfolio</title>
</head>

<body>

<!--HEADER DA PAGINA
    PRIMEIRO CONTAINER  -->
    <div class="header">
        <ul type="none" id="myform">
            <li><a href="/">Home</a></li>
            <li> <a href="/portfolio/projetos"> Projetos</a></li>
            <li><a href="/portfolio/sobre">Sobre</a></li>
        </ul>

    </div>

    <div class="container">
        <div class="informa">
            <div class="textPrincipal" style="margin-top: 5%;">
                <h1 style="color: rgb(255, 255, 255); margin: 0;">Ola,

                    <!--Verificando Se estamos no Periodo da Manhã, Trade Ou noite-->
                    @if(date('H')>= 0 && date('H') <= 12) Bom dia!
                    @elseif(date('H')>= 13 && date('H') <= 18)Boa tarde!
                    @else Boa noite!
                    @endif

                     eu sou o Brayan</h1>
                <h2 style="color: rgb(255, 255, 255); margin: 0;">Seja bem vindo ao meu Portfolio!</h2><br>


                    <ul type="none" style="column-gap: 10%; margin:0; padding: 4%;">
                        <li><a href="https://wa.me/qr/3JX4XXRPJLYAP1 " target="_blank"><i class='bx bxl-whatsapp'> </i></a></li>
                        <li><a href="https://www.facebook.com/people/Brayan-Wosch/100073240022989/?mibextid=ZbWKwL" target="_blank"><i class='bx bxl-facebook-square' ></i></a></li>
                        <li><a href="https://www.instagram.com/bwoschs_/" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                       <li><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox" target="_blank"><i class='bx bxl-gmail'></i></a></li>
                       <li><a href="https://github.com/Woschbrayan" target="_blank"><i class='bx bxl-github'></i></a></li>
                    </ul>
                </div>

                <div class="imgMe">
                        <img src="/img/brayan joaquina.jpg" alt="" srcset="" style="    width: 75%; box-shadow: 2px 5px 10px 2px rgb(0 0 0 / 57%);">
                </div>
        </div>
    </div>



<!--Linha de divisa-->
    <div class="containerdiv">
        <div class="line">
            <p style="font-size: 2px; color: #c0c0c0;">_</p>
        </div>
    </div>



</body>
</html>
