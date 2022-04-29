<?php
    if(isset($_POST["btnGuardar"])){
        $name = $_POST["txtNombre"];
        $address = $_POST["txtDireccion"];
        $gender = $_POST["cboGenero"];
        $age = $_POST["txtEdad"];

        require("db_connection.php");
        $sql = "INSERT INTO student(name, address, gender, age) VALUES (:name, :address, :gender, :age);"
        $result = $connection->prepare($sql);
        $values = array(":name" => $name, 
                        ":address" => $address,
                        ":gender" => $gender,
                        ":age" => $age,);
        $result->excute($values);

        if($result->rowCount()>0){
            echo" 
                <script>
                    alert("Estudiante agregado con éxito");
                    window.location = 'students.php'
                </script>
                "
        }
        else{
            echo" 
                <script>
                    alert(" Error al guardar al Estudiante");                    
                </script>
                "
        }
    }
?>


<html>
    <head>
        <title>Agregar estudiante</title>
    </head>
    
    <body>
        <form action="newStudent.php" method="post">
            <table align= "center" cellpadding="5">
                <tr>
                    <td colspan="3">Agregar un nuevo estudiante </td>                    
                </tr>
                <tr>
                    <td>Nombre: </td>
                    <td><input type="text" name="txtNombre"></td>
                </tr>
                <tr>
                    <td>Dirección: </td>
                    <td><input type="text" name="txtDireccion"></td>
                </tr>
                <tr>
                    <td>Género: </td>
                    <td>
                        <select name="cboGenero" id="">
                            <option value="">Seleccione</option>
                            <option value="1">Hombre</option>
                            <option value="2">Mujer</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Edad: </td>
                    <td><input type="text" name="txtEdad"></td>
                </tr>
                <tr>
                    <td colspan = "2"><input type="Submit" value="Guardar" name="btnGuardar"> </td>
                    
                </tr>
            </table>    
        </form>
    </body>
</html>