<?php
$mysqli = "";
// Configuration des paramètres de la base de données
$db_config = [
    "host" => "localhost:8889",
    "dbname" => "blog",
    "login" => "root",
    "password" => "root"
];

$mysqli = new mysqli($db_config["host"], $db_config["login"], $db_config["password"], $db_config["dbname"]);

// Fonction de connexion à la base.
function _db_connect() {
    global $mysqli, $db_config;
    // Check connection
    if (!$mysqli->real_connect($db_config["host"], $db_config["login"], $db_config["password"], $db_config["dbname"])) {
        die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
    }
    return $mysqli;
}

// Fonction de sélection dans la base de données.
function db_select($sql, $debug = false) {
    global $mysqli;
    $result = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) { //mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    } else {
        $rows = [];
    }
    if ($debug) {
        print_r($rows);
    }
    // mysqli_close($mysqli);
    return $rows;
}

// Fonction d'execution d'un ordre SQL DML : Insert/Update/delete
function db_insert($sql) {
    global $mysqli;
    // $mysqli = _db_connect();
    if ($mysqli->query($sql) === TRUE) {
        // return $mysqli->affected_rows;
        return $mysqli->insert_id;
    } else {
        die ("Error: " . $sql . "<br>" . $mysqli->error);
    }
}