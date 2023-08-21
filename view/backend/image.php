<table width="100%">
    <tbody>
        <tr>
            <td style="width:70%;font-weight:800; border:#333 1px solid; border-radius:3px;" class="cent"><a href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a>
            </td>
            <td><button onclick="document.cookie='user=';location.replace('?')" style="width:99%; margin-right:2px; height:50px;">管理登出</button></td>
        </tr>
    </tbody>
</table>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli"><?= $header; ?></p>
    <form method="post" target="back" action="./api/update.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="68%">動畫圖片</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
                foreach ($rows as $row) {
                ?>
                    <tr class="">
                        <td width="68%" class="cent">
                            <img src="./upload/<?= $row['img']; ?>" style="width:100px;height:68px">
                        </td>
                        <td width="7%">
                            <input type="checkbox" name="sh[]" id="<?= $row['sh']; ?>" <?= ($row['sh'] == 1) ? "checked" : ""; ?>>
                        </td>
                        <td width="7%">
                            <input type="checkbox" name="del[]" id="<?= $row['id']; ?>">
                        </td>
                        <td>
                            <input type="button" onclick="op('#cover','#cvr','<?= $updateModal; ?>')" value="<?= $updateBtn; ?>">
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="cent"><?= $links; ?></div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','<?= $modal; ?>')" value="<?= $addBtn; ?>"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>