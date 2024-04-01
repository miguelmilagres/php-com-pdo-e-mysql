<?php

$dsn = "mysql:host=localhost;dbname=php_com_pdo";
$user = "root";
$password = '';

try {
    $connection = new PDO($dsn, $user, $password);

    // criando uma tabela
    // $query = 'create table if not exists tb_users (
    //     id int not null primary key auto_increment,
    //     name varchar(255) not null,
    //     email varchar(255) not null,
    //     password varchar(255) not null
    // )';

    // $result = $connection->exec($query);

    // // inserindo dados
    // $query = 'insert into tb_users (
    //     name, email, password 
    //     ) values (
    //         "Miguel Macedo", "miguelmacedo@teste.com", "m123456i"
    //         )';

    // $result = $connection->exec($query);

    // $query = 'insert into tb_users (
    //     name, email, password 
    //     ) values (
    //         "Bento Macedo", "bentomacedo@teste.com", "b123456e"
    //         )';

    // $result = $connection->exec($query);

    // $query = 'insert into tb_users (
    //     name, email, password 
    //     ) values (
    //         "Clara Macedo", "claramacedo@teste.com", "c123456l"
    //         )';

    // $result = $connection->exec($query);

    // removendo dados
    // $query = 'delete from tb_usuarios';

    // método exec
    // $result = $connection->exec($query);

    // $query = 'select * from tb_users where id = 1';
    // $query = 'select * from tb_users order by name asc limit 1';
    $query = 'select * from tb_users';

    $stmt = $connection->query($query);
    // $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $list = $stmt->fetchAll(PDO::FETCH_NUM);
    // $list = $stmt->fetchAll(PDO::FETCH_BOTH);
    // $list = $stmt->fetchAll(PDO::FETCH_OBJ);
    // $user = $stmt->fetch(PDO::FETCH_OBJ);
    $userList = $stmt->fetchAll(PDO::FETCH_OBJ);

    // echo "<pre>";
    // print_r($list);
    // echo "</pre>";

    // echo $user->name;

    $i = 0;
    foreach ($userList as $key => $value) {
        echo $i . ' - Name : ' . $value->name . '<br>';
        $i++;
    }

} catch (PDOException $e) {
    echo "Error " . $e->getCode() . ": " . $e->getMessage();
}