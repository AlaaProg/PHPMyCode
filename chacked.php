<?php

/* # Exm :
			require 'chacked.php';
			$pass = "$BoyProg2017!";
			$check = new Checked();
			if ($check->check_passwrod($pass)){
				echo explode("-", $check->power_passwrod($pass))[0];
				echo "\n";
			}
*/

/* # Checked:
		1-> check_user
	    2-> check_email
	    3-> check_passBegin
	    4-> check_passA_Z
	    5-> check_pass9_0
	    6-> power_passwrod
	    7-> check_pass0_9
*/


class Checked{

	// Checked userName $
	function check_user($user){if (strlen($user) > 4 and preg_match("/^([a-zA-Z-0-9-_\.\-])+$/", $user)){return 1;}else{return 0;}}
	// Checked E-mail $
	function check_email($email){if (preg_match("/(\w{3,30})+@(\w{|gmail|yahoo|outlook|hotmail|mail|})+\.(\w{2,5})+$/", $email)){return 1;}else{ return 0;}}
 	// Checked Passwrod If start with aA to zZ |or| !@#$%^&* return 1 elser return 0 ;
	function check_passBegin($password){if (strlen($password) > 7 and preg_match("/^([a-zA-Z-_\.\-!@#$%^&*])|^([!@#$%^&*])/", $password)){return 1;}else{return 0;}}
	// Checked Passwrod If One aA to zZ |or| !@#$%^&*  in password  return 1 elser return 0 ;
	function check_passA_Z($password){if (strlen($password) > 7 and preg_match("/([a-zA-Z-_\.\-!@#$%^&*\(\)-+=-_\.\-])/", $password)){return 1;}else{return 0;}}
	// Checked Passwrod If number(0,9) len=12 return 1 elser return 0 ;
	function check_pass9_0($password){if (strlen($password) > 11 and preg_match("/([0-9-_\.\-])/", $password)){return 1;}else{return 0;}}
	// Checked Passwrod If number like '123-114-1_ or asdfa-asdf_asdf-@' len=10 return 1 else return 0 ;
	function check_pass0_9($password){if (strlen($password) > 9 and preg_match("/^([0-9a-zA-Z!@#$%^&*])+([\.\-_])/", $password)){return 1;}else{return 0;}}

	function power_passwrod($password){
		$power = "";
		$number = preg_match("/([0-9-0])/", $password);
		$word = preg_match("/([a-zA-Z])/", $password);
		$reg_ = preg_match("/([!@#\$%\^&\*\-_\.])/", $password);
		if ($number and $word and $reg_){$power.="Very Good-";}
		if ($word and $reg_){$power.="Very Good-";}
		if ($number and $reg_){$power.="Very Good-";}
		if ($number and $word){$power.="Good-";}
		if ($reg_){$power.="Good-";}
		if ($word){$power.="Good-";}
		if ($number){$power.="Bady";}

		return explode("-", $check->power_passwrod($pass));
	}
	

}