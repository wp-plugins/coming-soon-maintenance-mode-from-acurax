<?php
$acx_csma_meta_title =get_option('acx_csma_meta_title');
$acx_csma_meta_description=get_option('acx_csma_meta_description');
$acx_csma_meta_keywords=get_option('acx_csma_meta_keywords');
$acx_csma_favicon = get_option('acx_csma_favicon');
$acx_csma_appearence_array_4=get_option('acx_csma_appearence_array');
if(is_serialized($acx_csma_appearence_array_4 ))
{
	$acx_csma_appearence_array_4 = unserialize($acx_csma_appearence_array_4); 
}
$acx_csma_start_date_time=get_option('acx_csma_start_date_time');
$acx_csma_date_time=get_option('acx_csma_date_time');
$acx_csma_current_date_time = date("Y/m/d H:i");
$acx_csma_current_date_time1 = explode(" ",$acx_csma_current_date_time);
$acx_csma_current_date = explode("/",$acx_csma_current_date_time1[0]);
$acx_csma_current_time = explode(":",$acx_csma_current_date_time1[1]);
$acx_csma_timestamp = mktime($acx_csma_current_time[0],$acx_csma_current_time[1],0,$acx_csma_current_date[1],$acx_csma_current_date[2],$acx_csma_current_date[0]);//mktime(hour,minute,second,month,day,year); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
if($acx_csma_meta_title!="")
{
?>
<title><?php echo $acx_csma_meta_title;?></title>
<?php
}
if($acx_csma_meta_description!="")
{
?>
<meta name="description" content="<?php echo $acx_csma_meta_description;?>">
<?php
}
if($acx_csma_meta_keywords!="")
{
?>
<meta name="keywords" content="<?php echo $acx_csma_meta_keywords;?>">
<?php
}
?>
<link href="<?php echo plugins_url('style.css', __FILE__);?>" rel="stylesheet" type="text/css" />
<link rel="icon" href="<?php echo $acx_csma_favicon;?>"  type="image/png">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>

<body style="background:url('<?php echo $acx_csma_appearence_array_4['4']['acx_csma_background_image4']; ?>')no-repeat fixed center center transparent; background-size:cover; ">

