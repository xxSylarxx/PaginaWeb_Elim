<?php
$pagina= basename($_SERVER['PHP_SELF']);
$active1 = 'nav-link';
$active2 = 'nav-link';
$active3 = 'nav-link';
$active4 = 'nav-link';
$active5 = 'nav-link';
$active6 = 'nav-link';
switch ($pagina) {
    case 'index.php':
        $active1 .= ' activador';
        break;
    case 'somos.php':
    case 'historica.php':
    case 'infraestructura.php':
        $active2 .= ' activador';
        break;
        case 'metodologia.php':
        case 'servicios.php':
        case 'perfiles.php':
        $active3 .= ' activador';
        break;
    case 'inicial.php':
    case 'primaria.php':
    case 'secundaria.php':
        $active4 .= ' activador';
        break;
        case 'noticias.php':
            
            $active5 .= ' activador';
            break;
            case 'matricula.php':
            case 'admision.php':
            case 'contrato.php':
            case 'reglamento.php':
            case 'curricular.php':
            case 'estudio.php':
            case 'sistema.php':
            case 'calendarizacion.php':
            case 'protocolo.php':
            
                $active6 .= ' activador';
                break;
}
?>
<style>

header .navbar-nav .nav-item .activador {
  color: var(--color3);
  
}
   

.dropdown-menu li{
    position: relative;
}
.dropdown-menu .submenu{ 
    display: none;
    position: absolute;
    left:100%; top:-7px;
}
.dropdown-menu .submenu-left{ 
    right:100%; left:auto;
}

