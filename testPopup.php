<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>

	
.black_overlay{
        display: none;
        position: fixed;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        background-color: #333;
        z-index:10001;
        -moz-opacity: 0.8;
        opacity:.80;
        filter: alpha(opacity=80);
    }
    .white_content {
        position: fixed;
        top: 10%;
        left: 25%;
        width: 60%;
        height: 60%;
		display:none;
        padding: 10px;
        border: 3px solid #FFFFFF;
        background-color: #ffffff;
		box-shadow:0px 0px 15px #999999;
        z-index:1000000;
        overflow: auto;
		-moz-border-radius:5px;
		border-radius:5px;
    }
</style>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">

	
function loadContent()
{
	$("#orderlight").show('slow');
	$("#fade").show('slow');
}

function closeButton()
{
	$("#orderlight").hide('medium');
	$("#fade").hide('medium');
}

</script>
</head>

<body>

<a href="#" onclick="loadContent()">Click Here</a>

<div id="fade" class="black_overlay"></div>        
<div id="orderlight" class="white_content">

	<div style="width:100%; height:500px; background:#ccc">dfd</div>
</div>
</body>
</html>
