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
    $result = false;

    $strSeparator = '\'';

    $userHashPsw = password_hash($UserPassword, PASSWORD_DEFAULT);

    $registerQuery = 'INSERT INTO users (`FirstName`, `LastName`, `PhoneNumber`, `Email`, `Password`, `usertype_ID`) VALUES (' . $strSeparator . $UserFirstName . $strSeparator . ', ' . $strSeparator . $UserLastName . $strSeparator . ', ' . $strSeparator . $UserEmail . $strSeparator . ', ' . $strSeparator . $UserPhoneNumber . $strSeparator . ', ' . $strSeparator . $UserPassword . $strSeparator . ', ' . $strSeparator . '3' . $strSeparator . ')';

    require_once 'model/dbConnector.php';
    $queryResult = executeQueryInsert($registerQuery);
    if ($queryResult) {
        $result = $queryResult;
    }
    return $result;
}


/**
 * This function is designed to verify user's login
 * @param $userEmailAddress
 * @param $userPsw
 * @return bool : "true" only if the user and psw match the database. In all other cases will be "false".
 */
function isLoginCorrect($userEmailAddress, $userPsw)
{
    $result = false;

    $strSeparator = '\'';
    $loginQuery = 'SELECT Password FROM users WHERE Email = ' . $strSeparator . $userEmailAddress . $strSeparator;

    require_once 'model/dbConnector.php';
    $queryResult = executeQuerySelect($loginQuery);

    if (count($queryResult) == 1) {
        $userHashPsw = $queryResult[0]['Password'];
        $hashPasswordDebug = password_hash($userPsw, PASSWORD_DEFAULT);
        $result = password_verify($userPsw, $userHashPsw);
    }
    return $result;
}



/**
 * This function is designed to get the type of user
 * For the webapp, it will adapt the behavior of the GUI
 * @param $userEmailAddress
 * @return int (1 = customer ; 2 = seller)
 */
function getUserType($userEmailAddress)
{
    $result = 3;//we fix the result to 1 -> customer

    $strSeparator = '\'';

    $getUserTypeQuery = 'SELECT usertype_ID FROM users WHERE users.Email =' . $strSeparator . $userEmailAddress . $strSeparator;

    require_once 'model/dbConnector.php';
    $queryResult = executeQuerySelect($getUserTypeQuery);

    if (count($queryResult) == 1) {
        $result = $queryResult[0]['userType'];
    }
    return $result;
}