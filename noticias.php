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
        
        .list-group-item.active{
            z-index:2;
            color:#fff;
            background-color:var(--color2);
            border-color:var(--color2);
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
    <?php include_once './includes/redes.php'; ?>
  
    

    
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
      
        <div class="container" id="noticias">
        <div class="row justify-content-between">
            <div class="col-lg-8">
            <div class="row my-2" id="noticias">
          
          <div class="col-md-4 mb-4  ">
              <div class="card ">
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
          <div class="col-md-4 mb-4">
              <div class="card ">
                  <div class="crop">
                      <img src="./assets/img/noticias/noticia2.jpg" class="w-100">
                  </div>
                  <a href="noticia2.php" style="color:var(--color1);text-decoration:none;">
                  <div class="card-body px-3 pb-0 ">
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
          <div class="col-md-4 mb-4">
              <div class="card ">
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
         
      </div>
            </div>
            <div class="col-lg-3 pt-4">
                <div class="list-group">
                    <a class="list-group-item"><b><i class="fas fa-bars"></i>&nbsp;&nbsp; CATEGORÍAS</b></a>
                                            <a href="noticias.php" class="list-group-item active">Noticias</a>
                                            <a href="noticias.php" class="list-group-item ">Eventos</a>
                                            <a href="noticias.php" class="list-group-item ">Comunicados</a>
                                            
                                    </div>
                <br><br>
                <h5 class="mb-3 fw-bold" style="color:var(--color1);">Siguenos en Facebook</h5>
                <div class="row">
                    <div class="col-md">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Felimcolegio&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>
          
            
    </section>
    <br>
    <br>
</div>
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