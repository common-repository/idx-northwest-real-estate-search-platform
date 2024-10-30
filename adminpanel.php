<script type="text/javascript">
	function pageY(elem) { return elem.offsetParent ? (elem.offsetTop + pageY(elem.offsetParent)) : elem.offsetTop; }
	var buffer = 10;
	function resizeIframe() { var height = window.innerHeight || document.body.clientHeight || document.documentElement.clientHeight;height -= pageY(document.getElementById('ifm'))+ buffer ;height = (height < 0) ? 0 : height;document.getElementById('ifm').style.height = height + 'px'; }
	window.onresize = resizeIframe;window.onload = resizeIframe;
</script>

<div class="wrap">  
	<?php echo '<a href="http://www.idxnw.com" target="_blank"><img src="' .plugins_url( 'images/logo-h.png' , __FILE__ ). '" style="float:right;padding-left:20px;vertical-align:top;"></a>'; ?>
	<h1>IDX Northwest Real Estate Search Platform</h1>
	<h2 style="color:#218ac2;">IDX Admin Panel</h2>
	<hr>
	<p style="text-align:justify;">You will find the IDXNW Administration Panel below that has been framed in for one-stop convenience.  To independently access the IDX Administration Panel, please visit <a href="http://admin.idxnw.com" target="_blank">http://admin.idxnw.com</a>.<br><br>This page is best viewed with your browser maximized to fill the screen.</p><br/>
	<iframe src="http://admin.idxnw.com" id="ifm" style="width:99%;height:100%;padding:3px;border:2px solid silver;"></iframe>
</div>

<br/><hr>
<p>Copyright &copy; 2007-<?php echo date("Y"); ?> <a href="http://www.idxnw.com" target="_blank">IDX Northwest, LLC</a> - All Rights Reserved.</p>
