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
        .card_shadow {
    -webkit-box-shadow: 0px 0px 12px #ffcf00;
    -moz-box-shadow: 0px 0px 12px #ffcf00;
    box-shadow: 0px 0px 10px #a7c900;
}

div.card_zoom {
    height: auto;
    overflow: hidden;
}

div.card_zoom img {
    transition: transform 2s ease;
    /* color: rgba(98, 29, 29, 0.9); */
}

div.card_zoom:hover img {
    transform: scale(1.2);
}

</style>

   
    <?php include_once './includes/header.php'; ?>
    <?php include_once './includes/redes.php'; ?>
    <div class="container-fluid p-0">
        <img src="./assets/img/metodologia/portada_metodologia.jpg" width="100%">
    </div>

    <section class="container-fluid">
        <br><br>
        <div class="container">
            <div class="separador">
                  <div class="sep_box"><i class="fas fa-hotel"></i></div>
                    <div class="sep_title">METODOLOGÍA</div>
            </div>
        </div>
        <br><br>
        <div class="container">
        <div class="row justify-content-around mt-4 pt-4">
            <div class="col-lg-5 my-auto aos-init " data-aos="fade-right" data-aos-duration="2000">
            
                <div class="text-justify line">
                Nuestra propuesta pedagógica tiene como propósito potencializar en nuestros estudiantes capacidades y 
                habilidades para el logro de sus aprendizajes, asimismo, buscamos en el estudiante desarrollar su pensamiento 
                crítico-reflexivo, un aprendizaje autónomo y el uso adecuado de la tecnología en el contexto actual. La base de
                 nuestra propuesta está en el Currículo Nacional de la Educación Básica, donde se contempla el desarrollo de las 
                 competencias, capacidades, desempeños y estándares educativos en los niveles de inicial, primaria y secundaria, 
                 con el fin de lograr el perfil del egreso de nuestros estudiantes elimnianos.
                </div>
                <div class="text-justify line">
                 Además, consideramos los enfoques transversales, cumplir con los compromisos de gestión y el desarrollo de una evaluación 
                 formativa que permita mejorar de manera continua los aprendizajes de los estudiantes. La metodología empleada en nuestra 
                 institución está basada en el constructivismo.

                </div>
              
               
            </div>
            <div class="col-lg-6 my-auto aos-init" data-aos="fade-left" data-aos-duration="2000">
                <center><img src="./assets/img/metodologia/metodologia1.jpg" class="rounded shadow " width="100%"></center>                                
            </div>
        </div>
        <br>
        <div class="row justify-content-around mt-4 pt-4" >
            <div class="col-lg-5 my-auto"data-aos="fade-right" data-aos-duration="2000">                 
                 <center><img src="./assets/img/metodologia/metodologia2.jpg" class="rounded shadow " width="100%"></center>
                 <br>
            </div>
            <div class="col-lg-6 my-auto " data-aos="fade-left" data-aos-duration="2000">
            

                <div class="text-justify line">

                En el constructivismo, la enseñanza no es una simple transmisión de conocimientos,
                  sino es la organización de métodos de apoyo que permitan a los estudiantes desarrollar habilidades y construir su propio saber,
                  esto es aprender haciendo, puesto que no aprendemos solo registrando en nuestro cerebro, aprendemos construyendo nuestra propia estructura cognitiva.
                </div>
                <div class="text-justify line">

                  Asimismo, aplicamos la metodología dinámica que está inmersa en el constructivismo. Esta es una estrategia pedagógica que promueve la participación 
                  activa y eficaz del estudiante en su proceso de aprendizaje, como responsable de la construcción de sus propios conocimientos mediante recursos 
                  didácticos como debates, trabajo colaborativo, análisis de imágenes, lectura crítica, video foro, entre otros. En esta dinámica, 
                  el docente realiza el rol de guía facilitador, asesorando y acompañando al estudiante en su aprendizaje.

                </div>
                
                
            </div>
        </div>
     
        
    
        </div>
        <br>
        </div>


       
        
 



    </section>

    <br><br><br>
  

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