<?php

function arrayToTable($data) {
    
    $table = '<table>';
    $table .= '<tr>';

    foreach (array_keys($data[0]) as $key) {
        $table .= '<th>' . $key . '</th>';
    }
    $table .= '</tr>';
    
    foreach ($data as $row) {
        $i= 0;
        $table .= '<tr>';
        echo $row['idBillet'];
        foreach ($row as $value) {
        $table .= '<td>' . $value . '</td>';
        if ($i==0) {
            $table .= ' <td>
            <a href="vue.php?id='.$value.'" >
            Get commentaire
            </a>
            </td>
            '
        ;
        }
        $i++;
        
    }
    
        $table .= '</tr>';
        
    }
    
        $table .= '</table>';
    
    return $table;
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        table {
            border-collapse: collapse;
            width: 100%;
            }
        table caption {
            border-collapse: collapse;
            width: 100%;
            font-size: 2em;
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
    <h1>Template!</h1>
</body>
</html>