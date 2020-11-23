

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>
<script src="https://connect.facebook.net/signals/config/2239732346291365?v=2.9.27&amp;r=stable" async=""></script>
<script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
<script type="text/JavaScript" src="//s3.amazonaws.com/template-assets.iluria.com/commons/jquery.1.9.1.min.js"> </script>
<script type="text/javascript" src="//s3.amazonaws.com/template-assets.iluria.com/commons/jquery-migrate-1.2.1.min.js"> </script>
<script type="text/JavaScript" src="//s3.amazonaws.com/template-assets.iluria.com/commons/jquery-ui-1.8rc3.custom.min.js"> </script>
<script type="text/JavaScript" src="//s3.amazonaws.com/template-assets.iluria.com/commons/jquery.cookie.js"> </script>
<script type="text/javascript" src="//s3.amazonaws.com/template-assets.iluria.com/commons/jquery.fancybox-2.1.4/jquery.fancybox.pack.js?v=2.1.4"> </script>
<script type="text/javascript" src="//s3.amazonaws.com/template-assets.iluria.com/commons/jquery.easing.1.3.js"> </script>

<script type="text/JavaScript" src="//s3.amazonaws.com/template-assets.iluria.com/commons/jquery.maxlength-min.js"> </script>
<script type="text/javascript" src="//s3.amazonaws.com/template-assets.iluria.com/commons/jquery.jMenu.1.9/js/jMenu.jquery.js"> </script>
<script type="text/JavaScript" src="//s3.amazonaws.com/template-assets.iluria.com/commons/prettyphoto/js/jquery.prettyPhoto.min.js"> </script>  
<link rel="stylesheet" type="text/css" href="//s3.amazonaws.com/template-assets.iluria.com/commons/jquery.jMenu.1.9/css/jMenu.jquery.css" media="screen">
<link rel="stylesheet" href="//s3.amazonaws.com/template-assets.iluria.com/commons/jquery.fancybox-2.1.4/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen">
<link rel="stylesheet" href="//s3.amazonaws.com/template-assets.iluria.com/commons/prettyphoto/css/prettyPhoto.css" type="text/css" media="screen">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|Roboto+Condensed:300,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="pt-br">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/iluria.css">
    <script type="text/javascript" src="scripts/product.js"></script>
   
    
  
   
 
    <title>Loja NerdLandia</title>
</head>
<body>
<div class="header">
        <div class="topo col-xs-12 hidden-xs hidden-sm">
            <div class="row">
                <div class="container">
                    <div class="col-md-8">
                        <div class="hello-client-message">
                            <?php include('name.php') ?>
                         </div>
                        
                    </div>
                    
                    <div class="col-md-4">
                        <div id="social-media-icons">
                             <div class="iluria-social-media-link">
                                    <a href="https://www.facebook.com/nerdlandiaoficial/" target="_blank">
                                        <i class="fa fa-2x fa-facebook"></i>
                    
                                            
                                    </a>
                             </div>
    
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        
        
        <div class="container">
            <div class="col-md-4 botoes hidden-xs botao-topo">
                <ul>
                    <li class="iluria-layout-menu" style="padding-bottom: 15px; margin-top: 5px"><i class="fa fa-user"></i> Minha Conta <i class="fa fa-angle-down"></i>
                        <ul style="display:none">
                            <li>
                                <div class="logout-button iluria-layout-menu"> 
                                 <?php
                                  

                                 //session_start();
                                 
                                 if(isset($_SESSION['name']))
                                 {
                                     
                                     
                                 }else{
                                      echo '<a href="login.php" title="Faça seu login ou registre-se.">  
                                            Login / Registre-se
                                        </a> ';
                                 }
                                 ?> 
                                       
                                 
                                </div>

                            </li>
                           
                                <?php
                                     if(isset($_SESSION['name']))
                                     {
                                         
                                        echo ' <li>
                                        <div class="my-account-button iluria-layout-menu">
                                           
                                            <a href="sair.php" data-toggle="tooltip" title="Sair"> Sair</a> 
                                        </div>
                                    </li> ';
                                     }else{
                                          
                                     }
                                ?>
                           
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 col-xs-12 hidden-xs hidden-sm"> 
                <div class="logo"> 
                    <div id="shop-logo" class="top-image">
                         <a href="index.php">
                            <img src="img/logo.jpg" border="0" class="img-responsive" title="Seu Drop">    
                        </a>
                    </div>
 
                </div> 
            </div> 
            
            <div class="col-md-4 botoes hidden-xs">
                <form action="index.php?search=" method="get" name="a"id="search-form">
                    <div class="search-bar">
                        <input type="text" name="search" autocomplete="off"><a href="javascript:a.submit()" type="submit" formaction="search.php" class="search-bar-button"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </div>
                </form>
                <script >
                    $(function() { 
                            $(".search-bar input").focus(function() { $(this).val(""); }); 
                        });
                        function doSearch() {
                            $("#search-form").submit();
                    }
                </script>
            </div>
        </div>
        
        
        <div class="container"> 
            <div class="col-md-12 col-xs-12"> 
                <div class="menu"> 
                    <div class="row">
                        <div class="hidden-lg hidden-md row"> 
                        
                            <div class="no-desk"> 
                                <div class="hello-client-message">
                                 <?php echo $x; ?>
                                </div> 

                                 <div class="col-xs-12">
                                    <div id="shop-logo" class="top-image">
                                         <a href="index.php">
                                            <img src="img/logo.jpg" border="0" class="img-responsive" title="NerdLandia">
                                         </a>
                                    </div>

                                    <div class="col-md-12">
                                        <form action="index.php?search=" method="get" name="b" id="search-form">
                                            <div class="search-bar">
                                                <input type="text" name="search" autocomplete="off"><a href="javascript: b.submit();" type="submit" formaction="search.php" class="search-bar-button"><i class="fa fa-search" aria-hidden="true"></i></a>
                                            </div>
                                        </form>
                                        <script >
                                             $(function() { 
                                                $(".search-bar input").focus(function() { $(this).val(""); }); 
                                            });
                                            function doSearch() {
                                                $("#search-form").submit();
                                          }
                                        </script>
                                        </div>
                                 </div>            
                            </div>
                 </div>
             </div>            
         <nav class="navbar navbar-inverse">
            <div class="container-fluid"> 
                <div class="navbar-header">
                    <div class="col-xs-2">
                        <button type="button" class="navbar-toggle btn btn-default collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="col-xs-10 text-right">
                       
                        <a href="carrinho.php" class="icone-mobile">
                            <i class="icone-bar fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="navbar-collapse collapse" id="myNavbar" aria-expanded="false" style="height: 0px;">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.php">Página Inicial</a>
                            
                            </li>
                            <?php include ('sistem/loadCategory.php'); ?>

                          

                                          
                            
                            <li class="dropdown">  
                                <a class="dropdown-toggle" data-toggle="dropdown" href="tenis-ct-27331b">TODAS AS CATEGORIAS<span class="caret"></span></a>                                      
                                    <ul class="dropdown-menu">

                                            <?php include('sistem/loadCategory2.php') ?>
                                         
                                    </ul>

                            </li>
                    </ul>
                </div>
            </div>
         </nav>
       </div>
    </div>  
</div>
</div>