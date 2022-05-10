<?php
/**
 * Author   : nicolas.glassey@cpnv.ch
 * Project  : dbConnector
 * Created  : 28.01.2019 - 20:13
 *
 * Last update :    [01.12.2018 author]
 *                  [add $logName in function setFullPath]
 * Git source  :    [link]
 */

/**
 * This function is designed to insert value in database
 * @param $query
 * @return bool|null : $statement->execute() returne true is the insert was successful
 */
function executeQuery($query)
{
    $queryResult = null;

    $dbConnexion = openDBConnexion();//open database connexion
    if ($dbConnexion != null) {
        echo 'Connection à la DB réussie';
        $statement = $dbConnexion->prepare($query);//prepare query
        $queryResult = $statement->execute();//execute query
        //$dbConnexion->close();//close connection
    }
    $dbConnexion = null;//close database connexion
    return $queryResult;
}

/**
 * This function is designed to manage the database connexion. Closing will be not proceeded there. The client is responsible of this.
 * @return PDO|null
 * Source : http://php.net/manual/en/pdo.construct.php
 */
function openDBConnexion()
{
    $tempDbConnexion = null;

    $sqlDriver = 'mysql';
    $hostname = 'localhost';
    $port = 3306;
    $charset = 'utf8';
    $dbName = 'storex';
    $userName = 'Storex';
    //$userName = 'StorexAutoAdmin';
    $userPwd = 'Storex2022Password';
    $dsn = $sqlDriver . ':host=' . $hostname . ';dbname=' . $dbName . ';port=' . $port . ';charset=' . $charset;

    try {
        $tempDbConnexion = new PDO($dsn, $userName, $userPwd);
        echo 'Connection done';
    } catch (PDOException $exception) {
        echo 'Connection failed: ' . $exception->getMessage();
    }
    return $tempDbConnexion;
}