<div class="wrapper"> 
		<div class="canvas1000"> 
			<div id="header"><img src="<?php echo $acx_csma_appearence_array_4['4']['acx_csma_logo4'];?>" alt="Logo"></div><!-- header -->	
			<div class="inline_block mg_top" style="background: none repeat scroll 0 0 <?php echo $acx_csma_appearence_array_4['4']['acx_csma_inside_bg_color4'];?>"> 
				<h2 style="color:<?php echo $acx_csma_appearence_array_4['4']['acx_csma_title_color4'];?>"><?php echo $acx_csma_appearence_array_4['4']['acx_csma_title4'];?></h2>
				
				<?php
				$acx_csma_custom_html_top_temp4 = base64_decode($acx_csma_appearence_array_4['4']['acx_csma_custom_html_top_temp4']);
				if($acx_csma_custom_html_top_temp4 != "") { ?>
				<div class="acx_csma_content_div acx_csma_top acx_csma_top_4">
				<?php echo $acx_csma_custom_html_top_temp4; ?>
				</div>
				<?php } ?>
				
				<?php if($acx_csma_appearence_array_4['4']['acx_csma_show_timer4']==1)
				{?>
				<div class="inline_block timer_holder">
					<div class="timer_box days"> 
						<p>Weeks</p>
						<ul>
							<li id="weeks_0" style="color:<?php echo $acx_csma_appearence_array_4['4']['acx_csma_timer_iptext_color4'];?>">0</li>
							<li id="weeks_1" style="color:<?php echo $acx_csma_appearence_array_4['4']['acx_csma_timer_iptext_color4'];?>">0</li>
						</ul>
					</div><!-- timer_box -->					
					<div class="timer_box days"> 
						<p>Days</p>
						<ul>
							<li id="days_0" style="color:<?php echo $acx_csma_appearence_array_4['4']['acx_csma_timer_iptext_color4'];?>">0</li>
							<li id="days_1" style="color:<?php echo $acx_csma_appearence_array_4['4']['acx_csma_timer_iptext_color4'];?>">0</li>
							<li id="days_2" style="color:<?php echo $acx_csma_appearence_array_4['4']['acx_csma_timer_iptext_color4'];?>">0</li>
						</ul>
					</div><!-- timer_box -->
					<div class="timer_box"> 
						<p>Hours</p>
						<ul>
							<li id="hours_0" style="color:<?php echo $acx_csma_appearence_array_4['4']['acx_csma_timer_iptext_color4'];?>">0</li>
							<li id="hours_1" style="color:<?php echo $acx_csma_appearence_array_4['4']['acx_csma_timer_iptext_color4'];?>">0</li>
						</ul>
					</div><!-- timer_box -->	
					<div class="timer_box days"> 
						<p>Minutes</p>
						<ul>
							<li id="minutes_0" style="color:<?php echo $acx_csma_appearence_array_4['4']['acx_csma_timer_iptext_color4'];?>">0</li>
							<li id="minutes_1" style="color:<?php echo $acx_csma_appearence_array_4['4']['acx_csma_timer_iptext_color4'];?>">0</li>
						</ul>
					</div><!-- timer_box -->
					<div class="timer_box last_one"> 
						<p>Seconds</p>
						<ul>
							<li id="seconds_0" style="color:<?php echo $acx_csma_appearence_array_4['4']['acx_csma_timer_iptext_color4'];?>">0</li>
							<li id="seconds_1" style="color:<?php echo $acx_csma_appearence_array_4['4']['acx_csma_timer_iptext_color4'];?>">0</li>
						</ul>
					</div><!-- timer_box -->					
				</div><!-- timer_holder -->
				<?php }?>
				<?php if($acx_csma_appearence_array_4['4']['acx_csma_show_progressbar4']== 1)
				{?>
				<div class="pre_loader" style="border: 1px solid <?php echo $acx_csma_appearence_array_4['4']['acx_csma_progress_bar_color4'];?>"> 	
				<div class="pre_loader_inside" id="pre_loader_inside" style="background:green;position:absolute;top: 0; left: 0; width:0%; height:inherit;">
				</div><!-- pre_loader_inside -->
				<div class="pre_loader_text" id="pre_loader_text" style=" z-index:10px;top: 0; left: 0; width: 100%; height: 100%; color: black; font-weight: bold; text-align: center;position:absolute;">0%</div><!-- pre_loader_text -->
				</div><!-- pre_loader -->
				<?php }?>
				
				<?php
				$acx_csma_custom_html_bottom_temp4 = base64_decode($acx_csma_appearence_array_4['4']['acx_csma_custom_html_bottom_temp4']);
				if($acx_csma_custom_html_bottom_temp4 != "") { ?>
				<div class="acx_csma_content_div acx_csma_bottom acx_csma_bottom_4">
				<?php echo $acx_csma_custom_html_bottom_temp4; ?>
				</div>
				<?php } ?>
				
				
			
				<div class="scmi"> 
				<ul>
					<?php if($acx_csma_appearence_array_4['4']['acx_csma_fb_link4']!="")
					{
					?>
					<li><a href="<?php echo $acx_csma_appearence_array_4['4']['acx_csma_fb_link4'];?>"><img src="<?php echo plugins_url('images/facebook.png', __FILE__);?>" alt="Logo"></a></li>
					<?php
					}
					if($acx_csma_appearence_array_4['4']['acx_csma_twitter_link4']!="")
					{
					?>
					<li><a href="<?php echo $acx_csma_appearence_array_4['4']['acx_csma_twitter_link4'];?>"><img src="<?php echo plugins_url('images/twitter.png', __FILE__);?>" alt="Logo"></a></li>
					<?php
					}
					if($acx_csma_appearence_array_4['4']['acx_csma_linkedin_link4']!="")
					{
					?>
					<li><a href="<?php echo $acx_csma_appearence_array_4['4']['acx_csma_linkedin_link4'];?>"><img src="<?php echo plugins_url('images/linkedin.png', __FILE__);?>" alt="Logo"></a></li>
				<?php
				}?>
				</ul>
				</div><!-- scmi -->				
			</div><!-- inline_block -->
		</div><!-- canvas1000 -->
	</div><!-- wrapper -->

