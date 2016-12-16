<style type="text/css">
    .entry-content a{color: #000;font-size: 14px;font-weight: bold;}
</style>
<div id="content" class="cf" style="">
<?php //include("includes/breadcrumb.php"); ?>
<article class="single-view post-77 page type-page status-publish hentry">
    <header class="entry-header cf"><h2 class="entry-title"><?php if($lan!='en') echo 'Our Sewakendra'; else echo 'सेवा केन्द्रहरु';?></h2></header>
    <div class="entry-byline cf">
    </div>
    <div class="entry-content cf">

        <?php
        $kendra = new Sewakendra();
        $list=$kendra->getSewaKendraWithLimit(100);
        while($row=$conn->fetchArray($list))
        {?>
            <div style="padding:5px 0" class="listTitle">
                <br/>
                <a target="_blank" href="<? if($lan=='en') echo 'en/';?>sewakendra/<?=$row['urlname'];?>.html"><?=$row['name'];?></a>
                <div id="news">
                    <? echo $row['shortcontents']; ?>
                </div>
            </div>
        <? }?>

    </div>
</article>
</div>