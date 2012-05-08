var base_path = '/3mei/';
$(document).ready(function(){
    $('.k-data').hide();
    $('#form-user-level').change(function(){
        $('div#form-koordinator').hide();
        var level = $('#form-user-level').val();
        var name = $('#u-name');
        var username = $('#u-username');
        var password = $('#u-password');
        var kode_koordinator = $('#k-kode');
        var no_hp = $('#k-phone');
        var pasar_id = $('#k-pasar');
        if(level === 'Admin'){
            $('.k-data').hide('fast');
        }
        else if(level === 'Koordinator'){
            $('.k-data').show('fast');
        }
        else {
            $('.k-data').hide('fast');
        }
    });

});
