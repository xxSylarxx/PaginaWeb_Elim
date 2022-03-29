<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Fotos</title>
</head>

<style>

    div.galeria{
        margin:10px 20px;
        box-shadow: 0 4px 8px blue, 0 6px 20px 0 black;
        float:left;
        width:350px;
    }
    div.galeria img{
        width: 100%;
        height:auto;
    }
    div.galeria:hover{
        border:1px solid red;
        transform: rotate(-3deg);
    }
    div.pie{
        text-align:center;
        text-shadow: 2px 2px 5px green;
        padding:10px;
    }


</style>



<body>
    <h1>Galeria de Fotos</h1>    
    <h1>Museo de la Ciudad</h1>
    <div class="galeria">
            <div class="foto">
                <img src="" alt="">
            </div>
            <div class="pie">
                <p>Titulo 1</p>
                <p>descripcion</p>
            </div>
    </div>
    <div class="galeria">
            <div class="foto">
                <img src="" alt="">
            </div>
            <div class="pie">
                <p>Titulo 2</p>
                <p>descripcion</p>
            </div>
    </div>
    <div class="galeria">
            <div class="foto">
                <img src="" alt="">
            </div>
            <div class="pie">
                <p>Titulo 3</p>
                <p>descripcion</p>
            </div>
    </div>
</body>
</html>