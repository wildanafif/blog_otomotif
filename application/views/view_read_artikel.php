<div class="container" >
	<div class="row">
	  <div class="col-md-8" >
	  	
	  	<?php echo $direktori; ?>
	  	<div class="konten_artikel" style="background-color: #EEE; margin-bottom: 15px;">
		  	<div class="container-fluid" style="" >
		  		<div style="margin-top:15px; color: #8c8c8c"><?php echo $artikel['waktu'] ?></div>
		  		
	  			<h3 style="color: #21409b;margin-top:15px;" ><b><?php echo $artikel['judul_artikel']; ?></b></h3>

	  			<img src="<?php echo $artikel['header_image']; ?>" class="img-responsive" alt="<?php echo $artikel['judul_artikel']; ?>" style="margin-top:15px">
			  	<div class="isi_konten" style="margin-top:15px">
			  		<p style="margin-top:15px ;margin-bottom: 15px; font-size:17px; " >
			  			<?php echo $artikel['isi']; ?>
			  		</p>
			  		
			  	</div>	
			  	<br>
			  	<h4 style="float: left; margin-top: 10px; color: #8c8c8c; "  > Bagikan : </h4>		  		
			  	<div class="share-buttons" style="margin-bottom: 20px;">
					<!-- Facebook -->
					<a href="https://www.facebook.com/sharer/sharer.php?u=http://example.com/" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="icon-white icon-facebook"></i> Facebook</a>
					<!-- Twitter -->
					<a href="http://twitter.com/home?status=http://example.com/" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="icon-white icon-twitter"></i> Twitter</a>
					<!-- Google+ -->
					<a href="https://plus.google.com/share?url=http://example.com/" title="Share on Google+" target="_blank" class="btn btn-googleplus"><i class="icon-white icon-google"></i> Google+</a>
					
					<!-- LinkedIn --> 
					<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=&amp;title=&amp;summary=http://example.com/" title="Share on LinkedIn" target="_blank" class="btn btn-stumbleupon"><i class="icon-white  icon-linkedin"></i>LinkedIn</a>
				</div>
		  	</div>
	  		
	  	</div>

	 
	  	<div class="panel panel-default">
		  <div class="panel-body">
                      <h3 id="media-list"><?php echo $jumlah_komentar['jml'] ?> Komentar</h3> 
		    <hr>
                            <?php foreach ($komentar as $key) { ?>
                        
                    
		  		 <div class="bs-example data-example" id="media-list"> 
		  		 	<ul class="media-list"> 
		  		 		<li class="media"> 
		  		 			
		  		 			<div class="media-body"> 
                                                            <h3 class="media-heading"><?php echo $key->nama; ?></h3> 
		  		 				<p><?php echo $key->isi_komentar; ?></p>  		  		 				
		  		 			</div> 
                                                </li> 
		  		 	</ul> 
		  		 </div>
                                    <hr>
                                 <?php } ?>
		  </div>
		</div>
	  		 
	  	


	  	<div class="panel panel-default">
		  <div class="panel-heading"><h3>Komentar</h3></div>
		  <div class="panel-body">
                      <form class="form-horizontal" method="POST" action="<?php echo site_url() ?>comment/add_comment">
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
			    <div class="col-sm-10">
                                <input type="name" name="nama_komentar"  class="form-control"  placeholder="Nama">
                              <input type="hidden" name="id_artikel" value="<?php echo $artikel['id_artikel']; ?>" >
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Komentar</label>
			    <div class="col-sm-10">
                                <textarea class="form-control" rows="3" name="isi_komentar" > </textarea>
			    </div>
			  </div>
			
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default" value="kirim" name="komentar" >Kirim</button>
			    </div>
			  </div>
			</form>
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
             <div class="row">

              <div class="col-xs-5 col-md-5"> 
                <img src="<?=base_url()?>assets/images/269377_deretan-mobil-konsep-iims-2014_663_382.jpg" class="img-responsive" alt="Responsive image">
              </div>
              <div class="col-xs-5 col-md-7"><a href="" >Ban mobil murah</a></div>
            </div>
            <hr>
            <div class="row">

              <div class="col-xs-5 col-md-5"> 
                <img src="<?=base_url()?>assets/images/269377_deretan-mobil-konsep-iims-2014_663_382.jpg" class="img-responsive" alt="Responsive image">
              </div>
              <div class="col-xs-5 col-md-7"><a href="" >Ban mobil murah</a></div>
            </div>
            <hr>
            <div class="row">

              <div class="col-xs-5 col-md-5"> 
                <img src="<?=base_url()?>assets/images/269377_deretan-mobil-konsep-iims-2014_663_382.jpg" class="img-responsive" alt="Responsive image">
              </div>
              <div class="col-xs-5 col-md-7"><a href="" >Ban mobil murah</a></div>
            </div>
            <hr>
            <div class="row">

              <div class="col-xs-5 col-md-5"> 
                <img src="<?=base_url()?>assets/images/269377_deretan-mobil-konsep-iims-2014_663_382.jpg" class="img-responsive" alt="Responsive image">
              </div>
              <div class="col-xs-5 col-md-7"><a href="" >Ban mobil murah</a></div>
            </div>
            <hr>
            <div class="row">

              <div class="col-xs-5 col-md-5"> 
                <img src="<?=base_url()?>assets/images/269377_deretan-mobil-konsep-iims-2014_663_382.jpg" class="img-responsive" alt="Responsive image">
              </div>
              <div class="col-xs-5 col-md-7"><a href="" >Ban mobil murah</a></div>
            </div>
            <hr>
            
          </div>
        </div>

        <div class="panel panel-success">
          <div class="panel-heading" >Artikel Terbaru</div>
          <div class="panel-body">
             <div class="row">

              <div class="col-xs-5 col-md-5"> 
                <img src="<?=base_url()?>assets/images/269377_deretan-mobil-konsep-iims-2014_663_382.jpg" class="img-responsive" alt="Responsive image">
              </div>
              <div class="col-xs-5 col-md-7"><a href="" >Ban mobil murah</a></div>
            </div>
            <hr>
            <div class="row">

              <div class="col-xs-5 col-md-5"> 
                <img src="<?=base_url()?>assets/images/269377_deretan-mobil-konsep-iims-2014_663_382.jpg" class="img-responsive" alt="Responsive image">
              </div>
              <div class="col-xs-5 col-md-7"><a href="" >Ban mobil murah</a></div>
            </div>
            <hr>
            <div class="row">

              <div class="col-xs-5 col-md-5"> 
                <img src="<?=base_url()?>assets/images/269377_deretan-mobil-konsep-iims-2014_663_382.jpg" class="img-responsive" alt="Responsive image">
              </div>
              <div class="col-xs-5 col-md-7"><a href="" >Ban mobil murah</a></div>
            </div>
            <hr>
            <div class="row">

              <div class="col-xs-5 col-md-5"> 
                <img src="<?=base_url()?>assets/images/269377_deretan-mobil-konsep-iims-2014_663_382.jpg" class="img-responsive" alt="Responsive image">
              </div>
              <div class="col-xs-5 col-md-7"><a href="" >Ban mobil murah</a></div>
            </div>
            <hr>
            <div class="row">

              <div class="col-xs-5 col-md-5"> 
                <img src="<?=base_url()?>assets/images/269377_deretan-mobil-konsep-iims-2014_663_382.jpg" class="img-responsive" alt="Responsive image">
              </div>
              <div class="col-xs-5 col-md-7"><a href="" >Ban mobil murah</a></div>
            </div>
            <hr>
            
          </div>
        </div>
    </div>
     
       
         

      </div>
	</div>
</div>
</div>