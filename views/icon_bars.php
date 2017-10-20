
<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	.icon-bar a:link {
		color:green;
	}	
	.icon-bar a:visited {
		color:black;
	}	
	.icon-bar a:hover {
		color:red;
	}	
	.icon-bar a:active {
		color:blue;
	}	
	.my-star {
		border: 1px solid black;
	}
	.my-star:before {
		content: "\f100";
	}

	.battery.icon {
      color: #000;
      position: absolute;
      margin-left: 2px;
      margin-top: 6px;
      width: 13px;
      height: 7px;
      border-radius: 2px;
      border: solid 1px currentColor;
    }

    .battery.icon:before {
      content: '';
      position: absolute;
      right: -3px;
      top: 1px;
      width: 2px;
      height: 3px;
      border-radius: 0 2px 2px 0;
      border-top: solid 1px currentColor;
      border-right: solid 1px currentColor;
      border-bottom: solid 1px currentColor;
    }

    .battery.icon:after {
      content: '';
      position: absolute;
      left: 1px;
      top: 1px;
      width: 8px;
      height: 5px;
      background-color: currentColor;
    }

    .battery-container {
    	position: relative;
    	/*border: 1px solid black;*/
    }

    .battery2 {
    	position: absolute;
    	top: 0px;
    	/*left: 100px;*/
    	width: 5px;
    	height: 5px;
    	border-top: 3px solid black;
    	border-left: 3px solid black;
    	background-color: red;
    }
</style>

<div class="icon-bar">
	<a href="#1"><span class="my-star">abc</span></a>
	<a href="#1"><span class="my-star">abc</span></a>
	<a href="#1"><span class="my-star">abc</span></a>
	<a href="#1"><span class="my-star">abc</span></a>
	<p>abc</p>
</div>

<div class="icon-bar2">
	<a href="#1"><i>abc</i></a>
	<a href="#2"><i>abc</i></a>
	<a href="#3"><i>abc</i></a>
	<a href="#4"><i>abc</i></a>
</div>

<!-- <php for($i=0) ?> -->
<div class="battery icon"></div>
<!-- <div class="battery-container">
	<div class="battery2"></div>
</div> -->


<script></script>

<!-- http://www.entheosweb.com/tutorials/css/any_font.asp -->
<!-- https://www.w3schools.com/howto/howto_css_icon_bar.asp -->