<?php
function get_bank(){
    include "../config/connection.php";
    $sql = "SELECT * FROM tili";

    $resultObject = $db->query($sql);

    $resultArray = $resultObject->fetchAll(PDO::FETCH_ASSOC);

    return $resultArray;
}

function get_user(){
    include "../config/connection.php";
    $sql = "SELECT * FROM asiakas";

    $resultObject = $db->query($sql);

    $resultArray = $resultObject->fetchAll(PDO::FETCH_ASSOC);

    return $resultArray;
}
?>
