<fieldset style="width:50%; margin:auto;">
    <legend>新增問卷</legend>
    <!-- <h2>新增會員</h2>
        <div style="color:red">*請設定您要註冊的帳號及密碼(最長12個字元)</div> -->
    <!-- form:post>table>tr*3>td*2 -->
    <form action="./api/add_que.php" method="post">
        <table class="clo">
            <tr>
                <td>問卷名稱</td>
                <td>
                    <input type="text" name="name" id="name">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div: id="option">
                        選項
                        <input type="text" name="option[]" style="width:60%">
                        <button type="button" onclick="more()">更多</button>
                    </div>
                </td>
            </tr>
        </table>
        <div class="ct">
            <input type="submit" value="新增">
            <input type="reset" value="清空">
        </div>

        <!-- </form> -->
</fieldset>

<script>
    function more(){
    let opt = `<div id='option'>
            選項<input type="text" name="option[]" style="width:60%" >
            </div>`
    //
    $("#option").before(opt)
}
</script>