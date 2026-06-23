<fieldset style="width:50%;margin:auto;">
    <legend>忘記密碼</legend>
    <!-- <div style="color:red">*請設定您要註冊的帳號及密碼(最長12個字元)</div> -->
    <!-- <form action="" method="post"> -->
        <table>

            <tr>
                <td>請輸入信箱以查詢密碼</td>
            </tr>

            <tr>
                <td>
                    <input type="text" name="email" id="email">
                </td>
            </tr>

            <tr>
                <td id="result"></td>
            </tr>
            <tr>
                <td>
                    <button type="button" onclick="find()">尋找</button>
                </td>

            </tr>
        </table>
    <!-- </form> -->
</fieldset>


<script>
    function find(){
        let email = $("#email").val();
        $.get("./api/forgot.php", {email}, (result)=>{
            $("#result").text(result)
        })
    }

</script>