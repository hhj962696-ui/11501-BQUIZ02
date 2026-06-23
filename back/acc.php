

<fieldset style="width:50%; margin:auto;">
    <legend>帳號管理</legend>
    <!-- <h2>新增會員</h2>
        <div style="color:red">*請設定您要註冊的帳號及密碼(最長12個字元)</div> -->
    <!-- form:post>table>tr*3>td*2 -->
    <form action="./api/edit_add.php" method="post">
        <table class="clo">
            <tr>
                <td>帳號</td>
                <td>密碼</td>
                <td>刪除</td>
            </tr>
            <?php
                $mems = $Member->all();
                foreach($mems as $mem):
            ?>
            <tr>
                <td><?= $mem['acc'] ?></td>
                <td><?= str_repeat("*", strlen($mem['pwd'])) ?></td>
                <td>
                    <input type="checkbox" name="del[]" value="<?= $mem['id'] ?>">
                </td>
            </tr>
            <?php endforeach;?>
        </table>
        <div class="ct">
            <input type="submit" value="確定刪除">
            <input type="reset" value="清空選取">
        </div>


        <table>
            <tr>
                <td>Step1:登入帳號</td>
                <td><input type="text" name="acc" id="acc"></td>
            </tr>
            <tr>
                <td>Step2:登入密碼</td>
                <td><input type="text" name="pwd" id="pwd"></td>
            </tr>
            <tr>
                <td>Step3:再次確認密碼</td>
                <td><input type="text" name="pwd2" id="pwd2"></td>
            </tr>
            <tr>
                <td>Step4:信箱(忘記密碼時使用)</td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td>
                    <button type="button" onclick="reg()">新增</button>
                    <button type="button" onclick="$('#acc,#pwd,#pwd2,#email').val('')">清除</button>
                </td>
            </tr>
        </table>
    <!-- </form> -->
</fieldset>



<script>
    function reg(){
        let user = {
            'acc':$("#acc").val(),
            'pwd':$("#pwd").val(),
            'pwd2':$("#pwd2").val(),
            'email':$("#email").val(),
        }
        // console.log(user);
        
        if (user.acc == "" ||
            user.pwd == "" ||
            user.pwd2 == "" ||
            user.email == ""
        ){
            alert("不可空白");
        }else if (user.pwd != user.pwd2 ){
            alert("密碼錯誤");
        }else{
            // console.log('檢查帳號')
            console.log(user);
            $.get("api/chk_acc.php", user, (res)=>{
                if (parseInt(res) > 0){
                    alert("帳號重複");
                }else{
                    $.post("api/reg.php", user, (res)=>{
                        // alert("註冊完成，歡迎加入");
                        // location.href='do=login'
                        location.reload();
                    })
                }
            });
        }



    }


    </script>