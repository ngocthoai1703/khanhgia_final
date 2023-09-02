
<?php 
$d->reset();
$sql_product_so="select *,ten$lang as ten from #_product where type='sanpham' and hienthi=1 order by stt asc,id desc";
$d->query($sql_product_so);
$product_so=$d->result_array();

$d->reset();

$sql = " select photo from #_background where type='bgsearch'";

$d->query($sql);

$bgsearch =  $d->fetch_array();

$d->reset();
$sql="select ten$lang as ten,tenkhongdau,id,thumb from #_product_danhmuc where hienthi=1 and type='location' order by stt,id desc";
$d->query($sql);
$p_danhmuc=$d->result_array();

?>
<div id="filter--res" style="background-image: url(<?=_upload_hinhanh_l.$bgsearch['photo']?>);
                                            width: 90%;
                                            display: flex;
                                            margin: 0 auto;">

                <?php include _template."layout/filter_res.php";?>

            </div><!---END #slider--> 
<div id="canho__dathue">
	 
	<h3 class="title"><?=_canhodathue?></h3>
	<li><a href="gioi-thieu.html">Tất cả</a> </li>
	<?php 
                            for($i = 0; $i < count($p_danhmuc); $i++){ 
                              $d->reset();
                              $sql_dvquan="select ten$lang as ten,tenkhongdau,id from #_product_list where id_danhmuc=".$p_danhmuc[$i]['id']." and type='sanpham' and hienthi=1 order by stt asc,id desc";
                              $d->query($sql_dvquan);
                              $p_list=$d->result_array();

                              ?>
                              <li>
                                <a href="san-pham/<?=$p_danhmuc[$i]['tenkhongdau']?>/"><?=$p_danhmuc[$i]['ten']?></a>
                                <?php if(count($p_list)>0) { ?>
                                    <ul class="dm_cap2">
                                        <?php for($j=0;$j<count($p_list);$j++) { ?>
                                            <li><a href="san-pham/<?=$p_list[$j]['id']?>/<?=$p_list[$j]['tenkhongdau']?>/"><?=$p_list[$j]['ten']?></a></li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>

                            </li>
                        <?php } ?>
	<ul class="list_room">
		<?php foreach($product_so as $k => $value){	?>
			<li>
				<div class="image zoom_hinh">
					<a href="san-pham/<?=$value['tenkhongdau']?>.html"><img src="<?=_upload_sanpham_l.$value['thumb']?>" alt="<?=$value['ten']?>"></a>
				</div>
				<div class="content">
				<a href="san-pham/<?=$value['tenkhongdau']?>.html" class="room--name"><?=$value['ten']?></a>
				<p class="diachi"><?=$value['diachi']?></p>
				<div class="info">
					<span><i class="fa fa-th-large"></i><?=$value['dientich']?> m2</span>
					<span><i class="fa fa-bed"></i><?=$value['sophongngu']?> <?=_phongngu?></span>
				</div>
				<p class="price">Giá: <?=$value['gia']?> <?=_trieuthang?> - <?=$value['giangay']?> <?=_nganngay?></p>
				<a href="san-pham/<?=$value['tenkhongdau']?>.html" class="see__detail"><?=_xemchitiet?></a>
				<!-- <span class="sold__out">Sold</span> -->
				</div>
			</li>
		<?php } ?>
	</ul>
	<div id="load_more">Xem thêm</div>
	<div class="clear"></div>
	<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div>
<?php  include _template."layout/blog.php"; ?>
<?php  include _template."layout/banner.php"; ?>

<script type="text/javascript">
	let loadMoreBtn = document.querySelector('#load_more');
	let currentItem = 6;

	loadMoreBtn.onclick = () =>{
		let boxes = [...document.querySelectorAll('.list_room li')];
		for (var i = currentItem; i < currentItem + 3 ; i++){
			boxes[i].style.display = 'inline-block';
		}
		currentItem += 3
		if (currentItem >= boxes.length){
			loadMoreBtn.style.display = 'none';
		}
	}

</script>




<!-- <div class="tieude_giua"><div><?=$title_cat?></div></div>
<div class="box_container">
    <div class="content-gt">   
        <?=$tintuc_detail['noidung']?>   
        
		<div class="addthis_native_toolbox">
            <div class="fb-like" data-href="<?=getCurrentPageURL()?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
            <br />
            <script type="text/javascript" src="https://apis.google.com/js/plusone.js" async="async" defer="defer" ></script>
            <g:plusone></g:plusone>
        </div>

    </div><!--.content-->
</div><!--.box_container--> -->
         