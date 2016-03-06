
<div class="container" >
  <div class="row">
    <div class="col-md-8" >
      <div class="jumbotron" >
        <div style="margin-top:-20px;">
          <h5 style="color:#39F; margin-bottom:10px;"  >News Artikel</h5>

          <img src="<?php echo $artikel['header_image']; ?>" class="img-responsive" alt="<?php echo $artikel['judul_artikel']; ?>">
          <p style="font-size:12px;margin-top:7px;color:#999999;" ><?php echo $artikel['waktu']; ?></p>
          <a href="<?php echo site_url(); ?>page/read/<?php echo $artikel['kategori']; ?>/<?php echo $artikel['judul_url']; ?>">
            <h2 style="margin-top:-10px;"><?php echo $artikel['judul_artikel']; ?></h2>
            
          </a>
        </div>
       
      </div>
      <div class="container-fluid" >
       <h4 style="color:#39F; margin-bottom:10px;"  >Popular Artikel</h4>
        <div class="row">
        <?php foreach ($popular_artikel as $key ) { ?>
         
          <div class="col-md-4">
            <div class="thumbnail">
              <img src="<?php echo $key->header_image ?>" class="img-responsive" alt="<?php echo $key->judul_artikel; ?>">
              <div class="caption">
                <p style="font-size:12px;margin-bottom:7px;color:#999999;" ><?php echo $key->waktu; ?></p>
                <h4><a href="<?php echo site_url(); ?>page/read/<?php echo $key->kategori ?>/<?php echo $key->judul_url; ?>"  ><?php echo $key->judul_artikel; ?></a></h4>
              </div>
            </div>
          </div>
       <?php  } ?>
         
          
        </div>
        
      </div>
        <h4 style="color:#39F; margin-bottom:10px;"  >Hot Artikel</h4>
      <div class="panel panel-default">
      
          <div class="panel-body">
          <?php foreach ($hot_artikel as $key) { ?>
           
             <div class="row">

                <div class="col-xs-5 col-md-5"> 
                  <img src="<?php echo $key->header_image; ?>" class="img-responsive" alt="<?php echo $key->judul_artikel; ?>">
                </div>
                <div class="col-xs-5 col-md-7"><h4><a href="<?php echo site_url(); ?>page/read/<?php echo $key->kategori ?>/<?php echo $key->judul_url; ?>"  ><?php echo $key->judul_artikel; ?></a></h4>
                    <p style="font-size:12px;margin-bottom:7px;margin-top: 10px; color:#999999;" ></p><?php echo $key->waktu; ?></p>
                </div>
              </div>
              <hr>
          <?php } ?>
               
          
          </div>
        </div>
      
    </div>
    <div class="bilah_kanan" >

    <div class="container-fluid" >
     <div class="row hilang"  >
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default"><b><span class="glyphicon glyphicon-search" aria-hidden="true"></span></b></button>
        </form>
        
      </div>
      <hr>
      
       <div class="panel panel-primary">
          <div class="panel-heading" >Iklan Otomotifstore.com</div>
          <div class="panel-body">
          <?php foreach ($side_bar_iklan as $key) { ?>
            
             <div class="row">

              <div class="col-xs-5 col-md-5"> 
                <img src="<?=base_url()?><?php echo $key->temp_foto; ?>" class="img-responsive" alt="Responsive image">
              </div>
              <div class="col-xs-5 col-md-7"><a target="_BLANK" href="http://localhost/otomotif/iklan/view/<?php echo $key->id_iklan; ?>/<?php echo $key->waktu; ?>" ><?php echo $key->judul_iklan; ?></a></div>
            </div>
            <hr>
          <?php } ?>
            
            
          </div>
        </div>
    </div>
     
       
         

      </div>
  </div>
</div>
</div>