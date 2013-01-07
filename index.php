<html>
<head>
<title>3D Pong - Stage 01</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script type="text/javascript" src="js/processing-1.4.1.min.js"></script>
<script type="text/javascript" src="js/init.js"></script>
</head>

<body>
	<script type="application/processing">
	void setup() {
		// create the walker
		size(80,80);
		w = new walker();
		background(255);
	}

	void draw() {
		// call on walker
		w.step();
		w.display();
	}
	</script>
	
	<canvas></canvas>
</body>
</html>