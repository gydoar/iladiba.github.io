
<!-- Header principal -->
<?php include("header.php"); ?>

	<div class="container">
		<div class="row">
			<!-- Slideshow -->
			<div class="eight columns">
				<div id="slider">
					<img src="images/home/slider/1.jpg" data-src-2x="images/home/slider/1@2x.jpg" title="Baloons" alt="This is the caption content" />
					<img data-src="images/home/slider/2.jpg" data-src-2x="images/home/slider/2@2x.jpg" src="" title="Skateboard" alt="Captions <em>can</em> contain <strong>HTML</strong>" />
					<img data-src="images/home/slider/3.jpg" data-src-2x="images/home/slider/3@2x.jpg" src="" alt="This will be overridden" data-caption="#caption-3" />
					<img data-src="images/home/slider/4.jpg" data-src-2x="images/home/slider/4@2x.jpg" src="" title="A title without a caption" alt="" />
					<img data-src="images/home/slider/3.jpg" data-src-2x="images/home/slider/4@2x.jpg" src="" title="Silly?" alt="A really really really" />		
				</div>

				<div id="caption-3" style="display:none;">
					<h3>External Caption</h3>
					<p>When using <a href="#">HTML in captions</a> it might be better to use an external caption.</p>
				</div>
			</div>

			<!-- Articulos del slideshow -->
			<div class="four columns">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae vel provident explicabo nulla eveniet dolorem deleniti maxime possimus natus nobis debitis iusto, facilis officiis illum architecto, voluptatem sapiente libero magnam.
			</div>
		</div>
	</div>

<!-- Footer principal -->
<?php include("footer.php"); ?>