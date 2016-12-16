<div class="leftbar">
    <?php //echo $pageParentId.', '.$pageSubPagesCount; ?>
    <?php
    $queryy=$_GET['query']; //echo $query; die();
    if(isset($queryy)){
        $pageRoww = $groups->getByURLName($queryy);$pageIdd = $pageRoww['id'];
        $pageResultt = $groups->getById($pageIdd);$pageRoww = $conn->fetchArray($pageResultt);
        $pageParentIdd = $pageRoww['parentId'];
        $pageSubPagesCountt=$groups->pageSubPagesCount($pageParentIdd);
        if($pageParentIdd!=0 and $pageSubPagesCountt!=0){?>
            <article class="indent-bot-1">
                <?php $page_title=$conn->fetchArray($groups->getById($pageParentIdd));?>
                <h2 class="heading-1"><?php echo $page_title['name']; ?></h2>
                <ul class="list-1">
                    <?php
                    $pagee=$groups->getByParentIdWithLimit($pageParentIdd,10);
                    while($pageGet=$conn->fetchArray($pagee)){?>
                        <li><a href="<?php echo $pageGet['urlname'];?>" <?php if($pageIdd==$pageGet['id']) echo 'style="color:red;text-decoration:underline"';?>><?php echo $pageGet['name'];?></a></li>
                    <?php }?>
                </ul>
                <div class="alignright">
                    <a href="<?php echo $page_title['urlname'];?>" class="button">Read more</a>
                </div>
            </article>
        <?php }
    }?>


    <?php if(empty($pageLinkType) and !isset($_GET['action'])){?>
        <article class="indent-bot-1 officer" style="text-align: center;padding: 0 0 5px 0">
            <?php
            $officer=$conn->fetchArray($groups->getById(INFO_OFFICER));
            ?>
            <h2 class="heading-1"><?php echo $officer['name'];?></h2>
            <img src="<?php echo CMS_GROUPS_DIR.$officer['image'] ?>" >
            <p class="hr-border-1 article-content">
                <?php echo $officer['shortcontents'];?>
            </p>
            <div class="alignright">
                <a href="<?php echo $officer['urlname'];?>" class="button">Read more</a>
            </div>
        </article>
    <?php }
    else{?>
        <article class="indent-bot-1" style="text-align: center;padding: 0 0 5px 0">
            <?php
            $chief=$groups->getById(OFFICER); $chief=$conn->fetchArray($chief);
            ?>
            <h2 class="heading-1"><?php echo $chief['name'];?></h2>
            <img src="<?php echo CMS_GROUPS_DIR.$chief['image'] ?>" style="width:70%">
            <p class="hr-border-1 article-content">
                <?php echo $chief['shortcontents'];?>
            </p>
            <div class="alignright">
                <a href="<?php echo $chief['urlname'];?>" class="button">Read more</a>
            </div>
        </article>
    <?php }?>

    <article class="indent-bot-1">
        <?php $news_title=$conn->fetchArray($groups->getById(NEWS));?>
        <h2 class="heading-1"><?php echo $news_title['name']; ?></h2>
        <ul class="list-1">
            <?php
            $news=$groups->getByParentIdWithLimit(NEWS,4);
            while($newsGet=$conn->fetchArray($news)){?>
                <li><a href="<?php echo $newsGet['urlname'];?>"><?php echo $newsGet['name'];?></a></li>
            <?php }?>
        </ul>
        <div class="alignright">
            <a href="<?php echo $news_title['urlname'];?>" class="button">Read more</a>
        </div>
    </article>

    <article class="indent-bot-1">
        <div class="bills-div"><a href="bills.php"><div class="bills">भुक्तानीका लागि प्राप्त विलहरुको सर्वाजनिकरण</div></a></div>
    </article>

    <article class="indent-bot-1">
        <?php $link=$conn->fetchArray($groups->getById(LINKS));?>
        <h2 class="heading-1"><?php echo $link['name']; ?></h2>
        <ul class="list-1">
            <?php
            $links=$groups->getByParentIdWithLimit(LINKS,4);
            while($linksGet=$conn->fetchArray($links)){?>
                <li><a href="<?php echo $linksGet['urlname'];?>"><?php echo $linksGet['name'];?></a></li>
            <?php }?>
        </ul>
        <div class="alignright">
            <a href="<?php echo $link['urlname'];?>" class="button">Read more</a>
        </div>
    </article>

</div>
    
<div class="rightbar">