<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv='cache-control' content='no-cache'> 
    <meta http-equiv='expires' content='0'> 
    <meta http-equiv='pragma' content='no-cache'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;400;500&family=Lexend+Peta:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/logo_adjustem_t .png">
    <title>Adjustem - Société</title>
</head>
<body class="overlay">
<div id="tt">
    <nav class="navbar navbar-expand fixed-top" style="background-color: white;">
        <div class="container-fluid" id="nb">
            <div id="burg" onclick="sh()">
                <img src="../images/Composant 2 – 1.png">
            </div>
            <a class="navbar-brand" href="../index.html" >
                <img id="logo" src="../images/logo_adjustem.png">
            </a>
            <div >
                <ul class="navbar-nav">
                    <li id="menu_" class="nav-item me-5">
                        <a href="../index.html" class="nav-link-active nb">Accueil</a>  
                    </li>
                    <li id="menu_" class="nav-item me-5">
                        <a href="../pages/logiciel.html" class="nav-link-active nb">Le logiciel</a>  
                    </li>

                    <li id="menu_" class="nav-item me-5" onmouseenter="plus()" onmouseleave="moins()">
                        <a class="nav-link-active nb" href="../pages/societe.html">La société<img id="menu" src="../images/Composant 1 – 6.png" style="margin-left: 10px;"></a> 
                        <hr style="margin-top: -0px; height: 5px; width: 100%;">

                        <div id="sous" style="background-color: #FFFFFFFF;position: absolute; width: 170px;display:none ;">
                            <div style="background-color: #004EA5;height: 5px;width: 100%;"></div> 
                            <ul style="font-weight: 300;color: #004EA5;list-style-type: none;font-size: 18px;padding-left: 0px;">
                                <li><a href="">Présentation</a></li>
                                <li><a href="">Coordonnées</a></li>
                                <li><a href="">Organisation</a></li>
                            </ul>  
                        </div>    
                    </li>

                    <li id="menu_" class="nav-item me-5" onmouseenter="plus_2()" onmouseleave="moins_2()">
                        <a href="../pages/services.html" class="nav-link-active nb">Les services<img id="menu_2" src="../images/Composant 1 – 6.png" style="margin-left: 10px;"></a>  
                        <div id="sous" style="background-color: #FFFFFFFF;position: absolute; width: 170px;display:none ;">
                            <div style="background-color: #004EA5;height: 5px;width: 100%;"></div> 
                            <ul style="font-weight: 300;color: #004EA5;list-style-type: none;font-size: 18px;padding-left: 0px;">
                                <li><a href="../pages/services.html">Développement</a></li>
                                <li><a href="../pages/services.html#Engagement">Engagement</a></li>
                                <li><a href="../pages/services.html#Support">Support technique</a></li>
                        </ul>  
                    </div>
                    </li>
                    <li id="menu_"  class="nav-item me-5" onmouseenter="plus_3()" onmouseleave="moins_3()">
                        <a class="nav-link-active nb" href="../pages/espace_fabriquant.html">Espace Fabricants<img id="menu_3" src="../images/Composant 1 – 6.png" style="margin-left: 10px;"></a> 
                        <div id="sous" style="background-color: #FFFFFFFF;position: absolute; width: 170px;display:none ;">
                            <div style="background-color: #004EA5;height: 5px;width: 100%;"></div> 
                            <ul style="font-weight: 300;color: #004EA5;list-style-type: none;font-size: 18px;padding-left: 0px;">
                                <li><a href="../pages/espace_fabriquant.html#lettre">Lettre d'information</a></li>
                                <li><a href="../pages/espace_fabriquant.html#referencement">Référencement</a></li>
                                <li><a href="../pages/espace_fabriquant.html#contact">Contact</a></li>
                            </ul>   
                        </div>     
                    </li>
                    <li id="menu_" class="nav-item me-5">
                        <a href="../pages/formation.html" class="nav-link-active nb">Formation</a>  
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link-active nb" href="../pages/prise_en_main.html">Prise en main</a>     
                    </li>
                   
                    <li class="nav-item me-3">
                        <a class="nav-link-active nb" href="../pages/contactez-nous.html">Contactez-nous</a>     
                    </li>
                </ul>
             
            </div>
            
            <div id="burg_m">
                <div id="bar" style="background-color: #004EA5;height: 5px;width: 100%;padding-left: 0px;"></div>
                <div><a href="pages/logiciel.html">Le logiciel</a></div>
                <div><a href="pages/services.html">Les services</a></div>
                <div><a href="pages/prise_en_main.html">Prise en main</a></div>
                <div><a href="pages/formation.html">Formation</a></div>
                <div><a href="pages/societe.html">La société</a></div>
                <div><a href="pages/espace_fabriquant.html">Espace Fabriquants</a></div>
                <div><a href="pages/contactez-nous.html">Contact</a></div>
    
            </div>
        </div>
      
    </nav>
