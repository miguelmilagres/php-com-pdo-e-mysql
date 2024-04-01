<?php

$dsn = "mysql:host=localhost;dbname=php_com_pdo";
$user = "root";
$password = '';

try {
    $connection = new PDO($dsn, $user, $password);

    // criando uma tabela
    /*
    $query = 'create table if not exists tb_users (
        id int not null primary key auto_increment,
        nome varchar(255) not null,
        email varchar(255) not null,
        senha varchar(255) not null
    )';
    */
    ;

    // inserindo dados
    /* 
    $query = 'insert into tb_users (
        nome, email, senha 
        ) values (
            "Miguel Milagres", "miguelmilagres@teste.com", "m123456i"
        )'; 
    */

    // removendo dados
    /*
    $query = 'delete from tb_usuarios';
    */

    $result = $connection->exec($query);

} catch (PDOException $e) {
    echo "Error " . $e->getCode() . ": " . $e->getMessage();
}