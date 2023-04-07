<html>
    <head>
        <title>주소입력</title>
    </head>

    <body>
        <br><br><center><h2>주소 입력</h2><br>
        <form name="insertMysql" method="post" action="insertMysql.php">
            <table border="1" width="400" height="100">
                <tr>
                    <td>학번</td>
                    <td>
                        <input type="text" maxlength="10" name="id" />
                    </td>
                </tr>
                <tr>
                    <td>이름</td>
                    <td>
                        <input type="text" maxlength="10" name="name" />
                    </td>
                </tr>
                <tr>
                    <td>주소</td>
                    <td>
                        <input type="text" size="40" name="addr" />
                    </td>
                </tr>
                <tr>
                    <td height="40%" align="center" colspan="2">
                        <input type="submit" value="입력하기">
                        <input type="reset" value="초기화">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>