<?php
    require("db_connection.php");
?>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Género</th>
            <th>Edad</th>
        </tr>
    </thead>
</table>

<?php
    $sql = "SELECT * FROM student";
    $respuesta = $connection->prepare($sql);
    $respuesta->execute();

    if($respuesta->rowCount()>0){
        $i=1;
        while($row = $respuesta->fetch(PDO::FETCH_ASSOC)){
            echo 
                "<tr>
                    <td>" .$i "</td>
                    <td>" .$row['name'] "</td>
                    <td>" .$row['address'] "</td>
                    <td>" .$row['gender'] "</td>
                    <td>" .$row['course'] "</td>
                </tr>"
            ;
            
            $i++;
        }
    }else{
        echo
    }
?>