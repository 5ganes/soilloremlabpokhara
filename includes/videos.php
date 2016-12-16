<style>
    .gall{float:left; margin-bottom:3px;margin-right: 12px;line-height: 30px}
    .gall:nth-child(3n){ margin-right:0}
    #paging a{color:red;}
</style>
</style>
<div id="content" class="cf" style="">
<?php //include("includes/breadcrumb.php"); ?>
<article class="single-view post-77 page type-page status-publish hentry">
    <header class="entry-header cf"><h2 class="entry-title"><?php if($lan!='en') echo 'Our Videos'; else echo $pageNameEn;?></h2></header>
    <div class="entry-byline cf">
    </div>
    <div class="entry-content cf">
    	<?php
        $video_gallery_id=VIDEO_GALLERY;
        $limit =15;
        $video="select * from groups where parentId='$video_gallery_id' order by id DESC";
        require 'includes/pagination.php';
        $return = Pagination($video, '', $limit, 'videos');
        $arr = explode(" -- ", $return);
        $start = $arr[0];
        $pagelist = $arr[1];
        $count = $arr[2];
        $video .= " LIMIT $start, $limit"; //echo $video; die();
        $result = mysql_query($video);

        while($vidGet=$conn->fetchArray($result)){
            ++$i;
            ?>
            <div class="gall">
                <iframe width="227" height="160" src="<?=$vidGet['contents']?>" frameborder="0" allowfullscreen=""></iframe>
                <p><?=$vidGet['name'];?></p>
            </div>
        <?php }?>
        <div style="clear:both"></div>
        <?php
        if($count > $limit)
            echo $pagelist;
        ?>
    </div>
</article>
</div>