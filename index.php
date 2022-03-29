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
    
    <title>Colegio Cristiano ELIM</title>
</head>

<body>

    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.pooper.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    
    

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
            width: 100%;
            height: 100%;
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
            transition: transform .3s ease-in-out;
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
            transition: transform .3s ease-in-out;
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
            transition: transform .3s ease-in-out; 
        }
        .button4{
            background-color: var(--color2); 
            border: 1px solid #ffff;
            border-radius: 20px;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;  
            transition: transform .3s ease-in-out; 
        }

        .button1:hover{
            transform: scale(1.06);
            background-color: var(--color1);
        }
        .button2:hover{
            background-color: var(--color2);
            transform: scale(1.06);
        }

        .button3:hover{
            background-color: var(--color3);
            transform: scale(1.06);
        }
        .button4:hover{
            background-color: var(--color1);
            transform: scale(1.06);
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
        #b-imagen{
        padding-left:15rem;
        margin-top:0rem!important;
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
    #b-imagen{
        padding-left:0rem;
        text-align:center;
        margin-top:0rem!important;
}
    
}
    </style>

    <?php include_once './includes/header.php'; ?>

    <?php include_once './includes/redes.php'; ?>
   
<!-- Slider -->
    <section>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./assets/img/banner/banner1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./assets/img/banner/banner2.png" class="d-block w-100" alt="...">
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
    </section>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" style="padding-top: 1.6rem;">
            <div class="modal-content">
                <!-- <a href="./files/admision.pdf" target="_blank"> -->
                <!-- <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: #414141;">PROCESO DE ADMISIÓN 2022</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> -->
                <div class="modal-body">
                    <img src="./assets/img/inicio/modal.jpg" width="100%">
                   
                </div>
                <!-- <div class="modal-footer">
                        <a href="./files/admision.pdf" target="_blank" class="btn btn-style">
                            Conoce aquí nuestra propuesta.
                        </a>
                    </div> -->
                <!-- </a> -->
            </div>
        </div>
    </div>

    

    <br><br><br>


    <!---Bienvenidos -->
    <section class="container">
        <div class="separador">
            <div class="sep_box"><i class="fas fa-hotel"></i></div>
            <div class="sep_title">Bienvenidos</div>
        </div>
        <div class="row justify-content-end mt-4 pt-4">
            <div class="col-lg-5 my-auto">
                
                <p class="text-justify line">
                La institución educativa Elim buscamos desarrollar en nuestros estudiantes habilidades y destrezas, descubriendo aptitudes, intereses, motivaciones; orientando en valores y principios cristianos, fundamentados en las Sagradas Escrituras, para el logro de una identidad personal y social que asuma la diversidad cultural y buscamos la construcción de  aprendizajes significativos y funcionales mediante el uso de las nuevas tecnologías de información y comunicación, para que el alumno se convierta en un sujeto activo y procesador crítico - reflexivo. 
                </p>
              
                <p class="text-center" style="font-family: 'Dancing Script', cursive;">
                    <b style="font-size:1.6rem;color:var(--color1);">Mg. Teodora Tenorio Guevara</b>
                </p>
                 <p class="text-center" >
                    <b>Directora</b>
                </p>
                <br>
            </div>
            <div class="col-lg-6 my-auto " id="b-imagen">
                <img src="./assets/img/inicio/directora.jpg" class="rounded shadow " width="75%">
                
                
            </div>
        </div>
    </section>
    <br>
    <br>
    
    <!---Niveles -->
    <section class="container p-1" id="niveles">
      
        <div class="separador">
            <div class="sep_box"><i class="fas fa-graduation-cap"></i></div>
            <div class="sep_title">NIVELES</div>
        </div>
        <br><br><br>
        <div class="row">
          
          <div class="col12 col-lg-4" id="col-niveles">  
            <div class="col">          
             <img src="./assets/img/inicio/inicial.jpg" class="img-fluid" alt="">
             </div> 
             <div class="col" id="col-niveles1">             
               <h3>NIVEL INICIAL</h3>
               <p style="text-align:justify;" >Buscamos que nuestros niños puedan construir sus propios aprendizajes y desarrollen de forma integral sus diferentes talentos ....</p>
               <div class="col-md text-center">
                   <a href="./inicial.php"><button class="button1">Conoce más<i class="fas fa-angle-right"></i></button></a>
                </div>

              </div>    
            
          </div>             
          
          <div class="col12 col-lg-4" id="col-niveles" >
              <div class="col">
                 <img src="./assets/img/inicio/primaria.jpg" class="img-fluid" alt="">
              </div>
              <div class="col" id="col-niveles2" >             
                  <h3>NIVEL PRIMARIA</h3>
               <p style="text-align:justify;"  >En este nivel, nuestros estudiantes desarrollan diferentes habilidades y capacidades en el pensamiento lógico y comprensión lectora ....</p>
               <div class="col-md text-center">
                   <a href="./primaria.php"><button class="button2">Conoce más<i class="fas fa-angle-right"></i></button></a>
                </div>
              </div>    
          </div>
          <div class="col12 col-lg-4" id="col-niveles">
              <div class="col">
                 <img src="./assets/img/inicio/secundaria.jpg"  class="img-fluid" alt="">
              </div>
              <div class="col " id="col-niveles3" >             
                  <h3>NIVEL SECUNDARIA</h3>
               <p style="text-align:justify;">El estudiante del nivel secundaria continúa su formación integral en un ambiente de respeto a la persona y la práctica de los valores cristianos ........</p>
               <div class="col-md text-center">
                  <a href="./secundaria.php">  <button class="button3">Conoce más<i class="fas fa-angle-right"></i></button></a>
                </div>
              </div>    
          </div>
          </div>
        </div>
        
    </section>
    <br>
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

