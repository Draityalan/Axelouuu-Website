<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="./style/styleCommun.css">
		<link rel="icon" href="./img/favicon.png" />
		<meta name="theme-color" content="#ff7578">
		
		<?php 
		if (stristr($_SERVER['HTTP_USER_AGENT'], "Android")
		|| strpos($_SERVER['HTTP_USER_AGENT'], "iPod")
		|| strpos($_SERVER['HTTP_USER_AGENT'], "iPhone") )
		{	
		
			$plateforme = "mobile";
			echo '<link rel="stylesheet" href="./style/styleMobile.css">';
			
		} else {
			
			$plateforme = "pc";
			echo '<link rel="stylesheet" href="./style/stylePc.css">';
			
		}
		
		$pageName = 'accueil';
		if(isset($_GET['pageName']))
		{
			
			$pageName = $_GET['pageName'];
		
			if ($pageName == 'accueil')
			{
				
				echo '<title>Axelouuu - Website</title>';
				
			}
			if ($pageName == 'emoji')
			{
				
				echo '<title>Axelouuu - Emoji</title>';
				
			}
			if ($pageName == 'projetsBatch')
			{
				
				echo '<title>Axelouuu - Mes projets Batch</title>';
				
			}
			if ($pageName == 'projetMusique')
			{
				
				echo '<title>Axelouuu - Musiques</title>';
				
			}
			if ($pageName == 'portfolio')
			{
				
				echo '<title>Axelouuu - Portfolio</title>';
				
			}
			if ($pageName == 'aVenir')
			{
				
				echo '<title>Axelouuu - À venir</title>';
				
			}
		
		}
		
		
		?>
		
		<script type="text/javascript" async=true >
			var elem = document.createElement('script');
			elem.src = './cmp.js';
			elem.async = true;
			elem.type = "text/javascript";
			var scpt = document.getElementsByTagName('script')[0];
			scpt.parentNode.insertBefore(elem, scpt);
			(function() {
			var gdprAppliesGlobally = false;
			function addFrame() {
				if (!window.frames['__cmpLocator']) {
				if (document.body) {
					var body = document.body,
						iframe = document.createElement('iframe');
					iframe.style = 'display:none';
					iframe.name = '__cmpLocator';
					body.appendChild(iframe);
				} else {
					setTimeout(addFrame, 5);
				}
				}
			}
			addFrame();
			function cmpMsgHandler(event) {
				var msgIsString = typeof event.data === "string";
				var json;
				if(msgIsString) {
				json = event.data.indexOf("__cmpCall") != -1 ? JSON.parse(event.data) : {};
				} else {
				json = event.data;
				}
				if (json.__cmpCall) {
				var i = json.__cmpCall;
				window.__cmp(i.command, i.parameter, function(retValue, success) {
					var returnMsg = {"__cmpReturn": {
					"returnValue": retValue,
					"success": success,
					"callId": i.callId
					}};
					event.source.postMessage(msgIsString ?
					JSON.stringify(returnMsg) : returnMsg, '*');
				});
				}
			}
			window.__cmp = function (c) {
				var b = arguments;
				if (!b.length) {
				return __cmp.a;
				}
				else if (b[0] === 'ping') {
				b[2]({"gdprAppliesGlobally": gdprAppliesGlobally,
					"cmpLoaded": false}, true);
				} else if (c == '__cmp')
				return false;
				else {
				if (typeof __cmp.a === 'undefined') {
					__cmp.a = [];
				}
				__cmp.a.push([].slice.apply(b));
				}
			}
			window.__cmp.gdprAppliesGlobally = gdprAppliesGlobally;
			window.__cmp.msgHandler = cmpMsgHandler;
			if (window.addEventListener) {
				window.addEventListener('message', cmpMsgHandler, false);
			}
			else {
				window.attachEvent('onmessage', cmpMsgHandler);
			}
			})();
			window.__cmp('init', {
					'Language': 'fr',
				'Initial Screen Body Text Option': 1,
				'Publisher Name': 'Moneytizer',
				'Default Value for Toggles': 'off',
				'UI Layout': 'banner',
				'No Option': false,
			});
		</script>
		<style>
			.qc-cmp-button,
			.qc-cmp-button.qc-cmp-secondary-button:hover {
				background-color: #ff7578 !important;
				border-color: #ff7578 !important;
			}
			.qc-cmp-button:hover,
			.qc-cmp-button.qc-cmp-secondary-button {
				background-color: transparent !important;
				border-color: #ff7578 !important;
			}
			.qc-cmp-alt-action,
			.qc-cmp-link {
				color: #ffffff !important;
			}
			.qc-cmp-button,
			.qc-cmp-button.qc-cmp-secondary-button:hover {
				color: #ffffff !important;
			}
			.qc-cmp-button:hover,
			.qc-cmp-button.qc-cmp-secondary-button {
				color: #ffffff !important;
			}
			.qc-cmp-small-toggle,
			.qc-cmp-toggle {
				background-color: #ff7578 !important;
				border-color: #ff7578 !important;
			}
			.qc-cmp-main-messaging,
			.qc-cmp-messaging,
			.qc-cmp-sub-title,
			.qc-cmp-privacy-settings-title,
			.qc-cmp-purpose-list,
			.qc-cmp-tab,
			.qc-cmp-title,
			.qc-cmp-vendor-list,
			.qc-cmp-vendor-list-title,
			.qc-cmp-enabled-cell,
			.qc-cmp-toggle-status,
			.qc-cmp-table,
			.qc-cmp-table-header {
				color: #ffffff !important;
			}
			
			.qc-cmp-ui {
				background-color: #565656 !important;
			}
				.qc-cmp-table,
			.qc-cmp-table-row {
				  border: 1px solid !important;
				  border-color: #ff7578 !important;
			} 
			#qcCmpButtons a {
				text-decoration: none !important;
			}
		
			#qcCmpButtons button {
				margin-top: 65px;
			}
			.qc-cmp-qc-link-container{
				display:none;
			}
		</style>
	</head>
	<body>
		<?php
	
		if ($plateforme == "pc")
		{
			
			echo '<div class="logo"><img src="./img/logoPc.png"/></div>';
				
		}
		
		
		if ($plateforme == "mobile")
		{
			
			echo '<div class="logo"><img src="./img/logoMobile.png"/></div>';
				
		}
	
		include $pageName.'.php';
		?>
	
		<div id="41980-28"><script src="//ads.themoneytizer.com/s/gen.js?type=28"></script><script src="//ads.themoneytizer.com/s/requestform.js?siteId=41980&formatId=28"></script></div>
	</body>
</html>