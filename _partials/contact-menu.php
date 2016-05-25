<div class="contact-menu">
	<div id="contact-information">
		<p class="phone"><i class="icon phone-icon"></i>(55) 4162 8325</p>
		<p class="mail"><i class="icon mail-icon"></i>contacto@mgsoluciones.com.mx</p>

		<div class="social-icons">
			<div class="twitter">
				<a href="#"><i class="twitter-icon"></i></a>
			</div> <!-- /.twitter -->

			<div class="facebook">
				<a href="#"><i class="facebook-icon"></i></a>
			</div> <!-- /.facebook -->
		</div> <!-- /.social-icons -->
	</div> <!-- #contact-information -->

	<div id="menu">
		<ul>

			<li>
				<a <?php echo ($page_name == 'home') ? 'class="active"' : null; ?> href="/">Inicio</a>
			</li>

			<li>
				<a <?php echo ($page_name == 'about') ? 'class="active"' : null; ?> href="/nosotros">¿ Quiénes Somos ?</a>
			</li>

			<li>
				<a <?php echo ($page_name == 'services') ? 'class="active"' : null; ?> href="/servicios">Servicios</a>
			</li>

			<li>
				<a <?php echo ($page_name == 'clients') ? 'class="active"' : null; ?> href="/clientes">Clientes</a>
			</li>

			<li>
				<a <?php echo ($page_name == 'contact') ? 'class="active"' : null; ?> href="/contacto">Contacto</a>
			</li>

		</ul>
	</div> <!-- /#menu -->
</div> <!-- /.contact-menu -->