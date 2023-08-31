<?php 
$sql = "select ten$lang as ten,gia, id_loaitienich,giangay,diachi,dientich,sophongngu,tenkhongdau,thumb from #_product where type='sanpham' and hienthi=1 order by ngaytao desc limit 0,3";
$d->query($sql);
$room = $d->result_array();

$arr_loaitienich = explode(',',$room['id_loaitienich']);
?>
<div id="our__product">
	<h3 class="title"><b>Lựa chọn phòng</b> cho bạn</h3>
	<ul class="list_room">
		<?php foreach ($room as $key => $value) { ?>
			<li>
				<div class="image">
					<img src="<?=_upload_sanpham_l.$value['thumb']?>" alt="<?=$value['ten']?>">
					
				</div>
				<a href="san-pham/<?=$value['tenkhongdau']?>.html" class="room--name"><?=$value['ten']?></a>
				<div class="popup__detail">
					<div class="utilities">
									<div class="utilities__item">
										<i class="fas fa-wifi"></i>
										<span>Wifi tốc độ cao</span>							
									</div>
									<div class="utilities__item">
										<i class="fas fa-tv"></i>							
										<span>TV trong phong</span>							

									</div>
									<div class="utilities__item">
										<i class="fas fa-couch"></i>							
										<span>Ghế sofa</span>							
									</div>
									<div class="utilities__item">
										<i class="fas fa-building"></i>							
										<span>View thành phố</span>							
									</div>


								</div>
						
						<!-- <p class="address"><i class="fas fa-map-marker-alt"></i><?=$value['diachi']?></p> -->

						<div class="addr"><b><?=_dientich?>:</b> <?=$value['dientich']?> m2</div>
						<span class="price"><i class="fa fa-dollar-sign"></i><?=$value['gia']?> <?=_trieuthang?> - <?=$value['giangay']?> <?=_nganngay?></span>

						<a href="san-pham/<?=$value['tenkhongdau']?>.html" class="see__detail"><span><?=_xemchitiet?></span></a>
					</div>
			</li>
		<?php } ?>
	</ul>
</div>
