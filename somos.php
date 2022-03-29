<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/icons/escudo.ico" type="image/x-icon">
    <title>Colegio Cristiano ELIM</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/web.css">
    <link rel="stylesheet" href="./assets/css/networks.css">
    <!--Estilo de direccion3D-->
    <link rel="stylesheet" href="./assets/css/desplazamiento.css">        
    <!--Fin del estilo direccion 3D-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
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
    

</style>

   
    <?php include_once './includes/header.php'; ?>
    <?php include_once './includes/redes.php'; ?>

    <br><br>


<!---Bienvenidos -->
<section class="container">
    <div class="separador">
        <div class="sep_box"><i class="fas fa-hotel"></i></div>
        <div class="sep_title">QUIÉNES SOMOS</div>
    </div>
    <div class="row justify-content-around mt-4 pt-4">
        <div class="col-lg-5 my-auto">
            
            <p class="text-justify line ">
                La Institución Educativa Elim" tiene por finalidad la formación integral de los
                estudiantes, a la luz de la difusión y la práctica en valores, principios cristianos en base
                a la palabra de Dios, el conocimiento científico y humanístico que les permita insertarse
                adecuadamente en su entorno social y aspirar con éxito en la continuidad de su
                formación mediante el ingreso a la educación superior.<br>
                El objetivo de la institución es diseñar e implementar políticas de gestión pedagógica, institucional 
                y administrativa a fin de establecer las acciones tendientes a optimizar un servicio educativo de calidad 
                como medio para garantizar aprendizajes significativos, la formación integral de nuestros estudiantes y el
                 desarrollo del Colegio en un marco de convivencia democrática.
            </p>
        </div>
        <div class="col-lg-6 my-auto ">
            <center><img src="./assets/img/nosotros/somos.jpg" class="rounded shadow " width="100%"></center>
            
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
 
  
 
    <!-- footer -->
    <?php include_once 'includes/footer.php'; ?>
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
    

</body>

</html>