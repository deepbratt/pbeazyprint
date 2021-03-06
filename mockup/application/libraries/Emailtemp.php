<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Email Templates of EazyPrint
 *
 * @author Sujit
 */
 

 
class Emailtemp{

	public function seller_regi_sccs_eml($seller_email,$email_code,$insert_details)
	{
		$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>

		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
		<title>EazyPrint Registration</title>

		<style type="text/css">

				body{width: 100%; background-color: #383434; margin:0; padding:0; -webkit-font-smoothing: antialiased;mso-margin-top-alt:0px; mso-margin-bottom-alt:0px; mso-padding-alt: 0px 0px 0px 0px;}
				
				p,h1,h2,h3,h4{margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;}
				
				span.preheader{display: none; font-size: 1px;}
				
				html{width: 100%;}
				
				table{font-size: 12px;border: 0;}
				
				.menu-space{padding-right:25px;}
				
				a,a:hover { text-decoration:none; color:#FFF;}


		@media only screen and (max-width:640px)

		{
			body {width:auto!important;}
			table [class=main] {width:440px !important;}
			table [class=two-left] {width:420px !important; margin:0px auto;}
			table [class=full] {width:100% !important; margin:0px auto;}
			table [class=two-left-inner] {width:400px !important; margin:0px auto;}
			table [class=menu-icon] { display:none;}

			}

		@media only screen and (max-width:479px)
		{
			body {width:auto!important;}
			table [class=main]  {width:350px !important;}
			table [class=two-left] {width:300px !important; margin:0px auto;}
			table [class=full] {width:100% !important; margin:0px auto;}
			table [class=two-left-inner] {width:280px !important; margin:0px auto;}
			table [class=menu-icon] { display:none;}

			
		}



		</style>

		</head>

		<body yahoo="fix" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

		<!--Main Table Start-->

		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#383434">
		  <tr>
			<td align="center" valign="middle">
			
			
			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		  <tr>
			<td align="center" valign="middle"><table width="550" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
			  <tr>
				<td height="90" align="center" valign="top" style="font-size:90px; line-height:90px;">&nbsp;</td>
			  </tr>
			</table></td>
		  </tr>
		</table>

			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		  <tr>
			<td align="center" valign="middle"><table width="550" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
			  <tr>
				<td align="center" valign="top" bgcolor="#FFFFFF" style="-moz-border-radius: 20px 25px 0px 0px; border-radius: 8px 8px 0px 0px; border-bottom: 2px solid #E0365A;"><table width="350" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left">
				  <tr>
					 <td height="20" align="center" valign="top" style="font-size:20px; line-height:20px;">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="center" valign="top">
					 <table border="0" align="center" cellpadding="0" cellspacing="0">
					  <tr>
						<td align="center" valign="middle"><a href="#"><img editable="true" mc:edit="bm17-01" src="'.base_url().'Email_image/logo_header.png" width="115"  alt="" /></a></td>
					  </tr>
					</table>
				   </td>
				  </tr>
				  <tr>
					 <td height="20" align="center" valign="top" style="font-size:20px; line-height:20px;">&nbsp;</td>
				  </tr>
				</table></td>
			  </tr>
			</table></td>
		  </tr>
		</table>

			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		  <tr>
			<td align="center" valign="middle"><table width="550" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
			  <tr>
				<td align="center" valign="top" bgcolor="#FFFFFF"><table width="420" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left">
				
				 <tr>
					<td height="15" align="center" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
				  </tr>
				   <tr>
						<td align="left" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:24px; color:#312e2e; font-weight:normal; line-height:24px;" mc:edit="bm17-03">
							<multiline>
								Hi '.$seller_email.',
							</multiline></td>
				   </tr>
				   <tr>
					 <td height="5" align="center" valign="top" style="font-size:5px; line-height:5px;">&nbsp;</td>
				  </tr>
				   <tr>
						<td align="left" valign="top" style="font-family: Open Sans, Verdana, Arial; font-size:20px; color:#E0365A; font-weight:normal; line-height:24px;" mc:edit="bm17-03">
							<multiline>
								Welcome to EazyPrint
							</multiline></td>
				   </tr>
				   <tr>
						<td height="10" align="center" valign="top" style="font-size:10px; line-height:10px;">&nbsp;</td>
					  </tr>
				  <tr>
					<td align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
					   
					  <tr>
						<td align="left" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:17px; color:#312e2e; font-weight:normal; line-height:24px; " mc:edit="bm17-05">
							<multiline>You have successfully signed up as dealer in eazyPrint.</multiline>
						</td>
					  </tr>
					  <tr>
						<td align="left" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:17px; color:#312e2e; font-weight:normal; line-height:24px; " mc:edit="bm17-05">
							<multiline>
							Please click the "Activate" button below to authenticate your email with us.
							</multiline>
						</td>
					  </tr>

					  <tr>
						<td height="20" align="center" valign="top">&nbsp;</td>
					  </tr>
					  <tr>
						<td align="center" valign="top"><table width="150" border="0" align="center" cellpadding="0" cellspacing="0">
						  <tr>
							<td height="50" align="center" valign="middle" bgcolor="#e0365a" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#FFF; font-weight:bold; -moz-border-radius: 30px; border-radius: 30px;" mc:edit="bm17-07"><multiline><a href="'.base_url().'verify_email/'.$email_code.'/'.$insert_details.'" style="text-decoration:none; color:#FFF;">Activate Account </a></multiline></td>
						  </tr>
							
						</table></td>
					  </tr>
					  <tr>
						<td height="15" align="center" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
					  </tr>
					  <tr>
						<td align="left" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:17px; color:#312e2e; font-weight:normal; line-height:24px; " mc:edit="bm17-05">
							<multiline>
							If this was not you, then please ignore and delete this email.
							</multiline>
						</td>
					  </tr>
					  <tr>
						<td height="15" align="center" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
					  </tr>
					 <tr>
						<td align="left" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:17px; color:#312e2e; font-weight:normal; line-height:24px; " mc:edit="bm17-05">
							<multiline>
								Kind regards,<br/>
								EazyPrint
							</multiline>
						</td>
					</tr>
					<tr>
						<td height="15" align="center" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
					  </tr>
					<tr>
						<td style="font-family:Open Sans, Verdana, Arial; font-size:12px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
							<multiline>
								  This is an automated message from EazyPrint. Please do not reply to this message. Contact our Customer Support team using support@eazyprint.in or the telephone number(s) or chat on our website.
							</multiline>
						</td>
					</tr>

					</table></td>
				  </tr>

				  
				</table></td>
			  </tr>
			  <tr>
				<td align="center" valign="top" style="background:#FFF;border-bottom: 2px solid #E0365A;"><table width="380" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left">
					  <tr>
						<td height="20" align="center" valign="top" style="font-size:20px; line-height:2px;">&nbsp;</td>
					  </tr>
					   <tr>
						<td align="center" valign="top"><table width="120" border="0" align="center" cellpadding="0" cellspacing="0">
						  <tr>
							<td align="center" valign="middle"><a href="#"><img editable="true" mc:edit="bm9-08" src="'.base_url().'Email_image/fb.png" width="40" height="40" alt="" /></a></td>
							<td align="center" valign="middle"><a href="#"><img editable="true" mc:edit="bm9-09" src="'.base_url().'Email_image/insta.png" width="40" height="40" alt="" /></a></td>
							<td align="center" valign="middle"><a href="#"><img editable="true" mc:edit="bm9-10" src="'.base_url().'Email_image/yt.png" width="40" height="40" alt="" /></a></td>
							<td align="center" style="padding-left: 5px;" valign="middle"><a href="#"><img editable="true" mc:edit="bm9-11" src="'.base_url().'Email_image/wp.png" width="32" height="32" alt="" /></a></td>
						  </tr>
						</table></td>
					  </tr>
					   <tr>
						<td height="15" align="center" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
					  </tr>
					  <tr>
						<td align="center" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:17px; color:#312e2e; font-weight:normal; line-height:24px; mc:edit="bm9-13"><multiline>15/1 Sitala Bari Road, Uttara Apartment,Barrackpore,Kol-122</multiline></td>
					  </tr>
					  <tr>
						<td align="center" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:17px; color:#312e2e; font-weight:bold; line-height:28px;" mc:edit="bm9-14"><multiline>Copyright &copy; 2019 eazyprint.in </multiline></td>
					  </tr>
					 
					  <tr>
					  <td height="10" align="center" valign="top" style="font-size:10px; line-height:10px;">&nbsp;</td>
					  </tr>
					  </table></td>
			  </tr>
			  <tr>
				   <td height="30" align="center" valign="top" bgcolor="#E0365A" style="-moz-border-radius:0px 0px 4px 4px; border-radius:0px 0px 8px 8px;"><table width="490" border="0" cellspacing="0" cellpadding="0" class="two-left-inner">
						  <tr>
						   <td height="25" align="center" valign="middle" style="line-height:25px; font-size:25px;">&nbsp;</td>
						  </tr>
						  <tr>
							<td align="center" valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; font-weight:normal; line-height:28px; text-transform:uppercase;" mc:edit="bm9-15"><multiline><a href="#" style="text-decoration:none; color:white;font-weight:bold;">Home</a>  &nbsp;&nbsp;&nbsp; <a href="#" style="text-decoration:none; color:white;font-weight:bold">Terms</a>   &nbsp;&nbsp;&nbsp;<a href="#" style="text-decoration:none; color:white;font-weight:bold">Privacy</a>  &nbsp;&nbsp;&nbsp; <a href="#" style="text-decoration:none; color:white;font-weight:bold">Support</a></td>
						  </tr>
						  <tr>
							<td height="25" align="center" valign="middle" style="line-height:25px; font-size:25px;">&nbsp;</td>
						  </tr>

						</table></td>
				  </tr>
			</table></td>
		  </tr>
		</table>


		  

		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		  <tr>
			<td align="center" valign="middle"><table width="550" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
			  <tr>
				<td height="90" align="center" valign="top" style="font-size:90px; line-height:90px;">&nbsp;</td>
			  </tr>
			</table></td>
		  </tr>
		</table>
			
			
			</td>
		  </tr>
		</table>

		<!--Main Table End-->

		</body>
		</html>';
		return $message;
	}

	public function user_regisuccess($fname,$lname,$verify_code)
	{
		$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml">
					<head>

					<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
					<title>EazyPrint Registration</title>

					<style type="text/css">

							body{width: 100%; background-color: #383434; margin:0; padding:0; -webkit-font-smoothing: antialiased;mso-margin-top-alt:0px; mso-margin-bottom-alt:0px; mso-padding-alt: 0px 0px 0px 0px;}
							
							p,h1,h2,h3,h4{margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;}
							
							span.preheader{display: none; font-size: 1px;}
							
							html{width: 100%;}
							
							table{font-size: 12px;border: 0;}
							
							.menu-space{padding-right:25px;}
							
							a,a:hover { text-decoration:none; color:#FFF;}


					@media only screen and (max-width:640px)

					{
						body {width:auto!important;}
						table [class=main] {width:440px !important;}
						table [class=two-left] {width:420px !important; margin:0px auto;}
						table [class=full] {width:100% !important; margin:0px auto;}
						table [class=two-left-inner] {width:400px !important; margin:0px auto;}
						table [class=menu-icon] { display:none;}

						}

					@media only screen and (max-width:479px)
					{
						body {width:auto!important;}
						table [class=main]  {width:350px !important;}
						table [class=two-left] {width:300px !important; margin:0px auto;}
						table [class=full] {width:100% !important; margin:0px auto;}
						table [class=two-left-inner] {width:280px !important; margin:0px auto;}
						table [class=menu-icon] { display:none;}

						
					}



					</style>

					</head>

					<body yahoo="fix" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

					<!--Main Table Start-->

					<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#383434">
					  <tr>
						<td align="center" valign="middle">
						
						
						<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
					  <tr>
						<td align="center" valign="middle"><table width="550" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
						  <tr>
							<td height="90" align="center" valign="top" style="font-size:90px; line-height:90px;">&nbsp;</td>
						  </tr>
						</table></td>
					  </tr>
					</table>

						<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
					  <tr>
						<td align="center" valign="middle"><table width="550" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
						  <tr>
							<td align="center" valign="top" bgcolor="#FFFFFF" style="-moz-border-radius: 20px 25px 0px 0px; border-radius: 8px 8px 0px 0px; border-bottom: 2px solid #E0365A;"><table width="350" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left">
							  <tr>
								 <td height="20" align="center" valign="top" style="font-size:20px; line-height:20px;">&nbsp;</td>
							  </tr>
							  <tr>
								<td align="center" valign="top">
								 <table border="0" align="center" cellpadding="0" cellspacing="0">
								  <tr>
									<td align="center" valign="middle"><a href="#"><img editable="true" mc:edit="bm17-01" src="http://eazyprint.in/beta/images/logo_header.png" width="115"  alt="" /></a></td>
								  </tr>
								</table>
							   </td>
							  </tr>
							  <tr>
								 <td height="20" align="center" valign="top" style="font-size:20px; line-height:20px;">&nbsp;</td>
							  </tr>
							</table></td>
						  </tr>
						</table></td>
					  </tr>
					</table>

						<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
					  <tr>
						<td align="center" valign="middle"><table width="550" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
						  <tr>
							<td align="center" valign="top" bgcolor="#FFFFFF"><table width="420" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left">
							
							 <tr>
								<td height="15" align="center" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
							  </tr>
							   <tr>
									<td align="left" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:24px; color:#312e2e; font-weight:normal; line-height:24px;" mc:edit="bm17-03">
										<multiline>
											Hi '.ucfirst($fname).' '.ucfirst($lname).',
										</multiline></td>
							   </tr>
							   <tr>
								 <td height="5" align="center" valign="top" style="font-size:5px; line-height:5px;">&nbsp;</td>
							  </tr>
							   <tr>
									<td align="left" valign="top" style="font-family: Open Sans, Verdana, Arial; font-size:20px; color:#E0365A; font-weight:normal; line-height:24px;" mc:edit="bm17-03">
										<multiline>
											Welcome to EazyPrint
										</multiline></td>
							   </tr>
							   <tr>
									<td height="10" align="center" valign="top" style="font-size:10px; line-height:10px;">&nbsp;</td>
								  </tr>
							  <tr>
								<td align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
								   
								  <tr>
									<td align="left" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:17px; color:#312e2e; font-weight:normal; line-height:24px; " mc:edit="bm17-05">
										<multiline>Hello! You have signed up for an account in EazyPrint.</multiline>
									</td>
								  </tr>
								  <tr>
									<td align="left" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:17px; color:#312e2e; font-weight:normal; line-height:24px; " mc:edit="bm17-05">
										<multiline>
										Please click the "Complete" button below and create your password to complete your account.
										</multiline>
									</td>
								  </tr>

								  <tr>
									<td height="20" align="center" valign="top">&nbsp;</td>
								  </tr>
								  <tr>
									<td align="center" valign="top"><table width="150" border="0" align="center" cellpadding="0" cellspacing="0">
									  <tr>
										<td height="50" align="center" valign="middle" bgcolor="#e0365a" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#FFF; font-weight:bold; -moz-border-radius: 30px; border-radius: 30px;" mc:edit="bm17-07"><multiline><a href="https://www.eazyprint.in/beta/verify_email/'.$verify_code.'" style="text-decoration:none; color:#FFF;">Complete Here</a></multiline></td>
									  </tr>
										
									</table></td>
								  </tr>
								  <tr>
									<td height="15" align="center" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
								  </tr>
								  <tr>
									<td align="left" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:17px; color:#312e2e; font-weight:normal; line-height:24px; " mc:edit="bm17-05">
										<multiline>
										If this was not you, then please ignore and delete this email.
										</multiline>
									</td>
								  </tr>
								  <tr>
									<td height="15" align="center" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
								  </tr>
								 <tr>
									<td align="left" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:17px; color:#312e2e; font-weight:normal; line-height:24px; " mc:edit="bm17-05">
										<multiline>
											Kind regards,<br/>
											EazyPrint
										</multiline>
									</td>
								</tr>
								<tr>
									<td height="15" align="center" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
								  </tr>
								<tr>
									<td style="font-family:Open Sans, Verdana, Arial; font-size:12px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
										<multiline>
											  This is an automated message from EazyPrint. Please do not reply to this message. Contact our Customer Support team using support@eazyprint.in or the telephone number(s) or chat on our website.
										</multiline>
									</td>
								</tr>

								</table></td>
							  </tr>

							  
							</table></td>
						  </tr>
						  <tr>
							<td align="center" valign="top" style="background:#FFF;border-bottom: 2px solid #E0365A;"><table width="380" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left">
								  <tr>
									<td height="20" align="center" valign="top" style="font-size:20px; line-height:2px;">&nbsp;</td>
								  </tr>
								   <tr>
									<td align="center" valign="top"><table width="120" border="0" align="center" cellpadding="0" cellspacing="0">
									  <tr>
										<td align="center" valign="middle"><a href="#"><img editable="true" mc:edit="bm9-08" src="http://eazyprint.in/beta/images/email/fb.png" width="40" height="40" alt="" /></a></td>
										<td align="center" valign="middle"><a href="#"><img editable="true" mc:edit="bm9-09" src="http://eazyprint.in/beta/images/email/insta.png" width="40" height="40" alt="" /></a></td>
										<td align="center" valign="middle"><a href="#"><img editable="true" mc:edit="bm9-10" src="http://eazyprint.in/beta/images/email/yt.png" width="40" height="40" alt="" /></a></td>
										<td align="center" style="padding-left: 5px;" valign="middle"><a href="#"><img editable="true" mc:edit="bm9-11" src="http://eazyprint.in/beta/images/email/wp.png" width="32" height="32" alt="" /></a></td>
									  </tr>
									</table></td>
								  </tr>
								   <tr>
									<td height="15" align="center" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
								  </tr>
								  <tr>
									<td align="center" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:17px; color:#312e2e; font-weight:normal; line-height:24px; mc:edit="bm9-13"><multiline>15/1 Sitala Bari Road, Uttara Apartment,Barrackpore,Kol-122</multiline></td>
								  </tr>
								  <tr>
									<td align="center" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:17px; color:#312e2e; font-weight:bold; line-height:28px;" mc:edit="bm9-14"><multiline>Copyright &copy; 2019 eazyprint.in </multiline></td>
								  </tr>
								 
								  <tr>
								  <td height="10" align="center" valign="top" style="font-size:10px; line-height:10px;">&nbsp;</td>
								  </tr>
								  </table></td>
						  </tr>
						  <tr>
							   <td height="30" align="center" valign="top" bgcolor="#E0365A" style="-moz-border-radius:0px 0px 4px 4px; border-radius:0px 0px 8px 8px;"><table width="490" border="0" cellspacing="0" cellpadding="0" class="two-left-inner">
									  <tr>
									   <td height="25" align="center" valign="middle" style="line-height:25px; font-size:25px;">&nbsp;</td>
									  </tr>
									  <tr>
										<td align="center" valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; font-weight:normal; line-height:28px; text-transform:uppercase;" mc:edit="bm9-15"><multiline><a href="#" style="text-decoration:none; color:white;font-weight:bold;">Home</a>  &nbsp;&nbsp;&nbsp; <a href="#" style="text-decoration:none; color:white;font-weight:bold">Terms</a>   &nbsp;&nbsp;&nbsp;<a href="#" style="text-decoration:none; color:white;font-weight:bold">Privacy</a>  &nbsp;&nbsp;&nbsp; <a href="#" style="text-decoration:none; color:white;font-weight:bold">Support</a></td>
									  </tr>
									  <tr>
										<td height="25" align="center" valign="middle" style="line-height:25px; font-size:25px;">&nbsp;</td>
									  </tr>

									</table></td>
							  </tr>
						</table></td>
					  </tr>
					</table>


					  

					<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
					  <tr>
						<td align="center" valign="middle"><table width="550" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
						  <tr>
							<td height="90" align="center" valign="top" style="font-size:90px; line-height:90px;">&nbsp;</td>
						  </tr>
						</table></td>
					  </tr>
					</table>
						
						
						</td>
					  </tr>
					</table>

					<!--Main Table End-->

					</body>
					</html>
					';
		return $message;
	}

	public function user_bulk($name)
	{
		$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml">
					<head>

					<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
					<title>EazyPrint Bulk Order Confirmation</title>

					<style type="text/css">

							body{width: 100%; background-color: #383434; margin:0; padding:0; -webkit-font-smoothing: antialiased;mso-margin-top-alt:0px; mso-margin-bottom-alt:0px; mso-padding-alt: 0px 0px 0px 0px;}
							
							p,h1,h2,h3,h4{margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;}
							
							span.preheader{display: none; font-size: 1px;}
							
							html{width: 100%;}
							
							table{font-size: 12px;border: 0;}
							
							.menu-space{padding-right:25px;}
							
							a,a:hover { text-decoration:none; color:#FFF;}


					@media only screen and (max-width:640px)

					{
						body {width:auto!important;}
						table [class=main] {width:440px !important;}
						table [class=two-left] {width:420px !important; margin:0px auto;}
						table [class=full] {width:100% !important; margin:0px auto;}
						table [class=two-left-inner] {width:400px !important; margin:0px auto;}
						table [class=menu-icon] { display:none;}

						}

					@media only screen and (max-width:479px)
					{
						body {width:auto!important;}
						table [class=main]  {width:350px !important;}
						table [class=two-left] {width:300px !important; margin:0px auto;}
						table [class=full] {width:100% !important; margin:0px auto;}
						table [class=two-left-inner] {width:280px !important; margin:0px auto;}
						table [class=menu-icon] { display:none;}

						
					}



					</style>

					</head>

					<body yahoo="fix" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

					<!--Main Table Start-->

					<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#383434">
					  <tr>
						<td align="center" valign="middle">
						
						
						<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
					  <tr>
						<td align="center" valign="middle"><table width="550" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
						  <tr>
							<td height="90" align="center" valign="top" style="font-size:90px; line-height:90px;">&nbsp;</td>
						  </tr>
						</table></td>
					  </tr>
					</table>

						<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
					  <tr>
						<td align="center" valign="middle"><table width="550" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
						  <tr>
							<td align="center" valign="top" bgcolor="#FFFFFF" style="-moz-border-radius: 20px 25px 0px 0px; border-radius: 8px 8px 0px 0px; border-bottom: 2px solid #E0365A;"><table width="350" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left">
							  <tr>
								 <td height="20" align="center" valign="top" style="font-size:20px; line-height:20px;">&nbsp;</td>
							  </tr>
							  <tr>
								<td align="center" valign="top">
								 <table border="0" align="center" cellpadding="0" cellspacing="0">
								  <tr>
									<td align="center" valign="middle"><a href="#"><img editable="true" mc:edit="bm17-01" src="http://eazyprint.in/beta/images/logo_header.png" width="115"  alt="" /></a></td>
								  </tr>
								</table>
							   </td>
							  </tr>
							  <tr>
								 <td height="20" align="center" valign="top" style="font-size:20px; line-height:20px;">&nbsp;</td>
							  </tr>
							</table></td>
						  </tr>
						</table></td>
					  </tr>
					</table>

						<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
					  <tr>
						<td align="center" valign="middle"><table width="550" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
						  <tr>
							<td align="center" valign="top" bgcolor="#FFFFFF"><table width="420" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left">
							
							 <tr>
								<td height="15" align="center" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
							  </tr>
							   <tr>
									<td align="left" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:24px; color:#312e2e; font-weight:normal; line-height:24px;" mc:edit="bm17-03">
										<multiline>
											Hi '.ucfirst($name).',
										</multiline></td>
							   </tr>
							   <tr>
								 <td height="5" align="center" valign="top" style="font-size:5px; line-height:5px;">&nbsp;</td>
							  </tr>
							   <tr>
									<td align="left" valign="top" style="font-family: Open Sans, Verdana, Arial; font-size:20px; color:#E0365A; font-weight:normal; line-height:24px;" mc:edit="bm17-03">
										<multiline>
											Welcome to EazyPrint
										</multiline></td>
							   </tr>
							   <tr>
									<td height="10" align="center" valign="top" style="font-size:10px; line-height:10px;">&nbsp;</td>
								  </tr>
							  <tr>
								<td align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
								   
								  <tr>
									<td align="left" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:17px; color:#312e2e; font-weight:normal; line-height:24px; " mc:edit="bm17-05">
										<multiline>Hello! Thank you for reaching to us, we will get back to you soon with your bulk order related query.</multiline>
									</td>
								  </tr>

								  <tr>
									<td height="15" align="center" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
								  </tr>
								  <tr>
									<td align="left" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:17px; color:#312e2e; font-weight:normal; line-height:24px; " mc:edit="bm17-05">
										<multiline>
										If this was not you, then please ignore and delete this email.
										</multiline>
									</td>
								  </tr>
								  <tr>
									<td height="15" align="center" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
								  </tr>
								 <tr>
									<td align="left" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:17px; color:#312e2e; font-weight:normal; line-height:24px; " mc:edit="bm17-05">
										<multiline>
											Kind regards,<br/>
											EazyPrint
										</multiline>
									</td>
								</tr>
								<tr>
									<td height="15" align="center" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
								  </tr>
								<tr>
									<td style="font-family:Open Sans, Verdana, Arial; font-size:12px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
										<multiline>
											  This is an automated message from EazyPrint. Please do not reply to this message. Contact our Customer Support team using support@eazyprint.in or the telephone number(s) or chat on our website.
										</multiline>
									</td>
								</tr>

								</table></td>
							  </tr>

							  
							</table></td>
						  </tr>
						  <tr>
							<td align="center" valign="top" style="background:#FFF;border-bottom: 2px solid #E0365A;"><table width="380" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left">
								  <tr>
									<td height="20" align="center" valign="top" style="font-size:20px; line-height:2px;">&nbsp;</td>
								  </tr>
								   <tr>
									<td align="center" valign="top"><table width="120" border="0" align="center" cellpadding="0" cellspacing="0">
									  <tr>
										<td align="center" valign="middle"><a href="#"><img editable="true" mc:edit="bm9-08" src="http://eazyprint.in/beta/images/email/fb.png" width="40" height="40" alt="" /></a></td>
										<td align="center" valign="middle"><a href="#"><img editable="true" mc:edit="bm9-09" src="http://eazyprint.in/beta/images/email/insta.png" width="40" height="40" alt="" /></a></td>
										<td align="center" valign="middle"><a href="#"><img editable="true" mc:edit="bm9-10" src="http://eazyprint.in/beta/images/email/yt.png" width="40" height="40" alt="" /></a></td>
										<td align="center" style="padding-left: 5px;" valign="middle"><a href="#"><img editable="true" mc:edit="bm9-11" src="http://eazyprint.in/beta/images/email/wp.png" width="32" height="32" alt="" /></a></td>
									  </tr>
									</table></td>
								  </tr>
								   <tr>
									<td height="15" align="center" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
								  </tr>
								  <tr>
									<td align="center" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:17px; color:#312e2e; font-weight:normal; line-height:24px; mc:edit="bm9-13"><multiline>15/1 Sitala Bari Road, Uttara Apartment,Barrackpore,Kol-122</multiline></td>
								  </tr>
								  <tr>
									<td align="center" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:17px; color:#312e2e; font-weight:bold; line-height:28px;" mc:edit="bm9-14"><multiline>Copyright &copy; 2019 eazyprint.in </multiline></td>
								  </tr>
								 
								  <tr>
								  <td height="10" align="center" valign="top" style="font-size:10px; line-height:10px;">&nbsp;</td>
								  </tr>
								  </table></td>
						  </tr>
						  <tr>
							   <td height="30" align="center" valign="top" bgcolor="#E0365A" style="-moz-border-radius:0px 0px 4px 4px; border-radius:0px 0px 8px 8px;"><table width="490" border="0" cellspacing="0" cellpadding="0" class="two-left-inner">
									  <tr>
									   <td height="25" align="center" valign="middle" style="line-height:25px; font-size:25px;">&nbsp;</td>
									  </tr>
									  <tr>
										<td align="center" valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; font-weight:normal; line-height:28px; text-transform:uppercase;" mc:edit="bm9-15"><multiline><a href="#" style="text-decoration:none; color:white;font-weight:bold;">Home</a>  &nbsp;&nbsp;&nbsp; <a href="#" style="text-decoration:none; color:white;font-weight:bold">Terms</a>   &nbsp;&nbsp;&nbsp;<a href="#" style="text-decoration:none; color:white;font-weight:bold">Privacy</a>  &nbsp;&nbsp;&nbsp; <a href="#" style="text-decoration:none; color:white;font-weight:bold">Support</a></td>
									  </tr>
									  <tr>
										<td height="25" align="center" valign="middle" style="line-height:25px; font-size:25px;">&nbsp;</td>
									  </tr>

									</table></td>
							  </tr>
						</table></td>
					  </tr>
					</table>


					  

					<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
					  <tr>
						<td align="center" valign="middle"><table width="550" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
						  <tr>
							<td height="90" align="center" valign="top" style="font-size:90px; line-height:90px;">&nbsp;</td>
						  </tr>
						</table></td>
					  </tr>
					</table>
						
						
						</td>
					  </tr>
					</table>

					<!--Main Table End-->

					</body>
					</html>
					';
		return $message;
	}

	public function admin_bulk($name,$email,$phone,$category,$quantity)
	{
		$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
						<html xmlns="http://www.w3.org/1999/xhtml">
						<head>

						<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
						<title>EazyPrint Bulk Order</title>

						<style type="text/css">

								body{width: 100%; background-color: #383434; margin:0; padding:0; -webkit-font-smoothing: antialiased;mso-margin-top-alt:0px; mso-margin-bottom-alt:0px; mso-padding-alt: 0px 0px 0px 0px;}
								
								p,h1,h2,h3,h4{margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;}
								
								span.preheader{display: none; font-size: 1px;}
								
								html{width: 100%;}
								
								table{font-size: 12px;border: 0;}
								
								.menu-space{padding-right:25px;}
								
								a,a:hover { text-decoration:none; color:#FFF;}


						@media only screen and (max-width:640px)

						{
							body {width:auto!important;}
							table [class=main] {width:440px !important;}
							table [class=two-left] {width:420px !important; margin:0px auto;}
							table [class=full] {width:100% !important; margin:0px auto;}
							table [class=two-left-inner] {width:400px !important; margin:0px auto;}
							table [class=menu-icon] { display:none;}

							}

						@media only screen and (max-width:479px)
						{
							body {width:auto!important;}
							table [class=main]  {width:350px !important;}
							table [class=two-left] {width:300px !important; margin:0px auto;}
							table [class=full] {width:100% !important; margin:0px auto;}
							table [class=two-left-inner] {width:280px !important; margin:0px auto;}
							table [class=menu-icon] { display:none;}

							
						}



						</style>

						</head>

						<body yahoo="fix" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

						<!--Main Table Start-->

						<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#383434">
						  <tr>
							<td align="center" valign="middle">
							
							
							<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
						  <tr>
							<td align="center" valign="middle"><table width="550" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
							  <tr>
								<td height="90" align="center" valign="top" style="font-size:90px; line-height:90px;">&nbsp;</td>
							  </tr>
							</table></td>
						  </tr>
						</table>

							<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
						  <tr>
							<td align="center" valign="middle"><table width="550" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
							  <tr>
								<td align="center" valign="top" bgcolor="#FFFFFF" style="-moz-border-radius: 20px 25px 0px 0px; border-radius: 8px 8px 0px 0px; border-bottom: 2px solid #E0365A;"><table width="350" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left">
								  <tr>
									 <td height="20" align="center" valign="top" style="font-size:20px; line-height:20px;">&nbsp;</td>
								  </tr>
								  <tr>
									<td align="center" valign="top">
									 <table border="0" align="center" cellpadding="0" cellspacing="0">
									  <tr>
										<td align="center" valign="middle"><a href="#"><img editable="true" mc:edit="bm17-01" src="http://eazyprint.in/beta/images/logo_header.png" width="115"  alt="" /></a></td>
									  </tr>
									</table>
								   </td>
								  </tr>
								  <tr>
									 <td height="20" align="center" valign="top" style="font-size:20px; line-height:20px;">&nbsp;</td>
								  </tr>
								</table></td>
							  </tr>
							</table></td>
						  </tr>
						</table>

							<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
						  <tr>
							<td align="center" valign="middle"><table width="550" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
							  <tr>
								<td align="center" valign="top" bgcolor="#FFFFFF"><table width="420" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left">
								
								 <tr>
									<td height="15" align="center" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
								  </tr>
								   <tr>
										<td align="left" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:24px; color:#312e2e; font-weight:normal; line-height:24px;" mc:edit="bm17-03">
											<multiline>
												Hi Admin,
											</multiline></td>
								   </tr>
								   <tr>
									 <td height="5" align="center" valign="top" style="font-size:5px; line-height:5px;">&nbsp;</td>
								  </tr>
								   <tr>
										<td align="left" valign="top" style="font-family: Open Sans, Verdana, Arial; font-size:20px; color:#E0365A; font-weight:normal; line-height:24px;" mc:edit="bm17-03">
											<multiline>
												Bulk Order
											</multiline></td>
								   </tr>
								   <tr>
										<td height="10" align="center" valign="top" style="font-size:10px; line-height:10px;">&nbsp;</td>
									  </tr>
								  <tr>
									<td align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
									   
									  <tr>
										<td align="left" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:17px; color:#312e2e; font-weight:normal; line-height:24px; " mc:edit="bm17-05">
											<multiline>
											Hello! New bulk order received. Here are the details below,
											<li>Name : '.$name.'</li>
											<li>Email : '.$email.'</li>
											<li>Phone : '.$phone.'</li>
											<li>Category : '.$category.'</li>
											<li>Quantity : '.$quantity.'</li>
											</multiline>
										</td>
									  </tr>
									  <tr>
										<td height="15" align="center" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
									  </tr>
									   <tr>
										<td align="left" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:17px; color:#312e2e; font-weight:normal; line-height:24px; " mc:edit="bm17-05">
											<multiline>
											Please visit bulk request page by clicking the "Bulk Order" button below and process this order.
											</multiline>
										</td>
									  </tr>

									  <tr>
										<td height="20" align="center" valign="top">&nbsp;</td>
									  </tr>
									  <tr>
										<td align="center" valign="top"><table width="150" border="0" align="center" cellpadding="0" cellspacing="0">
										  <tr>
											<td height="50" align="center" valign="middle" bgcolor="#e0365a" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#FFF; font-weight:bold; -moz-border-radius: 30px; border-radius: 30px;" mc:edit="bm17-07"><multiline><a href="https://www.eazyprint.in/beta/admin/" style="text-decoration:none; color:#FFF;">Bulk Order Here</a></multiline></td>
										  </tr>
											
										</table></td>
									  </tr>
									  <tr>
										<td height="15" align="center" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
									  </tr>
									  <tr>
										<td align="left" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:17px; color:#312e2e; font-weight:normal; line-height:24px; " mc:edit="bm17-05">
											<multiline>
											If this was not you, then please ignore and delete this email.
											</multiline>
										</td>
									  </tr>
									  <tr>
										<td height="15" align="center" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
									  </tr>
									 <tr>
										<td align="left" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:17px; color:#312e2e; font-weight:normal; line-height:24px; " mc:edit="bm17-05">
											<multiline>
												Kind regards,<br/>
												EazyPrint
											</multiline>
										</td>
									</tr>
									<tr>
										<td height="15" align="center" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
									  </tr>
									<tr>
										<td style="font-family:Open Sans, Verdana, Arial; font-size:12px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
											<multiline>
												  This is an automated message from EazyPrint. Please do not reply to this message. Contact our Customer Support team using support@eazyprint.in or the telephone number(s) or chat on our website.
											</multiline>
										</td>
									</tr>

									</table></td>
								  </tr>

								  
								</table></td>
							  </tr>
							  <tr>
								<td align="center" valign="top" style="background:#FFF;border-bottom: 2px solid #E0365A;"><table width="380" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left">
									  <tr>
										<td height="20" align="center" valign="top" style="font-size:20px; line-height:2px;">&nbsp;</td>
									  </tr>
									   <tr>
										<td align="center" valign="top"><table width="120" border="0" align="center" cellpadding="0" cellspacing="0">
										  <tr>
											<td align="center" valign="middle"><a href="#"><img editable="true" mc:edit="bm9-08" src="http://eazyprint.in/beta/images/email/fb.png" width="40" height="40" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img editable="true" mc:edit="bm9-09" src="http://eazyprint.in/beta/images/email/insta.png" width="40" height="40" alt="" /></a></td>
											<td align="center" valign="middle"><a href="#"><img editable="true" mc:edit="bm9-10" src="http://eazyprint.in/beta/images/email/yt.png" width="40" height="40" alt="" /></a></td>
											<td align="center" style="padding-left: 5px;" valign="middle"><a href="#"><img editable="true" mc:edit="bm9-11" src="http://eazyprint.in/beta/images/email/wp.png" width="32" height="32" alt="" /></a></td>
										  </tr>
										</table></td>
									  </tr>
									   <tr>
										<td height="15" align="center" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
									  </tr>
									  <tr>
										<td align="center" valign="top" style="font-family:Open Sans, sans-serif, Verdana; font-size:17px; color:#312e2e; font-weight:normal; line-height:24px; mc:edit="bm9-13"><multiline>15/1 Sitala Bari Road, Uttara Apartment,Barrackpore,Kol-122</multiline></td>
									  </tr>
									  <tr>
										<td align="center" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:17px; color:#312e2e; font-weight:bold; line-height:28px;" mc:edit="bm9-14"><multiline>Copyright &copy; 2019 eazyprint.in </multiline></td>
									  </tr>
									 
									  <tr>
									  <td height="10" align="center" valign="top" style="font-size:10px; line-height:10px;">&nbsp;</td>
									  </tr>
									  </table></td>
							  </tr>
							  <tr>
								   <td height="30" align="center" valign="top" bgcolor="#E0365A" style="-moz-border-radius:0px 0px 4px 4px; border-radius:0px 0px 8px 8px;"><table width="490" border="0" cellspacing="0" cellpadding="0" class="two-left-inner">
										  <tr>
										   <td height="25" align="center" valign="middle" style="line-height:25px; font-size:25px;">&nbsp;</td>
										  </tr>
										  <tr>
											<td align="center" valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; font-weight:normal; line-height:28px; text-transform:uppercase;" mc:edit="bm9-15"><multiline><a href="#" style="text-decoration:none; color:white;font-weight:bold;">Home</a>  &nbsp;&nbsp;&nbsp; <a href="#" style="text-decoration:none; color:white;font-weight:bold">Terms</a>   &nbsp;&nbsp;&nbsp;<a href="#" style="text-decoration:none; color:white;font-weight:bold">Privacy</a>  &nbsp;&nbsp;&nbsp; <a href="#" style="text-decoration:none; color:white;font-weight:bold">Support</a></td>
										  </tr>
										  <tr>
											<td height="25" align="center" valign="middle" style="line-height:25px; font-size:25px;">&nbsp;</td>
										  </tr>

										</table></td>
								  </tr>
							</table></td>
						  </tr>
						</table>


						  

						<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
						  <tr>
							<td align="center" valign="middle"><table width="550" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
							  <tr>
								<td height="90" align="center" valign="top" style="font-size:90px; line-height:90px;">&nbsp;</td>
							  </tr>
							</table></td>
						  </tr>
						</table>
							
							
							</td>
						  </tr>
						</table>

						<!--Main Table End-->

						</body>
						</html>
					';
		return $message;
	}

}