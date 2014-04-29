
var id = 0;
var blue_values = ''; 
var red_values = ''; 
var green_values = ''; 
var contrast_values = ''; 
var line_values = ''; 
var space_values = ''; 
var tone_values = ''; 



$(document).ready(function(){

		$('.frames').bind('mouseleave', function(e) {
      if (id == 2) {
				changeFrame('duotone', this);
			}
		});

		$('.frames').bind('mouseenter', function(e) {
			changeFrame('', this);
		});

    $('.rgbframe').bind('mouseleave', function(e) {
      if (id == 1) {
        $(this).children().css("visibility","hidden");
      }
    });

    $('.rgbframe').bind('mouseenter', function(e) {
      if (id == 1) {
        $(this).children().css("visibility","visible");
      }
    });

		var changeFrame = function(prefix, elem) {
			var src = $(elem).attr('src');
			src = src.replace('rgbthumbs', 'thumbs');
			src = src.replace('duotonethumbs', 'thumbs');
			src = src.replace('thumbs', prefix+'thumbs');
			$(elem).attr('src', src);
		};

		var changeFrames = function(prefix) {
			$('.frames').each(function() {
				changeFrame(prefix, this);
			});
		};

    var rgbFrame = function() {
      var count = 0;
      $('.rgbframe').each(function() {
        var rgbString = "rgb(" + data[count].red + "," + data[count].green + "," +  data[count].blue + ")";
        console.log(rgbString);
        $(this).css("background-color",rgbString);
        count += 1;
      });

      $('.frames').css("visibility","hidden");
    };

		var loadRgbChart = function () {
			$('#blue_chart').html(blue_values);  
  			$('#red_chart').html(red_values); 
  			$('#green_chart').html(green_values);   

    		$('#blue_chart').sparkline( "html", {
      		width: "90%",
	    	height: 80,
    	  	lineWidth: 2,
      		lineColor: "#fff",
		    fillColor: "#0b73ae",
      		minSpotColor: "#aacf00",
      		maxSpotColor: "#0066ff",
      		spotRadius: 5,
      		highlightSpotColor: "#333",
      		highlightLineColor: "#666"
    		});

    		$('#red_chart').sparkline( "html", {
      		width: "90%",
	    	height: 80,
    	  	lineWidth: 2,
      		lineColor: "#fff",
		    fillColor: "#cc2a36",
      		minSpotColor: "#aacf00",
      		maxSpotColor: "#0066ff",
      		spotRadius: 5,
      		highlightSpotColor: "#333",
      		highlightLineColor: "#666"
    		});

    		$('#green_chart').sparkline( "html", {
      		width: "90%",
	    	height: 80,
    	  	lineWidth: 2,
      		lineColor: "#fff",
		    fillColor: "#599653",
      		minSpotColor: "#aacf00",
      		maxSpotColor: "#0066ff",
      		spotRadius: 5,
      		highlightSpotColor: "#333",
      		highlightLineColor: "#666"
    		});

    		$('#red_chart').prepend('<h2>Red Ratio Levels</h2>');
    		$('#green_chart').prepend('<h2>Green Ratio Levels</h2>');
    		$('#blue_chart').prepend('<h2>Blue Ratio Levels</h2>');
		};

		var loadDuotoneChart = function () {
			  $('#contrast_chart').html(contrast_values);  
  			$('#line_chart').html(line_values); 
  			$('#space_chart').html(space_values); 
  			$('#tone_chart').html(tone_values);   

  			$('#contrast_chart').sparkline( "html", {
      		width: "90%",
	    	height: 80,
    	  	lineWidth: 2,
      		lineColor: "#fff",
		    fillColor: "#000",
      		minSpotColor: "#aacf00",
      		maxSpotColor: "#0066ff",
      		spotRadius: 5,
      		highlightSpotColor: "#333",
      		highlightLineColor: "#666"
    		});

    		$('#line_chart').sparkline( "html", {
      		width: "90%",
	    	height: 80,
    	  	lineWidth: 2,
      		lineColor: "#000",
		    fillColor: "",
      		minSpotColor: "#aacf00",
      		maxSpotColor: "#0066ff",
      		spotRadius: 5,
      		highlightSpotColor: "#333",
      		highlightLineColor: "#666"
    		});

    		$('#space_chart').sparkline( "html", {
      		width: "90%",
	    	height: 80,
    	  	lineWidth: 2,
      		lineColor: "#737373",
		    fillColor: "#737373",
      		minSpotColor: "#aacf00",
      		maxSpotColor: "#0066ff",
      		spotRadius: 5,
      		highlightSpotColor: "#333",
      		highlightLineColor: "#666"
    		});

    		$('#tone_chart').sparkline( "html", {
      		width: "90%",
	    	height: 80,
    	  	lineWidth: 2,
      		lineColor: "#000",
		    fillColor: "#fff",
      		minSpotColor: "#aacf00",
      		maxSpotColor: "#0066ff",
      		spotRadius: 5,
      		highlightSpotColor: "#333",
      		highlightLineColor: "#666"
    		});

    		$('#contrast_chart').prepend('<h2>Contrast Levels</h2>');  
  			$('#line_chart').prepend('<h2>Line Levels</h2>'); 
  			$('#space_chart').prepend('<h2>Space Levels</h2>'); 
  			$('#tone_chart').prepend('<h2>Tone Levels</h2>');   
    	};






		$("#filmStrip").click(function(){
			id = 0;
			changeFrames('');

			loadRgbChart();
			loadDuotoneChart();

      $('.rgbframe').each(function() {
        $(this).children().css("visibility","visible");
      });
		});


		$("#rgb").click(function(){
			id = 1;
      rgbFrame();


			$('#contrast_chart').empty();  
  			$('#line_chart').empty();
  			$('#space_chart').empty();
  			$('#tone_chart').empty();
  			loadRgbChart();
  			
  		});


		$("#duotone").click(function(){
			id = 2;
			changeFrames('duotone');

			$('#blue_chart').empty();
  		$('#red_chart').empty(); 
  		$('#green_chart').empty();   

      $('.rgbframe').each(function() {
        $(this).children().css("visibility","visible");
      });

  			loadDuotoneChart();
		});

		// empty array
  
  		// loop through the existing data
  		for (var i=0; i < data.length; i++) {
    	// map the value for the color BLUE
    	blue_values += data[i].blue_ratio+',';
    	red_values += data[i].red_ratio+',';
    	green_values += data[i].green_ratio+',';
    	contrast_values += data[i].contrast+','; 
		  line_values += data[i].line+','; 
		  space_values += data[i].space+','; 
		  tone_values += data[i].tone+','; 
  		}

  		loadRgbChart();
  		loadDuotoneChart();
  

  
  		// create a line chart with some customized elements
	});