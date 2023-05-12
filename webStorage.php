<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
        <label>Prénom</label>
		<input type="text" placeholder="Entrez le prénom" id="prenom">
		<button type="button" onclick="getPrenom();">Valider</button>
		
		<script>
			function getPrenom() {
                var input = document.getElementById("prenom").value;
                alert(input); //affiche la valeur récupérer
                
                 // Enregistre la valeur de l'input à la clé prenom
                 localStorage.setItem('prenom', input);

                let data = localStorage.getItem('prenom');
                alert("Voici la valeur pour la clé prénom "+data);
            }

        </script>
	</body>
</html>
