 <!DOCTYPE html>
<html>
<body>

<h2>JSON Object Creation in JavaScript</h2>

<p id="demo1"></p>
<p id="balisep"></p>
<script>
//----------------------------------------------------------
// en partant d'une chaine json
	var text = '{"nom":"IUT Annecy","adresse":"9 rue de l\'Arc-en-ciel","ville":"Annecy-le-Vieux","cp":74940}';
	// json --> objet javascript :
	var obj = JSON.parse(text); 
	obj.cp = 74942;
	obj.bp = 240;
	// affichage
	document.getElementById("demo1").innerHTML =
	obj.nom + "<br>" +
	obj.adresse + "<br>" +
	obj.cp +" "+obj.ville+" "+obj.bp;
	var obj=JSON.stringify(obj);
	alert(obj);
	document.getElementById("balisep").innerHTML = obj
//----------------------------------------------------------
// en partant d'un objet js
	// objet js --> json :
	var text2 = '{"nom":"IUT Annecy","adresse":"9 rue Arc-en-ciel","ville":"Annecy-le-Vieux","cp":74940}'; // 
	try {

		obj=JSON.parse(text2);

	} catch (e) {

		alert("pb parsing. Voir l'erreur dans la console si possible");

		console.error("Parsing error dans mon code :-( :", e);

	}
	//alert(texte2);

//----------------------------------------------------------
// autre exemple objet js
	var employes = [
		{"prenom":"Axel", "nom":"AIRLERYTHME"},
		{"prenom":"James", "nom":"LEJAVASCRIPT"},
		{"prenom":"Sam","nom": "PLAILAPROGUE"}
	]; 
	employes[5]={"prenom":"Sam","nom": "EPATE"};
	var texte3=JSON.stringify(employes);
	alert(texte3);

	var myObject = {

		item1: 'Texte 1',

		item2: 'Texte 2'

		};
	var texte4=JSON.stringify(myObject);
	alert(texte4);

</script>

</body>
</html>