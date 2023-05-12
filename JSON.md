# Json,Webstorage, API et indexedDB
#### Exercice 1
##### 1- Tester sur http://www.jsoneditoronline.org/ le texte suivant
```
{"nom":"IUT Annecy","adresse":"9 rue Arc-en-ciel","ville":"Annecy-le-Vieux","cp":74940}
```
Le chaine est au format JSON

Effectuer quelques essais avec l'interface http://www.jsoneditoronline.org

##### 2- Récupérer le fichier www/json-js
 Il y a une différence entre un texte JSON et les objets javascript

 ```JSON.parse()``` : permet de transformer un texte JSON en objet javascript
 
 ```JSON.stringify()``` : permet de transformer un objet javascript en texte JSON  
 
##### 3- En s'inspirant du fichier fourni (json-js), modifier le code pour :
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
var texte2=JSON.stringify(obj);
```
```
alert(texte2); permet de l'afficher dans la boite alerte
```
```
document.getElementById("balisep").innerHTML = texte2 affiche dans une balise <p>
```
Ajout de la balise P au début du document html
 
```
<p id="balisep"></p>
```
##### 4- Gérer les erreurs JSON si le JSON est mal formaté
Pour gérer les erreurs si le json est mal formaté
Code mal formaté:
```
var text2 = '{"nom":"IUT Annecy",adresse":"9 rue Arc-en-ciel","ville":"Annecy-le-Vieux","cp":74940}'; 
```
Le code permet de parser le texte et en cas d'échec de le print
```
try {
 obj=JSON.parse(text2);
} catch (e) {
 alert("pb parsing. Voir l'erreur dans la console si possible");
 console.error("Parsing error dans mon code :-( :", e);
}
```
##### 5- Object javascript vers JSON
Tous d'abord il faut analyser le tableau ci-dessous
```
var employes = [
{"prenom":"Axel", "nom":"AIRLERYTHME"},
{"prenom":"James", "nom":"LEJAVASCRIPT"},
{"prenom":"Sam","nom": "PLAILAPROGUE"}
];
```
Si on souhaite ajouter une valeur au tableau 
```
employes[5]={"prenom":"Sam","nom": "EPATE"};
```
Pour transformer le tableau en JSON dans une nouvelle variable
```
var employes = [
{"prenom":"Axel", "nom":"AIRLERYTHME"},
{"prenom":"James", "nom":"LEJAVASCRIPT"},
{"prenom":"Sam","nom": "PLAILAPROGUE"}
]; 
employes[5]={"prenom":"Sam","nom": "EPATE"};
var texte3=JSON.stringify(employes);
alert(texte3);
 ```
On utilise comme explique ci-dessus la fonction ```JSON.stringify(valeur)```
 
On observe deux valeur ```NULL``` cela est du que on rajoute la valeur Sam Epate à la place numéro 5 mais il n'y a pas de valeur 4

Ensuite nous allons créer un objet 
```
var myObject = {
item1: 'Texte 1',
item2: 'Texte 2'
};
```
Je transforme donc cette chaine au format JSON et je l'alerte
```
var texte4=JSON.stringify(myObject);
alert(texte4);
```
Cela correspond bien au résultat attendu

#### Exercice 2
 
