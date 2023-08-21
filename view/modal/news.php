<h2 class="cent">新增最新消息資料</h2>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data" style="width: 70%;margin:auto">
    <table>
        <tr>
            <td>最新消息資料:</td>
            <td><textarea name="text" style="width: 300px;height:80px"></textarea>
        </tr>

    </table>
    <div class="cent">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>