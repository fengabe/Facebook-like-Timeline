<html>
<head>

<title> Timeline </title>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/blocksit.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() {



   $('#timelineblock').BlocksIt({
	numOfCol: 2,
	offsetX: 0,
	offsetY: 5,
	blockElement: 'div'
   });

// generate arrows according to the position generated bu BlocksIt.js
Arrows();
   

// This is a small hack to replace the arrows when the block is hovered
$(".block").hover(function() {
	var posLeft = $(this).css("left");
	
	if ( posLeft == "0px" ) {
				$(this).children("span#edge").addClass("redge_h");			
			} else 	{
				$(this).children("span#edge").addClass("ledge_h");			
			} 	
	}, function () {
	var posLeft = $(this).css("left");

		if ( posLeft == "0px" ) {
					$(this).children("span#edge").removeClass("redge_h");			
				} else 	{
					$(this).children("span#edge").removeClass("ledge_h");			
				} 
  	});

// function to place the arrows
function Arrows()
	{ 
		var all_blocks = $('#timelineblock').find('.block');
		
		$.each(all_blocks, function(i, obj){
			var posLeft = $(obj).css("left");

			if ( posLeft == "0px" ) {
				$(obj).css("margin", "0px 0px 20px 65px").css("width", "340px").css("float", "left");
				$(obj).children("span#edge").addClass("redge");			
			} else 	{
				$(obj).css("margin", "0px 0px 20px 18px").css("float","right").css("width", "340px").css("clear","both");
				$(obj).children("span#edge").addClass("ledge");			
			} 		
				
		});
	}
});
</script>

</head>

<body>

<div class = "maincontainer borders">

	<div class = "topcontainer"></div> 

	<div class = "timelinecontainer">
		
		<div class = "timeline"></div>

	<div id = "timelineblock">
	
		<div class = "block">
			<span id="edge"></span>
			<p> This is a test. First post.</p>
		</div>

		<div class = "block">
			<span id="edge"></span>
			<img src = "img1.jpg" class = "pic" />
			<p> Blimey Messi's Hat-trick out of this world. </p>
		</div>


		<div class = "block">
			<span id="edge"></span>
			<p>How boring must it be to constantly try and come up with new stories regarding a certain striker who is at the Euros, and wont say anything.</p>
			</div>


		<div class = "block">
			<span id="edge"></span>
			<img src = "img2.jpg" class = "pic" />

			<p> Thierry Henry - The Legend</p>
		</div>

		<div class = "block">
			<span id="edge"></span>
			<p>Pretty sure the Gooner Family is the best one on Twitter.</p>
			</div>

		<div class = "block">
			<span id="edge"></span>
			<p>Wenger commentating on all French games for French TV. Will be spending plenty of time with M'Vila and Girouds agents in hospitality box.</p>
			</div>
			
			<div class = "block">
			<span id="edge"></span>
			<iframe class = "pic" src="http://www.youtube.com/embed/S2BSm4YZT-E" frameborder="0" allowfullscreen></iframe>
			<p>Wonderful video.</p>
		</div>

		
		<div class = "block">
			<span id="edge"></span>
			<p>0 - Portugal have failed to win a game in 2012 : 2 draws & 2 losses, and only 1 goal scored. Breakdown.</p>
		</div>
		
		<div class = "block">
			<span id="edge"></span>
			<iframe class = "pic" src="http://www.youtube.com/embed/T9kF9RdiIrk" frameborder="0" allowfullscreen></iframe>
			<p>Messi's 3rd goal.</p>
		</div>
		
	<div class = "block">
			<span id="edge"></span>
			<p>Hmmm, I see the little Russian only seems to work in Europe. Can we not purchase some kind of plug converter for him?</p>
			</div>


	</div>
	
	</div> 


</div>

</body>

</html>