<div style="margin-top: 100px;">&nbsp</div>

<CENTER>    
    <p id="p_title">Depuis plus de 27 ans, la société Adjustem a crée un logiciel de gestion commerciale.</p>
</CENTER>   
  <CENTER>  
        <div><img src="../images/societe.jpg" alt="" style="width: 1000px;height: 450px;object-fit: cover;box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.048);"></div>
    </center>
    <div class="container">
                <div class="row justify-content-center d-flex" style="margin-bottom: 50px; ">
                    <div class="col"></div>
                    <div class="col-8 mx-auto " style="background-color: #ffffff;padding: 50px;box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.048);margin-top: -175px;" >
                        <h1 style="font-size: 32px;color: #004EA5;">Présentation</h1> 
                        <h2 style="font-size: 24px;margin-top: -10px;font-weight: 300;">Depuis plus de 20 ans, nous avons développé un logiciel de gestion commerciale spécialisé dans le chiffrage des matériaux du bâtiment : ADJUSTEM.</h2>
                        <hr style="color: #004EA5; width: 10%;height: 2px;opacity: 1;">
            
                        Pour optimiser au maximum la fiabilité et l'utilisation du logiciel, la saisie des tarifs, leurs mises à jour et les évolutions font partie intégrante de notre engagement.
<br><br>
                        Nous nous tenons à votre entière disposition pour tout renseignement complémentaire.
