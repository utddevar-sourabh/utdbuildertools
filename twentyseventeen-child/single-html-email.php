<?php 
/* Template Name: Email Template
   Template Post Type: html-email, post, page */ 
?>
<!DOCTYPE html>
<html class="gr__utdallas_edu">
<head>
	<meta charset="UTF-8"><!--=== REMEMBER TO UPDATE TITLE ===-->
	<?php if (get_field('the_headline')): ?>
		<title><?php the_field('headline'); ?></title>
	<?php else: ?>
		<title> Office of Development and Alumni Relations </title>
	<?php endif ?>
	<!--=== REMEMBER TO UPDATE TITLE ===-->

	<style type="text/css">
		p {
			margin-bottom: 0;
			margin: 0;
		}
		table {
			border-collapse: collapse;
		}
		h1, h2, h3, h4, h5, h6 {
			display: block;
			margin: 0;
			padding: 0;
		}
		img, a img {
			border: 0;
			height: auto;
			outline: none;
			text-decoration: none;
		}
		body {
			height: 100%;
			margin: 0;
			padding: 0;
			width: 100%;
		}
		img {
			-ms-interpolation-mode: bicubic;
		}
		img.button {
			width: 240px;
		}
		table {
			mso-table-lspace: 0pt;
			mso-table-rspace: 0pt;
		}
		p, a, li, td, blockquote {
			mso-line-height-rule: exactly;
		}
		a[href^=tel], a[href^=sms] {
			color: inherit;
			cursor: default;
			text-decoration: none;
		}
		p, a, li, td, body, table, blockquote {
			-ms-text-size-adjust: 100%;
			-webkit-text-size-adjust: 100%;
		}
		a[x-apple-data-detectors] {
			color: inherit !important;
			text-decoration: none !important;
			font-size: inherit !important;
			font-family: inherit !important;
			font-weight: inherit !important;
			line-height: inherit !important;
		}
		body {
			background-color: #d5d2ca;
		}
		h1 {
			color: #202020;
			font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
			font-size: 26px;
			font-style: normal;
			font-weight: bold;
			line-height: 150%;
			letter-spacing: normal;
			text-align: left;
		}
		h2 {
			color: #202020;
			font-family: Helvetica;
			font-size: 22px;
			font-style: normal;
			font-weight: bold;
			line-height: 150%;
			letter-spacing: normal;
			text-align: left;
		}
		h3 {
			color: #202020;
			font-family: Helvetica;
			font-size: 20px;
			font-style: normal;
			font-weight: normal;
			line-height: 150%;
			letter-spacing: normal;
			text-align: left;
		}
		h4 {
			color: #202020;
			font-family: Helvetica;
			font-size: 18px;
			font-style: normal;
			font-weight: bold;
			line-height: 150%;
			letter-spacing: normal;
			text-align: left;
		}
		@media only screen and (max-width: 480px) {
			.utdTextContent {
				font-size: 170% !important;
			}
		}
		@media only screen and (max-width: 480px) {
			.utdTextContent .pre-head {
				font-size: 80% !important;
				margin-left: 20px!important;
			}
		}
		@media only screen and (max-width: 480px) {
			.utdTextContent h2, .utdTextContent h3 {
				font-size: 140%!important;
				line-height: 135%!important;
			}
		}
		@media only screen and (max-width: 480px) {
			.notes-text {
				padding-bottom: 2em!important;
			}
		}
		@media only screen and (max-width: 480px) {
			.emailButton {
				max-width: 600px !important;
				width: 100% !important;
			}
			.emailButton a {
				display: block !important;
				font-size: 135% !important;
			}
		}
	</style>
