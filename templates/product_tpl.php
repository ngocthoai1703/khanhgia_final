
<input type="hidden" value="1" class="soluong"  />
<h1 class="tieude_giua"><span><?=count($product)?> <?=$title_cat?></span></h1>

<?php if(count($product) > 0){ ?>

	<div class="wap_item">

		<ul class="list_room">

			<?php foreach($product as $k => $value){	?>
				<?php 
				$d->reset();

				$sql_quan = "select ten FROM #_product_danhmuc where id='".$value['id_danhmuc']. "'";       

				$d->query($sql_quan);

				$p_quan = $d->fetch_array(); 

				$d->reset();

				$sql_phuong = "select ten FROM #_product_list where id='".$value['id_list']. "'";       

				$d->query($sql_phuong);

				$p_phuong = $d->fetch_array(); 



				$d->reset();

				$sql_duong = "select ten FROM #_product_cat where id='".$value['id_cat']. "'";       

				$d->query($sql_duong);

				$p_duong = $d->fetch_array();



				$d->reset();

				$sql_loaicanho = "select ten FROM #_news_danhmuc where id='".$value['id_loaicanho']. "'";       

				$d->query($sql_loaicanho);

				$p_loaicanho = $d->fetch_array();




				?>

				<li>

					<div class="image zoom_hinh">

						<a href="san-pham/<?=$value['tenkhongdau']?>.html"><img src="<?=_upload_sanpham_l.$value['thumb']?>" alt="<?=$value['ten']?>"></a>

					</div>

					<div class="content">

						<a href="san-pham/<?=$value['tenkhongdau']?>.html" class="room--name"><?=$value['ten']?></a>

						<p class="diachi"><?=_diachi?>:</b><?=$value['diachi']?></p>
<!-- 										<p class="diachi"><?=_diachi?>:</b>đường           
							<?php
							foreach( $p_duong as $values ){
								echo "$values";
							}
						?>,phường           
						<?php foreach( $p_phuong as $values ){
							echo "$values";
						}
					?>,quận 
					<?php  foreach( $p_quan as $values ){
						echo "$values";
					} 
				?></p> -->

				<div class="info">

					<span><i class="fa fa-th-large"></i><?=$value['dientich']?> m2</span>

					<span><i class="fa fa-bed"></i><?php foreach($p_loaicanho as $e => $result) {
						echo $result." ";
					}?> </span>

				</div>

				<p class="price"><?=_gia?>: <?=$value['gia']?> <?=_trieuthang?> - <?=$value['giangay']?> <?=_nganngay?></p>

				<a href="san-pham/<?=$value['tenkhongdau']?>.html" class="see__detail"><?=_xemchitiet?></a>
				<?php if($value['soldout'] > 0 ){ ?>
					<span class="sold__out">Đã có khách</span>
				<?php }else{ ?>	
					<span class="still_empty">Còn trống </span>
				<?php } ?>

				<span class="room_code"><?=_maphong?> : <?=$value['id']?></span>
			</div>

		</li>

	<?php } ?>

</ul>



<div class="clear"></div>

<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>

</div><!---END .wap_item-->

<?php }else{ ?>

	<div class="not__found">

		<p class="alert">

			Không tìm thấy loại phòng quý khách yêu cầu!

		</p>

	</div>

<?php } ?>







