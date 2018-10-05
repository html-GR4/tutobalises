<?php include ("tete.html"); ?>

	<footer>
        <p class="def">Balise &lt;link&gt;</p>
        
        <p class="txtlink">L'élément HTML &lt;link&gt; définit la relation entre le document courant et une ressource externe. Cet 
            élément peut être utilisé pour définir un lien vers une feuille de style ou un cadre de navigation (accéder 
            à la même page dans une langue différente par exemple).</p>
            
        <p class="txtlink">Pour comprendre ces exemples il est important de savoir que CSS est le langage de feuilles de styles le plus 
            courant.</p>
        
        <h2 class="txtlink">Associer une feuille de style</h2>
        
        <p class="txtlink">Pour associer une feuille de style à la page courante, on utilisera la syntaxe suivante :</p>

        <p class="txtlink"><img src="images/link1.jpg"  class="link1" alt="Premier exemple link"/></p>

        <h2 class="txtlink">feuilles de style alternatives</h2>
        
        <p class="txtlink">Pour un document, on peut indiquer plusieurs feuilles de style alternatives. Sur le navigateur, l'utilisateur 
            pourra choisir parmi ces feuilles de style via le menu « Affichage > Style de la page ». Ainsi, un utilisateur 
            pourra voir différentes versions d'une même page.</p>
        
        <p class="txtlink"><img src="images/link2.jpg"  class="link2" alt="Deuxième exemple link" /></p>
        
        <h2 class="txtlink">Évènements déclenchés au chargement d'une feuille de style</h2>
        
        <p class="txtlink">Il est possible de déterminer si une feuille de style a été chargée en écoutant l'évènement load. De la même 
            façon, un évènement error indiquera qu'une erreur a eu lieu lors du traitement de la feuille de style:</p>
            
        <p class="txtlink"><img src="images/link3.jpg"  class="link3" alt="Troisième exemple link" /></p>
        
        <p class="txtlink">Note : L'évènement load est déclenché une fois que la feuille de style et que le contenu associé ont été 
            chargés et analysés et immédiatement avant que la mise en forme soit appliquée au contenu.</p>
		


    </footer>	

</body>
</html>
