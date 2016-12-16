<style type="text/css">
    .entry-content a{color: #000;font-size: 14px;font-weight: bold;}
</style>
<div id="content" class="cf" style="">
<?php //include("includes/breadcrumb.php"); ?>
<article class="single-view post-77 page type-page status-publish hentry">
    <header class="entry-header cf"><h2 class="entry-title"><?php if($lan!='en') echo 'Our 
    Services'; else echo 'हाम्रा सेवाहरु';?></h2></header>
    <div class="entry-byline cf">
    </div>
    <div class="entry-content cf">

        <?php
          $list=$groups->getByParentIdWithLimit(SERVICES,6);
          while($row=$conn->fetchArray($list)){?>
            <div style="padding:5px 0" class="listTitle">
                <a href="<?php echo $row['urlname']; ?>"><?=$row['name']?></a>
            </div>
        <? }?>

    </div>
</article>
</div>