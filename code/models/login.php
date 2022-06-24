<?php
require_once "connection.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class IngresoModels{
	
	public static function ingresoModel($data){
		$stmt = connection::conex()->prepare("SELECT id, usuario,email, pass, rol_id FROM usuario WHERE email = :email");
		$stmt -> bindParam(":email", $data["email"], PDO::PARAM_STR);
		$stmt -> execute();
		return $stmt -> fetch();
	}

	public static function registroModel($data){
		$stmt = connection::conex()->prepare('INSERT INTO usuario(id, usuario, email, pass, rol_id) VALUES (null, :usuario, :email, :pass , 2)');
	   	$stmt->bindParam(":usuario", $data['usuario'], PDO::PARAM_STR);
	   	$stmt->bindParam(":email", $data['email'], PDO::PARAM_STR);
	   	$stmt->bindParam(":pass", $data['pass'], PDO::PARAM_STR);

		if ($stmt->execute())
		{
			return array('status'=>'success', 'detail'=>'Usuario Registrado Satisfactoriamente');
		}
		else
		{
			return array('status'=>'danger', 'detail'=>'Datos no ingresados');
		}
	}

	public static function verificarEmailModel($email){
		$stmt=connection::conex()->prepare('SELECT * FROM usuario WHERE email=:email');
		$stmt->bindParam(":email", $email, PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetch();
	}

	public static function insertCode($data){
		$stmt = connection::conex()->prepare('UPDATE usuario SET code=:code WHERE id = :id');
	   	$stmt->bindParam(":id", $data['id'], PDO::PARAM_INT);
		$stmt->bindParam(":code", $data['code'], PDO::PARAM_STR);

		if ($stmt->execute())
		{
			return array('status'=>'success', 'detail'=>'Codigo generado satisfactoriamente');
		}
		else
		{
			return array('status'=>'danger', 'detail'=>'Datos no ingresados');
		}
	}


	public static function searchUser($email){
		$stmt = connection::conex()->prepare("SELECT id, email FROM usuario WHERE email = :email");
		$stmt -> bindParam(":email", $email, PDO::PARAM_STR);
		$stmt -> execute();
		return $stmt -> fetch();
	}


	public static function searchUserCode($data){
		$stmt = connection::conex()->prepare("SELECT id, email,code FROM usuario WHERE id=:id AND email=:email AND code=:code");
		$stmt -> bindParam(":id", $data['id'], PDO::PARAM_INT);
		$stmt -> bindParam(":email", $data['email'], PDO::PARAM_STR);
		$stmt -> bindParam(":code", $data['code'], PDO::PARAM_STR);
		$stmt -> execute();
		return $stmt -> fetch();
	}


	public static function updatePassword($data){
		$stmt = connection::conex()->prepare('UPDATE usuario SET pass=:pass WHERE id = :id');
	   	$stmt->bindParam(":id", $data['id'], PDO::PARAM_INT);
		$stmt->bindParam(":pass", $data['pass'], PDO::PARAM_STR);

		if ($stmt->execute())
		{
			return array('status'=>'change', 'detail'=>'Contraseña actualizada satisfactoriamente');
		}
		else
		{
			return array('status'=>'danger', 'detail'=>'Datos no modificados');
		}
	}


	public static function sendEmail($code, $receptor){
		$mail = new PHPMailer(true);
		$correo = 'hotys2021perfumeria@gmail.com';
		$pass = 'hotys1234';

		try {
			//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = $correo;
			$mail->Password = $pass;
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			$mail->Port = 587;

			$mail->setFrom($correo, 'Hotys');
			$mail->addAddress($receptor, 'Receptor');
			//$mail->addCC($correo);
			//$mail->addAttachment('docs/dashboard.png', 'Dashboard.png');

			$mail->isHTML(true);
			$mail->Subject = 'Access Code';
			$mail->Body = 'Hola, <br/>este es su código de acceso:</b>.<h4>'.$code.'</h4>';
			$mail->send();
			return array('status'=>'success', 'detail'=>'Código enviado satisfactoriamente');
		} catch (Exception $e) {
			return array('status'=>'danger', 'detail'=>$mail->ErrorInfo);
		}
	}

}
