<?php
$acx_csma_meta_title =get_option('acx_csma_meta_title');
$acx_csma_meta_description=get_option('acx_csma_meta_description');
$acx_csma_meta_keywords=get_option('acx_csma_meta_keywords');
$acx_csma_favicon = get_option('acx_csma_favicon');
$acx_csma_appearence_array_3=get_option('acx_csma_appearence_array');
if(is_serialized($acx_csma_appearence_array_3 ))
{
	$acx_csma_appearence_array_3 = unserialize($acx_csma_appearence_array_3); 
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
<style>
.submit:hover
{
	color:<?php echo $acx_csma_appearence_array_3['3']['acx_csma_subscribe_btn_hover_color3'];?>;
	background:<?php echo $acx_csma_appearence_array_3['3']['acx_csma_subscribe_btn_hover_bgcolor3'];?>;
}
.submit
{
	background:<?php echo $acx_csma_appearence_array_3['3']['acx_csma_subscribe_btn_color3'];?>;
	color:<?php echo $acx_csma_appearence_array_3['3']['acx_csma_subscribe_btn_text_color3'];?>;
}
</style>
<link href="<?php echo plugins_url('style.css', __FILE__);?>" rel="stylesheet" type="text/css" />
<link rel="icon" href="<?php echo $acx_csma_favicon;?>"  type="image/png">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>
<body>
	<div class="wrapper"> 
		<div class="canvas960"> 
			<div class="inline_block"> 
				<div class="inline_block form_holder"> 
					<div class="header"><img src="<?php echo $acx_csma_appearence_array_3['3']['acx_csma_logo3'];?>" alt="Logo"></div><!-- header  -->
					<div class="form"> 
					<h2 style="color:<?php echo $acx_csma_appearence_array_3['3']['acx_csma_title_color3'];?>"><span style="font-size:74px; color:<?php echo $acx_csma_appearence_array_3['3']['acx_csma_subtitle_color3'];?>"><strong><?php echo $acx_csma_appearence_array_3['3']['acx_csma_title3'];?></strong></span><br><?php echo $acx_csma_appearence_array_3['3']['acx_csma_subtitle_text3'];?></h2>
					<h4 style="color:<?php echo $acx_csma_appearence_array_3['3']['acx_csma_subscribe_title_color3'];?>"><?php echo $acx_csma_appearence_array_3['3']['acx_csma_subscribe_title3'];?></h4>
					<form name="acx_csma_form" method="post" action="<?php echo str_replace( '%7E', '~',$_SERVER['REQUEST_URI']);?>"> 
					<div id="acx_csma_success"  name="acx_csma_success" style="display:none;color:white;" ><?php echo $acx_csma_appearence_array_3['3']['acx_csma_subscribe_success3'];?></div>
					<div id="acx_csma_invalid" name="acx_csma_invalid" style="display:none;color:white;" ><?php echo $acx_csma_appearence_array_3['3']['acx_csma_subscribe_invalid3'];?></div>
					<div id="acx_csma_error" style="color:white;"></div>
					<input type="text" id="acx_csma_name_hidden" name="acx_csma_name_hidden" value="" placeholder="Enter Your Name Here"/>
					<input type="hidden" id="acx_csma_email" name="email" placeholder="Get Notified (Email)"><br/> 
					<input type="button" value="NEXT" id="acx_csma_submit" onclick="acx_csma_validate_email();"  class="submit">
					</form>
					</div><!-- form -->
					<div class="form_footer"> </div><!-- form_footer -->
				</div><!-- form_holder -->		
				<div class="inline_block timer_holder"> 
				<div class="scmi"> 
				<ul>
				
					<li>
					<?php if($acx_csma_appearence_array_3['3']['acx_csma_fb_link3']!="" || $acx_csma_appearence_array_3['3']['acx_csma_twitter_link3']!="" || $acx_csma_appearence_array_3['3']['acx_csma_linkedin_link3']!="")
					{ ?>
					<p style="color:<?php echo $acx_csma_appearence_array_3['3']['acx_csma_social_link_title_color3'];?>"><?php echo $acx_csma_appearence_array_3['3']['acx_csma_social_link_title3'];?></p>
					<?php } ?>
					</li>
					<?php 
					
					if($acx_csma_appearence_array_3['3']['acx_csma_fb_link3']!="")
					{
					?>
					<li><a href="<?php echo $acx_csma_appearence_array_3['3']['acx_csma_fb_link3'];?>"><img src="<?php echo plugins_url('images/facebook.png', __FILE__);?>" alt="Logo"></a></li>
					<?php
					}
					if($acx_csma_appearence_array_3['3']['acx_csma_twitter_link3']!="")
					{
					?>
					<li><a href="<?php echo $acx_csma_appearence_array_3['3']['acx_csma_twitter_link3'];?>"><img src="<?php echo plugins_url('images/twitter.png', __FILE__);?>" alt="Logo"></a></li>
					<?php
					}
					if($acx_csma_appearence_array_3['3']['acx_csma_linkedin_link3']!="")
					{
					?>
					<li><a href="<?php echo $acx_csma_appearence_array_3['3']['acx_csma_linkedin_link3'];?>"><img src="<?php echo plugins_url('images/linkedin.png', __FILE__);?>" alt="Logo"></a></li>
					<?php
					}
				
				?>
					
				</ul>
				</div><!-- scmi -->
					<h3 style="color:<?php echo $acx_csma_appearence_array_3['3']['acx_csma_inside_title_color3'];?>"><?php echo $acx_csma_appearence_array_3['3']['acx_csma_inside_title3'];?></h3>
					<div class="timer_box days"> 
						<ul>
							<li id="days" style="color:<?php echo $acx_csma_appearence_array_3['3']['acx_csma_timer_iptext_color3'];?>">000 </li><li class="day_text" style="color:<?php echo $acx_csma_appearence_array_3['3']['acx_csma_timer_head_color3'];?>">Days</li>
						</ul>
					</div><!-- timer_box -->
					<div class="timer_box"> 
						<ul style="color:<?php echo $acx_csma_appearence_array_3['3']['acx_csma_timer_iptext_color3'];?>">
							<li id="hours_0">0</li>
							<li id="hours_1">0</li>
						</ul>
						<p style="color:<?php echo $acx_csma_appearence_array_3['3']['acx_csma_timer_head_color3'];?>">Hours</p>
					</div><!-- timer_box -->	
					<div class="timer_box"> 
						<ul style="color:<?php echo $acx_csma_appearence_array_3['3']['acx_csma_timer_iptext_color3'];?>">
							<li id="minutes_0">0</li>
							<li id="minutes_1">0</li>
						</ul>
						<p style="color:<?php echo $acx_csma_appearence_array_3['3']['acx_csma_timer_head_color3'];?>">Minutes</p>						
					</div><!-- timer_box -->
					<div class="timer_box last_one"> 
						<ul style="color:<?php echo $acx_csma_appearence_array_3['3']['acx_csma_timer_iptext_color3'];?>">
							<li id="seconds_0">0</li>
							<li id="seconds_1">0</li>
						</ul>
						<p style="color:<?php echo $acx_csma_appearence_array_3['3']['acx_csma_timer_head_color3'];?>">Seconds</p>						
					</div><!-- timer_box -->	

				<div class="inline_block text_box" style="background: rgb(254, 126, 1) none repeat scroll 0% 0%; box-sizing: border-box; padding: 12px; border-bottom-right-radius: 6px; border-bottom-left-radius: 6px;"> 
				
				<?php
				$acx_csma_custom_html_top_temp3 = base64_decode($acx_csma_appearence_array_3['3']['acx_csma_custom_html_top_temp3']);
				if($acx_csma_custom_html_top_temp3 != "") { ?>
				<div class="acx_csma_content_div acx_csma_top acx_csma_top_3">
				<?php echo $acx_csma_custom_html_top_temp3; ?>
				</div>
				<?php } ?>
					<h5 style="color:<?php echo $acx_csma_appearence_array_3['3']['acx_csma_desc_text_color3'];?>"><?php echo $acx_csma_appearence_array_3['3']['acx_csma_desc_title3'];?></h5>
					<p><?php echo base64_decode($acx_csma_appearence_array_3['3']['acx_csma_desc_subtitle3']);?></p>
				</div><!-- inline_block -->	
				
			<div class="footer"> <p style="color:<?php echo $acx_csma_appearence_array_3['3']['acx_csma_footer_color3'];?>"><?php echo $acx_csma_appearence_array_3['3']['acx_csma_footer_text3'];?></p> </div><!-- footer -->	
					
				</div><!-- timer_holder -->					
		</div><!-- inline_block -->

		</div><!-- canvas960 -->
	</div><!-- wrapper -->
<script type="text/javascript">
var acx_csma_form_status=1;
function acx_csma_validate_email()
{
	var acx_csma_name_hidden=document.getElementById('acx_csma_name_hidden').value;
	if(acx_csma_form_status== 1)
	{
		if(acx_csma_name_hidden=="")
		{
			alert('ERROR : Please Enter Your Name !');
			acx_csma_form_status=1;
			return false;
		}
		else{
		document.getElementById('acx_csma_name_hidden').type = 'hidden';
		document.getElementById('acx_csma_email').type = 'email';
		
		document.getElementById('acx_csma_submit').value="<?php echo $acx_csma_appearence_array_3['3']['acx_csma_subscribe_btn_text3'];?>";
		acx_csma_form_status=2;
		return false;
		}
	}
	else if(acx_csma_form_status==2)
	{
		var acx_csma_email = document.getElementById('acx_csma_email').value;
		var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		if (acx_csma_email=='') 
		{
			alert('Please Enter Email Address !');
			return false;
		}
		else if (!expr.test(acx_csma_email)) 
		{
			document.getElementById('acx_csma_email').value="";
			document.getElementById('acx_csma_name_hidden').value="";
			jQuery("#acx_csma_email").hide();
			jQuery("#acx_csma_submit").hide();
			jQuery("#acx_csma_invalid").show();
			return false;
		}
		else 
		{
		var timestamp = "<?php echo time();?>";
		var ip="<?php  echo $_SERVER['REMOTE_ADDR'];?>";
		var acx_csma_ajaxurl ="<?php echo admin_url('admin-ajax.php'); ?>";
		var order = 'name='+acx_csma_name_hidden+'&email='+acx_csma_email+'&ip='+ip+'&timestamp='+timestamp+'&action=acx_csma_subscribe_email'; 
			jQuery.post(acx_csma_ajaxurl, order, function(theResponse)
			{
			if(theResponse == "success")
				{
				document.getElementById('acx_csma_email').value="";
				document.getElementById('acx_csma_name_hidden').value="";
				jQuery("#acx_csma_email").hide();
				jQuery("#acx_csma_submit").hide();
				jQuery("#acx_csma_success").show();
				}  
				else{
					
				document.getElementById('acx_csma_email').value="";
				document.getElementById('acx_csma_name_hidden').value="";
				jQuery("#acx_csma_email").hide();
				jQuery("#acx_csma_submit").hide();
				jQuery("#acx_csma_error").html("Email Already Exists !!");
				}  
			});
		}
	}
}
<?php 
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
	days = Math.floor(seconds / (60 * 60 * 24)); 
	seconds -= days * 60 * 60 * 24; 
	
	hours = Math.floor(seconds / (60 * 60));
	seconds -= hours * 60 * 60;
	
	minutes = Math.floor(seconds / 60);
	seconds -= minutes * 60;
	
	for(var i=0;i< seconds.toString().length;i++)
	{
		var res_sec = seconds.toString().charAt(i);
	   if(seconds.toString().length == 1)
	   {
			a=i+1;
			document.getElementById("seconds_"+a).innerHTML = res_sec;
	   }
	   else if(seconds.toString().length == 2)
	   {
			document.getElementById("seconds_"+i).innerHTML = res_sec;
	   }
	}
	for(var j=0;j< minutes.toString().length;j++)
	{
		var res_min = minutes.toString().charAt(j);
		if(minutes.toString().length == 1)
	   {
			b=j+1;
			document.getElementById("minutes_"+b).innerHTML = res_min;
	   }
	   else if(minutes.toString().length == 2)
	   {
			document.getElementById("minutes_"+j).innerHTML = res_min;
	   }
	}

	for(var k=0;k< hours.toString().length;k++)
	{
		var res_hour = hours.toString().charAt(k);
		if(hours.toString().length == 1)
	   {
		c=k+1;
		document.getElementById("hours_"+c).innerHTML = res_hour;
	   }
	   else if(hours.toString().length == 2)
	   {
		document.getElementById("hours_"+k).innerHTML = res_hour;
	   }
	}

   document.getElementById("days").innerHTML = days;

	setTimeout( function(){ 
    updateCounter(); 
		}, 1000 );
  }
	<?php }?> 
</script>
</body>
</html>