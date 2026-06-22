<fieldset style="width:50%; margin:auto;">
    <legend>會員登入</legend>

    <!-- form:post>table>tr*3>td*2 -->
    <form action="" method="post">
        <table>
            <tr>
                <td>帳號</td>
                <td><input type="text" name="acc" id="acc"></td>
            </tr>
            <tr>
                <td>密碼</td>
                <td><input type="text" name="pwd" id="pwd"></td>
            </tr>
            <tr>
                <td>
                    <button type="button">登入</button >
                    <button type="reset">清除</button >

                </td>
                <td>
                    <a href="?do=forgot">忘記密碼</a>
                    <a href="?do=reg">尚未註冊
                    </a>
                </td>
            </tr>
        </table>
    </form>
    </fieldset>
