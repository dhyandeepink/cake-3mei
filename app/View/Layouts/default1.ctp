<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>

	<title><?php echo $title_for_layout?></title>

<style type="text/css">
<!--
a:link {
	color: #0000FF;
}
a:visited {
	color: #0000FF;
}
a:hover {
	color: red;
}
a:active {
	color: red;
}
-->
</style>
    <style>
      #kotak {
	       border:1px solid #000;
	       background-color:#fff;
	       padding:50px;
	       font-size:20px;
	       margin:30px auto;
	       text-align:center;
	       width:400px;
     }
  </style>
  </head>
    <body><p>&nbsp;</p>
      <div id="kotak">

<table align=center width=355>
<tr>
<td>
		<?php echo $this->Html->image('logo1.png', array('align' => 'center')); ?>
		<h2><font face=tahoma>Login</font></h2>
		<?php echo $this->Html->image('login-icon.jpg', array('align' => 'left')); ?>

<?php 
echo  $this->Form->create('User', array('action'=>'login','inputDefaults' => array('label' => false, 'div' => false)));
?>
<table>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr>
<td> <font face=tahoma size=2> Username </font></td> <td> : </td>
<td> <?php echo $this->Form->input('username'); ?> </td>
</tr>
<tr>
<td> <font face=tahoma size=2> Password </font></td> <td> : </td>
<td> <?php echo  $this->Form->password('password'); ?> </td>
</tr>
<tr>
<td> <?php echo $this->Form->end('Login'); ?> </td>
</tr>
</table>
</td>
</tr>
<tr>
<td>

			<div align=center><font face=tahoma size=2>

  
</font></div></td></tr></table>
      </div>
	 <center> <?php echo $this->Session->setFlash('Pesannya apa'); ?> </center> <br>
	<center>  <? echo $this->Html->link(__('Disperindag Kota Batam', true), '../'); ?> &copy; 2012<br> </center>
  </body>
</html>



