<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-type: application/force-download");
    header("Content-Disposition: attachment; filename=export.xls");
    header("Pragma: no-cache");

    $hostname = "localhost";
    $database = "chefedapipoca_db";
    $username = "root";
    $pwd = "_usu@rio";
    $table = "data_table";
?>
<table>
    <tr>
        <td>Nome</td>
        <td>Email</td>
        <td>Contato</td>
        <td>Data</td>
        <td>Cep</td>
        <td>Endereco</td>
        <td>Bairro</td>
        <td>Cidade</td>
        <td>Numero</td>
    </tr>
    <?php
        $conn = mysqli_connect($hostname, $username, $pwd, $database);
        $consult = mysqli_query($conn, "SELECT * FROM $table");
        while($table = mysqli_fetch_array($consult)){
            echo(
                "<tr>".
                    "<td>".$table['nome']."</td>".
                    "<td>".$table['email']."</td>".
                    "<td>".$table['contato']."</td>".
                    "<td>".$table['cep']."</td>".
                    "<td>".$table['endereco']."</td>".
                    "<td>".$table['bairro']."</td>".
                    "<td>".$table['cidade']."</td>".
                    "<td>".$table['numero']."</td>"
                ."</tr>"                
            );
        }

    ?>
</table>