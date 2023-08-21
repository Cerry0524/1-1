<h2 class="cent">新增標題區圖片</h2>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data" style="width: 70%;margin:auto">
    <table>
        <tr>
            <td>標題區圖片:</td>
            <td><input type="file" name="img"></td>
        </tr>
        <tr>
            <td>標題區替代文字:</td>
            <td><input type="text"></td>
        </tr>
    </table>
    <div class="cent">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>