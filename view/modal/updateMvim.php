<h2 class="cent">更新動畫圖片</h2>
<hr>
<form action="./api/update_single.php" method="post" enctype="multipart/form-data" style="width: 70%;margin:auto">
    <table>
        <tr>
            <td>動畫圖片:</td>
            <td><input type="file" name="img"></td>
        </tr>
    </table>
    <div class="cent">
        <input type="submit" value="更新">
        <input type="reset" value="重置">
    </div>
</form>