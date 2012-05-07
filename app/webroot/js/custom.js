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
//            $('#form-user').submit(function(){
//                var data_user = $(this).serialize();
//                $.ajax({
//                    type:'POST',
//                    url:base_path+'User/add',
//                    cache :false, 
//                    data: data_user,
//                    success:function(data){
//                        $('#message').html('<span>Berhasil</span>')
//                        $(location).attr(base_path+'Pasar/');
//                    },
//                    error:function(data){
//                        $('#message').html('<span>Gagal</span>')
//                        console.log(data.responseText);
//                    }
//                });
//                return false;
//            });
        }
        else{
            $('.k-data').show('fast');
//            $('#form-user').submit(function(){
//                var data_user = $(this).serialize();
//                $.ajax({
//                    type:'POST',
//                    url:base_path+'User/add',
//                    cache :false, 
//                    data: data_user,
//                    success:function(data){
//                        $('#message').html('<span>Berhasil</span>')
//                    },
//                    error:function(data){
//                        $('#message').html('<span>Gagal</span>')
//                        console.log(data.responseText);
//                    }
//                });
//                return false;
//            });
                    

        }
    });

});
