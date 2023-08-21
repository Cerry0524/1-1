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
    <form method="post" target="back" action="./api/update_single.php">
        <table width="100%">
            <tbody>


                <tr class="">

                    <td width="50%" class="yel">
                        進站總人數:
                    </td>
                    <td width="50%">
                        <input type="text" name="viewer" value="<?= $rows; ?>">
                    </td>

                </tr>

            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>