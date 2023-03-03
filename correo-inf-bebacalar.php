<?php 

	if (
		!empty($_POST['FNAME'])&&
		!empty($_POST['EMAIL'])&&
		!empty($_POST['PHONE'])&&
		!empty($_POST['MESSAGE'])
	) {	
		require 'PHPMailer/PHPMailerAutoload.php';

		$mail = new PHPMailer;

		//$mail->SMTPDebug = 3;                               // Enable verbose debug output

		
		// ENVIO DE CORREO
			$mail->isSMTP();                                  // Set mailer to use SMTP
			
			$mail->Host = 'mail.bebacalar.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'azure@bebacalar.com';                 // SMTP username
			$mail->Password = 'ZVsz4D2b6~[Y';                          // SMTP password
			
			$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 465;                                    // TCP port to connect to
			// $mail­->SMTPDebug = 2;

			$mail->Helo = "azure@bebacalar.com'";

			$mail->setFrom($_POST['EMAIL'], $_POST['FNAME']);
			$mail->addReplyTo($_POST['EMAIL'], $_POST['FNAME']); // [!] Si se cambia esta dirección, no 

			// $mail->addAddress('trie.soporte@gmail.com', 'Soporte de TRIE');
			$mail->addAddress('azure@bebacalar.com', 'Bebacalar');
			/* $mail->addAddress('lcattorini@itmdesarrolladores.com', 'ITM Desarrolladores');
			$mail->addAddress('gmiranda@itmdesarrolladores.com', 'ITM Desarrolladores');
			$mail->addAddress('comercial@itmdesarrolladores.com', 'ITM Desarrolladores');
			$mail->addAddress('seguimiento@itmdesarrolladores.com', 'ITM Desarrolladores');
			$mail->addAddress('testigoweb@residencialalborada.com', 'Residencial Alborada');
			$mail->addAddress('trie.cliente83@gmail.com', 'Marketing TRIE'); */

			$mail->Body = '
					<div style="background: #F3F3F3; width: 100%; padding: 30px;">
						<div style="width: 570px; padding: 30px 15px; margin: auto; background: white">
							<div style="text-align: center;">
								<p>Nuevo mensaje desde la landing page <strong>bebacalar</strong></p>
							</div>
							<table border="0" style="color: gray;">
								<tbody>
									<tr>
										<td>Nombre:</td>
										<td>'.$_POST['FNAME'].'</td>
									</tr>
									<tr>
										<td>Email:</td>
										<td><a style="text-decoration: none;" href="mailto:'.$_POST['EMAIL'].'">'.$_POST['EMAIL'].'</a></td>
									</tr>
									<tr>
										<td>Teléfono:</td>
										<td><a style="text-decoration: none;" href="tel:'.$_POST['PHONE'].'">'.$_POST['PHONE'].'</a></td>
									</tr>
									<tr>
										<td>Mensaje:</td>
										<td>'.$_POST['MESSAGE'].'</td>
									</tr>
								</tbody>
							</table>

							<hr style="border: 1px solid #2b5584; margin: 50px 15px 0;">
						</div>
					</div>';
			$mail->CharSet = 'UTF-8';

			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = $_POST['FNAME']. ' ' .$_POST['EMAIL'];

		$mail->send();
	} else {
		header("Location: pages/Page_error.php");
	}

		
?>