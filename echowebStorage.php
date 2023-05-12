<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
        <p id="balisep"></p>
		
		<script>              	
                window.addEventListener('storage', function(event) {
                    if (event.key === 'prenom') {
                    console.log('The value of myItem has changed to: ' + event.newValue)
                    document.getElementById("balisep").innerHTML = event.newValue
                }
                });

        </script>
	</body>
</html>
