<?
    session_start();
   include "koneksi.php";
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	color: #FFFFFF;
	font-weight: bold;
}
body {
	background-image: url();
	background-color: #FF9900;
}
body,td,th {
	color: #FF0000;
}
.style2 {color: #FFFFFF}
-->
</style>
</head>

<body>

<script type='text/javascript'>
function createRequestObject() {
    var ro;
    var browser = navigator.appName;
    if(browser == "Microsoft Internet Explorer"){
        ro = new ActiveXObject("Microsoft.XMLHTTP");
    }else{
        ro = new XMLHttpRequest();
    }
    return ro;
}

var xmlhttp = createRequestObject();
function dtnmbarang()
{
    var kode = document.getElementById("id_barang").value;
    // var kode = combobox.value;
    if (!kode) return;
    xmlhttp.open('get', 'anbarang.php?kode='+kode, true);
    xmlhttp.onreadystatechange = function() {
        if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200))
             
	//		 document.getElementById('nm_obat').value = xmlhttp.responseText;
  		      var zdata = xmlhttp.responseText;
			 var zdata = xmlhttp.responseText;
			  pnama_barang=zdata.search(/_/i);
			  pharga_jual=zdata.search(/=/i);
			  pharga_beli=zdata.search(/,/i);
			  pid_pasar=zdata.search(/-/i);
			  pid_user=zdata.search(/!/i);
			 
			  document.getElementById('nama_barang').value = zdata.slice(0,pnama_barang); 
			  document.getElementById('harga_jual').value = zdata.slice((pnama_barang+1),pharga_jual); 
			  document.getElementById('harga_beli').value = zdata.slice((pharga_jual+1),pharga_beli);
			  document.getElementById('id_pasar').value = zdata.slice((pharga_beli+1),pid_pasar); 
			  document.getElementById('id_user').value = zdata.slice((pid_pasar+1),pid_user); 
			    
			 // document.getElementById('alamat').value = zdata.slice((psatuan+1),pharga); 
			//  document.getElementById('harga').value = zdata.slice((pharga+1),pakhir); 

		return false;
    }
   xmlhttp.send(null);       
}


function dtid_barang()
{
   dtnmbarang();    
  
}

/*function dttotal()
{
var zjumlah = document.getElementById("jumlah").value * 1;
var  zharga = document.getElementById("harga").value * 1;
var	ztotal = document.getElementById("jumlah").value * document.getElementById("harga").value;
//document.getElementById("tanggal").value = zharga;   //tanpa div id
document.getElementById("total").innerHTML = '<input type="text" size="8" name="total" value ='+ztotal+'>'; //pakai div id


}*/
</script>

<form id="FInputBarang" name="FInputBarang" method="post" >
  <p>&nbsp;</p>
  <table width="318" border="0" align="center" bgcolor="#CC3300">
    <tr>
      <td colspan="2" bgcolor="#CC3300"><div align="center" class="style1">
        <p>DATA BARANG</p>
      </div></td>
    </tr>
    <tr>
      <td width="127" bgcolor="#CC3300"><span class="style2">ID Barang</span></td>
      <td width="175" bgcolor="#CC3300"><span class="style2">
        <label>
        <input name="id_barang" type="text" id="id_barang" OnKeyUp="dtid_barang()"/>
        </label>
      </span></td>
    </tr>
    <tr>
      <td bgcolor="#CC3300"><span class="style2">Nama</span></td>
      <td bgcolor="#CC3300"><span class="style2">
        <label>
        <input name="nama_barang" type="text" id="nama_barang"  />
        </label>
      </span></td>
    </tr>
    <tr>
      <td bgcolor="#CC3300"><span class="style2">Harga Jual</span></td>
      <td bgcolor="#CC3300"><span class="style2">
        <label> 
        <input name="harga_jual" type="text" id="harga_jual" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td bgcolor="#CC3300"><span class="style2">Harga Beli</span></td>
      <td bgcolor="#CC3300"><input name="harga_beli" type="text" id="harga_beli" /></td>
    </tr>
    <tr>
      <td bgcolor="#CC3300"><span class="style2">Id Pasar</span></td>
      <td bgcolor="#CC3300"><input name="id_pasar" type="text" id="id_pasar" /></td>
    </tr>
    <tr>
      <td bgcolor="#CC3300"><span class="style2">Id User</span></td>
      <td bgcolor="#CC3300"><input name="id_user" type="text" id="id_user" /></td>
    </tr>
    <tr>
      <td bgcolor="#CC3300"><span class="style2"></span></td>
      <td bgcolor="#CC3300"><span class="style2"></span></td>
    </tr>
    
    <tr>
      <td colspan="2" bgcolor="#CC3300"><span class="style2">
        <label> 
        <input type="submit" name="Submit" value="Save" />
        </label>
      </span></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>