</center>
</section>
    <br><br>

    <!--- Noticias -->
<div >
<br>
<br>
    <section class="container" >
        <div class="separador">
            <div class="sep_box"><i class="fas fa-newspaper"></i></div>
            <div class="sep_title">NOTICIAS</div>
        </div>
        <br><br>
        <div class="row my-2" id="noticias">
        <div class="col-md-3 mb-4">
              <div class="card w-100">
                  <div class="crop">
                      <img src="./assets/img/noticias/noticia1.jpg" class="w-100">
                  </div>
                  <a href="noticia1.php" style="color:var(--color1);text-decoration:none;">
                  <div class="card-body px-3 pb-0">
                      <h5 class="" style="color:var(--color1);">MATRÍCULA 2022 👩‍🎓</h5>
                      <p class="text-justify fs-6">Ya comenzó el proceso de Matrícula para el año escolar 2022 de Inicial, Primaria y Secundaria. 👩‍🏫👩‍🎓👩‍💻
                  </div>
                  <div class="card-footer d-flex flex-row align-items-center bg-white px-3 py-2" style="color:orange;">
                      <div>
                          <i class="far fa-calendar-alt"></i>
                          <span class="ms-1" style="font-size: 16px;">12-09-2021</span>
                      </div>
                      <div class="ms-auto fs-4">
                          <span><i class="far fa-arrow-alt-circle-right"></i></span>
                      </div>
                  </div>
                  </a>
              </div>
          </div>
          <div class="col-md-3 mb-4">
              <div class="card w-100">
                  <div class="crop">
                      <img src="./assets/img/noticias/noticia2.jpg" class="w-100">
                  </div>
                  <a href="noticia2.php" style="color:var(--color1);text-decoration:none;">
                  <div class="card-body px-3 pb-0">
                      <h5 class="" style="color:var(--color1);">METODOLOGÍA</h5>
                      <p class="text-justify fs-6">Elim tiene la metodología más eficaz para aprender Inglés.
                            Transforma tu educación con el Aprendizaje Basado en Proyectos (ABP)
                      </p>
                  </div>
                  <div class="card-footer d-flex flex-row align-items-center bg-white px-3 py-2" style="color:orange;">
                      <div>
                          <i class="far fa-calendar-alt"></i>
                          <span class="ms-1" style="font-size: 16px;">07-09-2021</span>
                      </div>
                      <div class="ms-auto fs-4">
                          <span><i class="far fa-arrow-alt-circle-right"></i></span>
                      </div>
                  </div>
                  </a>
              </div>
          </div>
          <div class="col-md-3 mb-4">
              <div class="card w-100">
                  <div class="crop">
                      <img src="./assets/img/noticias/noticia3.jpg" class="w-100">
                  </div>
                  <a href="noticia3.php" style="color:var(--color1);text-decoration:none;">
                  <div class="card-body px-3 pb-0">
                      <h5 style="color:var(--color1);">EL IDIOMA INGLÉS</h5>
                      <p class="text-justify fs-6">En elim queremos que domines el idioma Inglés 🇬🇧🇺🇸
                            Por eso, estudia con nosotros y vive la experiencia‼️                         
                      </p>
                  </div>
                  <div class="card-footer d-flex flex-row align-items-center bg-white px-3 py-2" style="color:orange;">
                      <div>
                          <i class="far fa-calendar-alt"></i>
                          <span class="ms-1" style="font-size: 16px;">27-08-2021</span>
                      </div>
                      <div class="ms-auto fs-4">
                          <span><i class="far fa-arrow-alt-circle-right"></i></span>
                      </div>
                  </div>
                </a>
              </div>
                
                        
                    
                </div>
                <div class="col-md-3 mb-4">
              <div class="card w-100">
                  <div class="crop">
                      <img src="./assets/img/noticias/noticia1.jpg" class="w-100">
                  </div>
                  <a href="noticia1.php" style="color:var(--color1);text-decoration:none;" >
                  <div class="card-body px-3 pb-0">
                      <h5 class="" style="color:var(--color1);">MATRÍCULA 2022 👩‍🎓</h5>
                      <p class="text-justify fs-6">Ya comenzó el proceso de Matrícula para el año escolar 2022 de Inicial, Primaria y Secundaria. 👩‍🏫👩‍🎓👩‍💻
                  </div>
                  <div class="card-footer d-flex flex-row align-items-center bg-white px-3 py-2" style="color:orange;">
                      <div>
                          <i class="far fa-calendar-alt"></i>
                          <span class="ms-1" style="font-size: 16px;">12-09-2021</span>
                      </div>
                      <div class="ms-auto fs-4">
                          <span><i class="far fa-arrow-alt-circle-right"></i></span>
                      </div>
                  </div>
                  </a>
              </div>
          </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md text-center">
                    <a href="./noticias.php"><button class="button4">Ver más noticias <i
                            class="fas fa-angle-right"></i></button></a>
                </div>
            </div>
    </section>
    
