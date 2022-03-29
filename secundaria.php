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
            <div class="sep_title">NIVEL SECUNDARIA</div>
        </div>
        <div class="row justify-content-around mt-4 pt-4">
            <div class="col-lg-5 my-auto">
                <br>
                <p class="text-justify line">
                       Comprometidos con la educación y la formación de los mejores estudiantes profesionales y líderes para el hoy y el mañana.
                        El estudiante del nivel secundaria continúa su formación integral en un ambiente de respeto a la persona y la práctica de 
                        los valores cristianos. El programa de estudios permite a los estudiantes desarrollar habilidades sociales, académicas e 
                        investigativas a fin conseguir el perfil de egreso esperado. El estudiante desarrolla sus aprendizajes académicos mediante 
                        el uso de las tics que les ayudan a realizar un aprendizaje colaborativo y constructivista.
                </p>
              
                
            </div>
            <div class="col-lg-6 my-auto ">
                     <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                          <div class="carousel-item active">
                           <img src="./assets/img/secundaria/secundaria1.jpg" class=" imgnivel d-block w-100"  alt="...">
                          </div>
                      <div class="carousel-item">
                             <img src="./assets/img/secundaria/secundaria2.jpg" class="imgnivel d-block w-100"  alt="...">
                         </div>
                     <div class="carousel-item">
                              <img src="./assets/img/secundaria/secundaria3.jpg" class="imgnivel d-block w-100"  alt="...">
                    </div>
                    </div>
                     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                        </button>
                     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                     </button>
                    </div>


            </div>
        </div>
    </section>
    <br>
    <br>
    <section class="container-fluid">
        <br><br>
        <div class="container" id="valores" >
            <div class="row owl-carousel p-0 ">
                <div class="col">
                <div  class="flip" style="background-color: var(--color1);">
                    <div class="card" style="background-color: var(--color1);">
                        <div class="front">
                            <span class="fs-1"><i class="fas fa-heart"></i></span>
                            <h4 class="fw-bold">Amor</h4>
                        </div>
                        <div class="back">
                            <span>A Dios y al prójimo manifestado en los principios bíblicos de las Sagradas Escrituras que guían nuestra línea axiológica.</span>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="flip" style="background-color: var(--color3);">
                    <div class="card" style="background-color: var(--color3);">
                        <div class="front">
                            <span class="fs-1"><i class="fas fa-hand-holding-heart"></i></span>
                            <h4 class="fw-bold">Solidaridad</h4>
                        </div>
                        <div class="back">
                            <span>El ponerse en el lugar del otro, con sensibilidad y respeto por las diferencias y buscando contribuir con su entorno y por el bien común, son rasgos que desarrolla la solidaridad.</span>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="flip" style="background-color: var(--color2);">
                    <div class="card" style="background-color: var(--color2);">
                        <div class="front">
                            <span class="fs-1"><i class="fas fa-award"></i></span>
                            <h4 class="fw-bold">Responsabilidad</h4>
                        </div>
                        <div class="back">
                            <span>Cada persona debe asumir la responsabilidad de sus acciones,
                                    incluido su formación y aprendizaje a través de la indagación, el trabajo colaborativo, el
                                    aprender haciendo.
                            </span>
                        </div>
                    </div>
                </div>
                </div>           
                <div class="col">
                <div  class="flip" style="background-color: var(--color1);">
                    <div class="card" style="background-color: var(--color1);">
                        <div class="front">
                            <span class="fs-1"><i class="fas fa-people-carry"></i></span>
                            <h4 class="fw-bold">Proactividad</h4>
                        </div>
                        <div class="back">
                            <span>Ser protagonista de su desarrollo académico y personal.</span>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="flip" style="background-color: var(--color3);">
                    <div class="card" style="background-color: var(--color3);">
                        <div class="front">
                            <span class="fs-1"><i class="fas fa-gem"></i></span>
                            <h4 class="fw-bold">Respeto</h4>
                        </div>
                        <div class="back" >
                            <span>El respeto por las personas y sus culturas, creencias y valores, se corresponde
                                    con la valoración de la diversidad cultural y humana, teniendo apertura para aceptar las
                                    diferencias y entender que el otro también tiene su propia perspectiva y su propia
                                    opinión, tan válida como la suya.
                            </span>
                        </div>
                    </div>
                </div>
                </div>  
                <div class="col">
                <div  class="flip" style="background-color: var(--color2);">
                    <div class="card" style="background-color: var(--color2);">
                        <div class="front">
                            <span class="fs-1"><i class="fas fa-diagnoses"></i></span>
                            <h4 class="fw-bold">Honradez</h4>
                        </div>
                        <div class="back">
                            <span>La honradez valor o cualidad que posee un sujeto que actúa de manera
                                    recta, honesta, justa y con moral. El término hace referencias a honrar, apreciar y actuar
                                    tal como a las personas les gustaría que actuaran con ellas.
                            </span>
                        </div>
                    </div>
                </div>
                </div>                    
            </div>
        </div>
        <br><br>
    </section>
