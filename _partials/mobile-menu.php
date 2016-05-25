<div id="mobile-menu">

	<div id="menu-button">&#9776;</div>

	<ul id="mobile-menu--container">
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
</div> <!-- /#mobile-menu -->