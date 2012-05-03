<?php

$z=0;
		do
			{
			

$database ="smsd";
$koneksi = mysql_connect("localhost","root","");
mysql_select_db($database);



		$warnagenap="#CCCCCC";//Warna ABUABU
		$warnaganjil="#FFFFFF"; //Warna abu abu
		$warnaheading="#CCFFFF"; //Warna black
		$sql_baca=mysql_query("SELECT * FROM inbox");
		$row=mysql_fetch_row($sql_baca);
	    $TextDecoded1="";

		
		if (empty($row)){
			echo"<b><font size=5 color=blue>Tabel Inbox Kosong..!!!</b></font>";
		}else
			{
			echo"<table border=1 align='center'>";
			echo"<tr bgcolor='".$warnaheading."'>";
			echo"<td>Nomor HP</td>";
			echo"<td><center>Isi</center></td>";
		
			echo"<tr>";
		do
			{
			list($UpdatedInDB, $ReceivingDateTime, $Text, $SenderNumber ,$Coding, $UDH, $SMSCNumber, $Class, $TextDecoded, $ID, $RecipientID, $Processed)=$row;
			$i=1;
			if ($i%2==0)
			$warna=$warnagenap;
			else $warna=$warnaganjil;
			$TextDecoded1=$TextDecoded;
		
			echo"<tr bgcolor='".$warna."'>";
			echo"<td><center>$SenderNumber</center></td>";
			echo"<td><center>$TextDecoded</center></td>";
			
			echo"<tr>";
			$i++;
			}
			while ($row=mysql_fetch_row($sql_baca));
			echo $TextDecoded1;
		}	
		
		
		
	//PR membuang kata aviari kalo sms : beras-aviari

	
	//ngambil data id master
	$sql_baca="SELECT * FROM master WHERE kelompok_barang='$TextDecoded'";
	$row=mysql_fetch_row($sql_baca);
	$sql_data=mysql_query($sql_baca);
	$data=mysql_fetch_array($sql_data);
    
	     
	$xid     =$data['id'];

   
   //menghubungkan id master dengan barang
    $sql_baca="SELECT * FROM barang WHERE master_id='$xid'";
	$row=mysql_fetch_row($sql_baca);
	$sql_data=mysql_query($sql_baca);
	$data=mysql_fetch_array($sql_data);
    
	    
	$xid     =$data['id'];
    $xmaster_id    =$data['master_id'];
    $xharga    =$data['harga'];
    $xpasar_id    =$data ['pasar_id'];
   
   
	$TextDecoded="$xharga";
	
   $server='localhost';
   $user='root';
   $pass='';
   $db='smsd';
   $tb='outbox';
   mysql_connect($server,$user,$pass) or die ('Koneksi Ke Server MySQL Gagal...!!!!');
   @mysql_select_db($db) or die('salah');
   	
	$DestinationNumber= $SenderNumber;
	$Text='';
	
	
	
	
   $tabel = "insert into $tb values ('$UpdatedInDB','$InsertIntoDB','$SendingDateTime', '$Text', '$DestinationNumber', '$Coding', '$UDH', '$Class',           '$TextDecoded', '$ID', '$MultiPart', '$RelativeValidity', '$SenderID', '$SendingTimeOut', '$DeliveryReport', '$CreatorID')";
		 
   mysql_query($tabel) or die('salah');
    mysql_close();




$z++;

			
			
			
			//mendelete isi di tabel inbox
			//$server='localhost';
			//$user='root';
  			//$pass='';
   			//$db='smsd';
   			//$tb='inbox';
			
			$database ="smsd";
			$koneksi = mysql_connect("localhost","root","");
			mysql_select_db($database);
			//echo $tb;
  			//mysql_connect($server,$user,$pass) or die ('Koneksi Ke Server MySQL Gagal...!!!!');
			//@mysql_select_db($db) or die('salah');
			
			
			$sql_hapus="DELETE FROM inbox";
			mysql_query($sql_hapus);

		
	}
			
			while ($z<2);		

			
 
?>