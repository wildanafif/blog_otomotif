

<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title><?php echo $title;?></title>
<link href="<?=base_url()?>assets/css/style_image_view.css" rel="stylesheet" type="text/css" media="all" />   
<link href="<?=base_url()?>assets/css/Site.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/css/social-sharing-buttons.css" rel="stylesheet">


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
    <script type="text/javascript">
    $(document).ready(function() {
        $('#input1').filer();
        
        $('.file_input').filer({
            showThumbs: true,
            templates: {
                box: '<ul class="jFiler-item-list"></ul>',
                item: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <li><span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span></li>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                            </div>\
                        </li>',
                itemAppend: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                            </div>\
                        </li>',
                progressBar: '<div class="bar"></div>',
                itemAppendToEnd: true,
                removeConfirmation: true,
                _selectors: {
                    list: '.jFiler-item-list',
                    item: '.jFiler-item',
                    progressBar: '.bar',
                    remove: '.jFiler-item-trash-action',
                }
            },
            addMore: true,
            
        });
        
        $('#input2').filer({
            limit: null,
            maxSize: null,
            extensions: null,
            changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Drag&Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="jFiler-input-choose-btn blue">Browse Files</a></div></div>',
            showThumbs: true,
            appendTo: null,
            theme: "dragdropbox",
            templates: {
                box: '<ul class="jFiler-item-list"></ul>',
                item: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <li>{{fi-progressBar}}</li>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                            </div>\
                        </li>',
                itemAppend: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                            </div>\
                        </li>',
                progressBar: '<div class="bar"></div>',
                itemAppendToEnd: false,
                removeConfirmation: false,
                _selectors: {
                    list: '.jFiler-item-list',
                    item: '.jFiler-item',
                    progressBar: '.bar',
                    remove: '.jFiler-item-trash-action',
                }
            },
            uploadFile: {
                url: "./php/upload.php",
                data: {},
                type: 'POST',
                enctype: 'multipart/form-data',
                beforeSend: function(){},
                success: function(data, el){
                    var parent = el.find(".jFiler-jProgressBar").parent();
                    el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                        $("<div class=\"jFiler-item-others text-success\"><i class=\"icon-jfi-check-circle\"></i> Success</div>").hide().appendTo(parent).fadeIn("slow");    
                    });
                },
                error: function(el){
                    var parent = el.find(".jFiler-jProgressBar").parent();
                    el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                        $("<div class=\"jFiler-item-others text-error\"><i class=\"icon-jfi-minus-circle\"></i> Error</div>").hide().appendTo(parent).fadeIn("slow");    
                    });
                },
                statusCode: {},
                onProgress: function(){},
            },
            dragDrop: {
                dragEnter: function(){},
                dragLeave: function(){},
                drop: function(){},
            },
            addMore: true,
            clipBoardPaste: true,
            excludeName: null,
            beforeShow: function(){return true},
            onSelect: function(){},
            afterShow: function(){},
            onRemove: function(){},
            onEmpty: function(){},
            captions: {
                button: "Choose Files",
                feedback: "Choose files To Upload",
                feedback2: "files were chosen",
                drop: "Drop file here to Upload",
                removeConfirmation: "Are you sure you want to remove this file?",
                errors: {
                    filesLimit: "Only {{fi-limit}} files are allowed to be uploaded.",
                    filesType: "Only Images are allowed to be uploaded.",
                    filesSize: "{{fi-name}} is too large! Please upload file up to {{fi-maxSize}} MB.",
                    filesSizeAll: "Files you've choosed are too large! Please upload files up to {{fi-maxSize}} MB."
                }
            }
        });
    });
    </script>
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
        <img alt="Brand" class="img-responsive" src="<?php echo site_url(); ?>assets/img/logoe.png" style="margin-top:-7%;">
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
        <?php  if (isset($_SESSION['nama'])) { ?>

            <?php if (isset($favorit['favorit'])) {
               
             ?>
                  <li>
                          <a href="<?php echo site_url()?>favorite" style="color:#21AEE8;" > <i class="glyphicon glyphicon-star-empty"> 

                            
                    </i>Favorit (<?php echo $favorit['favorit']; ?>)</a>
                  </li>
                  <?php }; ?>
              
                       <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#21AEE8;"><i class="icon-white icon-user">
                    </i>  <?php echo $_SESSION['nama']; ?> <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            
                            <li><a href="<?php echo site_url(); ?>iklansaya">iklan saya</a></li>
                            <li><a href="<?php echo site_url()?>profil/setting">Pengaturan</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo site_url()?>auth/logout">Keluar</a></li>
                          </ul>
                        </li>
                <?php }else { ?>

                <li >
                        <a href="<?php echo site_url()?>auth/masuk" style="color:#21AEE8;" > <i class="icon-white icon-user">
                    </i>  Akun Saya <i class="fa fa-angle-down"></i></a>
                        
                    </li>
                    <?php } ?>
                    <li  >
                        <a href="<?php echo site_url()?>iklan" style="color:#21AEE8;"> <i class="icon-white icon-plus">
                    </i>  Pasang Iklan <i class="fa fa-angle-down"></i></a>
                        
                    </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--header-->  
  <header style="background-color:#fff;" class="hilang">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                  <a class="navbar-brand" href="<?php echo site_url(); ?>">
                    <img alt="Brand" class="img-responsive" src="<?php echo site_url(); ?>assets/img/logoe.png" style="margin-top:8%;">
                  </a>
            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?=base_url()?>" style="color:#000000;">  <i class="icon-white icon-home"></i> Beranda
            </a>    </a></li>
                   
                    
                    
                </ul>
                <ul class="nav navbar-nav navbar-right profile">
              
                  <?php  if (isset($_SESSION['nama'])) { ?>
                  <?php if (isset($favorit['favorit'])) {
                    
                  ?>
                  <li>
                          <a href="<?php echo site_url()?>favorite" > <i class="glyphicon glyphicon-star-empty"> 

                            
                    </i>Favorit (<?php echo $favorit['favorit']; ?>)</a>
                  </li>
                  <?php }; ?>
              
                       <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-white icon-user">
                    </i>  <?php echo $_SESSION['nama']; ?> <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            
                            <li><a href="<?php echo site_url(); ?>iklansaya">iklan saya</a></li>
                            <li><a href="<?php echo site_url()?>profil/setting">Pengaturan</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo site_url()?>auth/logout">Keluar</a></li>
                          </ul>
                        </li>
                <?php }else { ?>

              
                    <?php } ?>
                    <li style="background-color:#3399ff;">
                        <a style="color:#fff;" href="<?php echo site_url()?>iklan"  > <i class="icon-white icon-plus">
                    </i>  Pasang Iklan <i class="fa fa-angle-down"></i></a>
                        
                    </li>

                 
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </header> 

   

   <div id="" class="" style="width:100%;" >
        <div id="body" class="shadowBox" style="margin-top:-19px;">


<nav class="navbar navbar-default">
  <div class="container-fluid">
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
         <li><a href="#">Ototips</a></li>
          <li><a href="#">Oto Club</a></li>
       
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>