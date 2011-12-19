<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Codeigniter 2 live searching ajax paging dengan jquery easyui</title>
        <link href="assets/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="assets/easyui/themes/default/easyui.css"/>
        <link rel="stylesheet" type="text/css" href="assets/easyui/themes/icon.css"/>
        <script  type="text/javascript" src="assets/js/jquery-1.5.min.js" ></script>
        <script type="text/javascript" src="assets/easyui/jquery.easyui.min.js"></script>      
        <script type="text/javascript">
            var hn = '<?= base_url() ?>';
            $('document').ready(function(){
                $('input#search').keyup( function() {
                    var msg = $('#search').val();
                    $.post(hn+'barang_ctl/search_barang', {descp_msg: msg}, function(data) {
                        $("#content_barang").html(data);
                        $('#pp').pagination({
                            pageNumber:1,
                            total:$('#recNum').val(),
                            //tentukan banyak rec yg mau ditampilkan disini
                            pageList:[20],
                            //sembunyikan pagelist pagintion easyui
                            showPageList:false
                        });
                    });
                }).keyup();
            });
            
            $(function(){
                $('#pp').pagination({
                    total:$('#recNum').val(),
                    pageList:[20],
                    showPageList:true,
                    onSelectPage:function(pageNumber, pageSize){
                        $('#pp').pagination({loading:true});
                        var msg = $('#search').val();
                        $.post(hn+'barang_ctl/search_barang/ #content_barang', {descp_msg: msg,pageNumber:pageNumber}, function(data) {
                            $("#content_barang").html(data);
                        });
                        $('#pp').pagination({loading:false});
                    }
                });
            });
        </script>
    </head>
    <body>
        <div class="sample">
            <label for="search">Cari Barang</label>
            <input type="text" name="search" id="search"/>
            <div id="content_barang"></div>
            <div id="pp"></div>
        </div>
    </body>
</html> 