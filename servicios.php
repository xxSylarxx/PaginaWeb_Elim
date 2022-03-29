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
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
    #servicios{
        
        background: linear-gradient(rgba(252, 252, 252, 0.95), rgba(252, 252, 252, 0.95)), url(https://image.freepik.com/vector-gratis/patron-fisuras-papeleria-escolar-dibujado-lineas-contorno-negras-sobre-fondo-blanco_198278-1286.jpg);
        background-size: 30%;
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

</style>

   
    <?php include_once './includes/header.php'; ?>
    
    <?php include_once './includes/redes.php'; ?>
    <section class="container-fluid" id="servicios">
        <br><br>
        <div class="container">
            <div class="separador">
                  <div class="sep_box"><i class="fas fa-hotel"></i></div>
                    <div class="sep_title">SERVICIOS</div>
            </div>
            <br><br>
        <div class="row justify-content-around mt-4 pt-4">
            <div class="col-lg-5 my-auto aos-init " data-aos="flip-right" data-aos-duration="2000">
            <h4><center>DEPARTAMENTO PSICOLÓGICO</center></h4>
                <p class="text-justify line">
                         El psicólogo es una figura clave en el desarrollo funcional y equilibrado
                          de nuestra institución en todos los niveles: Inicial, Primaria y Secundaria.
                           Su función prioritaria es atender y fomentar el desarrollo psicológico en todos
                            sus componentes - psicomotriz, intelectual, social, afectivo-emocional- y en los 3 agentes principales
                             del sistema educativo (alumnos, padres y profesores). 
                             Desde esta perspectiva, el trabajo del psicólogo implica 2 grandes objetivos: 
                             1) aportar un análisis psicológico de diversas situaciones (evaluación); y
                              2) proponer planes de acción que respondan a los análisis realizados (intervención). 

                </p>
              
               
            </div>
            <div class="col-lg-6 my-auto aos-init" data-aos="flip-left" data-aos-duration="2000">
                <center><img src="./assets/img/servicios/psicologico.jpg" class="rounded shadow " width="100%"></center>                                
            </div>
        </div>
        <br>
        <div class="row justify-content-around mt-4 pt-4" >
            <div class="col-lg-5 my-auto" data-aos="flip-right" data-aos-duration="2000">                 
                 <center><img src="./assets/img/servicios/consejeria.jpg" class="rounded shadow " width="100%"></center>
                 <br>
            </div>
            <div class="col-lg-6 my-auto " data-aos="flip-left" data-aos-duration="2000">
            <h4><center>CONSEJERÍA PASTORAL</center></h4>

                <p class="text-justify line">

                             La acción pastoral de nuestra institución es ayudar a la comunidad estudiantil a que conozcan la 
                             palabra de Dios, dar a conocer a Jesús, dinamizar los procesos de fe de acuerdo a la realidad de 
                             los miembros de nuestra institución, a fin de fortalecer la vivencia de nuestra fe cristiana.

                </p>
                
                
            </div>
        </div>
        <br>
        <div class="row justify-content-around mt-4 pt-4">
            <div class="col-lg-5 my-auto" data-aos="flip-right" data-aos-duration="2000">
            <h4><center>VISITAS DE ESTUDIO</center></h4>
                <p class="text-justify line">
                    Las visitas de estudio guiadas por la institución y los maestros las cuales ayudan a los estudiantes a aprender 
                    de forma vivencial la información que reciben dentro del aula. Las visitas de estudio que ayudarán a nuestros alumnos
                    a conocer mejor las áreas académicas como Ciencia, Tecnología y Ambiente, Ciencias Sociales, Arte, entre otros para conocer,
                  comprender, apreciar y valorar con espíritu crítico, con una actitud abierta y respetuosa, las diferentes manifestaciones culturales y artísticas. 
                </p>
              
               
            </div>
            <div class="col-lg-6 my-auto " data-aos="flip-left" data-aos-duration="2000">
                <center><img src="./assets/img/servicios/visitas.jpg" class="rounded shadow " width="100%"></center>
                
                
            </div>
        </div>
        <br>
        <div class="row justify-content-around mt-4 pt-4">
            <div class="col-lg-5 my-auto" data-aos="flip-right" data-aos-duration="2000">                
                 <center><img src="./assets/img/servicios/topicos.jpg" class="rounded shadow " width="100%"></center>
                 <br>
            </div>
            <div class="col-lg-6 my-auto " data-aos="flip-left" data-aos-duration="2000">
            <h4><center>TÓPICO</center></h4>

                <p class="text-justify line">

                Contamos con Tópico de primeros auxilios para las necesidades de nuestra comunidad educativa, el tópico de enfermería 
                tiene como función brindar una atención de calidad e inmediata a los alumnos y personal que requiera sus servicios. 
                Aplica los primeros auxilios, calmando malestares cotidianos e informa por escrito el tratamiento aplicado a las familias
                 de los usuarios, priorizando necesidades.


                </p>
                
                
            </div>
        </div>
        <br>
        </div>
        <br><br>
    </section>

   
    <?php include_once './includes/footer.php'; ?>


    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.pooper.js"></script>
    <script>
  AOS.init();
</script>

</body>

</html>