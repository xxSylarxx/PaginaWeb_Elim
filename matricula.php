<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/icons/escudo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/web.css">
    <link rel="stylesheet" href="./assets/css/networks.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <!--Estilo de direccion3D-->
    <link rel="stylesheet" href="./assets/css/desplazamiento.css">        
    <!--Fin del estilo direccion 3D-->
     <!-- CARROUSEL -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- CARROUSEL -->
    
    <title>Colegio Cristiano ELIM</title>
</head>

<body>

    

    <style>
        #redes {
            position: fixed;
            width: 45px;
            min-width: 45px;
            max-width: 45px;
            top: 50%;
            right: 0;
            transform: translateY(-75%);
            z-index: 99;
        }

        #redes a {
            font-size: 21px;
            color: white;
        }

        
        #valores .flip {
            height: 172px;
            padding: 0.6em;
        }

        #valores .card {
            position: relative;
            width: 97%;
            height: 97%;
            text-align: center;
            transition: transform 1s;
            transform-style: preserve-3d;
        }

        #valores .flip:nth-child(1):hover .card {
            transform: rotateY(180deg);
        }

        #valores .front,
        #valores .back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            cursor: default;
        }

        #valores .front {
            color: #fff;
            border: 2px solid #ececec;
        }

        #valores .back {
            color: white;
            transform: rotateY(180deg);
            border: 2px solid #ececec;
            padding: 0.5em;
        }

        #niveles img{

          height:100%;
        }

        #niveles #col-niveles1{
          
          padding:2rem;
          margin-left:10px;
          margin-right:10px;                  
          position:relative;
          margin-top:-70px;
          background-color: rgba(167, 201,0, 0.86);
          color: var(--color5);
          font-size:1rem;
          text-align:center;
          font-weight: bold;
        }
        #niveles #col-niveles2{
        
          padding:2rem;
          margin-left:10px;
          margin-right:10px;                  
          position:relative;
          margin-top:-70px;
          background-color: rgba(255, 207,0, 0.86);
          color: var(--color5);
          font-size:1rem;
          text-align:center;
          font-weight: bold;
        }
        #niveles #col-niveles3{
          
          padding:2rem;
          margin-left:10px;
          margin-right:10px;                  
          position:relative;
          margin-top:-70px;
          background-color: rgba(0, 44,0, 0.86);
          color: var(--color5);
          font-size:1rem;
          text-align:center;
          font-weight: bold;
        }

        #noticias div.crop {
            height: 200px;
            max-height: 200px;
            overflow: hidden;
        }

        #noticias div.card-body p {
            height: 70px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            transition: height 0.25s ease-out;
        }

        #noticias div.card-body:hover p {
            height: 140px;
            display: block;
            transition: height 0.25s ease-in;
        }
        #noticias .card {
            background:linear-gradient(rgb(255, 255, 255), rgb(243, 243, 243));
            box-shadow: 0 0 5px var(--color1);
            
        }
        .button1 {
            background-color: transparent; 
            border: 1px solid #ffff;
            border-radius: 20px;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;  
        }
        .button2 {
            background-color: transparent; 
            border: 1px solid #ffff;
            border-radius: 20px;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;  
        }
    
        .button3{
            background-color: transparent; 
            border: 1px solid #ffff;
            border-radius: 20px;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;   
        }

        .button1:hover{
            background-color: var(--color1);
        }
        .button2:hover{
            background-color: var(--color2);
        }

        .button3:hover{
            background-color: var(--color3);
        }
        span.circulo{
          border-radius: 50%;
          display: inline-block;
          font-size: 15px;
          min-width: 40px;
          height: 40px;
          margin-right: 8px;
          padding: 9px;
          text-align: center;
          width: 40px;
          font-weight: bold;
          background-color: var(--color2);
        }
        

        .map-responsive iframe{

        left:0;

        top:0;

        bottom:0;  

        height:100%;

        width:100%;

        position:absolute;

        }

        

        
@media only screen and (max-width:1399px){
    #niveles #col-niveles3 h3{
        font-size:1.5rem;
    }
    #niveles #col-niveles1  p{
        font-size:.9rem;
    }
    #niveles  #col-niveles2  p{
        font-size:.9rem;
    }
    #niveles  #col-niveles3 p{
        font-size:.9rem;
    }
}
    

    </style>

    <?php include_once './includes/header.php'; ?>


    

    <br>


    <!---Bienvenidos -->
    <section class="container">
        <div class="separador">
            <div class="sep_box"><i class="fas fa-hotel"></i></div>
            <div class="sep_title">INFORME DE PROCESO DE MATRÍCULA</div>
        </div>
        <div class="row justify-content-around mt-4 pt-4">
        <iframe src="./assets/files/INFORME DEL PROCESO DE MATRICULA PARA EL AÑO 2022 (1).pdf" class="shadow" frameborder="0" width="100%" height="900"></iframe>
        </div>
    </section>
    <br>
    <br>
   

    
  
    <?php include_once './includes/footer.php'; ?>
    <?php include_once './includes/redes.php'; ?>
</body>
 <!-- Script de direccion 3D -->
 <script src="./assets/js/desplazamiento.js"></script>
 <!-- CARROUSEL -->
    
 <script>
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            autoplay: true,
            autoplayTimeout: 4000,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                },
                800: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
            },
        });
    </script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.pooper.js"></script>
 
</html>