</div>
    <br>
    <br>
    <br>

      <!--- Úbicanos -->
      <section class="container">
        <div class="separador">
            <div class="sep_box"><i class="fas fa-hotel"></i></div>
            <div class="sep_title">ÚBICANOS</div>
        </div>
        <br><br>
        <div class="row justify-content-between">
            <div class="col-md-3">
                <li class="list-group-item d-flex " style="align-items: center; border: none; background: transparent;">
                    <span class="circulo">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </span>
                    <span style="color: var(--color1);">01 5531765</span>
                </li>
            </div>
            <div class="ubic col-md-5" style="border-left: 1px solid #9bcabb; border-right: 1px solid #9bcabb;">
            
                <li class="list-group-item d-flex " >
               
                    <span class="circulo">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                    <span style="word-break: break-word; color: var(--color1);">informeselim@gmail.com</span>
                   
                </li>
                
            </div>
            <div class="col-md-4">
                <li class="list-group-item d-flex" style="align-items: center; border: none; background: transparent;">
                    <span class="circulo">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </span>
                    <span style="color: var(--color1);">Av. Trujillo s/n Sector G Mz.G3 Lt.02<br> Mi Perú, Callao.</span>
                </li>
            </div>           
      
        </div>
        <br><br>
        <div class="ubic-img row justify-content-center">
            <div class="col-md-6" >
            <img src="./assets/img/inicio/footer1.jpg" class="rounded shadow" width="100%" height="430" style="object-fit: cover;">
            </div>
            <div class="col-md-6" >
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3904.7311352396937!2d-77.122209!3d-11.854084000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x15f89d43be8228d7!2sColegio%20ELIM%20%3A-D!5e0!3m2!1ses!2spe!4v1641249326274!5m2!1ses!2spe" class="rounded shadow" width="100%" height="430" style="border:0;" allowfullscreen="" loading="lazy"> </iframe>
                 
            </div>
        </div>
    </section>
    <br>
    <br>
    
    <?php include_once './includes/footer.php'; ?>
    
</body>

 <!-- Script de direccion 3D -->
 <script src="./assets/js/desplazamiento.js"></script>

    <script type="text/javascript">
        let modal = new bootstrap.Modal(document.getElementById('myModal'), );
        modal.show();
    </script>
</html>