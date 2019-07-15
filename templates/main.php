<!DOCTYPE html>
<html>
<head>

<title>My Proxy</title>

<meta name="generator" content="php-proxy.com">
<meta name="version" content="<?=$version;?>">

<style type="text/css">
html body {
	font-family: Arial,Helvetica,sans-serif;
	font-size: 12px;
}

#container {
	width:500px;
	margin:0 auto;
	margin-top:150px;
}

#error {
	color:red;
	font-weight:bold;
}

#frm {
	padding:10px 15px;
	
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
}

#footer {
	text-align:center;
	font-size:10px;
	margin-top:35px;
	clear:both;
}
</style>
	
<script type="text/javascript">

window.onload = function() {
	 document.getElementById("demo1").value = function getUrlParam("ff") {
    var url = window.location.href;
    if(url!=null && url.indexOf("?")!=-1){
        var url_param = url.split("?")[1];
        var url_param_arr = url_param.split("&");
        for(var i=0;i<url_param_arr.length;i++){
            var tempParam = url_param_arr[i];
            var paramName =  tempParam.split("=")[0];
            if(paramName==name){
                return tempParam.split("=")[1]
            }
        }
    }
    return null;
}

  document.getElementById("Submit1").click();
}



</script>
</head>


<body>


<div id="container">

	<div style="text-align:center;">
		<h1 style="color:blue;">My Proxy</h1>
	</div>
	
	<?php if(isset($error_msg)){ ?>
	
	<div id="error">
		<p><?php echo strip_tags($error_msg); ?></p>
	</div>
	
	<?php } ?>
	
	<div id="frm">
	
	<!-- I wouldn't touch this part -->
	
		<form action="index.php" method="post" style="margin-bottom:0;">
			<input id="demo1" name="url" type="text" style="width:400px;" />
			<input id="Submit1" type="submit" value="Go" />
		</form>
		
		<script type="text/javascript">
			document.getElementsByName("url")[0].focus();
		</script><br>
		eg: www.youtube.com.......
	<!-- [END] -->
	
	</div>
	
	
</div>

<div id="footer">
	
	
</div>


</body>
</html>
