<html>
<head>
<title>3D Pong - Stage 01</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script type="text/javascript" src="js/processing-1.4.1.min.js"></script>
<!--script type="text/javascript" src="js/init.js"></script-->
</head>

<body>
	<script type="application/processing">
	Walker w;

	void setup() {
	  size(400,400);
	  frameRate(30);

	  // Create a walker object
	  w = new Walker();
	}

	void draw() {
	  background(255);
	  // Run the walker object
	  w.walk();
	  w.render();
	}
	</script>
	
	<canvas></canvas>
</body>
</html>