<?php
/**
 * @file      UsersManager.php
 * @brief     This model is designed to implements users business logic
 * @author    Created by Monteiro.Rui
 * @version   12.04.2022
 */

/**
 * @brief Cette fonction sert à enregistrer un novel utilisateur
 */
function RegisterNewUserAccount($UserFirstName, $UserLastName, $UserEmail, $UserPhoneNumber, $UserPassword): ?bool
{
    $usertype = 2; // ID des annonceurs
    $result = false;
    $strSeparator = '\'';
    $UserPassword = password_hash($UserPassword, PASSWORD_DEFAULT);
    $RegisterQuery = 'INSERT INTO storex.users (`FirstName`, `LastName`, `Email`, `PhoneNumber`,`Password`, `usertype_ID`) VALUES (' . $strSeparator . $UserFirstName . $strSeparator . ', ' . $strSeparator . $UserLastName . $strSeparator . ', ' . $strSeparator . $UserEmail . $strSeparator . ', ' . $strSeparator . $UserPhoneNumber . $strSeparator . ', ' . $strSeparator . $UserPassword . $strSeparator . ', ' . $strSeparator . $usertype . $strSeparator . ')';

    require_once 'Model/DataBaseConnector.php';
    $queryResult = executeQueryInsert($RegisterQuery);
    if ($queryResult) {
        $result = $queryResult;
    }
    return $result;
}

/**
 * @brief Cette fonction sert à vérifier le login d'un utilisateur
 */
function IsUserLoginCorrect($UserEmail, $UserPassword): bool
{
    $result = false;
    $strSeparator = '\'';
    $LoginQuery = 'SELECT Password FROM storex.users WHERE Email = ' . $strSeparator . $UserEmail . $strSeparator;

    require_once 'Model/DataBaseConnector.php';
    $queryResult = executeQuerySelect($LoginQuery);

    if (count($queryResult) == 1) {
        $userHashPsw = $queryResult[0]['Password'];
        $hashPasswordDebug = password_hash($UserPassword, PASSWORD_DEFAULT);
        $result = password_verify($UserPassword, $userHashPsw);
    }
    return $result;
}

/**
 * @brief Cette fonction sert à vérifier le type d'utilisateur grâce à son index
 */
function GetUserTypeFromEmail($UserEmail): int
{
    $result = 1; // ID des annonceurs
    $strSeparator = '\'';
    $GetUserTypeQueryFromEmail = 'SELECT usertype_ID FROM storex.users WHERE users.Email =' . $strSeparator . $UserEmail . $strSeparator;

    require_once 'Model/DataBaseConnector.php';
    $queryResult = executeQuerySelect($GetUserTypeQueryFromEmail);

    if (count($queryResult) == 1) {
        $result = $queryResult[0]['usertype_ID'];
    }
    return $result;
}

/**
 * @brief Cette fonction sert à vérifier tous les utilisateurs
 */
function GetUsers(): array
{
    require_once 'Model/DataBaseConnector.php';
    $UsersQuery = 'SELECT ID, FirstName, LastName, PhoneNumber, Email, Password, usertype_ID FROM storex.users;';
    return executeQuerySelect($UsersQuery);
}