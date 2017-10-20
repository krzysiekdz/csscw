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
	}

	body {margin: 0px;}
	
	.menu-wrap {
		position: relative;
		/*width: 500px;*/
		height: 324px;
		border: 1px solid black;
	}
	.menu {
		border: 1px solid black;
		position: fixed;
		left: 0;
		width: 100%;
		background-color: white;
	}
	.topbar {
		height: 100px;
		border: 1px solid black;
		padding: 5px;
		/*width: 100%;*/
	}
	.header {
		height: 200px;
		border: 1px solid black;
		padding: 5px;
		/*width: 100%;*/
	}
	.content { 
		/*  napisac wlasny komponent przewijalny */
		/*height: 200px;
		overflow: scroll;*/
		border: 1px solid black;
	}
	.hide {
		display: none;
		/*visibility: hidden;*/
	}
	.freeze {
		position: fixed;
		top: 100px;
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

	window.addEventListener('scroll', function(e) {
		if(e.pageY>=100) {
			// t.classList.add('hide');
			// h.classList.add('freeze');

		} else if (e.pageY<100) {
			// t.classList.remove('hide');
			// h.classList.remove('freeze');
		}
		console.log('scroll', c.offsetTop, window.pageYOffset);//e.pageY===window.pageYOfsset
	});

	// window.addEventListener('resize', function(e) {
	// 	console.log(window.innerWidth);
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