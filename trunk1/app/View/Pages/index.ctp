<?php 
echo $this->Session->flash();
if (defined('HOMEPAGE_BANNER')) {
    $image = substr(HOMEPAGE_BANNER, 1);
} else {
    $image = 'img/slide-bg4.jpg';
}
?>
<div class="flexslider">

    <ul class="slides">
		<?php $i = 1; foreach($slides as $key => $val) {  ?>
        <li style="<?php echo 'background:url(' . ltrim($val, "/") . ') no-repeat center 0'; ?>">
            <div class="content ">
                <h2><!--<span>The Elite Site for</span> Premium<br>
                    Technology<br>
                    Courses--><?php echo $slide_text["HOMEPAGE_BANNER_IMAGE_TEXT".$i];  ?></h2>
                <p class="content-txt">
                    <a href="<?php echo $slide_links["HOMEPAGE_BANNER_IMAGE_LINK_VAL".$i]; ?>" class="banner-link" target="_blank" title="<?php echo $slide_links["HOMEPAGE_BANNER_IMAGE_LINK".$i]; ?>"><?php echo $slide_links["HOMEPAGE_BANNER_IMAGE_LINK".$i]; ?></a> 
                </p>
            </div>
		</li>
		<?php $i++; } ?>
    </ul>

</div>
<?php echo $this->element("latestcourses"); ?>
