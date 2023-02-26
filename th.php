
<html>
<head>
<title>
</title>

<style>
table
{
color:white;
border-radius:30px;
padding-top: 2px;
padding-bottom: 10px;
padding-top: 5px;


}

input[type=text]{
width: 170px;




}

#button
{
background-color:red;
color:white;
height:40px;
width:140px;
border-radius:25px;
}

body
{
background:linear-gradient(red,violet);
}
</style>

</head>

<body>
<br><br><br><br>

<form action="upload.php" method="POST">
<table border="0" bgcolor="black" align="center" cellspacing="20">
<tr>
<td> Titre :</td>
<td><input type="text" name="Titre" placeholder="Titre" required></td>
</tr>

<tr>
<td>Nom_Auteur :</td>
<td><input type="text" name="Nom_Auteur" placeholder="Nom_Auteur" required></td>
</tr>






<tr>
<td> Option : </td>
<td><input type="text" name="Option_These" placeholder="Option" required></td>
</tr>




<tr>
<td>Dirécteur_Thèse :</td>
<td><input type="text" name="Directeur_These" placeholder="Dirécteur_Thèse" required></td>
</tr>

<tr>
<td>Lieu:</td>
<td><input type="text" name="Lieu" placeholder="Lieu" required></td>
</tr>




<tr>
<td> Année : </td>
<td><input type="date" name="Annee"   placeholder="Année" required></td>
</tr>

<tr>
<td> Abstract :</td>
<td><input type="text"  name="Abstract" placeholder="Abstract" required></td>
</tr>


<tr>
<td colspan="2" align="center"><button type="submit" id="button" name="btn" > publier une these </td>
</tr>
</table>
</form>
</body>
</html>







