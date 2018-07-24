<?php include_once 'webroot/view/default/header.php'; ?>
<div class="sub-title">
	<h2>My Blog</h2>
	<a href="<?php echo SITE_URL; ?>/post/contact"><i class="icon-envelope"></i></a>
</div>
<div class="col-md-12 content-page">
	<!-- Blog Post Start -->
	<?php foreach($getPostResult as $key=>$value) {
	    $dateTime = strtotime($value['created_at']);
	    ?>
	    <div class="col-md-12 blog-post">
	    <div class="post-title"><a href="<?php echo SITE_URL; ?>/post/single">
	    <h1><?php echo $value['title']; ?></h1>
	    </a></div>
	    <div class="post-info"><span><?php echo date('F d, Y', $dateTime); ?> / by <a href="<?php echo SITE_URL; ?>/post/about">Rajesh</a></span></div>
	    <p><?php echo $value['description']; ?></p>
	    <a href="<?php echo SITE_URL; ?>/post/single" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a></div>
	<?php } ?>
	<!-- Blog Post End -->
	<div class="col-md-12 text-center">
		<a href="javascript:void(0)" id="load-more-post"
			class="load-more-button">Load</a>
		<div id="post-end-message"></div>
	</div>
</div>
</div>
<!-- Subscribe Form Start -->
<div class="col-md-8 col-md-offset-2">
	<form id="mc-form" method="post"
		action="<?php echo SITE_URL; ?>/post/subscribe">
		<div class="subscribe-form margin-top-20">
			<input id="mc-email" type="email" placeholder="Email Address"
				class="text-input">
			<button class="submit-btn" type="submit">Submit</button>
		</div>
		<p>Subscribe to my weekly newsletter</p>
		<label for="mc-email" class="mc-label"></label>
	</form>
</div>
<!-- Subscribe Form End -->
</div>
<!-- Footer Start -->
<?php include_once 'webroot/view/default/footer.php'; ?>
<!-- Footer End -->