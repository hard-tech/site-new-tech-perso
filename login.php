<?php
// Attention pour serveur publique remplacer 'localhost' par le nom et mettre le pass après 'root'
//$bdd = new PDO('mysql:host=localhost;dbname=espace-menbres;charset=utf8', 'root');
//$mail = htmlspecialchars($_POST ['mail']);
//$pass =  sha1($_POST ['pass']);
//$insertUser = $bdd ->prepare('INSERT INTO users(mail, pass) VALUES(?,?)');
//$insertUser -> execute(array($mail, $pass));
//


//if(isset($_POST['envoi']));
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="./logo 2/logo_small_icon_only.png" />
        <link rel="stylesheet" href="style-home.css">
    </head>
<div class="all">
    <title>new-tech</title>
    <body background="./image/ox6j99.png"><div class="nav">
            <nav>
                <ul>
                    <li><a class="active" href="index.html">Home</a></li>
                    <li class="deroulant"><a href="#">Projet</a>
                        <ul class="sous">
                            <li class="deroulant">
                            <li><a href="Site web.html">Web Site </a></li>
                        </ul>
                    </li>
                    <li class="deroulant"><a href="#">Login / Sign in</a>
                        <ul class="sous">
                            <li ><a href="login.html">Login</a></li>
                            <li ><a href="sign-in.html">Sign in</a></li>
                        </ul>
                    </li>
                    <li class="deroulant"><a href="#">&nbsp;&nbsp;&nbsp;&nbsp; info &nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <ul class="sous">
                            <li ><a href="recrutement.html" class="r" align="center">Recrutement</a></li>
                            <li ><a href="contact.html">Contact</a></li>
                        </ul>
                    </li>
                    <li style="float:right"><a href="about.html">About</a></li>
                </ul>
            </nav>
        <div class="haut">
            <h1>Site officiel de new-tech</h1>
        </div>
    </div>
    <style>   
    
        button {   
            background-color: #4CAF50;   
            width: 100%;  
                color: white;   
                padding: 15px;   
                margin: 10px 0px;   
                border: none;   
                cursor: pointer;   
                border-radius: 5px;
        }   
        

        
        input[type=text], input[type=password] {   
                width: 100%;   
                margin: 8px 0;  
                padding: 12px 20px;   
                display: inline-block;   
                border: 2px solid green;   
                box-sizing: border-box;  
                border-radius: 5px; 
            }  
        button:hover {   
                opacity: 0.7; 
                background-color: rgb(75, 75, 75);  
            }   
        .cancelbtn {   
                width: auto;     
                margin: 10px 5px;  
            }   
                
            
        .container {     
                background-color: rgb(197, 197, 197); 
                margin: 150px auto; 
                background-color: #333; 
                border-radius: 10px; 
                border: 6px solid #4CAF50;
            }  
        
        a
        {
            text-decoration: none;
            color: rgb(7, 7, 7);
        }
    
        
        
        </style>  
        <font color="white">
        </head>   
        
        <form action="" method="POST" enctype="multipart/form-data"> 
                <div class="container">   

                    <label for="mail">E-mail : </label>   
                    <input type="text" type="email" placeholder="Enter votre adresse e-mail" name="e-mail" required id="mail" name="mail"> 

                    <label for="pass">Password : </label>   
                    <input type="password" placeholder="Enter votre mot de pass" required id="pass" name="pass"> 

                    <button type="submit" class="btn" name="envoi">Envoyer</button> 

                    <input type="checkbox" checked="checked"> Remember me   
                    
                    <button type="button" class="cancelbtn"> Cancel</button>   
                </div>   
            </form>   
            </font>  
</div>
</body>
</html>