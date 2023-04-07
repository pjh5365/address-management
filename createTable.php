<?php
    $conn = mysqli_connect("localhost", "username", "password", "dbname");   //로컬에 있는 데이터베이스 연결

    if($conn) {
        $db = mysqli_query($conn, "CREATE TABLE member (
                                            id int NOT NULL,
                                            name varchar(10),
                                            addr varchar(80),
                                            primary key(id))");
        if($db) {
            echo "<h2>DB생성완료</h2>";
        }
        else {
            echo "<h2>이미 DB가 존재합니다.</h2>";
        }
    }
    else {
        echo "<h2>DB연결에 실패하였습니다.</h2>";
    }

?>
