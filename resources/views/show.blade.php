<html>
    <head>TestDB</head>
    <style>

.table {
    background-color: black;
    color: white;
    padding: 20px;
}
td {
    padding: 20px;
    border: 5px solid white
}
th {
    background-color:gray;
    padding:30px
}

    </style>
    <body>
  
    <table class="table">
    <tr><th>Id</th><th>name</th>
    <th>size</th><th>price</th>
    <th>color</th><th>photo</th>
    <th>stock</th><th>description</th>
</tr>
        <?php 
        
        foreach ($schools as $school){
            $props = get_object_vars($school);
            echo "<tr>";
            foreach($props as $prop){
                echo "<td>".$prop."</td>"; 
            }
            echo "</tr>";

        }  ?> 
    

    </table></body>
</html>