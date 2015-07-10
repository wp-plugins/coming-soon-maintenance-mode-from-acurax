<?php
function acx_csma_service_banners()
{
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
<?php }
} add_action('acx_csma_hook_mainoptions_above_title','acx_csma_service_banners',100);
?>