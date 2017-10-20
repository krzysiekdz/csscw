<style>
	body {
		border: 1px  solid black;
		min-height: 500px;
	}
	.progress-bar {
		width: 100%;
		background-color: grey;
	}
	.bar {
		height: 20px;
		width: 20%;
		background-color: blue;
		color: white;
	}
</style>

<div class="progress-bar" >
	<div class="bar" id="bar1"></div>
</div>

<script>
	(function() {
		var bar = document.getElementById('bar1');
		var id = setInterval(frame, 50);
		var width=0;
		function frame() {
			width++;
			if(width >= 100) clearInterval(id);
			bar.style.width = width + '%';
			bar.innerHTML = width + '%';
		}
	})();
</script>

