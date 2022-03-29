<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/icons/escudo.ico" type="image/x-icon">
    <title>Colegio Cristiano Elim</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/web.css">
    <link rel="stylesheet" href="./assets/css/networks.css">
    <!--Estilo de direccion3D-->
    <link rel="stylesheet" href="./assets/css/desplazamiento.css">        
    <!--Fin del estilo direccion 3D-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    
    <!-- CARROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- CARROUSEL -->
    
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
        width: 97.5%;
        height: 97.5%;
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
        background-color: var(--color2); 
        border: none;
        border-radius: 20px;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }
    .button2 {
        background-color: var(--color1); 
        border: none;
        border-radius: 20px;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }

    .button4 {
        background-color: var(--color3); 
        border: none;
        color: white;    
        text-align: center;
        text-decoration: none;
        display: inline-block;    
        font-size: 2rem; 
        padding: 10px 21px; 
        letter-spacing: 0.5px;    
    }

    .button1:hover{
        background-color: var(--color1);
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
    
    #titulos-logros{
      color:white;
      font-weight: bold;
      background-color: rgba(255, 207,0, 0.60);
      text-shadow: -1px 2px 0 #0000;
      padding: .75rem;                
      position:relative;
      margin-top:-70px;
    }

      /* -- strcoll -- */
        .scroll {
            overflow-y: auto;
            height: 260px;
        }

        .scroll::-webkit-scrollbar {
            background-color: whitesmoke;
            width: 5px;
            border-radius: 6px;
        }

        .scroll::-webkit-scrollbar-thumb {
            /* background-color: #a7a7a7; */
            background-color: var(--color1);
        }

        .scroll::-webkit-scrollbar-track {
            width: 5px;
        }
/* Estilo de Lista */
ul.timeline {
            list-style-type: none;
            position: relative;
        }

        ul.timeline:before {
            content: ' ';
            background: var(--color2);
            display: inline-block;
            position: absolute;
            left: 30px;
            width: 2px;
            height: 100%;
            z-index: 400;
        }

        ul.timeline>li {
            margin: 14px 0;
            padding-left: 20px;
        }

        ul.timeline>li:before {
            content: ' ';
            background: white;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 4px solid var(--color3);
            left: 15px;
            width: 32px;
            height: 32px;
            z-index: 400;
        }
        
@media screen and (max-width:800px){
    ul.timeline:before {
 
 height: 94%;
 
}
    
}

</style>

   
    <?php include_once './includes/header.php'; ?>
    <?php include_once './includes/redes.php'; ?>
   
    <div class="container-fluid p-0">
        <img src="./assets/img/perfil/portada_perfil.jpg" width="100%">
    </div>
    <section class="container-fluid">
        <br><br>
        <div class="container">
            <div class="separador">
                  <div class="sep_box"><i class="fas fa-hotel"></i></div>
                    <div class="sep_title">PERFIL DEL ESTUDIANTE ELIM</div>
            </div>
        </div>
        
       
        <div class="container-fluid px-0" id="perfiles">
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <ul class="timeline">
                        <li>
                            <div class="ml-3 pb-1" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                <p>Reconoce al Dios trino como Soberano Creador de todo lo que existe. </p>
                            </div>
                        </li>
                        <li>
                            <div class="ml-3 pb-1" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                <p>Practica valores ético – cristianos, poniendo su vida al servicio de Dios y el prójimo.</p>
                            </div>
                        </li>
                        <li>
                            <div class="ml-3 pb-1" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                <p>Realiza sus labores como buen estudiante cristiano, participando activamente de la coyuntura social y política al ser ejemplo en la obediencia a las leyes establecidas.</p>
                            </div>
                        </li>
                        <li>
                            <div class="ml-3 pb-1" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                <p>Estudiante con alto nivel académico con la formación integral que le permita mantenerse y culminar con éxito sus estudios, así como la capacidad para interrelacionarse con los demás y con capacidad de solución de problemas.</p>
                            </div>
                        </li>
                        <li>
                            <div class="ml-3 pb-1" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                                <p>Que se exprese correctamente porque ha desarrollado habilidades comunicativas que le permitan desarrollarse, tanto personal como profesionalmente de manera espontánea y eficiente.</p>
                            </div>
                        </li>
                        <li>
                            <div class="ml-3 pb-1" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                <p>Utiliza diversas herramientas tecnológicas en las diferentes áreas educativas.</p>
                            </div>
                        </li>
                        <li>
                            <div class="ultimoitem ml-3 " data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                <p>Contribuya de manera práctica con la conservación del medio ambiente</p>
                            </div>
                        </li>                        
                        
                    </ul>
                    <br><br>
                </div>
                <!---
                 <div class="col-md-4">
                    <br><br><br>
                    <img src="./assets/img/perfil/perfil.jpg" class="rounded shadow img-fluid" width="65%">
                </div> -->
            </div>
        </div>
    </div>


        <br><br>
    </section>
         

    <?php include_once './includes/footer.php'; ?>


    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.pooper.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
     AOS.init();
    </script>
</body>

</html>