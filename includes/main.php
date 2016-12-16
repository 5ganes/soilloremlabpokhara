<article class="indent-bot">
  <?php $welcome=$conn->fetchArray($groups->getById(WELCOME));?>
  <h2><?php echo $welcome['name'];?></h2>
  <div class="wrapper hr-border-1">
      <div class="welcome">
          <img src="<?php echo CMS_GROUPS_DIR.$welcome['image'];?>">
          <?php echo $welcome['shortcontents'];?>
          
      </div>    
  </div>
  <div class="alignright welcome-read-more">
      <a href="<?php echo $welcome['urlname'];?>" class="button">Read more</a>
  </div>
</article>

<article class="indent-bot">
  <div class="wrapper hr-border-1">
      <div class="sewakendra">
        <article class="indent-bot-1">
          <h2 class="">हाम्रा सेवाहरु</h2>
          <ul class="list-1">
              <?php
              $list=$groups->getByParentIdWithLimit(SERVICES,6);
              while($row=$conn->fetchArray($list)){?>
                  <li><a href="<?php echo $row['urlname'];?>"><?php echo $row['name'];?></a></li>
              <?php }?>
            </ul>
            <div class="alignright">
              <a href="services.html" class="button">Read more</a>
            </div>
        </article>  
      </div>
      <div class="gallery">
        <article class="indent-bot-1">
          <h2 class="">हाम्रा गेलरी</h2>
          <iframe src="wow/slideimage.php" style="width:340px;height:230px;max-width:100%;overflow:hidden;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe>
        </article>
      </div>
      <div style="clear: both"></div>    
  </div>
</article>