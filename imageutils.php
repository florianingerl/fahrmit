<?php
include_once("mysql.php");

function getImageFromUsername($username){
    $dir = "assets/img/users/";
    if(file_exists( $dir . $username . ".png")){
        return  $dir . $username . ".png";
    }
    else if (file_exists($dir . $username . ".jpg") ) {
        return $dir . $username . ".jpg";
    }
    else if (file_exists($dir . $username . ".jpeg") ) {
        return $dir . $username . ".jpeg";
    }
    else if(file_exists($dir . $username . ".gif") ){
        return $dir . $username . ".gif";
    }
    else {
        return $dir . "logo.png";
    }
}


function getImageFromId($conn, $id){
    $sql = "select username from users where id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return getImageFromUsername($result[0]['username']);
}

?>