<?php 
if(ISSET($_POST['acx_csma_misc_hidden']))
{
	$acx_csma_misc_hidden = $_POST['acx_csma_misc_hidden'];
} 
else
{
	$acx_csma_misc_hidden = "";
}
if($acx_csma_misc_hidden == 'Y') 
{	//Form data sent
$acx_csma_service_banners = $_POST['acx_csma_service_banners'];
update_option('acx_csma_service_banners', $acx_csma_service_banners);
$acx_csma_hide_expert_support_menu = $_POST['acx_csma_hide_expert_support_menu'];
update_option('acx_csma_hide_expert_support_menu', $acx_csma_hide_expert_support_menu);

?>
<div class="updated"><p><strong><?php _e('Misc Settings Saved!.' ); ?></strong></p></div>
<?php
}
else
{	//Normal page display

$acx_csma_service_banners = get_option('acx_csma_service_banners');
$acx_csma_hide_expert_support_menu = get_option('acx_csma_hide_expert_support_menu');

// Setting Defaults
if ($acx_csma_service_banners == "") {	$acx_csma_service_banners = "yes"; }
if ($acx_csma_hide_expert_support_menu == "") {	$acx_csma_hide_expert_support_menu = "no"; }
} //Main else
?>
<div class="wrap">
<div style='background: none repeat scroll 0% 0% white; height: 100%; display: inline-block; padding: 8px; margin-top: 5px; border-radius: 15px; min-height: 450px; width: 100%;'>
<?php
$acx_csma_service_banners = get_option('acx_csma_service_banners');
if ($acx_csma_service_banners != "no") { ?>
<div id="acx_ad_banners_csma">
<a href="http://www.acurax.com/services/wordpress-designing-experts.php?utm_source=plugin-page&utm_medium=banner&utm_campaign=csma" target="_blank" class="acx_ad_csma_1">
<div class="acx_ad_csma_title">Need Help on Wordpress?</div> <!-- acx_ad_csma_title -->
<div class="acx_ad_csma_desc">Expert Support at Your Fingertip</div> <!-- acx_ad_csma_desc -->
</a> <!--  acx_ad_csma_1 -->

<a href="http://www.acurax.com/services/website-redesign.php?utm_source=plugin-page&utm_medium=banner&utm_campaign=csma" target="_blank" class="acx_ad_csma_1">
<div class="acx_ad_csma_title">Needs a Better Designed Website?</div> <!-- acx_ad_csma_title -->
<div class="acx_ad_csma_desc acx_ad_csma_desc2" style="padding-top: 4px; height: 41px; font-size: 13px; text-align: center;">Get High Converting Website - 100% Satisfaction Guaranteed</div> <!-- acx_ad_csma_desc -->
</a> <!--  acx_ad_csma_1 -->

<a href="http://www.acurax.com/services/website-redesign.php?utm_source=plugin-page&utm_medium=banner&utm_campaign=csma" target="_blank" class="acx_ad_csma_1">
<div class="acx_ad_csma_title">Need More Business?</div> <!-- acx_ad_csma_title -->
<div class="acx_ad_csma_desc acx_ad_csma_desc3" style="padding-top: 13px; height: 32px; font-size: 13px; text-align: center;">Get Your Website Optimized</div> <!-- acx_ad_csma_desc -->
</a> <!--  acx_ad_csma_1 -->

<a href="http://www.acurax.com/services/wordpress-designing-experts.php?utm_source=plugin-page&utm_medium=banner&utm_campaign=csma" target="_blank" class="acx_ad_csma_1">
<div class="acx_ad_csma_title">Quick Support</div> <!-- acx_ad_csma_title -->
<div class="acx_ad_csma_desc acx_ad_csma_desc4" style="padding-top: 4px; height: 41px; font-size: 13px; text-align: center;">Get Explanation & Fix on Website Issues Instantly</div> <!-- acx_ad_csma_desc -->
</a> <!--  acx_ad_csma_1 -->
</div> <!--  acx_ad_banners_csma -->
<?php } else { ?>
<p class="widefat" style="padding:8px;width:99%;">
<b>Acurax Services >> </b>
<a href="http://www.acurax.com/services/wordpress-designing-experts.php?utm_source=plugin-page&utm_medium=banner_link&utm_campaign=csma" target="_blank">Need Help on Wordpress?</a> | 
<a href="http://www.acurax.com/services/website-redesign.php?utm_source=plugin-page&utm_medium=banner_link&utm_campaign=csma" target="_blank">Needs a Better Designed Website?</a> | 
<a href="http://www.acurax.com/services/website-redesign.php?utm_source=plugin-page&utm_medium=banner_link&utm_campaign=csma" target="_blank">Need More Business?</a> | 
<a href="http://www.acurax.com/services/wordpress-designing-experts.php?utm_source=plugin-page&utm_medium=banner_link&utm_campaign=csma" target="_blank">Quick Support</a>
</p>
<?php } ?>

<?php echo "<h2>" . __( 'Misc Settings', 'acx_csma_config' ) . "</h2>"; ?>
<form name="acurax_csma_misc_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
<input type="hidden" name="acx_csma_misc_hidden" value="Y">
<p class="widefat" style="padding:8px;width:99%;margin-top:8px;">	<?php _e("Acurax Service Banners: " ); ?>
<select name="acx_csma_service_banners">
<option value="yes"<?php if ($acx_csma_service_banners == "yes") { echo 'selected="selected"'; } ?>>Yes, Show Them </option>
<option value="no"<?php if ($acx_csma_service_banners == "no") { echo 'selected="selected"'; } ?>>No, Hide Them </option>
</select>
<?php _e("Show Acurax Service Banners On Plugin Settings Page?" ); ?>
</p>
<p class="widefat" style="padding:8px;width:99%;margin-top:8px;">	<?php _e("Hide Expert Support Menu?: " ); ?>
<select name="acx_csma_hide_expert_support_menu">
<option value="yes"<?php if ($acx_csma_hide_expert_support_menu == "yes") { echo 'selected="selected"'; } ?>>Yes </option>
<option value="no"<?php if ($acx_csma_hide_expert_support_menu == "no") { echo 'selected="selected"'; } ?>>No </option>
</select>
<?php _e("Would you like to hide the expert support sub menu?" ); ?>
</p>
<p class="submit">
<input type="submit" name="Submit" class="button" value="<?php _e('Save Settings', 'acx_csma_config' ) ?>" />
</p>
</form>
<br>
</div>
</div>