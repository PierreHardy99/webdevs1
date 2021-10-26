<?php 

    function getCustomers(){
        $dns = "mysql::host=localhost;dbname=sakila;charset=utf8";
        $pdo = new PDO($dns,"root","");

        $request = $pdo->query('SELECT * FROM customer c
                                INNER JOIN address a ON a.address_id = c.address_id') OR DIE(print_r($request->errorInfo(), TRUE));

        while ($result = $request->fetch()) {
        $listAddress[] = $result;
        }
        $request->closeCursor();
        return $listAddress;
    }

?>