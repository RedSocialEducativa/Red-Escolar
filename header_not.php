<?php
echo <<< HERE
<header> 
	<div id="logo"><a href="#"><img src="./images/logo.png"/></a></div>
	<div id="search">
		<div class="button-search"></div>
		<input type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
	</div>
</header>
HERE;
?>