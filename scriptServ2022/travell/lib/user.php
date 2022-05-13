<?php

/**
 * @param PDO $dbh
 * @param int $idU
 * @return false|mixed|object
 */
function getUser(PDO $dbh, int $idU)
{
    $sql = 'SELECT * FROM user WHERE id = ?';
    $request = $dbh->prepare($sql);
    $request->execute([$idU]);
    return $request->fetchObject();
}