</section>
<br><br>
      <!---Servicios Tecnológicos -->
      <section class="container" id="servicios">
       
        <div class="separador">
            <div class="sep_box"><i class="fas fa-chalkboard-teacher"></i></div>
            <div class="sep_title">SERVICIOS TECNOLÓGICOS</div>
        </div>
        <br>
        <br>
        <br>
        
        <center>

<div class='container3d'>

  <ul>
    <li>
      <a class='normal' >
        <img src="./assets/img/recursos/cubicol.jpg" class="img-fluid" alt="" >
      </a>
      <div class='info'>
        <h3>PLATAFORMA CUBICOL:</h3>
        <br>
        <p>Se utiliza para la comunicación con la comunidad educativa a través de su mensajería, así como para enviar los recursos utilizados en clase a los padres de familia y estudiantes, el retorno de evidencias, los registros de calificación virtual.</p>
      </div>
    </li>
    <li>
      <a class='normal' >
      <img src="./assets/img/recursos/zoom.png" class="img-fluid" alt="" width="100%">
      </a>
      <div class='info'>
        <h3>ZOOM:</h3>
        <br>
        <p>Clases virtuales en online, aplicación de herramientas virtuales a tiempo real, se forma salas para los trabajos en equipo.</p>
      </div>
    </li>
    <li>
      <a class='normal' >
      
      <img src="./assets/img/recursos/meet.jpg" class="img-fluid"alt="" width="100%">
      
      </a>
      <div class='info'>
        <h3>GOOGLE MEET:</h3>
        <br>
        <p>Se utiliza para las reuniones con los educadores, escuela de padres.</p>
      </div>
    </li>
    <li>
    <a class='normal' >
      
      <img src="./assets/img/recursos/facebook.png" class="img-fluid" alt="" width="100%">
      
      </a>
      <div class='info'>
        <h3>FACEBOOK :</h3>
        <br>
        <p>Se usa para la trasmisión en vivo de celebraciones y actividades programadas.</p>
      </div>
    </li>
    <li>
    <a class='normal' >
      
      <img src="./assets/img/recursos/edpuzzle.png" class="img-fluid" alt="" width="100%">
      
      </a>
      <div class='info'>
        <h3>EDPUZZLE: </h3>
        <br>
        <p>Esta herramienta nos permitirá a nosotros y a nuestros alumnos hacer contenido multimedia mucho más atractivo. Y el tema explicado en el vídeo nos permitirá plantear preguntas perfectas para ir calificando a los estudiantes.</p>
      </div>
    </li>
    <li>
    <a class='normal' >
      
      <img src="./assets/img/recursos/genially.jpg" class="img-fluid" alt="" width="100%">
      
      </a>
      <div class='info'>
        <h3>GENIALLY : </h3>
        <br>
        <p>Es una excelente plataforma que le permite al maestro crear contenidos diferentes en los que la interactividad es perfecta para usar en clase, logrando grandes resultados..</p>
      </div>
    </li>
    <li>
    <a class='normal' >
      
      <img src="./assets/img/recursos/padlet.jpg" class="img-fluid" alt="" width="100%">
      
      </a>
      <div class='info'>
        <h3>PADLET: </h3>
        <br>
        <p>Son denominados ‘muros’ y, en ellos, los docentes pueden incluir toda la información que quieren presentar en clase con la ayuda de imágenes, enlaces y documentos. El hecho de que sea un espacio interactivo permite que en cada muro se genere participación en torno al tema expuesto.</p>
      </div>
    </li>
    <li>
    <a class='normal' >
      
      <img src="./assets/img/recursos/live.jpg" class="img-fluid" alt="" width="100%">
      
      </a>
      <div class='info'>
        <h3>LIVEWORKSHEETS:</h3>
        <br>
        <p>permite transformar las tradicionales fichas en ejercicios interactivos auto corregibles, que llamamos "fichas interactivas". Los estudiantes pueden completar estas fichas online y enviar sus respuestas al profesor.</p>
      </div>
    </li>
    
  </ul>

</div>


</section>
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
            autoplayTimeout: 10000,
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