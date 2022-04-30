<?php
    if(isset($_POST["btnGuardar"])){
        $name = $_POST["txtNombre"];
        $estado = $_POST["txtEstado"];
        $nit = $_POST["txtNIT"];
        $precio = $_POST["txtPrecio"];

        require("db_connection.php");
        
        $sql = "INSERT INTO proveedor(nombrerepresentelegal, estado, NIT, precio_ofertado) VALUES (:name, :address, :gender, :age)";
        $result = $connection->prepare($sql);
        $values = array(":nombrerepresentelegal" => $name, 
                        ":estado" => $estado,
                        ":NIT" => $nit,
                        ":precio_ofertado" => $precio,);
        $result->excute($values);

        if($result->rowCount()>0){
            echo" 
                <script>
                    alert('Proveedor Agregado con éxito');
                    window.location = 'newStudent.php';
                </script>
                ";
        }
        else{
            echo" 
                <script>
                    alert(' Error al guardar al provededor');                    
                </script>
                ";
        }
    }
?>


<html>
    <head>
        <title>Agregar Proveedor</title>
    </head>
    
    <body>
        <form action="actualizarProveedor.php" method="post">
            <table align= "center" cellpadding="5">
                <tr>
                    <td colspan="3">Agregar proveedor </td>                    
                </tr>
                <tr>
                    <td>Representante: </td>
                    <td><input type="text" name="txtNombre"></td>
                </tr>
                <tr>
                    <td>Estado: </td>
                    <td><input type="text" name="txtEstado"></td>
                </tr>
                <tr>                    
                    <td>
                        <td>NIT: </td>
                        <td><input type="text" name="txtNIT"></td>
                    </td>
                </tr>
                <tr>
                    <td>Precio: </td>
                    <td><input type="text" name="txtPrecio"></td>
                </tr>
                <tr>
                    <td colspan = "2"><input type="Submit" value="Guardar" name="btnGuardar"> </td>
                    
                </tr>
            </table>    
        </form>
    </body>
</html>