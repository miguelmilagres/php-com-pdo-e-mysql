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

    $query = 'select * from tb_users';

    $stmt = $connection->query($query);
    // $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $list = $stmt->fetchAll(PDO::FETCH_NUM);
    // $list = $stmt->fetchAll(PDO::FETCH_BOTH);
    $list = $stmt->fetchAll(PDO::FETCH_OBJ);

    $dadName = explode(' ', $list[0]->name)[0];
    $sonName = explode(' ', $list[1]->name)[0];
    $sisterName = explode(' ', $list[2]->name)[0];

    echo "<pre>";
    print_r($list);
    echo "</pre>";

    echo 'Meu nome é ' . $sonName . ', sou filho do ' . $dadName . ' e irmão da ' . $sisterName . '.';

} catch (PDOException $e) {
    echo "Error " . $e->getCode() . ": " . $e->getMessage();
}