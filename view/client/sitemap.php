
<div class="top-container  top-distance background-blackfish js-adjust-hight">
    <div class="inner-container gallery top-distance">
        <ul class="sitemap-href">
        <?php
        foreach ($sitemapArr as $key=>$value) {
            ?><li><a href="<?=$value?>" class=""><?=$key?></a></li><?php
            if($key == 'Каталог'){
                ?><li><ul class="inner-ul-sitemap"><?php
                ?><li><a href="<?=WEBURL?>/colors" class="">- Сетеполотно из скрученной лески</a></li><?php
                foreach ($category1 as $val){
                    ?><li><a href="<?=WEBURL?>/category/<?=$val['id']?>" class="">- <?=$val['name']?></a></li><?php
                }
                ?></ul></li><?php
            }
        }
        ?>
            </ul>
    </div>
</div>

<div class="fixed-bar">
<? require 'view/client/footer.php'; ?>
</div>