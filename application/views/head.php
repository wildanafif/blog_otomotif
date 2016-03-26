
<!DOCTYPE html>
<html>
<head>
<title><?php echo $title;?></title>
<link href="<?=base_url()?>assets/css/style_image_view.css" rel="stylesheet" type="text/css" media="all" />   
<link href="<?=base_url()?>assets/css/Site.min.css" rel="stylesheet">


<link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>


<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?=base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />  
<link href="<?=base_url()?>assets/css/style_view.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="<?=base_url()?>assets/icomoon/style.css" rel="stylesheet">
<link href="<?=base_url()?>assets/css/bootstrapValidator.css" rel="stylesheet">
<link href="<?=base_url()?>assets/custom/style.css" rel="stylesheet" type="text/css" media="all" />  

<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Markito Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->

<!--//fonts-->
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>



<!--filer-->
   <link href="<?=base_url()?>aset/css/jquery.filer.css" type="text/css" rel="stylesheet" />
    <link href="<?=base_url()?>aset/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
    <!--jQuery-->
     <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>aset/js/jquery.filer.min.js"></script>
  
        <script src="<?=base_url()?>assets/js/bootstrap.js"></script>
        
<script type="text/javascript" src="<?=base_url()?>assets/js/bootstrapValidator.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/easing.js"></script>
<script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){     
                            event.preventDefault();
                            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                        });
                    });
                </script>
<!-- start menu -->
<link href="<?=base_url()?>assets/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?=base_url()?>assets/js/megamenu.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.timers-1.2.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.easing.1.3.js"></script>

<!-- Third, add the GalleryView Javascript and CSS files -->
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.galleryview-3.0-dev.js"></script>
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/jquery.galleryview-3.0-dev.css" />

<!-- Lastly, call the galleryView() function on your unordered list(s) -->
<script type="text/javascript">
    $(function(){
        $('#myGallery').galleryView();
    });
</script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>

<script src="<?=base_url()?>assets/js/simpleCart.min.js"> </script>
 <script language="JavaScript" type="text/javascript">
  function addProv(textToAdd , id){
  document.prov.wilayah.value = textToAdd;
   $("div#simpleModal").addClass("show");
   $('#prov_title').html('Provinsi : '+textToAdd + '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> &times; </span></button>');
   $.ajax({
        type: 'POST',
        url: '<?php echo site_url()?>search/data_lokasi_modal',
        data:'id_provinsi='+id,
        success: function(data) {   
            $("div#simpleModal").removeClass("show");                  
            $('#lokasi_modal').html(data);
            $("#myModallokasi").modal();
            
        }
    });
 
}
 function add_lokasi(textToAdd){
  document.prov.wilayah.value += '->'+textToAdd;
   
 
}
function show_modal_prov(){
    $("#myModallokasi").modal('hide');
    $("#myModalprovinsi").modal('show');
}

function add_kategori(add , id){
    document.prov.kategori.value = add;
    if (true) {};
    if (add=='Mobil') {
        $("#Motor").attr("class", "list-group-item");
        $("#Sewa").attr("class", "list-group-item");
    }else if(add=='Motor'){
        $("#Mobil").attr("class", "list-group-item");
        $("#Sewa").attr("class", "list-group-item");
    }else if (add=='Sewa') {
        $("#Mobil").attr("class", "list-group-item");
        $("#Motor").attr("class", "list-group-item");
    };
    $("div#simpleModal").addClass("show");
     $("#"+add).attr("class", "list-group-item active");
       $.ajax({
            type: 'POST',
            url: '<?php echo site_url()?>search/data_kategori',
            data:'id_kategori='+id+'&nama_kategori='+add,
            success: function(data) {    
                $('#sub_kategori_modal').hide();                 
                $('#sub_kategori_modal').html(data);
                $("div#simpleModal").removeClass("show");
                $('#sub_kategori_modal').show('slow');
                
                
            }
        });

}

function add_modal_sub_kategori(nama_sub_kategori){
     document.prov.kategori.value +=nama_sub_kategori;
      $("#modal_kategori").modal('hide');
     
};




$(document).ready(function() {
    $('#sad').click(function(){
    	var collapse_content_selector = '#sub_menu';					
	var toggle_switch = $(this);
	$(collapse_content_selector).toggle(function(){
            if($(this).css('display')=='none'){
                toggle_switch.html('Pilih Kanal&nbsp;  <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>');//change the button label to be 'Show'
            }else{
                toggle_switch.html('Tutup Kanal&nbsp;  <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>');//change the button label to be 'Hide'
		}
	});
    });				
});	

</script>


<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-supergallery-plugin2.js"></script>

       
        
       




   

<!-- Second, add the Timer and Easing plugins -->

</head>

<body> 

 <nav class="navbar navbar-default muncul">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url(); ?>">
                        <img alt="Brand" class="img-responsive" src="<?php echo site_url(); ?>assets/img/f_lg2.png" style="margin-top:-7%;">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                    <ul class="nav navbar-nav navbar-right" style="color:#21AEE8;">
                        <li>
                            <a href="<?php echo site_url(); ?>"> 
                                <i class="icon-white icon-home"></i> Beranda
                            </a>
                        </li>
