<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Emily Tang's Portfolio</title>
	<style>
		body {
			margin: 0; 
			background: #E6E6EE;
		}

		#sidebar { 
			height: 100%;
			position: fixed;
			width: 20%;
			overflow-y: auto;
			z-index: 1000;
			min-width: 180px;
			font-family: 'Source Sans Pro', sans-serif;
			background: #C1C1D6; 
			box-shadow: 3px 0px 3px #888888;
		}

		#titulo {
			margin-left: 8%; 
			font-size: 20px;
			font-family: 'Roboto', sans-serif;
			color: #454545;
		}

		.plist {
			font-size: 17px;
		}

		img {
			max-width: 90%; 
			margin-left: 5%; 
			margin-top: 10px;
		}

		#pbar {
			list-style: none;
			color: #454545;
		}

		a {
			text-decoration: none; 
			color: #FFFFFF;
		}

		a:active {
			color: #A6A6A6;
		}

		.contenthead {
			margin-right: 5%;
		}

		.contentp {
			margin-right: 3%; 
			margin-left: 3%;
		}

		#contentbottom {
			margin-bottom: 5%;
		}

		#page-content {
			float: right;
			z-index: -1;
		  	max-width: 80%;
		  	text-align: right;
		  	padding-right: 0;
			height: 100%;
			font-family: 'Source Sans Pro', sans-serif;
			color: #454545;
		}
	</style>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic' rel='stylesheet' type='text/css'>
</head>

<body>
	<div id="sidebar">
		<img src="selfpic.jpg" alt="picture of me">
		<h1 id="titulo">Emily Tang's Projects</h1>
		<ul id="pbar">
			<li><p class="plist">p2</p><a href = "http://p2.emilytang.me">view</a> // <a href = "https://github.com/emitang/p2">github</a></li><br>
			<li><p class="plist">p3</p><a href = "/">view</a> // <a href = "/">github</a></li><br>
			<li><p class="plist">p4</p><a href = "/">view</a> // <a href = "/">github</a></li><br>
		</ul>
	</div>

	<div id="page-content">
		<h1 class="contenthead">Description</h1>
		<p class="contentp">My name is Emily Tang and I'm approximately a second-year MIT student. I'm looking to major in Computer Science and either minor or also major in Linguistics. I was born in Virginia, but I've lived in Plano, Texas (a suburb of Dallas) for most of my life.</p>
		<h1 class="contenthead">Course</h1>
		<p class="contentp">I'm taking this course because I've studied lots of front-end coding for web development, but I haven't ever really looked closely at back-end, so I'm interested in learning more.</p>
		<h1 class="contenthead">Programming</h1>
		<p class="contentp">My previous programming experience includes knowledge of Java, some of the basics of Python, and experience with mainly front-end web development</p>
		<h1 class="contenthead">Platform</h1>
		<p class="contentp">I'm working on a Macbook Pro 13" from 2012 running OSX Mavericks 10.9.2</p>
		<h1 class="contenthead">Other</h1>
		<p class="contentp" id="contentbottom">I'm currently on a medical leave from MIT and taking some classes to get back on track for readmission.</p>
	</div>
</body>
</html>