<?php
header("Access-Control-Allow-Origin: *");
?>
<div style="text-align: center; background-color: #fff; padding: 5px;">
    <img style="width: 200px; height: 80px;" src="/assets/images/receipt-logo.png"/><h3 class="smaller" style="margin-top: 5px;">Register an Account</h3>
    <table>
        <tr>
            <td style="text-align: right;"><label>Nome:&nbsp;</label></td>
            <td><input id="register_name" type="text"/><input id="custid" type="hidden"/></td>
        </tr>
        <tr>
            <td style="text-align: right;"><label>Email:&nbsp;</label></td>
            <td><input id="register_email" type="text"/></td>
        </tr>
        <tr>
            <td style="text-align: right;"><label>Telefone:&nbsp;</label></td>
            <td><input id="register_phone" type="text"/></td>
        </tr>
        <tr>
            <td style="text-align: right;"><label>Celular:&nbsp;</label></td>
            <td><input id="register_mobile" type="text"/></td>
        </tr>
        <tr>
            <td style="text-align: right;"><label>Endereço:&nbsp;</label></td>
            <td><input id="register_address" type="text"/></td>
        </tr>
        <tr>
            <td style="text-align: right;"><label>Bairro:&nbsp;</label></td>
            <td><input id="register_suburb" type="text"/></td>
        </tr>
        <tr>
            <td style="text-align: right;"><label>CEP:&nbsp;</label></td>
            <td><input id="register_postcode" type="text"/></td>
        </tr>
        <tr>
            <td style="text-align: right;"><label>Estado:&nbsp;</label></td>
            <td><input id="register_state" type="text"/></td>
        </tr>
        <tr>
            <td style="text-align: right;"><label>País:&nbsp;</label></td>
            <td><input id="register_country" type="text"/></td>
        </tr>
        <tr>
            <td style="text-align: right;"><label>Senha:&nbsp;</label></td>
            <td><input id="register_pass" type="password"/></td>
        </tr>
        <tr>
            <td style="text-align: right;"><label>Confirmar Senha:&nbsp;</label></td>
            <td><input id="register_cpass" type="password"/></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <img src="/assets/secureimage/securimage_show.php?sid=<?php echo(rand(0, 10000000)); ?>" alt="CAPTCHA Image" id="siimage" /><br />
                <a tabindex="-1" style="border-style: none" href="#" title="Refresh Image" onclick="$('#siimage').attr('src', '/secureimage/securimage_show.php?sid=' + Math.random()); return false;"><span class="style1"><img src="/assets/secureimage/images/refresh.png" alt="Reload Image" border="0" onclick="this.blur()" />Reload Captcha</span></a>
            </td>
        </tr>
        <tr>
            <td style="text-align: right;"><label>Security Code:&nbsp;</label></td>
            <td><input id="register_captcha" type="text"/></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;"><button class="btn btn-primary" style="margin-top: 10px;" onclick="WOMS.register();">Submit</button></td>
        </tr>
    </table>
</div>