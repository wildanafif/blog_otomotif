
<div class="container" >
  <div class="row">
    <div class="col-md-8" >
      <div class="jumbotron" >
        <div style="margin-top:-20px;">
          <h5 style="color:#39F; margin-bottom:10px;"  >News Artikel</h5>

          <img src="<?php echo $artikel['header_image']; ?>" class="img-responsive" alt="<?php echo $artikel['judul_artikel']; ?>">
          <p style="font-size:12px;margin-top:7px;color:#999999;" ><?php echo $artikel['waktu']; ?></p>
          <a href="<?php echo site_url(); ?>page/read/<?php echo $artikel['kategori']; ?>/<?php echo $artikel['judul_url']; ?>">
              <h2 style="margin-top:-10px;" id="title_h" ><?php echo $artikel['judul_artikel']; ?></h2>
            
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
                <h4 id="title_h"><a href="<?php echo site_url(); ?>page/read/<?php echo $key->kategori ?>/<?php echo $key->judul_url; ?>"  ><?php echo $key->judul_artikel; ?></a></h4>
              </div>
            </div>
          </div>
       <?php  } ?>
         
          
        </div>
        
      </div>
        <h4 style="color:#39F; margin-bottom:10px;"  >Hot Artikel</h4>
      <div class="panel panel-default">
          
<?php $total_groups= ceil($jumlah_hot_artikel['jumlah_hot']/5); ?>        
<script type="text/javascript">
function load_more_artikel(){
    var track_load = $('#more').val(); //total loaded record group(s)
    var isi_data= track_load+1;
    var loading  = false; //to prevents multipal ajax loads
    var total_groups = <?=$total_groups;?>; 
    if(track_load <= total_groups && loading==false) //there's more data to load
			{
				loading = true; //prevent further ajax loading
				$('#loading').show(); //show loading image
				
				//load data from the server using a HTTP POST request
				$.post('<?php echo site_url() ?>home/load_hot_artikel',{'group_no': track_load}, function(data){
									
					$("#hot_artikel").append(data); //append received data into the element

					//hide loading image
					$('#loading').hide(); //hide loading image once data is received
					
					$('#more').val(isi_data); //loaded group increment
					loading = false; 
				
				}).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
					
					alert(thrownError); //alert with HTTP error
					$('#loading').hide(); //hide loading image
					loading = false;
				
				});
				
			}//total record group(s)
   
}; 

</script>
      
          <div class="panel-body" id="hot_artikel" >
          <?php foreach ($hot_artikel as $key) { ?>
           
             <div class="row">

                <div class="col-xs-5 col-md-5"> 
                  <img src="<?php echo $key->header_image; ?>" class="img-responsive" alt="<?php echo $key->judul_artikel; ?>">
                </div>
                <div class="col-xs-7 col-md-7"><h4 id="title_hot_artikel" ><a href="<?php echo site_url(); ?>page/read/<?php echo $key->kategori ?>/<?php echo $key->judul_url; ?>"  ><?php echo $key->judul_artikel; ?></a></h4>
                    <p style="font-size:12px;margin-top:7px;color:#999999;" id="waktu_title_hot" ><?php echo $key->waktu; ?></p>
                </div>
              </div>
              <hr>
          <?php } ?>
               
          
          </div>
            <div id="loading" style="display:none" align="center"><img src="<?= base_url() ?>assets/ajax-loader.gif"></div>
            <div style="text-align: center">
                <button onclick="load_more_artikel()" value="1"  type="button" class="btn btn-primary" id="more" style="  border-style: solid;border-color: green; text-align: center;" >Berita Selanjutnya</button>
                
            </div>
            
            <br>

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
                <img src="<?=base_url()?><?php echo $key->temp_foto; ?>" class="img-responsive" alt="<?php echo $key->judul_iklan; ?>">
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