</div>  <div class="col"></div>
                    </div>
            </div>
            <section style="margin-bottom: 100px; margin-top: 100px;">
                <div class="container">
            <div class="row">
           
            <div class="col-md"><iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2569.264278829242!2d2.301310718170147!3d49.91261445928228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e784270a913eb5%3A0xf20b1bce5325bb44!2sAdjustem%20Sarl!5e0!3m2!1sen!2sfr!4v1694182780149!5m2!1sen!2sfr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            <div class="col ms-5">
                <h1>Coordonnées</h1> 
               <p style="color: #004EA5;">ADJUSTEM SARL<br>53 Avenue de l'Europe<br>80080 AMIENS<br><br>Tél : 03 22 93 31 31 <br> Fax : 03 22 93 63 44</p>
             
                 <a href="../pages/Contactez-nous.html" id="ep">Nous contactez</a>
             
             </div>
        </div>
                </div>
            </section>
            <div class="container-fluid" style="margin-top: 150px;margin-bottom: 100px; background-color:#F8F8F8 ;box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.048);padding: 50px;"> 
                <div class="row justify-content-center d-flex" style="margin-bottom: 50px; ">
                    <div class="col" style="margin-left:250px ;">
                        <h1>Organisation de la société</h1>
                    </div>  
                    </div>
                  <div class="col"></div>
                    <div class="row justify-content-center">
                        <div class="col mx-auto">
                  <center>
                    <img src="../images/adjustem_organigramme.png" alt="">
                </center>
                        </div>
                    </div>
            </div>





            <footer class="footer mt-auto py-3" style="background-color: rgb(35, 35, 35);">
                <div class="container-fluid" style="margin-top: 25px;">
                    <div class="row" style="display: flex;margin-left: 20px;margin-right: 0px;">
            <div class="col-sm"></div>
            <div class="col-sm col-6">
                <h1 style="color: white; font-size: 28px;margin-bottom: 25px;">Rubrique</h1>
                <p class="footer_p"><a href="../pages/societe.html" class="footer_a"> La société</a></p>
                <p class="footer_p"><a href="../pages/logiciel.html" class="footer_a"> Le logiciel</a></p>
                <p class="footer_p"><a href="../pages/espace_fabriquant.html" class="footer_a"> Les fabricants</a></p>
                <p class="footer_p"><a href="../pages/services.html" class="footer_a"> Les services</a></p>
                <p class="footer_p"><a href="../pages/prise_en_main.html" class="footer_a"> La prise en main</a></p>
                <p class="footer_p"><a href="../pages/formation.html" class="footer_a"> Nos formations</a></p>
            </div>
            <div class="col-sm col-6">
                <h1 style="color: white; font-size: 28px;margin-bottom: 25px;">Versions</h1>
                <p class="footer_p"><a href="../pages/logiciel.html#tableau" class="footer_a"> Initiale 1 Tarif</a></p>
                <p class="footer_p"><a href="../pages/logiciel.html#tableau" class="footer_a"> Initiale 3 Tarifs</a></p>
                <p class="footer_p"><a href="../pages/logiciel.html#tableau" class="footer_a"> Initiale 5 Tarifs</a></p>
                <p class="footer_p"><a href="../pages/logiciel.html#tableau" class="footer_a"> Standard</a></p>
                <p class="footer_p"><a href="../pages/logiciel.html#tableau" class="footer_a"> Gold</a></p>
            </div>
                        <div class="col-sm col-6">
                            <h1 style="color: white; font-size: 28px;margin-bottom: 25px;">Nous contacter</h1>
                            <p class="footer_p"><a href="../pages/contactez-nous.html" class="footer_a"> Demande de contact</a></p>
                            <p class="footer_p"><a href="../pages/demand_de_formation.html" class="footer_a"> Demande de formation</a></p>
                            <p class="footer_p"><a href="../pages/demande_de_referencement.html" class="footer_a"> Demande de référencement</a></p>
                            <p class="footer_p"><a href="../pages/demande_de_version_d'essai.html" class="footer_a"> Demande de version d'essai</a></p>
                        </div>
                        <div class="col-sm col-6">
                            <h1 style="color: white; font-size: 28px; margin-bottom: 25px;">Coordonnées</h1>
                            <p class="footer_p footer_a" style="color: white;"> ADJUSTEM SARL</a></p>
                            <p class="footer_p footer_a"style="color: white;"> 53 Avenue de l'Europe</a></p>
                            <p class="footer_p footer_a"style="color: white;"> 80080 AMIENS</a></p>
                            <p class="footer_p footer_a"style="color: white;"> Tél : 03 22 93 31 31</a></p>
                        </div>
                        <div id="sn" class="col-sm col-12" style="">
                            
                            <h1 style="color: white; font-size: 28px;">Nous suivre: </h1>
                            
                    <img src="../images/facebook.png" width="25px" height="25px">        <img src="../images/logo-white.png" width="20px" height="20px" style="margin: 2.5px;">
                        </div>
                        <div class="col"></div>
            
                    </div>
                    <div class="row">
                        <CENTER>
            <div class="col"></div>
            <div class="col" style="color: white;">Copyright © 2023 Adjustem Sarl - Tous droits réservés - <a href="mentions_legales.html" style="color: #FF983E;text-decoration: none;"> Mentions légales</a></div>
            <div class="col"></div>
            </CENTER>
                    </div>
                </div>
            </footer>
</div>
    <script src="../js/bootstrap.bundle.min.js" ></script>
    <script src="../js/javascript.js" ></script>
</body>
</html>
