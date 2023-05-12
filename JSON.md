# Json,Webstorage, API et indexedDB
#### Exercice 1
###### 1- Tester sur http://www.jsoneditoronline.org/ le texte suivant
```
{"nom":"IUT Annecy","adresse":"9 rue Arc-en-ciel","ville":"Annecy-le-Vieux","cp":74940}
```
Le chaine est au format JSON

Effectuer quelques essais avec l'interface http://www.jsoneditoronline.org

###### 2- Récupérer le fichier www/json-js
 Il y a une différence entre un texte JSON et les objets javascript

 ```JSON.parse()``` : permet de transformer un texte JSON en objet javascript
 
 ```JSON.stringify()``` : permet de transformer un objet javascript en texte JSON  
 
 3- En s'inspirant du fichier fourni (json-js), modifier le code pour :
Ajouter une instruction sur l'oject obj(sans modifier la variable text qui contient du json afin que le code postal de l'IUT soit mis à jour avec la valeur 74942

Attribution de la valeur 74942 à l'objet "cp"
```
obj.cp = 74942;
```
Ajouter un attribut "bp" à l'objet
```
obj.bp = 240;
```
Puis je le print en rajoutant à la commande print ```" "+obj.bp;```

Cela donne : 
```
obj.cp +" "+obj.ville+" "+obj.bp;
```
À partir d'un objet faire un format JSON on utilise la commande ```JSON.stringify```
```
objet js --> json :
var texte2=JSON.stringify(obj);
alert(texte2); permet de l'afficher dans la boite alerte
document.getElementById("balisep").innerHTML = texte2 affiche dans une balise <p>
```
Ajout de la balise <p> au début du document html
  
```
<p id="balisep"></p>
```

