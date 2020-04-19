<?php	
	
			
			$MobileNum = $_POST['appen'];
			$SenderID = 'SComps';
			$Usename = 'shubhamcomputers';
			$AuthKey = 'scomps@101';
			$a = $_POST['name'];			
			$b = $_POST['subject'];			
			$c = $_POST['appe'];
			$d = $_POST['address'];
			$p = $_POST['contact'];
			$Message = urlencode("Dear $c ,you have an enquiry regarding $b from $a .His contact details are as follows:-Phno.:$p,Address:$d");
	
			$api = 'http://5.189.153.48:8080/vendorsms/pushsms.aspx?fl=0&gwid=2&user='.$Usename.'&password='.$AuthKey.'&sid='.$SenderID.'&msg='.$Message.'&msisdn='.$MobileNum;
			$Message = htmlspecialchars($Message);
			$curl = curl_init();
			curl_setopt($curl,CURLOPT_URL,$api);
			curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
			echo curl_exec($curl);
			echo "  SMS sent";
			header('Location:EnquiryForm.php');
			?>