</head>
<body>
	<table id="baseTable" bgcolor="#D5D2CA" border="0" cellpadding="0" cellspacing="0"  style="padding:0px;margin:0px;width:100%;">
		<!--====================================================-->
		<!--================ BEGIN EMAIL ROWS ==================-->
		<!--====================================================-->
		<!--====================================================-->
		<!--================== BROWSER LINK ====================-->
		<!--====================================================-->
		<tbody>
			<tr>
				<!-- Begin Pre-Header Row Content -->
				<!-- Stretch Cell -->
				<td style="padding:0px;margin:0px;">&nbsp;</td><!-- End Stretch Cell -->
				<!-- Content Cell -->
				<td style="padding:0px;margin:0px;" width="600">
					<div class="pre-head" style="text-align: center;">
						<br>
						<!--=== LINK TO BROWSER VERSION OF EMAIL ===-->
						 <a href="<?php echo the_permalink(); ?>" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #8b8178;font-weight: normal;font-size:12px;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; text-decoration: none;" target="_blank">View this email in your browser »</a><br>
						&nbsp;
					</div>
				</td><!-- End Content Cell -->
				<!-- Stretch Cell -->
				<td style="padding:0px;margin:0px;">&nbsp;</td><!-- End Stretch Cell -->
			</tr><!-- End Pre-Header Row Content -->
			<!--====================================================-->
			<!--============= UTD WORDMARK IMAGE BAR ===============-->
			<!--====================================================-->
			<tr>
				<!-- Begin Image Row Content -->
				<!-- Stretch Cell -->
				<td style="padding:0px;margin:0px;">&nbsp;</td><!-- End Stretch Cell -->
				<!-- Content Cell -->
				<td style="padding:0px;margin:0px;" width="600">
					<!--=== LINK TO UT DALLAS WEBSITE ===-->
					 <a class="" href="https://www.utdallas.edu/" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" target="_blank" title=""><?php if (get_field('monogram_border') == 'None'): ?> <img alt="The University of Texas at Dallas" class="mcnImage" src="<?php the_field('monogram'); ?>" style="max-width: 1200px; padding-bottom: 0; display: inline !important; vertical-align: bottom; height: auto; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;" width="600"> <?php else: ?> <img alt="The University of Texas at Dallas" class="mcnImage" src="<?php the_field('monogram'); ?>" style="max-width: 1200px; padding-bottom: 0; display: inline !important; vertical-align: bottom; height: auto; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;border-bottom: 5px solid <?php the_field('monogram_border'); ?>" width="600"> <?php endif; ?></a>
				</td><!-- End Content Cell -->
				<!-- Stretch Cell -->
				<td style="padding:0px;margin:0px;">&nbsp;</td><!-- End Stretch Cell -->
			</tr><!-- End Image Row -->
			<!--====================================================-->
			<!--============= HERO / FULL-WIDTH IMAGE ==============-->
			<!--====================================================-->
			<tr>
				<!-- Begin Image Row Content -->
				<!-- Stretch Cell -->
				<td style="padding:0px;margin:0px;">&nbsp;</td><!-- End Stretch Cell -->
				<!-- Content Cell -->
				<td style="padding:0px;margin:0px;" width="600">
					<!--=== LINK TO EVENT REGISTRATION OR CTA ===-->
					 <a class="" href="<?php the_field('cta_url'); ?>" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" target="_blank" title=""><img alt="<?php echo get_field('hero_image')['alt']; ?>" class="mcnImage" src="<?php echo get_field('hero_image')['url']; ?>" style="max-width: 1200px; padding-bottom: 0; display: inline !important; vertical-align: bottom; border:none; height: auto; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;" width="600"></a>
				</td><!-- End Content Cell -->
				<!-- Stretch Cell -->
				<td style="padding:0px;margin:0px;">&nbsp;</td><!-- End Stretch Cell -->
			</tr><!-- End Image Row -->
			<!--====================================================-->
			<!--=================== BODY TEXT ======================-->
			<!--====================================================-->
			<tr>
				<!-- Begin Content Row  -->
				<!-- Stretch Cell -->
				<td style="padding:0px;margin:0px;">&nbsp;</td><!-- End Stretch Cell -->
				<!-- Content Cell -->
				<td bgcolor="#FFFFFF" style="padding:0px;margin:0px;border-bottom:5px solid <?php the_field('bottom_border'); ?>; border-radius:0 0 4px 4px;" width="600">
					<table border="0" cellpadding="0" cellspacing="0" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" width="600">
						<tbody>
							<tr>
								<td style="padding:0px;margin:0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" valign="top">
									<table align="left" border="0" cellpadding="40" cellspacing="0" style="max-width: 100%;min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" width="600">
										<tbody>
											<tr>
												<td align="center" class="utdTextContent" colspan="3" style="font-family: Arial, Helvetica, sans-serif;font-size:16px; mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%; word-break: break-word; line-height: 1.45;text-align: center;" valign="top">
													<!-- Email Headline -->
													<?php if (get_field('headline')): ?>
														<h3 class="null" style="display: block; margin: 0; padding: 0; color: #202020; font-family: Helvetica; font-size: 120%; font-style: normal; font-weight: bold; line-height: 130%; letter-spacing: normal; text-align: center;"><?php the_field('headline'); ?></h3><br>
													<?php endif; ?>
													<!-- Email Headline End-->
													 <!--=== Email body Copy  ===-->
													<table align="center" border="0" cellpadding="0" cellspacing="0" class="optionalField" style="max-width: 100%;min-width: 100%;">
														<tbody>
															<tr>
																<td align="center" class="utdTextContent" colspan="3" style="font-family: Arial, Helvetica, sans-serif;font-size:16px; mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%; word-break: break-word; line-height: 1.45;text-align: center;" valign="top">
																	<?php the_field('body_copy'); ?>
																	<?php if( get_field('event_date')): ?>
																	<br>&nbsp; 
																	<strong><?php the_field('event_date'); ?></strong><br>
																	<?php 
																		// to change time display format
																		$start_time = str_replace("am", "a.m.", str_replace("pm","p.m.",get_field('start_time')));
																		if (get_field('end_time')):
																			$end_time = str_replace("am", "a.m.", str_replace("pm","p.m.",get_field('end_time')));
																			echo sprintf("%s - %s",$start_time,$end_time);
																		else:
																			echo $start_time;
																		endif;
																	?>
																	<br>&nbsp;
																	<?php endif ?>
																</td>
															</tr>
														</tbody>
													</table>
												
													<?php if( get_field('event_venue')): ?>
													<table align="center" border="0" cellpadding="0" cellspacing="0" class="optionalField" style="max-width: 100%;min-width: 100%;">
														<tbody>
															<tr>
																<td align="center" class="utdTextContent" colspan="3" style="font-family: Arial, Helvetica, sans-serif;font-size:16px; mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%; word-break: break-word; line-height: 1.45;text-align: center;" valign="top"><?php the_field('event_venue'); ?><br></td>
															</tr>
														</tbody>
													</table><?php endif; ?><!--=== Email body Copy End===-->
													<!--=== CALL TO ACTION BUTTON ===-->
													<?php if (get_field('cta_text')): ?>
													<table align="center" border="0" cellpadding="0" cellspacing="0" class="emailButton" style="border-radius:4px; -webkit-border-radius:4px; -moz-border-radius:4px; background-color:<?php the_field('cta_bg');?>;">
														<tbody>
															<tr style="text-align: center; padding-top:16px; padding-right:40px; padding-bottom:16px; padding-left:40px;">
																<td align="center" class="emailButtonContent" valign="middle" style="padding-top:16px; padding-right:40px; padding-bottom:16px; padding-left:40px;">
																	<a href="<?php the_field('cta_url'); ?>" style="color:#FFFFFF; font-family: Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; text-decoration:none; letter-spacing:1px;" target="_blank"><?php the_field('cta_text'); ?></a>
																</td>
															</tr>
														</tbody>
													</table><?php endif; ?><!--=== END CTA BUTTON ===-->
													<?php if( get_field('footer_copy')): ?>
													<table align="center" border="0" cellpadding="0" cellspacing="0" class="optionalField" style="max-width: 100%;min-width: 100%;">
														<tbody>
															<tr>
																<td align="center" class="utdTextContent" colspan="3" style="font-family: Arial, Helvetica, sans-serif;font-size:16px; mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%; word-break: break-word; line-height: 1.45;text-align: center;" valign="top"><br><?php the_field('footer_copy'); ?></td>
															</tr>
														</tbody>
													</table><?php endif; ?>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</td><!-- End Content Cell -->
				<!-- Stretch Cell -->
				<td style="padding:0px;margin:0px;">&nbsp;</td><!-- End Stretch Cell -->
			</tr><!-- End Content Row -->
			<!--====================================================-->
			<!--================== FOOTER ADDRESS ==================-->
			<!--====================================================-->
			<tr>
				<!-- Begin Content Row  -->
				<!-- Stretch Cell -->
				<td style="padding:0px;margin:0px;">&nbsp;</td><!-- End Stretch Cell -->
				<!-- Content Cell -->
				<td bgcolor="#D5D2CA" style="padding:0px;margin:0px;" width="600">
					<p style="text-align: center;font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size: small;font-style: normal;font-weight: normal;line-height: 170%;margin:0;padding:0;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #8b8178;"><br>
					<strong>The University of Texas at Dallas</strong><br>
					800 W. Campbell Road, Richardson, Texas 75080-3021<br>
					<a href="../template_DUPLICATE-ME_do-not-edit%20-%20Copy%20[2]/target=&amp;pid=187&amp;did=0&amp;tab=0" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #8b8178; text-decoration: none;">Privacy Policy</a> | <a href="https://alumni.utdallas.edu/update#PC3843_formWizard_formWizard_b8fab1d3_c082_403c_8e36_d5e2f02355a4" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #8b8178; text-decoration: none;">Email Preferences</a><a href="../template_DUPLICATE-ME_do-not-edit%20-%20Copy%20[2]/target=&amp;pid=992&amp;did=0&amp;tab=0" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; text-decoration: none;">&nbsp;</a>| <a href="../template_DUPLICATE-ME_do-not-edit%20-%20Copy%20[2]/target=&amp;pid=574&amp;did=0&amp;tab=0" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #8b8178; text-decoration: none;">Contact Us</a><br></p>
				</td><!-- End Content Cell -->
				<!-- Stretch Cell -->
				<td style="padding:0px;margin:0px;">&nbsp;</td><!-- End Stretch Cell -->
			</tr><!-- End Content Row -->
			<!--====================================================-->
			<!--================== END EMAIL ROWS ==================-->
			<!--====================================================-->
			<!-- BOTTOM SPACER ROW -->
			<tr>
				<td colspan="3" height="20" style="padding:0px;margin:0px;font-size:20px;height:20px;">&nbsp;</td>
			</tr><!-- END BOTTOM SPACER ROW -->
		</tbody>
	</table>
	<button onclick="copyToClipboard();" style="position: absolute;top: 10px;right: 10px;padding: 20px 10px;color: #FFFFFF;font-size: 16px;font-family: monospace;box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);background-color: #69be29;border: 0px;border-radius: 2px;cursor: pointer;">Copy to Clipboard</button>
	<script type="text/javascript">
		var anchor_element = document.querySelectorAll(".optionalField a");
		for(i=0;i<anchor_element.length;i++){
			anchor_element[i].style = "";
			anchor_element[i].style = "text-decoration: none; color: #008542;"
		}
		function copyToClipboard(){
			var table = document.getElementById("baseTable");
			var style = document.getElementsByTagName("style");
			var title = document.getElementsByTagName("title");
			var element = document.createElement('textarea');
			element.value = '<!DOCTYPE html><html class="gr__utdallas_edu gr__webdesignandbuild_com"><head><meta charset="UTF-8"><title>' + title[0].innerHTML + '</title> <style>' + style[0].innerHTML + '</style> </head> <body>'+ table.outerHTML + '</body> </html>';
			document.body.appendChild(element);
			element.select();
			document.execCommand('copy');
			document.body.removeChild(element);
			alert('Swoosh!! Copied to your clipboard.');
		}
		window.addEventListener('keydown', function (e) {
			if (event.ctrlKey === true && event.key==="c") {
				copyToClipboard();
			}
		});
	</script>
</body>
</html>