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
                    <input type="text" id="u-name" name="data[User][nama]"></input>
                </td>
            </tr> 
            <tr class="u-data">
                <td>Username : </td>
                <td>
                    <input type="text" id="u-username" name="data[User][username]"></input>
                </td>
            </tr>
            <tr class="u-data">
                <td>Password : </td>
                <td>
                    <input type="password" id="u-password" name="data[User][password]"></input>
                </td>
            </tr> 
            <tr class="k-data">
                <td>Kode Koordinator : </td>
                <td>
                    <input type="text" id="k-kode" name="data[Koordinator][kode_koordinator]"></input>
                </td>
            </tr>
            <tr class="k-data">
                <td>No. HP : </td>
                <td>
                    <input type="text" id="k-phone" name="data[Koordinator][no_hp]"></input>
                </td>
            </tr>
            <tr class="k-data">
<!--                <td>Pasar : </td>-->
                <td> <?php echo $this->Form->input('pasar_id', array('type' => 'select', 'options' => $pasars));  ?> </td>

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