.dropdown-menu > li:hover{ background-color: #f1f1f1 }
.dropdown-menu > li:hover > .submenu{
    display: block;
}

</style>

<div id="header-top"></div>
<header class="fixed-top" id="header">
    <div class="bar-sup">
        
        <div class="ms-auto">
        <a href="https://www.facebook.com/elimcolegio" class="me-3" target="_blank"><i class="fab fa-facebook"></i><span> Facebook</span></a>
        <a href="https://www.youtube.com/channel/UCP1MOowU0oYsjG0rl_-6-Mw" class="me-3" target="_blank"><i class="fab fa-youtube "></i><span> Youtube</span></a>
            <a href="https://cristianoelim.cubicol.pe/principal/login" target="_blank" class="me-3"><i class="fas fa-globe-americas"></i><span> Intranet</span></a>
    
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand animate__animated animate__zoomIn" href="./">

    <div class="d-flex flex-row align-items-center" id="escudo">

    <img src="./assets/img/icons/escudo.png" class="mr-3"  height="120"id="logo-elim">

    <h3 id="text-logo" style="text-align:center;">Colegio <br>Cristiano Elim</h3>

</div>

</a>
        <button class="navbar-toggler d-lg-none" type="button" style="background-color:var(--color1);" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="background-color:var(--color1);"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <li class="nav-item ">
                    <a class="nav-link fw-bold <?= $active1 ?>" href="./">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link fw-bold <?= $active2 ?>" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="me-2">NOSOTROS</span><i class="fas fa-angle-down"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="somos.php">QUIÉNES SOMOS</a>
                        <a class="dropdown-item" href="historica.php">RESEÑA HISTÓRICA</a>
                        <a class="dropdown-item" href="infraestructura.php">INFRAESTRUCTURA</a>
                        
                    </div>
                </li>
                
                <li class="nav-item dropdown ">
                    <a class=" nav-link  fw-bold <?= $active3 ?> " href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="me-2">PROPUESTA EDUCATIVA</span><i class="fas fa-angle-down"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="metodologia.php">METODOLOGÍA</a>
                        <a class="dropdown-item" href="servicios.php">SERVICIOS</a>
                        <a class="dropdown-item" href="perfiles.php">PERFILES</a>
                        
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link fw-bold <?= $active4 ?>" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="me-2">NIVELES</span><i class="fas fa-angle-down"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="inicial.php">INICIAL</a>
                        <a class="dropdown-item" href="primaria.php">PRIMARIA</a>
                        <a class="dropdown-item" href="secundaria.php">SECUNDARIA</a>
                        
                    </div>
                </li>
                
                <li class="nav-item fw-bold">
                    <a class="nav-link <?= $active5 ?>" href="noticias.php">NOTICIAS</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link fw-bold <?= $active6 ?>" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="me-2">ADMISIÓN</span><i class="fas fa-angle-down"></i></a>
                    <div class="dropdown-menu " aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="matricula.php">PROCESO DE MATRÍCULA</a>
                        <a class="dropdown-item" href="admision.php">ADMISIÓN 2022</a>
                        <a class="dropdown-item" href="contrato.php">CONTRATO 2022</a>
                        
                        <ul class="navbar-nav dropstart">
		
		                        <li class="nav-item dropdown">
			                         <a class="nav-link fw-bold  dropdown-toggle" href="#" data-bs-toggle="dropdown"> <span>&nbsp;&nbsp;DOCUMENTOS INSTITUCIONALES<br>&nbsp;&nbsp;2022 <span></a>
		                             <ul class="dropdown-menu">
			  
			                            <li><a class="dropdown-item" id="submenu" href="reglamento.php"> REGLAMENTO INTERNO </a>
			  	                            
			                            </li>
                                        <li><a class="dropdown-item" id="submenu" href="curricular.php"> PLAN CURRICULAR </a>
			  	                            
			                            </li>
                                        <li><a class="dropdown-item" id="submenu" href="estudio.php"> PLAN DE ESTUDIO</a>
			  	                            
			                            </li>
                                        <li><a class="dropdown-item" id="submenu" href="sistema.php"> SISTEMA DE EVALUACIÓN </a>
			  	                            
			                            </li>
                                        <li><a class="dropdown-item" id="submenu" href="calendarizacion.php"> CALENDARIZACIÓN</a>
			  	                            
			                            </li>
                                        <li><a class="dropdown-item" id="submenu" href="protocolo.php"> PROTOCOLO DEL USO DEL AULA <span>PRESENCIAL Y VIRTUAL<span></a>
			  	                            
			                            </li>
                                        <li><a class="dropdown-item" id="submenu" href="protocolo2.php"> PROTOCOLO DE REGRESO SEGURO A CLASE </a>
			  	                            
			                            </li>
                                     </ul>
		                        </li>
	                   </ul>

                        
                    </div>
                </li>
                        </ul>                        
                    </div>
                            
                        
                                         
                                                              
                   
                                                           
                </li>
            </ul>
        </div>
    </nav>
</header>

<script>
    var height = document.getElementById('header').clientHeight;
    document.getElementById('header-top').style.height = height + "px";
</script>

<script type="text/javascript">
//	window.addEventListener("resize", function() {
//		"use strict"; window.location.reload(); 
//	});


	document.addEventListener("DOMContentLoaded", function(){
        

    	/////// Prevent closing from click inside dropdown
		document.querySelectorAll('.dropdown-menu').forEach(function(element){
			element.addEventListener('click', function (e) {
			  e.stopPropagation();
			});
		})



		// make it as accordion for smaller screens
		if (window.innerWidth < 992) {

			// close all inner dropdowns when parent is closed
			document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
				everydropdown.addEventListener('hidden.bs.dropdown', function () {
					// after dropdown is hidden, then find all submenus
					  this.querySelectorAll('.submenu').forEach(function(everysubmenu){
					  	// hide every submenu as well
					  	everysubmenu.style.display = 'none';
					  });
				})
			});
			
			document.querySelectorAll('.dropdown-menu a').forEach(function(element){
				element.addEventListener('click', function (e) {
		
				  	let nextEl = this.nextElementSibling;
				  	if(nextEl && nextEl.classList.contains('submenu')) {	
				  		// prevent opening link if link needs to open dropdown
				  		e.preventDefault();
				  		console.log(nextEl);
				  		if(nextEl.style.display == 'block'){
				  			nextEl.style.display = 'none';
				  		} else {
				  			nextEl.style.display = 'block';
				  		}

				  	}
				});
			})
		}
		// end if innerWidth

	}); 
	// DOMContentLoaded  end
</script>