
<div class="top-container top-distance">
    <div class="inner-container top-distance bottom-distance">
        
        <?php
        if ($_SESSION['mail_sent']) {
            ?>
            <div class="warning">        
                <p><?= $lng['downloadWarning'] ?></p>
            </div>
            <?php
            $_SESSION['mail_sent'] = false;
        }
        ?>
        
        <div class="text_header">        
            <h1 class="color-black text-center margin-top margin-bottom title">Рубрика прайс лист. Вы можете скачать прайс лист с ценами. Просто введите свой имейл.</h1>
        </div>
        
        <div class="margin-bottom padding-bottom">
            <form action="/mail" method="POST" class="">
                <div class="">
                    <label for="comp-name" class="color-black"><?= $lng['name'] ?> :</label>
                    <input id="comp-name" type="text" name="name" required="" class="regular-input">
                    <label for="comp-email" class="color-black"><?= $lng['email'] ?> :</label>
                    <input id="comp-email" type="email" name="email" required="" class="regular-input">
                    <input type="submit" name="auth_submit" value="<?= $lng['enter'] ?>" class="regular-submit">
                </div>
            </form>     
        </div>

        <span class="color-black text-center "><?= $lng['pricelist_note'] ?></span>
        <table class="CSSTableGenerator">
            <tbody>
                <tr>
                    <td colspan="5">MOMOI Япония</td> 
                </tr>
            </tbody>
        </table>
        <table class="CSSTableGenerator">
            <tbody>
                <tr>
                    <td>TWINE</td> <td>MESH</td> <td>DEPTH</td> <td>LENGTH</td> <td>COLOUR</td> 
                </tr>
                <tr>
                    <td colspan="5">
                        <?= $lng['slogan'] ?>
                    </td>  
                </tr>
                <tr>
                    <td>0,18mm</td> <td>26mm</td>  <td>75,5md</td> <td>150m</td> <td>Moye-32</td>  
                </tr>
                <tr>
                    <td>0,25mm</td> <td>55mm</td>  <td>75,5md</td> <td>150m</td> <td>Moye-32</td>  
                </tr>
                <tr>
                    <td>0,25mm</td> <td>60mm</td>  <td>75,5md</td> <td>150m</td> <td>Moye-32</td>  
                </tr>
                <tr>
                    <td>0,14*4mm</td> <td>180mm</td>  <td>50,5md</td> <td>150m</td> <td>Moye-32</td>  
                </tr>
                <tr>
                    <td>0,15*4mm</td> <td>40mm</td>  <td>75,5md</td> <td>150m</td> <td>Moye-32</td>  
                </tr>
                <tr>
                    <td>0,18*3mm</td> <td>45mm</td>  <td>75,5md</td> <td>150m</td> <td>Moye-32</td>  
                </tr>
                <tr>
                    <td>0,18*3mm</td> <td>50mm</td>  <td>75,5md</td> <td>150m</td> <td>Moye-32</td>  
                </tr>
                <tr>
                    <td>0,20*3mm</td> <td>55mm</td>  <td>75,5md</td> <td>150m</td> <td>Moye-32</td>  
                </tr>
                <tr>
                    <td>0,20*3mm</td> <td>180mm</td>  <td>75,5md</td> <td>150m</td> <td>Moye-32</td>  
                </tr>
                <tr>
                    <td>0,20*3mm</td> <td>200mm</td>  <td>50,5md</td> <td>150m</td> <td>Moye-32</td>  
                </tr>
                <tr>
                    <td>0,20*3mm</td> <td>100mm</td>  <td>75,5md</td> <td>150m</td> <td>Moye-32</td>  
                </tr>
                <tr>
                    <td>0,20*3mm</td> <td>110mm</td>  <td>75,5md</td> <td>150m</td> <td>Moye-32</td>  
                </tr>
                <tr>
                    <td>0,20*4mm</td> <td>110mm</td>  <td>75,5md</td> <td>150m</td> <td>Moye-32</td>  
                </tr>
                <tr>
                    <td>0,20*4mm</td> <td>120mm</td>  <td>75,5md</td> <td>150m</td> <td>Moye-32</td>  
                </tr>
            </tbody>
        </table>

        <table class="CSSTableGenerator small-margin">
            <tbody>
                <tr>
                    <td colspan="5">Golden Corona Япония</td> 
                </tr>
            </tbody>
        </table>
        <table class="CSSTableGenerator ">
            <tbody>
                <tr>
                    <td>TWINE</td> <td>MESH</td> <td>DEPTH</td> <td>LENGTH</td> <td>COLOUR</td> 
                </tr>
                <tr>
                    <td>0,16mm</td> <td>25mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,16mm</td> <td>30mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,16mm</td> <td>32mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,16mm</td> <td>34mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,16mm</td> <td>38mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,18mm</td> <td>30mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,18mm</td> <td>32mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,18mm</td> <td>34mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,18mm</td> <td>36mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,18mm</td> <td>38mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,18mm</td> <td>50mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,18mm</td> <td>65mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,20mm</td> <td>50mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,20mm</td> <td>65mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,20mm</td> <td>70mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,23mm</td> <td>65mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,23mm</td> <td>70mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,23mm</td> <td>75mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,25mm</td> <td>70mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,25mm</td> <td>75mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,20*4mm</td> <td>90mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,20*4mm</td> <td>95mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,20*4mm</td> <td>105mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,20*8mm</td> <td>100mm</td>  <td>50,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,20*8mm</td> <td>110mm</td>  <td>50,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
                <tr>
                    <td>0,15mm</td> <td>24mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr><tr>
                    <td>0,15mm</td> <td>30mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr><tr>
                    <td>0,15mm</td> <td>32mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr><tr>
                    <td>0,15mm</td> <td>33mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr><tr>
                    <td>0,15mm</td> <td>34mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr><tr>
                    <td>0,17mm</td> <td>30mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr><tr>
                    <td>0,17mm</td> <td>32mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr><tr>
                    <td>0,17mm</td> <td>33mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr><tr>
                    <td>0,17mm</td> <td>36mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr><tr>
                    <td>0,17mm</td> <td>38mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr><tr>
                    <td>0,17mm</td> <td>40mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr><tr>
                    <td>0,17mm</td> <td>50mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr><tr>
                    <td>0,20mm</td> <td>50mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr><tr>
                    <td>0,20mm</td> <td>55mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr><tr>
                    <td>0,20mm</td> <td>70mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr><tr>
                    <td>0,23mm</td> <td>70mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr><tr>
                    <td>0,23mm</td> <td>72mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr><tr>
                    <td>0,23mm</td> <td>75mm</td>  <td>75,5md</td> <td>150m</td> <td>Mtgy-62</td>  
                </tr>
            </tbody>
        </table>
        <div class="input_align padding-left"><div class="share42init"></div>
        </div>
    </div>
</div>

<div class="fixed-bar">
    <? require 'view/client/footer.php'; ?>
</div>
