<style>

	@media screen and (max-width: 480px)  {
		.container {
			margin-left: 0px;
			margin-right: 0px;
		}
		.pcol {border: 1px solid black;}
		.pcol-xs-3 {
			width: 25%;
			display: inline-block;
		}
		.pcol-xs-4 {
			width: 33%;
			display: inline-block;
		}
		.pcol-xs-6 {
			width: 50%;
			display: inline-block;
		}
		.pcol-xs-12 {
			width: 100%;
			display: inline-block;
		}
		.topbar {
			height: 300px;
			border: 1px solid red;
			padding: 5px;
		}
	}

	@media screen and (max-width: 768px) and (min-width: 481px) {
		.container {
			margin-left: 0px;
			margin-right: 0px;
		}
		.pcol {border: 1px solid black;}
		.pcol-sm-3 {
			width: 25%;
			display: inline-block;
		}
		.pcol-sm-4 {
			width: 33%;
			display: inline-block;
		}
		.pcol-sm-6 {
			width: 50%;
			display: inline-block;
		}
		.pcol-sm-12 {
			width: 100%;
			display: inline-block;
		}
		.topbar {
			height: 250px;
			border: 1px solid blue;
			padding: 5px;
		}
	}

	@media screen and (max-width: 1000px) and (min-width: 769px) {
		.container {
			margin-left: 50px;
			margin-right: 50px;
		}
		.pcol {
			border: 1px solid black;
			margin: 0px;
		}
		.pcol-md-3 {
			width: 25%;
			display: inline-block;
		}
		.pcol-md-4 {
			width: 33%;
			display: inline-block;
		}
		.pcol-md-6 {
			width: 49.5%;
			display: inline-block;
		}
		.pcol-md-12 {
			width: 100%;
			display: inline-block;
		}
		.topbar {
			height: 200px;
			border: 1px solid green;
			padding: 5px;
		}
	}

	@media screen and (max-width: 1400px) and (min-width: 1001px) {
		.container {
			margin-left: 100px;
			margin-right: 100px;
		}
		.pcol {border: 1px solid black;}
		.pcol-lg-3 {
			width: 25%;
			display: inline-block;
		}
		.pcol-lg-4 {
			width: 33%;
			display: inline-block;
		}
		.pcol-lg-6 {
			width: 50%;
			display: inline-block;
		}
		.pcol-lg-12 {
			width: 100%;
			display: inline-block;
		}
		.topbar {
			height: 150px;
			border: 1px solid yellow;
			padding: 5px;
		}
	}

	@media screen and (min-width: 1401px) {
		.container {
			margin-left: 200px;
			margin-right: 200px;
		}
		.prow {
			/*display: none;*/
			/*text-indent: -100px;*/
		}
		.pcol {
			border: 1px solid black;
			margin: 0px;
			text-indent: 0px;
		}
		.pcol-xl-3 {
			width: 24.5%;
			display: inline-block;
		}
		.pcol-xl-4 {
			width: 33%;
			display: inline-block;
		}
		.pcol-xl-6 {
			width: 45%;
			display: inline-block;
		}
		.pcol-xl-12 {
			width: 100%;
			display: inline-block;
		}
		.topbar {
			height: 100px;
			border: 1px solid black;
			padding: 5px;
		}
	}

	body {margin: 0px;}
	
	.menu-wrap {
		position: relative;
		height: 324px;
		border: 1px solid black;
	}
	.menu{
		border: 1px solid black;
		background-color: white;
	}

	.menu.effect {
		position: fixed;
		width: 100%;
	}
	.topbar {
		padding: 5px;
		background-color: #aaaaaa;
	}
	.header {
		height: 200px;
		border: 1px solid black;
		padding: 5px;
		background-color: #eee;
		/*width: 100%;*/
	}
	.hide {
		display: none;
		/*visibility: hidden;*/
	}
	.freeze {
		position: fixed;
		/*top: 100px;*/
	}

	@keyframes anim_color {
		from {background-color: yellow;}
		to {background-color: red;}
	}

	@keyframes anim_go {
		from {top: 20px;}
		to {top: 0px;}
	}

	.animated {
		animation-name: anim_color;
		animation-duration: 4s;
		background-color: green;
	}

	.anim2 {
		animation-name: anim_go;
		animation-duration: 2s;
		/*animation-delay: 2s;*/
	}

	@keyframes a_effect {
		from {top: 20px;}
		to {top: 0px;}
	}

	.anim_effect {
		animation-name: a_effect;
		animation-duration: 1s;
		position: fixed;
		width: 100%;
		top: 0px;
	}

	.content { 
		/*  napisac wlasny komponent przewijalny */
		/*height: 200px;
		overflow: scroll;*/
		border: 1px solid black;
	}
	.content.effect {

	}
	.container {
		/*position: relative;*/
	}





	
</style>