<script>
<?php 
if($acx_csma_appearence_array_4['4']['acx_csma_show_progressbar4']==1)
{
	if($acx_csma_timestamp < $acx_csma_date_time)
	{?>
   var startTime = <?php echo $acx_csma_start_date_time;?>;

 var maxTime = <?php echo $acx_csma_date_time;?>;

  var timeoutVal = Math.floor(maxTime/100000);
  
  showProgressUpdate();
   function updateProgress(percentage) {
	
    jQuery('#pre_loader_inside').css("width", percentage + "%");
    jQuery('#pre_loader_text').text(percentage + "%");
}
function showProgressUpdate() {
    var d1 = new Date();
	var current=Math.floor(d1.getTime()/ 1000);
	var perc = Math.round(((current-startTime) / (maxTime-startTime)) * 100);
		
      if (perc <= 100) {
	 
       updateProgress(perc);
       setTimeout(showProgressUpdate, timeoutVal);
      }
}
<?php }
}
 if($acx_csma_appearence_array_4['4']['acx_csma_show_timer4']==1)
 {
	 if($acx_csma_timestamp < $acx_csma_date_time)
	{?>
var start_date = <?php echo $acx_csma_start_date_time;?>;
var end_date =<?php echo $acx_csma_date_time;?>;
var d1 = new Date();
var current=Math.floor(d1.getTime()/ 1000);
updateCounter();
function updateCounter()
{
	current = current+1;
	seconds = (end_date - current);

	weeks=Math.floor(seconds / (60 *60 * 24*7)); 
	seconds -= weeks * 60 * 60 * 24* 7; 
	
	days = Math.floor(seconds / (60 * 60 * 24)); 
	seconds -= days * 60 * 60 * 24; 
	
	hours = Math.floor(seconds / (60 * 60));
	seconds -= hours * 60 * 60;
	
	minutes = Math.floor(seconds / 60);
	seconds -= minutes * 60;

	for(var k=0;k< seconds.toString().length;k++)
	{
		var res_sec = seconds.toString().charAt(k);
		if(seconds.toString().length == 1)
	   {
			a=k+1;
			document.getElementById("seconds_"+a).innerHTML = res_sec;
	   }
	   else if(seconds.toString().length == 2)
	   {
			document.getElementById("seconds_"+k).innerHTML = res_sec;
	   }
	}

	for(var i=0;i< minutes.toString().length;i++)
	{
		var res_min = minutes.toString().charAt(i);
		if(minutes.toString().length == 1)
	   {
			b=i+1;
			document.getElementById("minutes_"+b).innerHTML = res_min;
	   }
	   else if(minutes.toString().length == 2)
	   {
			document.getElementById("minutes_"+i).innerHTML = res_min;
	   }
	}

	for(var j=0;j< hours.toString().length;j++)
	{
		var res_hour = hours.toString().charAt(j);
		if(hours.toString().length == 1)
	   {
		c=j+1;
		document.getElementById("hours_"+c).innerHTML = res_hour;
	   }
	   else if(hours.toString().length == 2)
	   {
		document.getElementById("hours_"+j).innerHTML = res_hour;
	   }
	}
	
	for(var l=0;l< days.toString().length;l++)
	{
		var res_day = days.toString().charAt(l);
	   if(days.toString().length == 1)
	   {
	   d=l+2;
	   document.getElementById("days_"+d).innerHTML = res_day;
	   }
	   else if(days.toString().length == 2)
	   {
	   d=l+1;
	   document.getElementById("days_"+d).innerHTML = res_day;
	   }
		else if(days.toString().length == 3)
	   {
	   document.getElementById("days_"+l).innerHTML = res_day;
	   } 
	}
	for(var m=0;m< weeks.toString().length;m++)
	{
		var res_week = weeks.toString().charAt(m);
		if(weeks.toString().length == 1)
	   {
		n=m+1;
		document.getElementById("weeks_"+n).innerHTML = res_week;
	   }
	   else if(weeks.toString().length == 2)
	   {
		document.getElementById("weeks_"+m).innerHTML = res_week;
	   }
	}
	setTimeout( function(){ 
    updateCounter(); 
		}, 1000 );
  }
	<?php }
	
}?>
</script>
</body>
</html>
