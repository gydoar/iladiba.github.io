<!-- Footer -->
<footer>
	<!-- Menu Footer -->
	<div class="menu__footer container">
		<ul>
			<li><a href="#">Términos de Uso</a></li>
			<li><a href="#">Políticas de Privacidad</a></li>
			<li><a href="#">Acerca de ILADIBA</a></li>
			<li><a href="#">Suscríbase</a></li>
			<li><a href="#">Paute con Nosotros</a></li>
			<li><a href="#">Trabaje con Nosotros</a></li>
			<li><a href="#">Mapa del Sitio</a></li>
			<li><a href="#">Contáctenos</a></li>
			<li><a href="#">Newsletter ILADIBA</a></li>
		</ul>
	</div>

	<!-- Logos Footer -->
	<div class="footer__logos">
		<ul class="container">
			<h3>Educación en Salud</h3>
			<li><a target="new" href="#"><img width="112px" src="images/footer/logo_emsa.png" alt="Logo Emsa"></a></li>
			<li><a target="new" href="#"><img width="70px" src="images/footer/logo_fun_iladiba.png" alt="Logo Fundación Iladiba"></a></li>
			<li><a target="new" href="#"><img width="218px" src="images/footer/logo_iladiba.png" alt="Logo Iladiba"></a></li>
			<li><a target="new" href="#"><img width="202px" src="images/footer/logo_cursos_iladiba.png" alt="Logo Cursos Iladiba"></a></li>
			<li><a target="new" href="#"><img width="161px" src="images/footer/logo_salud_hoy.png" alt="Logo Salud Hoy"></a></li>
		</ul>
	</div>

	<!-- Copyright -->
	<div class="copyright">
		<div class="container">
			<div class="six columns">
				<!-- Contact copyright -->
				<ul class="copyright__contact">
					<li>
						<img width="21px" src="images/footer/icon_map.png" alt="Icon Map">
						<p>Calle 30A No. 6- 22<br>Bogotá, Colombia</p>
					</li>
					<li>
						<img width="22px" src="images/footer/icon_tel.png" alt="Icon Tel">
						<p>+57 310 281 6466<br>+571 232 5817</p>
					</li>
				</ul>
				
				<!-- Iconos sociales copyright -->

				<ul class="copyright__social">
					<li><a target="new" href="#"><img widthn="12px" src="images/footer/icon_twitter.png" alt="Twitter"></a></li>
					<li><a target="new" href="#"><img widthn="12px" src="images/footer/icon_facebook.png" alt="Facebook"></a></li>
					<li><a target="new" href="#"><img widthn="12px" src="images/footer/icon_linkedin.png" alt="Linkeding"></a></li>
				</ul>
			</div>

			<!-- Texto y logo Tekton Copyright -->
			<div class="six columns">
				<div class="row">
					<div class="nine columns text__copyright center">
						<p><strong>Todos los derechos reservados a Editorial Maldonado S.A  - ISSN 1657 - 5628</strong></p>
						<p>Se prohíbe la reproducción total o parcial de los contenidos, así como <br>su traducción a cualquier idioma sin autorización escrita del titular</p>
					</div>

					<div class="three columns">
						<a target="new" href="#"><img width="171px" class="twelve columns" src="images/footer/logo_tekton.png" alt="Logo Tekton"></a>
					</div>
				</div>
					
				
			</div>
		</div>
	</div>
</footer>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

<!-- Slider -->
<script src="js/ideal-image-slider.js"></script>
<script src="js/iis-captions.js"></script>

<script>
	var slider = new IdealImageSlider.Slider('#slider');
	slider.addCaptions();
	slider.start();
</script>


<!-- Flex Slider -->
<script src="js/jquery.flexslider.js"></script>

<script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });

    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        controlNav: false,
        autoPlay: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });

    // Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider-caption').flexslider({
	    animation: "slide"
	  });
	});
  </script>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
