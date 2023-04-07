<?php
    $id = $_POST['id']; //POST로 받은 값 변수에 저장
    $name = $_POST['name'];
    $addr = $_POST['addr'];

    $conn = mysqli_connect("localhost", "username", "password", "dbname");   //로컬에 있는 데이터베이스 연결

    $sql = "INSERT INTO member (id, name, addr) ";
    $sql .= "VALUES('$id', '$name', '$addr');";

    if(mysqli_query($conn, $sql)) { //성공시
        echo "<br><br><center><h2>주소를 입력에 성공하였습니다.</h2> <br><br>";
    }
    else {  //실패
        echo "<br><br><center><h2>주소를 입력에 실패하였습니다.</h2> <br><br>";
    }

    mysqli_close($conn);    //연결종료
    echo "<center><a href='insertData.php'>주소 입력으로 돌아가기 <br><br>";
    echo "<center><a href='showData.php'>주소 목록 <br><br>";
    echo "<center><a href='main.php'>메인화면으로 돌아가기 <br><br>";
?>