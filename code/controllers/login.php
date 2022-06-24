<?php
class login{

	public static function ingresoController(){
		if(isset($_POST["emailIngreso"])){
			if((filter_var($_POST["emailIngreso"], FILTER_VALIDATE_EMAIL)) == true){
				//$hash = password_hash($_POST["passwordIngreso"], PASSWORD_DEFAULT, ['cost'=>10]);
			  	$encriptar = crypt($_POST["passwordIngreso"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
				$data = array("email"=>$_POST["emailIngreso"],"pass"=>$encriptar);
				$respuesta = IngresoModels::ingresoModel($data);

				if (!empty($respuesta)) {
					
					if($respuesta["email"] == $_POST["emailIngreso"] && $respuesta["pass"]==$encriptar && $respuesta["rol_id"]==2){
						$_SESSION["cliente"] = true;
						$_SESSION["usuario"] = $respuesta["usuario"];
						$_SESSION["id"] = $respuesta["id"];
						return array('status'=>'success', 'detail'=>'Redireccionando');
						
					}else if($respuesta["email"] == $_POST["emailIngreso"] && $respuesta["pass"]==$encriptar && $respuesta["rol_id"]==1){
						$_SESSION["admin"] = true;
						$_SESSION["usuario"] = $respuesta["usuario"];
						$_SESSION["id"] = $respuesta["id"];
						return array('status'=>'admin', 'detail'=>'Redireccionando');
					}

					else{
						return array('status'=>'warning', 'detail'=>'Usuario/Contraseña Incorrectos');
					}

				}else{
					return array('status'=>'info', 'detail'=>'Parece que este usuario no existe');
				}
				
			}else{
				return array('status'=>'info', 'detail'=>'Caracteres no permitidos');
			}
		}
	}


	public static function registroController(){
		if(isset($_POST["login"])){

			$username = (isset($_POST['username'])?$_POST['username']:'');
			$email = (isset($_POST['email'])?$_POST['email']:'');
			$password = (isset($_POST['password'])?$_POST['password']:'');
			$confirm = (isset($_POST['passwordconfirm'])?$_POST['passwordconfirm']:'');

			if ($username!= '' OR $email != '' OR $password != '' OR $confirm != '') {
				if ($password == $confirm) {

					if(preg_match('/^[a-zA-Z0-9]+$/', $username)){

						$Verifyemail = IngresoModels::verificarEmailModel($email);
						if (empty($Verifyemail)) {
							$encriptar = crypt($password, '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
							$data = array(
								"usuario"=>$username,
								"email"=>$email,
								"pass"=>$encriptar
							);
							$respuesta = IngresoModels::registroModel($data);
							return $respuesta;
						} else {
							return array('status'=>'danger', 'detail'=>'El email esta vinculado a otra cuenta');
						}

					}else{
						return array('status'=>'warning', 'detail'=>'El nombre de usuario no debe contener caracteres especiales');
					}
				} else {
					return array('status'=>'warning', 'detail'=>'Las constraseñas deben coincidir');
				}
			} else {
				return array('status'=>'warning', 'detail'=>'Debes llenar todos los campos');
			}
		}
	}


	public static function passwordRecovery(){
		if(isset($_POST["sendcode"])){
			$email = (isset($_POST['emailRecovery'])?$_POST['emailRecovery']:'');
			if((filter_var($email, FILTER_VALIDATE_EMAIL)) == true){
				$user = IngresoModels::searchUser($email);
				
				if (!empty($user)){
					$code = self::generateCode();
					$idr = $user['id'];
					$emailr = $user['email'];
					$data = array(
						"id"=>$idr,
						"code"=>$code
					);
					$response = IngresoModels::insertCode($data);
					if ($response['status']=='success'){
						$sendemail = IngresoModels::sendEmail($code,$emailr);
						if ($sendemail['status']=='success'){
							$nuevovalor = 'screen2';
							$_SESSION['code'] = $nuevovalor;
							$dataresponse = array('id'=>$idr, 'email'=>$emailr);
							$_SESSION['codeData'] = $dataresponse;
							return $response;
						}else{
							return $response;
						}
					} else {
						$nuevovalor = 'screen1';
						$_SESSION['code'] = $nuevovalor;
						return $response;
					}
				} else {
					return array('status'=>'danger', 'detail'=>'El usuario no existe');
				}
			}else{
				return array('status'=>'warning', 'detail'=>'Email invalido');
			}
		}elseif(isset($_POST["entercode"])){
			$code = (isset($_POST['code'])?$_POST['code']:'');
			if (preg_match("/^[A-Z0-9]+$/", $_POST["code"])) {

				$data = array(
					"id"=>$_SESSION['codeData']['id'],
					"email"=>$_SESSION['codeData']['email'],
					"code"=>$code
				);
				$response = IngresoModels::searchUserCode($data);
				if (!empty($response)) {
					$nuevovalor = 'screen3';
					$_SESSION['code'] = $nuevovalor;
				} else {
					return array('status'=>'danger', 'detail'=>'Código erroneo');
				}
			} else {
				return array('status'=>'danger', 'detail'=>'Los caracteres no son validos');
			}
			
		}elseif(isset($_POST['changepassword'])){

			$password = (isset($_POST['password'])?$_POST['password']:'');
			$confirm = (isset($_POST['passwordconfirm'])?$_POST['passwordconfirm']:'');

			if ($password != '' OR $confirm != '') {
				if ($password == $confirm) {

					$encriptar = crypt($password, '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
					$data = array(
						"id"=>$_SESSION['codeData']['id'],
						"pass"=>$encriptar
					);
					$respuesta = IngresoModels::updatePassword($data);
					
					return $respuesta;
					
				} else {
					return array('status'=>'warning', 'detail'=>'Las constraseñas deben coincidir');
				}
			} else {
				return array('status'=>'warning', 'detail'=>'Debes llenar todos los campos');
			}
		}else{
			$nuevovalor = 'screen1';
			$_SESSION['code'] = $nuevovalor;
		}
	}

	
	public static function generateCode(){
		$length = 8;
		$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
		return substr( str_shuffle($chars), 0, $length);
	}



	


}
