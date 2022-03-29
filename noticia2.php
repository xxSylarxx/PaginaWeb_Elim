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
<body>
<br><br><br>

<div class="container">
    <div class="row">
        <div class="col-md">
            <h2 class="prim text-uppercase mb-3">METODOLOGÍA</h2>
            <p class="color-secu font-weight-bold"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp; 2021-05-11</p>
            <hr>
            <div class="content p-2">
                <p style="text-align:justify;"> Elim tiene la metodología más eficaz para aprender Inglés.  
                        Transforma tu educación con el Aprendizaje Basado en Proyectos (ABP)
                           </p>
               
               
                
            </div>
            <br>
            <div class="text-center">
            <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Felimcolegio%2Fvideos%2F4537317019694675&width=500&show_text=false&appId=543564153315944&height=282" width="80%" height="382" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
            </div>
</div>
        <div class="sig-facebook col-md-4">
            <h5 class="font-weight-bold mb-3">Siguenos en Facebook</h5>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Felimcolegio&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="92%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
    </div>
</div>

<br><br><br>
    

 
  
    <?php include_once './includes/footer.php'; ?>

</body>
 <!-- Script de direccion 3D -->
 <script src="./assets/js/desplazamiento.js"></script>
 <script type="text/javascript">
        let modal = new bootstrap.Modal(document.getElementById('myModal'), );
        modal.show();
    </script>

</html>