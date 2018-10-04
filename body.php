<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Balise body</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/balises.css">
</head>
<body>
	<?php echo "premier jour en PHP"?>
	
	<header>
		<h1><a href="pdg.html"><img src="images/html.jpg"></a></h1>
		

	</header>
	<nav>
		<div>
				  <ul class="menu">
        <li>Squelette
            <ul class="sousmenu">
                <li><a href="body.html">body</a></li>
                <li><a href="footer.html">footer</a></li>
                <li><a href="meta.html">meta</a></li>
            </ul>
        </li>
        <li>Insertion
            <ul class="sousmenu">
                <li><a href="link.html">link</a></li>
                <li><a href="textarea.html">textarea</a></li>
                <li><a href="img.html">img</a></li>
                <li><a href="form.html">form</a></li>
                <li><a href="div.html">div</a></li>
            </ul>
        </li>
        <li>Présentation
            <ul class="sousmenu">
                <li><a href="h1h6.html">h1, h6</a></li>
                <li><a href="li.html">li</a></li>
                <li><a href="ul.html">ul</a></li>
                <li><a href="br.html">br</a></li>
                <li><a href="title.html">title</a></li>
                <li><a href="p.html">p</a></li>
                <li><a href="u.html">u</a></li>
                <li><a href="b.html">b</a></li>
            </ul>
        </li>
        <li>Contact
            <ul class="sousmenu">
                <li>Link1</li>
                <li>Link2</li>
                <li>Link3</li>
            </ul>
                </li>
            </ul>
        </li>
        
    </ul>
   
		</div>






	</nav>

     
	
	<footer>
        <p class="def">La balise "body"<br><br></p>
        <p><img src="images/imgbody.png" class="imgbody"></p>
         <p class="txt">   Body viens de l'anglais corps. La balise body est une balise du squelette de base de l'html . Elle est composée de tout ce qui est lu par l'utilisateur et ce qui se doit d'être affiché . Comme des liens , texte , images , ... Exemple de l'utilisation de la balise "< body>".</p>
        


      <?php echo"premier test en PHP<br>";
      print "deuxième essai<br>";
      echo 85;


      ?>
      <?php print"il ca falloir être attentif car sans rigueur trop d'erreurs<br>";
      echo"il faut continuer";print 999;
      ?>
       <?php echo 'essayons ppour échapper les "guillemets"<br>';
       print'"bonjour" à tous';
       // un commentaire monoligne
       /*un commentaire multilignes
       un com
       */ echo"Essai une fois de plus lus";
       print "bonjour";
       // com 
       # un autre com
       /*un autre com*/;
       echo"envoyer le doc";



      ?>
		


	</footer>
		

	

</body>
</html>
