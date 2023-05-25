

<?php 

require_once('billet.php');
require_once('commentaire.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="index.js"></script>
    
</head>
<body>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            }

            th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            }

            th {
            background-color: #f2f2f2;
            }

            tr:nth-child(even) {
            background-color: #f9f9f9;
            }

            tr:hover {
            background-color: #eaf2f8;
            }

    </style>
    

<h3>billet</h3>
    <form   method="POST">
    <input type="submit" value="getBillets" name="getBillets"> <br> <br>
    <input type="number" name="idBillet"  >
    <input type="submit" value="getBillet" name="getBillet">
    <hr>
    <h3>Commentaires</h3>


    <input type="number" name="idBilletCmnt"  >
    <input type="submit" value="getCommentaires" name="getCommentaires"> <br> <br>

    <h4>Ajouter un commentaire </h4>
    <label for="auteur">Auteur : </label>
    <input type="text" name="auteur" > <br> <br>
    <label for="contenu">Contenu:</label>
    <input type="text" name="contenu" > <br> <br>
    <label for="idAjCmnt">id Billent:</label>
    <input type="number" name="idAjCmnt">
    <input type="submit" value="ajouterCommentaire" name="ajouterCommentaire"> 
    

    <table >
        <thead>
            <tr id ="thead">

            </tr>
        </thead>
        <tbody id="tbody">
            
        </tbody>
    </table>

    
    </form>
</body>
</html>


