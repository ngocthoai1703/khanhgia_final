

<?php 	

$d->reset();

$sql_slider_banner = "select ten$lang as ten,link,photo from #_slider where  type='banner' and hienthi=1 order by stt,id desc";

$d->query($sql_slider_banner);

$slider_banner=$d->result_array();

$d->reset();

$sql_slider_banner = "select ten$lang as ten,link,photo from #_slider where  type='slider' and hienthi=1 order by stt,id desc";

$d->query($sql_slider_banner);

$slider_banner2=$d->result_array();

?>
<div class="banner">
		<p>Không gian của <b>Khánh Gia Apartment</b></p>
	    <div class="img_banner">
			<?php  for($i=0;$i<count($slider_banner);$i++){ ?>	
				<a target="_blank" href="<?=$slider_banner[$i]['link']?>"><img src="<?=_upload_hinhanh_l.$slider_banner[$i]['photo']?>" alt="<?=$slider_banner[$i]['ten']?>" id="wows1_<?=$i+1?>" /></a>
			<?php } ?> 
		</div>
</div>
 


