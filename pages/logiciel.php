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
    <title>Adjustem - Solution de devis menuiseries - Logiciel</title>
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
                        <hr style="margin-top: -0px; height: 5px; width: 100%;">

                    </li>

                    <li id="menu_" class="nav-item me-5" onmouseenter="plus()" onmouseleave="moins()">
                        <a class="nav-link-active nb" href="../pages/societe.html">La société<img id="menu" src="../images/Composant 1 – 6.png" style="margin-left: 10px;"></a> 
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
    <p  id="p_title">Adjustem vous simplifie le chiffrage/devis des menuiseries.</p>
</CENTER> 
<div class="container-fluid" style="margin-bottom: 100px;"> 
    <div class="row justify-content-center d-flex " style="margin-bottom: 50px; ">
        <div class="col-sm " id="block_l_up">
            <h1>Le logiciel</h1>
            <h2>Simple, logique et rapide à l'utilisation.</h2>
            <hr style="height: 2px;">
            <p>ADJUSTEM est un logiciel destiné aux professionnels de la menuiserie : Négociants, Fabricants, Installateurs.
<br><br>
                Il suffit par exemple d'entrer les dimensions d'une fenêtre ou menuiserie ainsi que ses options pour visualiser le croquis. Le chiffrage est d'une précision extrême et détaillé tout en tenant compte des impératifs techniques. <br>
                Le logiciel ADJUSTEM aide à la réalisation de devis menuiserie en combinant la souplesse habituelle d'un vendeur et la fiabilité rigoureuse de l'informatique.</p>
        </div>
        <div class="col " id="block_l_up">
            <h1>Du devis à la facture
            </h1>
            <h2>Différentes étapes se proposeront à vous :
            </h2>
            <hr style="height: 2px;">
            <p>ADJUSTEM est un logiciel destiné aux professionnels de la menuiserie : Négociants, Fabricants, Installateurs.
<br><br id="tableau">
                Il suffit par exemple d'entrer les dimensions d'une fenêtre ou menuiserie ainsi que ses options pour visualiser le croquis. Le chiffrage est d'une précision extrême et détaillé tout en tenant compte des impératifs techniques. <br>
                Le logiciel ADJUSTEM aide à la réalisation de devis menuiserie en combinant la souplesse habituelle d'un vendeur et la fiabilité rigoureuse de l'informatique.</p>
        
            </div>
        
        </div>
      
</div>
<div  class="container-fluid" style="margin-bottom: 100px;"> 
    <div class="row justify-content-center d-flex " style="margin-bottom: 50px;padding: 10px 150px; ">
        <table style="border: 3px solid #FF983E; background-color: #F8F8F8; box-shadow: 0px 3px 6px rgba(68, 68, 68, 0.075);">
            <thead>
                <tr>
                    <td class="td_b">Version</td>
                    <td class="td_o">Modules</td>
                    <td class="td_o">Nombre de tarifs</td>
                    <td class="td_o">Maintence annuelle</td>
                    <td class="td_o">Licence</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="td_o" style="text-align: start;padding-left: 10px;">Initiale 1 Tarif(*)</td>
                    <td class="td_b" style="color: red;">X</td>
                    <td class="td_b">1</td>
                    <td class="td_b">159€ HT</td>
                    <td class="td_b">159€ HT</td>
                </tr>
                <tr>
                    <td class="td_o" style="text-align: start;padding-left: 10px;">Initiale 3 Tarifs(*)</td>
                    <td class="td_b" style="color: red;">X</td>
                    <td class="td_b">3</td>
                    <td class="td_b">299€ HT</td>
                    <td class="td_b">299€ HT</td>
                </tr>
                <tr>
                    <td class="td_o" style="text-align: start;padding-left: 10px;">Initiale 5 Tarifs(*)</td>
                    <td class="td_b" style="color: red;">X</td>
                    <td class="td_b">5</td>
                    <td class="td_b">499€ HT</td>
                    <td class="td_b">499€ HT</td>
                </tr>
                <tr>
                    <td class="td_o" style="text-align: start;padding-left: 10px;">Standard</td>
                    <td class="td_b" style="color: red;">X</td>
                    <td class="td_b">Pas de limitation</td>
                    <td class="td_b">950€ HT</td>
                    <td class="td_b">950€ HT</td>
                </tr>
                <tr>
                    <td class="td_o" style="text-align: start;padding-left: 10px;">Gold</td>
                    <td class="td_b td_g">MesDocument,Messagerie,MesProduits</td>
                    <td class="td_b">Pas de limitation</td>
                    <td class="td_b">1045€ HT</td>
                    <td class="td_b">1045€ HT</td>
                </tr>
            </tbody>
        </table>
        </div>
        <div id="ml">(*) Offre réservé aux nouveaux clients</div>

</div>
<div class="container-fluid" style="margin-bottom: 100px;background-color: #F8F8F8;padding: 50px 0px 10px 10px;box-shadow: 0px 3px 6px rgba(68, 68, 68, 0.075);"> 
    <div class="row justify-content-center d-flex " style=" ">
        <div class="col w-50" id="block_l_up">
            <h1>Version d'essai du logiciel</h1>
            <h2>Pour vous aider à mieux évaluer les capacités du logiciel, nous mettons à votre disposition :</h2>
            <hr style="height: 2px;">
       
        <ul>
            <li>Une plaquette récapitulant les fonctionnalités du logiciel.</li>
            <li>Deux modèles de mise en page de devis.</li>
            <li>Notre tarification.</li>
            <li>Une version de démonstration de notre logiciel.</li>
        </ul>
        <p>Afin de recevoir par courrier la version de démonstration, 
            veuillez renseigner le formulaire de demande ci-après : <a style="color: #FF983E;" href="../pages/Demande de version d'essai.html">Version de démonstration.</a></p>
        </div>
        <div class="col-lg" id="block_l_up">
            <h1>Configuration requise</h1>
            <h2>Adjustem vous propose d'accéder à votre logiciel de chiffrage de partout.
            </h2>
            <hr style="height: 2px;">
            <ul>
                <li>Windows XP et suivants; Windows Server 2000 et suivants.</li>
                <li>Un disque dur disposant de 1 Go d'espace libre.</li>
                <li>512 Mo de mémoire vive.</li>
                <li>Une souris/clavier compatible Windows.</li>
                <li>Une imprimante compatible Windows.</li>
            </ul>
        </div>
        </div>
      
</div>
<div class="container-fluid" style="margin-bottom: 100px;padding: 50px 0px 10px 10px;"> 
    <div class="row justify-content-center d-flex ">
        <div class="col"><center><h1>Exemples d'utilisation</h1></center>
        </div>

        </div>  
        <div class="row">
            <center>
<a  target="_blank" href="../images/adjustem_logiciel_devis_menuiserie_exemple1.jpg"><img class="img_exemple" src="../images/adjustem_logiciel_devis_menuiserie_exemple1.jpg" alt="exemple_1"></a><a target="_blank" href="../images/adjustem_logiciel_devis_menuiserie_exemple2.jpg"><img class="img_exemple" src="../images/adjustem_logiciel_devis_menuiserie_exemple2.jpg" alt="exemple_2"></a><a target="_blank" href="../images/adjustem_logiciel_devis_menuiserie_exemple3.jpg"><img class="img_exemple" src="../images/adjustem_logiciel_devis_menuiserie_exemple3.jpg" alt="exemple_3"></a>
<div>(cliquez sur les images pour les agrandir)</div>

</center>

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
