<?php 
     /* Template Name: Newsletter Template
     Template Post Type: alumni-link, post, page*/ 
     ?>
<!DOCTYPE html>
<html class="gr__utdallas_edu">
<head>
	<meta charset="UTF-8"><!--[if gte mso 9]>
            <xml>
                 <o:OfficeDocumentSettings>
                        <o:AllowPNG/>
                        <o:PixelsPerInch>96</o:PixelsPerInch>
                 </o:OfficeDocumentSettings>
            </xml>
            <![endif]-->
	<meta content="text/html; charset=utf-8" http-equiv="Content-type">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="date=no" name="format-detection">
	<meta content="address=no" name="format-detection">
	<meta content="telephone=no" name="format-detection">
	<meta name="x-apple-disable-message-reformatting">
	<title>Alumni Newsletter</title><!--[if gte mso 9]>
            <style type="text/css" media="all">
                 sup { font-size: 100% !important; }
            </style>
            <![endif]-->

	<style media="screen" type="text/css">
		/* Linked Styles */
		body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#d5d2ca; -webkit-text-size-adjust:none }
		a { color:#69be28; text-decoration:none }
		p { padding:0 !important; margin:0 !important } 
		img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
		.mcnPreviewText { display: none !important; }
		/* Mobile styles */
		@media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
		.mobile-shell { width: 100% !important; min-width: 100% !important; }
		.m-center { text-align: center !important; }
		.center { margin: 0 auto !important; }
		.td { width: 100% !important; min-width: 100% !important; }
		.m-br-15 { height: 15px !important; }
		.m-td,
		.m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }
		.m-block { display: block !important; }
		.fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }
		.column,
		.column-top { float: left !important; width: 100% !important; display: block !important; }
		.content-spacing { width: 15px !important; }
		.plr-15 { padding-left: 15px !important; padding-right: 15px !important; }
		.text-top,
		.text-top-right { text-align: center !important; }
		}
	</style>