<?php if (isset($_SESSION['nama'])) { ?>

                            <?php if (isset($favorit['favorit'])) {
                                ?>
                                <li>
                                    <a href="<?php echo site_url() ?>favorite" style="color:#21AEE8;" > <i class="glyphicon glyphicon-star-empty"> 


                                        </i>Favorit (<?php echo $favorit['favorit']; ?>)</a>
                                </li>
    <?php }; ?>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#21AEE8;"><i class="icon-white icon-user">
                                    </i>  <?php echo $_SESSION['nama']; ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu">

                                    <li><a href="<?php echo site_url(); ?>iklansaya">iklan saya</a></li>
                                    <li><a href="<?php echo site_url() ?>profil/setting">Pengaturan</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo site_url() ?>auth/logout">Keluar</a></li>
                                </ul>
                            </li>
                        <?php } else { ?>

                            <li >
                                <a href="<?php echo site_url() ?>auth/masuk" style="color:#21AEE8;" > <i class="icon-white icon-user">
                                    </i>  Akun Saya <i class="fa fa-angle-down"></i></a>

                            </li>
<?php } ?>
                        <li  >
                            <a href="<?php echo site_url() ?>iklan" style="color:#21AEE8;"> <i class="icon-white icon-plus">
                                </i>  Pasang Iklan <i class="fa fa-angle-down"></i></a>

                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!--header-->  
        <header style="background-color:#fff;" class="hilang">
            <div class="container">
                <div class="navbar-header" style="width:auto;">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url(); ?>">
                        <img alt="Brand" class="img-responsive" src="<?php echo site_url(); ?>assets/img/f_lg2.png" style="margin-top:2%;margin-left: -20px;">
                    </a>
                </div>

                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?= base_url() ?>" style="color:#000000;">  <i class="icon-white icon-home"></i> Beranda
                            </a>    </a></li>



                    </ul>
                    <ul class="nav navbar-nav navbar-right profile">

<?php if (isset($_SESSION['nama'])) { ?>
    <?php if (isset($favorit['favorit'])) {
        ?>
                                <li>
                                    <a href="<?php echo site_url() ?>favorite" > <i class="glyphicon glyphicon-star-empty"> 


                                        </i>Favorit (<?php echo $favorit['favorit']; ?>)</a>
                                </li>
    <?php }; ?>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-white icon-user">
                                    </i>  <?php echo $_SESSION['nama']; ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu">

                                    <li><a href="<?php echo site_url(); ?>iklansaya">iklan saya</a></li>
                                    <li><a href="<?php echo site_url() ?>profil/setting">Pengaturan</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo site_url() ?>auth/logout">Keluar</a></li>
                                </ul>
                            </li>
                        <?php } else { ?>

                            <li >
                                <a href="<?php echo site_url() ?>auth/masuk" > <i class="icon-white icon-user">
                                    </i>  Akun Saya <i class="fa fa-angle-down"></i></a>

                            </li>
<?php } ?>
                        <li style="background-color:#3399ff;">
                            <a style="color:#fff;" href="<?php echo site_url() ?>iklan"  > <i class="icon-white icon-plus">
                                </i>  Pasang Iklan <i class="fa fa-angle-down"></i></a>

                        </li>


                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </header> 

   

   <div id="" class="" style="width:100%;" >
        <div id="body" class="shadowBox" style="margin-top:-19px;">


            <nav class="navbar navbar-default hilang">
                <div class="container" >
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo site_url(); ?>c/kategori/mobil">Mobil <span class="sr-only">(current)</span></a></li>
                            <li><a href="">Motor</a></li>
                            <li><a href="#">OtoTips</a></li>
                            <li><a href="#">OtoTv</a></li>

                        </ul>

                        
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            
            
            <nav class="navbar navbar-default muncul" style="background-color: #ffffff; color: #ffffff" >
                <div class="container" >
                    <div class="navbar-header" >
                        <a class="navbar-brand" href="#" style="color: #000000" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        </a>
                        <ul class="nav navbar-nav navbar-right" style="float: right; margin-right: 10px;" >
                            
                            <li><a href="#" style="color: #39F"  id="sad" >Pilih Kanal&nbsp;  <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a></li>
                            
                        </ul>
                            
                    </div>
                    
                    <ul class="nav navbar-nav navbar-right" style="color:#21AEE8; display: none" id="sub_menu" >
                        <hr>
                        <li><a href="" style="color: #000000"  >Mobil</a></li>
                        <li><a href="" style="color: #000000">Motor</a></li>
                        <li><a href="" style="color: #000000">OtoTips</a></li>
                        <li><a href="" style="color: #000000">OtoTv</a></li>
                    </ul>
                </div><!-- /.container-fluid -->
            </nav>
       