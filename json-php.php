 <!DOCTYPE html>
<html>
<head>
		<title>Json php</title>
		<meta charset="utf-8" />	
</head>
<body>

<h2>JSON and PHP</h2>

<hr/>
<h3>Decode</h3>
<hr/>
<blockquote>
<?php
// PARTIE 1 : DECODAGE
/////////////////////////////////////////////////////////


$text = '{"nom":"IUT Annecy","adresse":"9 rue Arc-en-ciel","ville":"Annecy-le-Vieux","cp":74940}';


print("Avec la commande dump, sans option : ");
//var_dump(json_decode($text));
// A noter : idem que :
var_dump(json_decode($text, false));


print("<br/> Idem avec la commande print récursif (print_r), sans option : ");
print("<pre>");
print_r(json_decode($text));
print("</pre>");


print("<hr/><br/> Avec la commande dump, AVEC option true (array) : ");
var_dump(json_decode($text, true));

print("<br/> Idem avec la commande print récursif (print_r), AVEC option true : ");
print("<pre>");
print_r(json_decode($text,true));
print("</pre>");

//----------------------------------------------
// avec erreur
$text2 = '{"nom":"IUT Annecy",adresse":"9 rue Arc-en-ciel","ville":"Annecy-le-Vieux","cp":74940}';
print("<hr/><br/> Avec erreur, commande dump");

var_dump(json_decode($text2, true));

print("<br/> Idem avec la commande print récursif (print_r) ");

print("<pre>");

print_r(json_decode($text2,true));

print("</pre>");
// a placer ici
//----------------------------------------------
?>

</blockquote>

<hr/>
<h3>Encode</h3>
<hr/>
<blockquote>
<?php


// PARTIE 2 : ENCODAGE
/////////////////////////////////////////////////////////


// à partir d'un tableau
//--------------------------------------
   $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
   $arr += [ "f" => 6 ];
   $montext= json_encode($arr);
   echo $montext;
   
   print("<br/>");
   
// à partir d'un objet php
//--------------------------------------
   class Personne {
      public $firstname = "";
      public $name = "";
      public $hobbies  = "";
      public $birthdate = "";
   }
	
   $p = new Personne();
   $p->firstname ="Ronan";
   $p->name = "sachin";
   $p->hobbies  = "sports";
   $p->birthdate = "1-1-2000";
   
   $textp2=json_encode($p);
   echo $textp2;
?>

</blockquote>


</body>
</html>