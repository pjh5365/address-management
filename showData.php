<?php
    $conn = mysqli_connect("localhost", "username", "password", "dbname");   //로컬에 있는 데이터베이스 연결
    $sql = "SELECT * FROM member";  //member테이블에 있는 정보가져오기
    $result = mysqli_query($conn, $sql);    //쿼리문
?>

<html>
    <head>
        <title>주소록 목록</title>
    </head>

    <body>
        <br><br><center><h2>주소록 목록</h2>
        <table width="680" border="1" cellpadding="1">
            <tr>
                <td width="20%" align="center">학번</td>
                <td width="20%" align="center">이름</td>
                <td align="center">주소</td>
            </tr>

            <?php
                while ($data = mysqli_fetch_array($result)) {   //배열로 결과를 받아출력
                    echo "<tr>";
                    echo "<td>{$data['id']}</td>";
                    echo "<td>{$data['name']}</td>";
                    echo "<td>{$data['addr']}</td>";
                    echo "</tr>";
                }
                mysqli_close($conn);    //연결종료
            ?>
        </table><br><br>
            <a href="main.php">메인화면으로 이동</a>
    </body>
</html>
