<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{-- <title>rl-carousel</title> --}}
	<link href="https://fonts.googleapis.com/css?family=Pacifico|Source+Sans+Pro:200,300,400,700" rel="stylesheet">
</head>
<body>
  <style media="screen">

* {
box-sizing: border-box;
}
html, body {
margin: 0;
padding: 0;
}
html {
background-color: rgb(255, 255, 255);
}

/**
* Carousel container
*/

.v-centered {
margin-top: 50px;
display: flex;
justify-content: center;
align-items: center;
width: 100vw;
height: 100vh;
}
.carousel {
position: relative;
overflow: hidden;
width: 930px;
}
.roll {
position: relative;
white-space: nowrap;
font-size: 0;
left:  0px;
}
.project {
width: 300px;
height: 350px;
background-color: #FFF;
-webkit-box-shadow: 5px 5px 5px 1px rgba(0,0,0,0.5);
  -moz-box-shadow: 5px 5px 5px 1px rgba(0,0,0,0.5);
box-shadow: 5px 5px 5px 1px rgba(0,0,0,0.5);
text-align: center;
margin: 0 10px 15px 0;
display: inline-block;
font-size: 18px;
}
.project img {
margin-top: 10px;
width:  280px;
height: 200px;
}
.project p {
margin: 10px;
font-family: 'Source Sans Pro', sans-serif;
font-weight: 200;
text-align: left;
white-space: normal;
}

.sections {
text-align: center;
color: #b4fdc0;
font-size: 12px;
}

.sections i {
margin: 0 2px;
cursor: pointer;
}

.navigation {
position:  absolute;
border: none;
padding: 0;
background-color: rgba(35,35,35,0.8);
height: 34px;
width: 34px;
color:  #FFF;
font-size: 20px;
text-align: center;
top: 176px;
z-index: 10;
}
.navigation:visited  {
text-decoration: none;
}
.navigation-hover {
height: 50px;
width: 50px;
top:  168px;
}
.navigation:active {
text-decoration: none;
}
.navigation:focus {
outline: none;
}
.navigation:first-of-type {
left: 0px;
}
.navigation:last-of-type {
right: 10px;
}


@media screen and (max-width: 950px) {
  .carousel {
  position: relative;
  overflow: hidden;
  width: 620px;
}
}
@media screen and (max-width: 655px) {
  .carousel {
  position: relative;
  overflow: hidden;
  width: 310px;
}
}
  </style>
	<div class="v-centered">
		<div class="carousel">
			<div class="roll">
				<div class="project">
					<img src="http://ibrahimjabbari.com/english/images/1.jpg" alt="Project img 1">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacinia in mi a rhoncus. Suspendisse maximus leo ac lorem interdum volutpat.</p>
				</div>
				<div class="project">
					<img src="http://ibrahimjabbari.com/english/images/2.jpg" alt="Project img 2">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacinia in mi a rhoncus. Suspendisse maximus leo ac lorem interdum volutpat.</p>
				</div>
				<div class="project">
					<img src="http://ibrahimjabbari.com/english/images/3.jpg" alt="Project img 3">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacinia in mi a rhoncus. Suspendisse maximus leo ac lorem interdum volutpat.</p>
				</div>
				<div class="project">
					<img src="http://ibrahimjabbari.com/english/images/4.jpg" alt="Project img 4">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacinia in mi a rhoncus. Suspendisse maximus leo ac lorem interdum volutpat.</p>
				</div>
				<div class="project">
					<img src="http://ibrahimjabbari.com/english/images/5.jpg" alt="Project img 5">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacinia in mi a rhoncus. Suspendisse maximus leo ac lorem interdum volutpat.</p>
				</div>
				<div class="project">
					<img src="http://ibrahimjabbari.com/english/images/6.jpg" alt="Project img 6">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacinia in mi a rhoncus. Suspendisse maximus leo ac lorem interdum volutpat.</p>
				</div>
				<div class="project">
					<img src="http://ibrahimjabbari.com/english/images/7.jpg" alt="Project img 7">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacinia in mi a rhoncus. Suspendisse maximus leo ac lorem interdum volutpat.</p>
				</div>
				<div class="project">
					<img src="http://ibrahimjabbari.com/english/images/8.jpg" alt="Project img 8">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacinia in mi a rhoncus. Suspendisse maximus leo ac lorem interdum volutpat.</p>
				</div>
				<div class="project">
					<img src="http://ibrahimjabbari.com/english/images/9.jpg" alt="Project img 9">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacinia in mi a rhoncus. Suspendisse maximus leo ac lorem interdum volutpat.</p>
				</div>
			</div>
			<div class="sections">
			</div>
			<button class="navigation" id="nav-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
			<button class="navigation" id="nav-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
		</div>
	</div>
<!-- Load scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/js/Carousel.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>
