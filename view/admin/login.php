<div class="login-form">
    <form method="POST">    
        <?
        if (!empty($error)) {
            echo '<em>' . $error . '</em><br>';
        }
        ?>
        <div class="input-wrapper"><input type="text" name="login" placeholder="Логін"></div>
        <div class="input-wrapper"><input type="password" name="pass" placeholder="Пароль"></div>
        <div class="input-submit-wrapper"><input type="submit" value="Вхід"></div>
    </form>
</div>