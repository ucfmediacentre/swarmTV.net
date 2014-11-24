<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Sequence Player</title>
<style type="text/css">
body,td,th {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666;
}</style>
<script type="application/javascript" src="../../../../../js/vendor/jquery-1.8.3.min.js"></script>
<script type="application/javascript" src="../../../../../js/popcorn.js"></script>
<script type="application/javascript" src="../../../../../js/videoExtension.js"></script>
</head>

<body>

<div id="container-id"></div>
<script type="text/javascript">

var videoInfo = JSON.parse('<?php echo $jsonSequence ?>');
//alert(videoInfo[0].src);
var len=videoInfo.length;
//alert(len);
for(var i=0; i<len; i++) {
	var value = videoInfo[i].src;
	//alert(value);
	videoInfo[i].src = "../../../assets/video/"+value+videoExtension;
	//alert(videoInfo[i].src);
}

alert(object.toSource())

// create our sequence
var sequence = Popcorn.sequence("container-id",videoInfo);

// play popcorn
sequence.play();

</script>
</body>
</html>