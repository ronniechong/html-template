<h1>HTML5 / PHP template</h1>

<p>Date added: 6th November 2013</p>
<p>Description: This is a HTML/PHP template for a standard web development. It supports a HTML5, mobile/responsive environment and a PHP client server environment.</p>

<h2>Structure</h2>
<p>
	The starting point template has the following structure:</p>
<p>
	index.php<br/>
	layout.php<br/>
	_assets/js/ --> JS files here<br/>
	_assets/images/ --> Image files here<br/>
	_assets/css/ --> CSS files here<br/>	
	_assets/lib/ --> PHP include or library files here<br/>
</p>

<h2>Getting started</h2>
<p>You will need a Apache/PHP webserver environment to host the HTML templates.</p>
<dl>
	<dt>layout.php</dt>
	<dd>
		This is the template for the layout of the website. It defines your basic structure of the website (header and footer) as well as global calls for scripts and stylesheets
	</dd>

	<dt>index.php</dt>
	<dd>
		This is the template for the invidual page of the website. You can populate your local content here as well as define scripts or stylesheets.
	</dd>

	<dt>settings.php</dt>
	<dd>
		This file is located in _assets/lib folder. It serves as a settings page where you define how the template will behave. See Settings below for options
	</dd>
</dl>


<h2>Settings</h2>
<dl>
	<dt>$objSettings -> isDEVMODE</dt>
	<dd>
		Setting this option to TRUE will display internal information during development. This is useful when you wish to debug issues.<br/>
		NOTE: Remember to turn it to FALSE before going live with your website or internal information will be revealed to the public. The default value is FALSE.
	</dd>
	<dt>$objSettings -> isMobileResponsive</dt>
	<dd>
		This is for mobile/responsive development. If set to TRUE, a viewport tag will be embedded into the layout. The default value is FALSE.
	</dd>
	
	<dt>$objSettings -> isSession</dt>
	<dd>
		If set to TRUE, a session() will start for the website. The default value is FALSE.
	</dd>
	
	<dt>$objSettings -> strMobileViewport</dt>
	<dd>
		This is the tag for mobile/responsive mode. This will be embedded in the layout is <em>isMobileResponsive</em> is set to TRUE.
	</dd>
</dl>	

<h2>CSS</h2>
<p>The CSS (default.css) contains a standard reset and a basic set of styling and declarations.</p>