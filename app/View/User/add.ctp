<div id="form-reg-user">
    <div id="message"></div>
    <form id="form-user" method="post" action="<?php echo $this->base . '/User/add' ?>">
        <table>
            <tr class="u-data">
                <td>Level : </td>
                <td>
                    <select id="form-user-level" name="data[User][level]">
                        <option>-Pilih-</option>
                        <option id="level-admin">Admin</option>
                        <option id="level-koordinator">Koordinator</option>
                    </select>
                </td>
            </tr>
            <tr class="u-data">
                <td>Nama : </td>
                <td>
                    <input type="text" id="u-name" name="data[User][nama]" id="u-name"></input>
                </td>
            </tr> 
            <tr class="u-data">
                <td>Username : </td>
                <td>
                    <input type="text" id="u-username" name="data[User][username]" id="u-username"></input>
                </td>
            </tr>
            <tr class="u-data">
                <td>Password : </td>
                <td>
                    <input type="password" id="u-password" name="data[User][password]" id="u-password"></input>
                </td>
            </tr> 
            <tr class="k-data">
                <td>Kode Koordinator : </td>
                <td>
                    <input type="text" id="k-kode" name="data[Koordinator][kode_koordinator]" id="u-name"></input>
                </td>
            </tr>
            <tr class="k-data">
                <td>No. HP : </td>
                <td>
                    <input type="text" id="k-phone" name="data[Koordinator][no_hp]" id="u-name"></input>
                </td>
            </tr>
            <tr class="k-data">
                <td>Pasar : </td>
                <td>
                    <select name="data[Koordinator][pasar_id]" id="k-pasar">
                        <option id="1">1</option>
                        <option id="2">2</option>
                        <option id="3">3</option>
                    </select>
        <!--                   <td> <?php // echo $this->Form->input('pasar_id', array('type' => 'select', 'options' => $pasars));            ?> </td>-->
                </td>
            </tr>
            <div>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Submit"></input>
                        <input type="reset" name="reset" value="Reset"></input>
                    </td>
                </tr>
        </table>
    </form>
</div>





