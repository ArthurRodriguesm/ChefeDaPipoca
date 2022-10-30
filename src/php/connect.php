<?php
    //Config Connection
    $hostname = "localhost";
    $database = "chefedapipoca_db";
    $username = "root";
    $pwd = "_usu@rio";
    $table = "data_table";


    //Receive
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $contact = htmlspecialchars($_POST['number']);
    $date = date('Y/m/d H:i:s');
    $cep = htmlspecialchars($_POST['cep']);
    $street = htmlspecialchars($_POST['street']);
    $number = htmlspecialchars($_POST['numberHouse']);
    $neighborhood = htmlspecialchars($_POST['neighborhood']);
    $city = htmlspecialchars($_POST['city']);

    $connection = mysqli_connect($hostname, $username, $pwd, $database) or die (' Erro de conexão ');
 
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "INSERT INTO $table(nome, email, contato, data, cep, endereco, bairro, cidade, numero) VALUES ('$name', '$email', '$contact', '$date', '$cep', '$street',  '$neighborhood', '$city', '$number')";

    if (mysqli_query($connection, $query)) {
        header("Location: ../index.html");
    }else{
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
    mysqli_close($connection);
?>