<div class="page">
	
		<div class="menu-wrap">
			<div class="menu">
				<div class="topbar" id="topbar1">
					<div class="prow">
						<div class="pcol pcol-xl-3 pcol-lg-4 pcol-sm-12 pcol-xs-12 pcol-md-6">a</div>
						<div class="pcol pcol-xl-3 pcol-lg-4 pcol-sm-12 pcol-xs-12 pcol-md-6">topbar</div>
						<div class="pcol pcol-xl-3 pcol-lg-4 pcol-sm-12 pcol-xs-12 pcol-md-6">a</div>
						<div class="pcol pcol-xl-3 pcol-lg-4 pcol-sm-12 pcol-xs-12 pcol-md-6">a</div>
					</div>
				</div>
				<div class="header" id="header1">
					<div class="prow">
						<div class="pcol pcol-xl-3 pcol-lg-4 pcol-sm-12 pcol-xs-12 pcol-md-6">a</div>
						<div class="pcol pcol-xl-3 pcol-lg-4 pcol-sm-12 pcol-xs-12 pcol-md-6">header</div>
						<div class="pcol pcol-xl-3 pcol-lg-4 pcol-sm-12 pcol-xs-12 pcol-md-6">a</div>
						<div class="pcol pcol-xl-3 pcol-lg-4 pcol-sm-12 pcol-xs-12 pcol-md-6">a</div>
					</div>
				</div>
			</div>
		</div>

	<div class="container">
		<div class="content">
			<div style="width: 40px; height: 40px; border: 1px solid  black;" id="div_anim1"  ></div>
			<div style="position: relative; width: 80px; height: 80px; border: 1px solid  black;">
				<div style="position: fixed; width: 40px; height: 40px; border: 1px solid red; " ></div>
			</div>
			<img src="img/1.jpg" style="width: 800px;" >
			<?php for($i=0; $i<100; $i++) : ?>
				<p>content <?php echo $i; ?> </p>
			<?php endfor; ?>
		</div>
	</div>
</div>

<script>
	var t=document.getElementById('topbar1');
	var h=document.getElementById('header1');
	var p=document.getElementsByClassName('page')[0];
	var c=document.getElementsByClassName('content')[0];
	var container=document.getElementsByClassName('container')[0];
	var m=document.getElementsByClassName('menu')[0];
	var mw=document.getElementsByClassName('menu-wrap')[0];

	var prows=document.getElementsByClassName('prow');

	function removeEmptyTextNodes(rows) {
		for(var i=0; i < rows.length; i++) {
			var n=rows[i]['childNodes'];
			var to_rem=[];
			for(var j=0; j<n.length; j++) {
				if(n[j].nodeName==='#text') {
					to_rem.push(n[j]);
				}
			}
			for(j=0; j<to_rem.length; j++) {
				rows[i].removeChild(to_rem[j]);
			}
		}
	}

	removeEmptyTextNodes(prows);


	var div_anim1=document.getElementById('div_anim1');
	var div_state=0;
	div_anim1.addEventListener('click', function() {
		if(div_state==0) {
			div_anim1.classList.add('animated');
			div_state=1;
		} else {
			div_anim1.classList.remove('animated');
			div_state=0;
		}
	});

	window.addEventListener('scroll', function(e) {
		var limit = 100;
		console.log(h.offsetTop);
		if(e.pageY>=limit) {
			t.classList.add('hide');
			// m.classList.add('effect');
			m.classList.add('anim_effect');

		} else if (e.pageY<limit) {
			t.classList.remove('hide');
			// m.classList.remove('effect');
			m.classList.remove('anim_effect');
		}
		// console.log('scroll', c.offsetTop, window.pageYOffset);//e.pageY===window.pageYOfsset
	});

	function getScreenType() {
		var xs=405, sm=768, md=992, lg=1200;
		var size=window.innerWidth;
		if(size <= xs) return 'xs';
		else if (size <= sm) return 'sm';
		else if (size <= md) return 'md';
		else if (size <= lg) return 'lg';
		return 'xl';
	}

	// window.addEventListener('resize', function(e) {
	// 	console.log(getScreenType());
	// });

	//napisac wlasny komponent przewijalny
	// var docscroll=0;
	// c.addEventListener('scroll', function(e) {
	// 	console.log('doc scroll '+docscroll++, e);
	// });
	
	// t.addEventListener('click', function(e) {
	// 	console.log('topbar not capture click', e);
	// }, false);
	// document.addEventListener('click', function(e) {
	// 	console.log('document capture click', e);
	// }, true);
	// t.addEventListener('click', function(e) {
	// 	console.log('topbar capture click', e);
	// }, true);
	// p.addEventListener('click', function(e) {
	// 	console.log('page not capture click', e);
	// }, false);
	// p.addEventListener('click', function(e) {
	// 	console.log('page capture click', e);
	// }, true);
	// document.addEventListener('click', function(e) {
	// 	console.log('document not capture click', e);
	// }, false);
</script>