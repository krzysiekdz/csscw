<style>
	body, html {
		margin: 0px;
	}
	.parallax {
		position: relative;
		height: 500px;
		border: 1px solid black;
		background-color: #7c8284;
		overflow: hidden;
	}
	.partners {
		top: 0px;
		position: absolute;
		margin-left: 100px;
		margin-right: 100px;
		/*border: 1px solid black;*/
	}
	.partner {
		width: 200px;
		height: 150px;
		/*border: 1px solid black;*/
		display: inline-block;
		vertical-align: top;
	}
</style>

<div style="background-color: blue; height: 100px;">hello world</div>
<div class="parallax">
	<div class="partners" id="partners">
		<div>
			<div class="partner" ><img src="img/partnerzy/aluna.jpg" alt="obrazek" > </div>
			<div class="partner" ><img src="img/partnerzy/aluna.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/aluna.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/aluna.jpg" alt="obrazek" ></div>
		</div>
		<div>
			<div class="partner" ><img src="img/partnerzy/alutherm.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/alutherm.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/alutherm.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/alutherm.jpg" alt="obrazek" ></div>
		</div>
		<div>
			<div class="partner" ><img src="img/partnerzy/doram.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/doram.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/doram.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/doram.jpg" alt="obrazek" ></div>
		</div>
		<div>
			<div class="partner" ><img src="img/partnerzy/driftwood.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/driftwood.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/driftwood.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/driftwood.jpg" alt="obrazek" ></div>
		</div>
		<div>
			<div class="partner" ><img src="img/partnerzy/oltre.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/oltre.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/oltre.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/oltre.jpg" alt="obrazek" ></div>
		</div>

		<div>
			<div class="partner" ><img src="img/partnerzy/aluna.jpg" alt="obrazek" > </div>
			<div class="partner" ><img src="img/partnerzy/aluna.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/aluna.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/aluna.jpg" alt="obrazek" ></div>
		</div>
		<div>
			<div class="partner" ><img src="img/partnerzy/alutherm.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/alutherm.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/alutherm.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/alutherm.jpg" alt="obrazek" ></div>
		</div>
		<div>
			<div class="partner" ><img src="img/partnerzy/doram.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/doram.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/doram.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/doram.jpg" alt="obrazek" ></div>
		</div>
		<div>
			<div class="partner" ><img src="img/partnerzy/driftwood.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/driftwood.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/driftwood.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/driftwood.jpg" alt="obrazek" ></div>
		</div>
		<div>
			<div class="partner" ><img src="img/partnerzy/oltre.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/oltre.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/oltre.jpg" alt="obrazek" ></div>
			<div class="partner" ><img src="img/partnerzy/oltre.jpg" alt="obrazek" ></div>
		</div>
	</div>
</div>

<div style="height: 1000px; background-color: blue;">hello world<div>

<script>
	(function() {
		var p = document.getElementById('partners');
		var id = setInterval(frame, 15);
		var v=0;
		function frame() {
			v+=2;
			if(v >= 750) {
				v = 0;
				// clearInterval(id);
			}
			p.style.top = -v + 'px';
		}
	})();
</script>