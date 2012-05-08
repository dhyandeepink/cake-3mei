<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <?php echo $this->Html->script('jquery-1.7.2.min'); ?>
        <?php echo $this->Html->script('custom'); ?>
        <title>
            <?php __('Sistem Updating Harga Bahan Pokok'); ?>
            <?php echo $title_for_layout; ?>
        </title>
 
    </head>
    <body>
        <table border="0" width="780" align="center" cellpadding="0" cellspacing="0">
            <p>&nbsp</p>
            <tr>
                <td align="center"><?php echo $this->Html->image('header2.jpg', array('width' => 780, 'height' => 200)); ?></td>
            </tr>
        </table>
        <p>&nbsp</p>
        <table align="center" width="780" cellpadding="0" cellspacing="0">
            <tr>
                <td width="170" bgcolor="#FFFFFF" valign="top">



                    <div id="menu"> Input Data : <br>
                        <ul><li> <?php echo $this->Html->link(__('Admin', true), '../User/'); ?> </li><br>
                            <li> <?php echo $this->Html->link(__('Koordinator', true), '../Koordinator/'); ?> </li><br>
                            <li> <?php echo $this->Html->link(__('Tipe Barang', true), '../Master/'); ?> </li><br>
                            <li> <?php echo $this->Html->link(__('Harga Barang', true), '../Barang/'); ?> </li><br>
                            <li> <?php echo $this->Html->link(__('Pasar', true), '../Pasar/'); ?> </li><br><br>

                        </ul>
                    </div>

                    <div id="menu"> SMS : <br>
                        <ul>
                            <li> <?php echo $this->Html->link(__('Outbox', true), '../Outbox/add/'); ?> </li><br>
                            <li> <?php echo $this->Html->link(__('Sentitems', true), '../Sentitems/index/'); ?> </li><br>

                        </ul>
                    </div>
                    <?php echo $this->Html->link(__('Logout', true), '../users/logout/'); ?> </li>

                    <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                </td>
                <td width="20" bgcolor="#FFFFFF"></td>
                <td width="640" bgcolor="#FFFFFF" valign="top">
                    <p>&nbsp;</p>

                    <?php echo $this->Session->flash(); ?>
                    <?php echo $content_for_layout; ?>
                    <p>&nbsp;</p>
                    <p></td>
                <td width="30" bgcolor="#FFFFFF">&nbsp;</td>

            </tr>
            <tr>
                <td colspan="4" align="center" bgcolor="#2989CC" height=50><font color="#333333" face=tahoma size=2>

                    <font color="#333333" face=tahoma size=2>

		Copyright &copy; 2012 <? echo $this->Html->link(__('Dian Anggraini', true), 'http://katadian.blogspot.com/'); ?>. All Right Reserved.</font></td>
            </tr>
        </table>
    </body>
</html>