</head>
<body class="body" style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#d5d2ca; -webkit-text-size-adjust:none;">
	<table id="baseTable" bgcolor="#D5D2CA" border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<td align="center" valign="top">
				<table border="0" cellpadding="0" cellspacing="0" class="mobile-shell" width="600">
					<tr>
						<td class="td" style="width:600px; min-width:600px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
							<!-- Top -->
							<table bgcolor="#69BE28" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td class="plr-15" style="padding: 5px 20px;">
										<table border="0" cellpadding="0" cellspacing="0" dir="rtl" style="direction: rtl;" width="100%">
											<tr>
												<th class="column-top" dir="ltr" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;" valign="top">
													<table border="0" cellpadding="0" cellspacing="0" width="100%">
														<tr>
															<td class="text-top-right" style="color:#ffffff; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; line-height:20px; text-align:right;">
																<a class="link-white" href="<?php the_field('n_browser_version'); ?>" style="color:#ffffff; text-decoration:none;" target="_blank"><span class="link-white" style="color:#ffffff; text-decoration:none;">View this email in your browser &raquo;</span></a>
															</td>
														</tr>
													</table>
												</th>
												<th class="column-top" dir="ltr" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;" valign="top" width="15"></th>
												<th class="column-top" dir="ltr" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;" valign="top" width="200">
													<table border="0" cellpadding="0" cellspacing="0" width="100%">
														<tr>
															<td class="text-top" style="color:#ffffff; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; line-height:20px; text-align:left;"><?php the_field('newsletter_month'); ?></td>
														</tr>
													</table>
												</th>
											</tr>
										</table>
									</td>
								</tr>
							</table><!-- END Top -->
							<!-- Header -->
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;">
										<a href="https://alumni.utdallas.edu/alumni-link" target="_blank"><img alt="UT Dallas Alumni Link" border="0" height="123" src="https://www.utdallas.edu/alumnilink/2018/template/images/header.gif" width="600"></a>
									</td>
								</tr>
							</table><!-- END Header -->
							<!-- Main -->
							<table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td>
										<!-- Intro -->
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;">
													<a href="<?php the_field('featured_article_url'); ?>" target="_blank"><img alt="<?php the_field('featured_article_image_altText'); ?>" border="0" height="300" src="<?php the_field('featured_article_image'); ?>" width="600"></a>
												</td>
											</tr>
											<tr>
												<td class="p-15-20 plr-15" style="padding:15px 20px;">
													<div class="h1-center" style="color:#000001; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:20px; line-height:28px; text-align:center;">
														<a class="link-black" href="<?php the_field('featured_article_url'); ?>" style="color:#000001; text-decoration:none;" target="_blank"><span class="link-black" style="color:#000001; text-decoration:none;"><?php the_field('featured_article_headline'); ?></span></a>
													</div>
													<div class="text-center" style="color:#766a62; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:15px; line-height:23px; text-align:center;">
														<?php the_field('featured_article_excerpt'); ?>
													</div>
													<table border="0" cellpadding="0" cellspacing="0" width="100%">
														<tr>
															<td class="fluid-img" style="padding-top: 15px; font-size:0pt; line-height:0pt; text-align:left;">
																<a href="<?php the_field('featured_article_url'); ?>" target="_blank"><img alt="Read more" border="0" height="54" src="https://www.utdallas.edu/alumnilink/2018/template/images/button_read-more_wide.png" width="560"></a>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table><!-- END Intro -->
										<!-- Divider -->
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td class="fluid-img" style="padding: 15px 0; font-size:0pt; line-height:0pt; text-align:left;"><img alt="Texas" border="0" height="50" src="https://www.utdallas.edu/alumnilink/2018/template/images/divider-tx.gif" width="600"></td>
											</tr>
										</table><!-- END Divider -->
										<!-- Sub Articles  -->
										<?php if( have_rows('sub_articles') ):
										                                            // loop through the rows of data
										                                            while ( have_rows('sub_articles') ) : the_row();
										                                                if (get_row_index()%2 != 0) : ?><!-- Section Article - Image Left -->
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td class="p-15-20 plr-15" style="padding:15px 20px;">
													<table border="0" cellpadding="0" cellspacing="0" width="100%">
														<tr>
															<th class="column-top" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;" valign="top" width="175">
																<div class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;">
																	<a href="<?php the_sub_field('article_url') ?>" target="_blank"><img alt="<?php the_sub_field('article_image_alt')?>" border="0" height="175" src="<?php the_sub_field('article_image')?>" width="175"></a>
																</div>
															</th>
															<th class="column-top" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;" valign="top" width="20">
																<div class="m-br-15" style="font-size:0pt; line-height:0pt;"></div>
															</th>
															<th class="column-top" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;" valign="top">
																<table border="0" cellpadding="0" cellspacing="0" width="100%">
																	<tr>
																		<td>
																			<div class="h1" style="color:#000001; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:20px; line-height:28px; text-align:left;">
																				<a class="link-black" href="<?php the_sub_field('article_url') ?>" style="color:#000001; text-decoration:none;" target="_blank"><span class="link-black" style="color:#000001; text-decoration:none;"><?php the_sub_field('article_headline'); ?></span></a>
																			</div>
																			<div class="text" style="color:#766a62; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:15px; line-height:23px; text-align:left;">
																				<?php the_sub_field('article_excerpt') ?><a class="link" href="<?php the_sub_field('article_url') ?>" style="color:#69be28; text-decoration:none;" target="_blank"><span class="link" style="color:#69be28; text-decoration:none;">Read more &raquo;</span></a>
																			</div>
																		</td>
																	</tr>
																</table>
															</th>
														</tr>
													</table>
												</td>
											</tr>
										</table><!-- END Section Article - Image Left -->
										<?php else: ?><!-- Section Article - Image Right -->
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td class="plr-15" style="padding: 20px;">
													<table border="0" cellpadding="0" cellspacing="0" dir="rtl" width="100%">
														<tr>
															<th class="column-top" dir="ltr" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;" valign="top" width="175">
																<div class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;">
																	<a href="<?php the_sub_field('article_url') ?>" target="_blank"><img alt="<?php the_sub_field('article_image_alt')?>" border="0" height="175" src="<?php the_sub_field('article_image')?>" width="175"></a>
																</div>
															</th>
															<th class="column-top" dir="ltr" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;" valign="top" width="20">
																<div class="m-br-15" style="font-size:0pt; line-height:0pt;"></div>
															</th>
															<th class="column-top" dir="ltr" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;" valign="top">
																<table border="0" cellpadding="0" cellspacing="0" width="100%">
																	<tr>
																		<td>
																			<div class="h1" style="color:#000001; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:20px; line-height:28px; text-align:left;">
																				<a class="link-black" href="<?php the_sub_field('article_url') ?>" style="color:#000001; text-decoration:none;" target="_blank"><span class="link-black" style="color:#000001; text-decoration:none;"><?php the_sub_field('article_headline'); ?></span></a>
																			</div>
																			<div class="text" style="color:#766a62; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:15px; line-height:23px; text-align:left;">
																				<?php the_sub_field('article_excerpt') ?><a class="link" href="<?php the_sub_field('article_url') ?>" style="color:#69be28; text-decoration:none;" target="_blank"><span class="link" style="color:#69be28; text-decoration:none;">Read more &raquo;</span></a>
																			</div>
																		</td>
																	</tr>
																</table>
															</th>
														</tr>
													</table>
												</td>
											</tr>
										</table><!-- END Section Article - Image Right -->
										<?php endif;
										                                            endwhile;
										                                        endif;?><!-- END Sub Articles -->
										<!-- Section Alumni Notes -->
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td>
													<table border="0" cellpadding="0" cellspacing="0" width="100%">
														<tr>
															<td class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;">
																<a href="https://alumni.utdallas.edu/alumni-notes" target="_blank"><img alt="ALUMNI NOTES" border="0" height="50" src="https://www.utdallas.edu/alumnilink/2018/template/images/divider-alumni-notes.gif" width="600"></a>
															</td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td class="plr-15" style="padding: 20px;">
													<table border="0" cellpadding="0" cellspacing="0" width="100%">
														<tr>
															<?php
															                                                            //check if the repeater field has rows of data
															                                                            if( have_rows('alumni_notes') ):
															                                                                // loop through the rows of data
															                                                                while ( have_rows('alumni_notes') ) : the_row(); ?>
															<th class="column-top" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;" valign="top" width="173">
																<table border="0" cellpadding="0" cellspacing="0" width="100%">
																	<tr>
																		<td class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;">
																			<a href="<?php the_sub_field('alumni_url'); ?>" target="_blank"><img alt="<?php the_sub_field('alumni_image_alt'); ?>" border="0" height="173" src="<?php the_sub_field('alumni_image'); ?>" width="173"></a>
																		</td>
																	</tr>
																	<tr>
																		<td class="text-2" style="padding-top: 10px; color:#766a62; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:13px; line-height:19px; text-align:left;">
																			<?php the_sub_field('alumni_excerpt'); ?><a class="link" href="<?php the_sub_field('alumni_url'); ?>" style="color:#69be28; text-decoration:none;" target="_blank"><span class="link" style="color:#69be28; text-decoration:none;">Read more &raquo;</span></a>
																		</td>
																	</tr>
																</table>
															</th><?php if (get_row_index() != count(get_field('alumni_notes'))): ?>
															<th class="column-top" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;" valign="top" width="20">
																<div class="m-br-15" style="font-size:0pt; line-height:0pt;"></div>
															</th><?php endif; 
															                                                                endwhile;
															                                                            endif;?><!--  END Alumni Notes -->
														</tr>
													</table>
												</td>
											</tr>
										</table><!-- END Section Alumni Notes -->
										<!-- Section Events -->
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;">
													<a href="https://alumni.utdallas.edu/events" target="_blank"><img alt="UPCOMING EVENTS" border="0" height="50" src="https://www.utdallas.edu/alumnilink/2018/template/images/divider-events.gif" width="600"></a>
												</td>
											</tr>
											<tr>
												<td class="p-15-20 plr-15" style="padding:15px 20px;">
													<table border="0" cellpadding="0" cellspacing="0" width="100%">
														<tbody>
															<?php if( have_rows('upcoming_events') ): 
															                                                                while ( have_rows('upcoming_events') ) : the_row(); ?>
															<tr>
																<td class="text-3-black-center" style="padding-bottom: 15px; color:#000001; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:16px; line-height:24px; text-align:center;">
																	<strong><?php the_sub_field('event_date'); ?></strong><br>
																	<a class="link" href="<?php the_sub_field('event_url'); ?>" style="color:#69be28; text-decoration:none;" target="_blank"><span class="link" style="color:#69be28; text-decoration:none;"><?php the_sub_field('event_name'); ?></span></a>
																</td>
															</tr><?php endwhile;
															                                                            endif;?>
														</tbody>
													</table>
												</td>
											</tr>
										</table><!-- END Section Events -->
										<!-- Banner -->
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;">
													<a href="<?php the_field('final_thought_url')?>" target="_blank"><img alt="<?php the_field('final_thought_image_alt')?>" border="0" height="340" src="<?php the_field('final_thought_image')?>" width="600"></a>
												</td>
											</tr>
										</table><!-- END Banner -->
										<!-- Section About - 2 Cols -->
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td style="padding: 30px 20px;">
													<table border="0" cellpadding="0" cellspacing="0" width="100%">
														<tr>
															<th class="column-top" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;" valign="top" width="270">
																<table border="0" cellpadding="0" cellspacing="0" width="100%">
																	<tr>
																		<td class="text-1-black" style="color:#000001; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; line-height:22px; text-align:left;"><strong>About the Alumni Link</strong></td>
																	</tr>
																	<tr>
																		<td class="text-1" style="color:#766a62; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; line-height:22px; text-align:left;">
																			The Alumni Link is an email newsletter full of stories of interest to the University's graduates. <a class="link" href="https://alumni.utdallas.edu/alumni-link" style="color:#69be28; text-decoration:none;" target="_blank"><span class="link" style="color:#69be28; text-decoration:none;">View archives &raquo;</span></a>
																		</td>
																	</tr>
																</table>
															</th>
															<th class="column-top" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;" valign="top" width="20">
																<div class="m-br-15" style="font-size:0pt; line-height:0pt;"></div>
															</th>
															<th class="column-top" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;" valign="top">
																<table border="0" cellpadding="0" cellspacing="0" width="100%">
																	<tr>
																		<td class="text-1-black" style="color:#000001; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; line-height:22px; text-align:left;"><strong>What's New With You?</strong></td>
																	</tr>
																	<tr>
																		<td class="text-1" style="color:#766a62; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; line-height:22px; text-align:left;">
																			Changed jobs, received an award, gotten married or celebrated the birth of a child? Keep your fellow alumni updated. <a class="link" href="https://alumni.utdallas.edu/contact-us/share-your-news" style="color:#69be28; text-decoration:none;" target="_blank"><span class="link" style="color:#69be28; text-decoration:none;">Share your news &raquo;</span></a>
																		</td>
																	</tr>
																</table>
															</th>
														</tr>
													</table>
												</td>
											</tr>
										</table><!-- END Section About - 2 Cols -->
									</td>
								</tr>
							</table><!-- END Main -->
							<!-- Footer -->
							<table bgcolor="#766A62" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td class="text-footer p-15-20 plr-15" style="color:#d5d2ca; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; line-height:20px; text-align:center; padding:15px 20px;">
										The University of Texas at Dallas<br>
										<a class="link-white" href="http://alumni.utdallas.edu/" style="color:#ffffff; text-decoration:none;" target="_blank"><span class="link-white" style="color:#ffffff; text-decoration:none;">Alumni Relations</span></a><br>
										<a class="link-2" href="#" style="color:#d5d2ca; text-decoration:none;" target="_blank"><span class="link-2" style="color:#d5d2ca; text-decoration:none;">800 W. Campbell Road, DGAC 2.104<br>
										Richardson, Texas 75080-3021<br></span></a> <a class="link-white" href="tel:+9728832586" style="color:#ffffff; text-decoration:none;" target="_blank"><span class="link-white" style="color:#ffffff; text-decoration:none;">(972) UTD-ALUM</span></a> | <a class="link-white" href="#" style="color:#ffffff; text-decoration:none;" target="_blank"><span class="link-white" style="color:#ffffff; text-decoration:none;"><span class="__cf_email__" data-cfemail="06676a736b686f46737262676a6a677528636273">[email&#160;protected]</span></span></a>
									</td>
								</tr>
							</table><!-- END Footer -->
							<!-- Bottom -->
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td class="text-bottom p-15-20 plr-15" style="color:#8b8178; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:12px; line-height:20px; text-align:center; padding:15px 20px;">
										<a class="link-1" href="https://www.utdallas.edu/alumnilink/2018/10 - Copy/target=&pid=187&did=0&tab=0" style="color:#8b8178; text-decoration:none;" target="_blank"><span class="link-1" style="color:#8b8178; text-decoration:none;">Privacy Policy</span></a> | <a class="link-1" href="https://alumni.utdallas.edu/update#PC3843_formWizard_formWizard_b8fab1d3_c082_403c_8e36_d5e2f02355a4" style="color:#8b8178; text-decoration:none;" target="_blank"><span class="link-1" style="color:#8b8178; text-decoration:none;">Email Preferences</span></a><a href="target=&amp;pid=992&amp;did=0&amp;tab=0" style="text-decoration: none;">&nbsp;</a>| <a class="link-1" href="https://www.utdallas.edu/alumnilink/2018/10 - Copy/target=&pid=574&did=0&tab=0" style="color:#8b8178; text-decoration:none;" target="_blank"><span class="link-1" style="color:#8b8178; text-decoration:none;">Contact Us</span></a>
									</td>
								</tr>
							</table><!-- END Bottom -->
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<!-- Copy to clipboard button -->
	<button onclick="copyToClipboard();" style="position: absolute;top: 10px;right: 10px;padding: 20px 10px;color: #FFFFFF;font-size: 16px;font-family: monospace;box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);background-color: #69be29;border: 0px;border-radius: 2px;cursor: pointer;">Copy to Clipboard</button>
	<script>
		function copyToClipboard(){
			var table = document.getElementById("baseTable");
			var style = document.getElementsByTagName("style");
			var title = document.getElementsByTagName("title");
			var element = document.createElement('textarea');
			element.value = '<!DOCTYPE html><html class="gr__utdallas_edu gr__webdesignandbuild_com"><head><meta charset="UTF-8"><title><meta content="text/html; charset=utf-8" http-equiv="Content-type"><meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"><meta content="IE=edge" http-equiv="X-UA-Compatible"><meta content="date=no" name="format-detection"><meta content="address=no" name="format-detection"><meta content="telephone=no" name="format-detection"><meta name="x-apple-disable-message-reformatting">' + title[0].innerHTML + '</title> <style>' + style[0].innerHTML + '</style> </head> <body>' + table.outerHTML + '</body> </html>';
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
	<script data-cfasync="false" src="/cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js">
	</script>
</body>
</html>