<?
if ($Submit =='Save')
{
  include_once"Koneksi.php";
   
   //defenisi variabel
  
   
  	
   //validasi input
   	if (empty($id_barang))
   	{
       echo"<b><font size=5 color=red>No id  belum  Di Isi...!!!!!</b></font>";
	} 
	else if (empty($nama_barang))
	{
	   echo"<b><font size=5 color=red>Nama Barang belum Di Isi....!!!!!!!</b></font>";
	}
	else if (empty($harga_jual))
	{
	   echo"<b><font size=5 color=red>Harga Jual blum Di Isi....!!!!!!!</b></font>";
	}
	else if (empty($harga_beli))
	{
	   echo"<b><font size=5 color=red>Harga Beli blum Di Isi....!!!!!!!</b></font>";
	}
	else if (empty($id_pasar))
	{
	   echo"<b><font size=5 color=red>Id Pasar blum Di Isi....!!!!!!!</b></font>";
	}
	else if (empty($id_user))
	{
	   echo"<b><font size=5 color=red>Id User blum Di Isi....!!!!!!!</b></font>";
	}
	
	
	else 
	{
	
   $server='localhost';
   $user='root';
   $pass='';
   $db='db_pasar';
   $tb='t_barang';
   mysql_connect($server,$user,$pass) or die ('Koneksi Ke Server MySQL Gagal...!!!!');
   @mysql_select_db($db) or die('salah');
   	
   $tabel = "insert into $tb values ('$id_barang','$nama_barang','$harga_jual','$harga_beli','$id_pasar','$id_user')";
		 
    mysql_query($tabel) or die('salah');
    mysql_close();
  
  
		 
		 echo"<b><font size=3 color=yellow>Proses Penyimpanan Data Barang Ke Server MySQL Berhasil....!!!!!!</b></font>";
		 
	}
}
?>
<?php
		include "koneksi.php";
		
		$warnagenap="#CCCCCC";//Warna ABUABU
		$warnaganjil="#FFFFFF"; //Warna abu abu
		$warnaheading="#CCFFFF"; //Warna black
		$sql_baca=mysql_query("SELECT * FROM t_barang");
		$row=mysql_fetch_row($sql_baca);
		
		if (!$row)
			echo"<b><font size=5 color=blue?TabelBarang Kosong..!!!</b></font>";
		else
			{
			echo"<table border=1 align='center'>";
			echo"<tr bgcolor='".$warnaheading."'>";
			echo"<td>id_barang</td>";
			echo"<td><center>nama_barang</center></td>";
			echo"<td><center>harga_jual</center></td>";
			echo"<td><center>harga_beli</center></td>";
			echo"<td><center>id_pasar</center></td>";
			echo"<td><center>id_user</center></td>";
			echo"<td colspan=3><center>Action</center></td>";
			echo"<tr>";
		do
			{
			list ($id_barang,$nama_barang,$harga_jual,$harga_beli, $id_pasar ,$id_user)=$row;
			
			if ($i%2==0)
			$warna=$warnagenap;
			else $warna=$warnaganjil;
			
			echo"<tr bgcolor='".$warna."'>";
			echo"<td><center>$id_barang</center></td>";
			echo"<td><center>$nama_barang</center></td>";
			echo"<td><center>$harga_jual</center></td>";
			echo"<td><center>$harga_beli</center></td>";
			echo"<td><center>$id_pasar</center></td>";
			echo"<td><center>$id_user</center></td>";
			echo"<td><center><a href=barangedit.php?id_barang=$id_barang>Edit</center></a></td>";
			echo"<td><center><a href=baranghapus.php?id_barang=$id_barang onclick=\"return konfirmasi('$id_barang')\">Hapus</center></a></td>";
			
			echo"<tr>";
			$i++;
			}
			while ($row=mysql_fetch_row($sql_baca));
		}	
	
  ?>
