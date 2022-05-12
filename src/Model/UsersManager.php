<?php
/**
 * @file      UsersManager.php
 * @brief     This model is designed to implements users business logic
 * @author    Created by Monteiro.Rui
 * @version   12.04.2022
 */

/**
 * This function is designed to register a new account
 * @param $UserFirstName
 * @param $UserLastName
 * @param $UserEmail
 * @param $UserPhoneNumber
 * @param $UserPassword
 * @return bool|null
 */
function registerNewAccount($UserFirstName, $UserLastName, $UserEmail, $UserPhoneNumber, $UserPassword)
{
    $usertype = 3;
    $result = false;

    $strSeparator = '\'';

    $UserPassword = password_hash($UserPassword, PASSWORD_DEFAULT);

    $registerQuery = 'INSERT INTO storex.users (`FirstName`, `LastName`, `PhoneNumber`, `Email`, `Password`, `usertype_ID`) VALUES (' . $strSeparator . $UserFirstName . $strSeparator . ', ' . $strSeparator . $UserLastName . $strSeparator . ', ' . $strSeparator . $UserEmail . $strSeparator . ', ' . $strSeparator . $UserPhoneNumber . $strSeparator . ', ' . $strSeparator . $UserPassword . $strSeparator . ', ' . $strSeparator . $usertype . $strSeparator . ')';

    require_once 'model/dbConnector.php';
    $queryResult = executeQueryInsert($registerQuery);
    if ($queryResult) {
        $result = $queryResult;
    }
    return $result;
}

/**
 * This function is designed to verify user's login
 * @param $UserEmail
 * @param $UserPassword
 * @return bool : "true" only if the user and psw match the database. In all other cases will be "false".
 */
function isLoginCorrect($UserEmail, $UserPassword){
    $result = false;

    $strSeparator = '\'';
    $loginQuery = 'SELECT Password FROM storex.users WHERE Email = '. $strSeparator . $UserEmail . $strSeparator;

    require_once 'model/dbConnector.php';
    $queryResult = executeQuerySelect($loginQuery);

    if (count($queryResult) == 1)
    {
        $userHashPsw = $queryResult[0]['userHashPsw'];
        $UserPassword = password_hash($UserPassword, PASSWORD_DEFAULT);
        $result = password_verify($UserPassword, $userHashPsw);
    }
    return $result;
}

/**
 * This function is designed to get the type of user
 * For the webapp, it will adapt the behavior of the GUI
 * @param $UserEmail
 * @return int (1 = CEO ; 2 = CTO ; 3 = Vendor)
 */
function getUserType($UserEmail)
{
    $result = 3;//we fix the result to 0 -> customer

    $strSeparator = '\'';

    $getUserTypeQuery = 'SELECT usertype_ID FROM storex.users WHERE users.Email =' . $strSeparator . $UserEmail . $strSeparator;

    require_once 'model/dbConnector.php';
    $queryResult = executeQuerySelect($getUserTypeQuery);

    if (count($queryResult) == 1) {
        $result = $queryResult[0]['usertype_ID'];
    }
    return $result;
}