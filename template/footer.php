						</div>
                        <div style="clear: both"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer>
    	<div class="container_24">
        	<div class="wrapper footer_wrap">
            	<div class="grid_24 footer-bg">
        			<div class="hr-border-2"></div>
                    <div class="wrapper">
                        
                        <div class="grid_7 publication">
                        	<h2 class="heading-1">हाम्रा पब्लिकेशनहरु:</h2>
                            <ul class="footer-list">
                                <?php
                                $download=$groups->getByParentIdWithLimit(PUBLICATION,6);
                                while($downloadGet=$conn->fetchArray($download)){?>
                            	   <li>
                                        <a href="<?php echo CMS_GROUPS_DIR.$downloadGet['contents'] ?>">
                                            <?php echo $downloadGet['name'] ?>                                           
                                        </a>
                                    </li>
                                <?php }?>
                            </ul>
                        </div>
                        <div class="grid_7 contact">
                        	<h2 class="heading-1">हाम्रो सम्पर्क:</h2>
                            <?php $contact=$conn->fetchArray($groups->getById(CONTACT));?>
                            <p><?php echo $contact['shortcontents'];?></p>
                        </div>
                        <div class="grid_7 suffix_1 prefix_1 alpha facebook">
                            <div class="copyright">
                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkrishighar%2F&tabs=timeline&width=260px&height=260px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="260px" height="260px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                            </div>
                        </div>
                        <div class="grid_3 suffix_1 omega social">
                            <h2 class="heading-1">सामाजिक सन्जाल:</h2>
                        	<ul class="social-list">
                            	<li><a href="#"><img src="index_files/social-icon-1.png" alt=""></a></li>
                                <li><a href="#"><img src="index_files/social-icon-2.png" alt=""></a></li>
                                <li><a href="#"><img src="index_files/social-icon-3.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
            	</div>
        	</div>
        </div>
    </footer>

    <footer>
        <div class="container_24">
            <div class="wrapper footer_wrap">
                <div class="grid_24 footer-bg">
                    <div class="wrapper">
                        <div class="copy">Copyright @ Siol Lab, Pokhara.</div>
                        <div class="powered">Powered By: <a href="http://krishighar.com">Team Krishighar</div>
                        <div style="clear: both;"></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

<!-- slider jquery include -->
<script src="slider/js/jquery-1.9.1.min.js"></script>
<!-- <script src="slider/js/bootstrap.min.js"></script> -->
<!-- <script src="slider/js/docs.min.js"></script> -->
<!-- <script src="slider/js/ie10-viewport-bug-workaround.js"></script> -->
<script type="text/javascript" src="slider/js/jssor.slider.mini.js"></script>
<script type="text/javascript" src="slider/js/script.js"></script>
<!-- slider jquery include end -->


<!-- menu submenu jquery include -->
<script src="js/jquery-1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.js"></script>
<!-- menu submenu jquery include end -->

</body>
</html>