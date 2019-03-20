<?php 
$name=$_POST['name'];
$phone=$_POST['phone'];
$mail=$_POST['email'];


if(!$_POST['g-recaptcha-response'])
	echo "Need to fill reCaptcha",'<br />';
else {
	

	$b=false;
	$a=false;

	#проверка фио
	$b=true;
	if(strlen($name)<2 && ord( $name[$i+1])<208)
		$b=false;
	$name=str_replace (' ','  ',$name);

	for($i=1;$i<strlen($name);$i=$i+2)
	{
		#echo ord( $name[$i-1]), ord( $name[$i]),' ',$i, '<br />';
		if(ord( ($name[$i])<=191 && ord($name[$i])>=144 || ord($name[$i])==129) && $i%2==1 && ord( $name[$i-1])==208 || (ord( $name[$i])<=143 && ord($name[$i])>=128 || ord($name[$i])==145) && $i%2==1 && ord( $name[$i-1])==209)
			;
		else {
			$b=false;
		}
		if($i<strlen($name)-1 && ord( $name[$i+1])<208)
			$b=false;
		if(ord( $name[$i])==32)
			$b=true;
	}
	$a=$b;

	if($b==false)
	{
		echo "Error input name", '<br />';
	
	}

	$b=false;
	#проверка номера телефона
	$b=($phone[0]=='+' && $phone[1]=='7' && strlen($phone)==12) || ($phone[0]=='8' && strlen($phone)==11);
	for($i=0;$i<strlen($phone);$i++)
	{
		if((int)$phone[$i]<10 && (int)$phone[$i]>=0)
		;
		else {
		$b=false;
		}
	}


	$a=$b && $a;
	if($b==false)
	{
		echo "Error input phone", '<br />';
	
	}

	$b=false;
	#проверка почты
	$b=filter_var($mail,FILTER_VALIDATE_EMAIL);
	if($b==false)
	{
		echo "Error input email", '<br />';
	
	}
	$a=$b && $a;


	if($a) {
		echo "Success" ;

	}
		else {
		echo "oh,Sorry form did not pass"  ;
	
	} 


}
///*
$url= 'https://www.google.com/recaptcha/api/siteverify'; 
$key="6LfNXZgUAAAAAJ5fM5ruZX0CiFIF7ju87vwnsq-t"; 
$query= $url.'?secret='.$key.'&response='.$_POST['g-recaptcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR']; 




$data= json_decode(file_get_contents($query)); 
if ( $data-> success == false) 
	exit("wrong captcha entered"); 


?>