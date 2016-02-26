<div class="top-container">
    <div class="ghost-background">
        <div class="inner-container full-height js-adjust-hight ">
            <div class="contacts top-distance-margin top-distance  ">
                <h2 class=" text-center"><?= $lng['form'] ?></h2>
                <form method="POST" action="">
                    <div class="input_align"><label><?= $lng['name'] ?><input type="text" required="" name="contact_name" ></label></div>
                    <div class="input_align"> <label><?= $lng['email'] ?><input type="email" required="" name="contact_email"></label></div>
                    <div class="input_align"><label><?= $lng['tel'] ?><input type="text" required="" name="contact_tel"></label></div>

                    <?php if ($_GET['col']) { ?>
                        <div class="input_align"><label>Цвет: <input type="text" name="color" value="<?= $_GET['col']; ?>"></label></div> 
                        <?php
                    }
                    ?>
                    <div class="input_align"><label><?= $lng['message'] ?><textarea required="" name="contact_message"></textarea></label></div>
                    <div class="submit_align"><label><input type="submit" value="<?= $lng['submit'] ?>" name="contact_us"></label></div>
                </form>
            </div>
            <div class="margin-share42">
            <div class="share42init"></div>
        </div>
        </div>
    </div>
</div>

