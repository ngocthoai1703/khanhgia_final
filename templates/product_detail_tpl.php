<?php 

$arr_loaitienich = explode(',',$row_detail['id_loaitienich']);

$d->reset();

$sql = "select ten,photo FROM #_news_danhmuc where id='".$row_detail['id_loaicanho']."' and type='loaicanho' ";       

$d->query($sql);

$loaicanho = $d->fetch_array(); 


$d->reset();

$sql_quan = "select ten FROM #_product_danhmuc where id='".$row_detail['id_danhmuc']. "'";       

$d->query($sql_quan);

$p_quan = $d->fetch_array(); 

$d->reset();

$sql_phuong = "select ten FROM #_product_list where id='".$row_detail['id_list']. "'";       

$d->query($sql_phuong);

$p_phuong = $d->fetch_array(); 



$d->reset();

$sql_duong = "select ten FROM #_product_cat where id='".$row_detail['id_cat']. "'";       

$d->query($sql_duong);

$p_duong = $d->fetch_array(); 


?>

<link href="magiczoomplus/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>

<!--Tags sản phẩm-->

<link href="css/tab.css" type="text/css" rel="stylesheet" />

<input type="hidden" value="1" class="soluong"  />

<div id="col_left">



  <h3 class="pro--name"><?=$title_cat?><?php if($row_detail['soldout'] > 0){ ?><span style="color: red">( Đã được thuê )</span><?php } ?></h3>

  <p class="pro--price"><?=$row_detail['gia']?> <?=_trieuthang?> - <?=$row_detail['giangay']?> <?=_nganngay?></p>

  <div class="box_container">     

    <div class="zoom_slick">    

      <div class="slick2">                

        <a data-zoom-id="Zoom-detail" id="Zoom-detail" class="MagicZoom" href="<?php if($row_detail['photo'] != NULL)echo _upload_sanpham_l.$row_detail['photo'];else echo 'images/noimage.gif';?>" title="<?=$row_detail['ten']?>"><img class='cloudzoom' src="<?php if($row_detail['photo'] != NULL)echo _upload_sanpham_l.$row_detail['photo'];else echo 'images/noimage.gif';?>" /></a>



        <?php $count=count($hinhthem); if($count>0) {?>

          <?php for($j=0,$count_hinhthem=count($hinhthem);$j<$count_hinhthem;$j++){?>

            <a data-zoom-id="Zoom-detail" id="Zoom-detail" class="MagicZoom" href="<?php if($hinhthem[$j]['photo']!=NULL) echo _upload_hinhthem_l.$hinhthem[$j]['photo']; else echo 'images/noimage.gif';?>" title="<?=$row_detail['ten']?>" ><img src="<?php if($hinhthem[$j]['photo']!=NULL) echo _upload_hinhthem_l.$hinhthem[$j]['photo']; else echo 'images/noimage.gif';?>" /></a>    

          <?php }} ?>

        </div><!--.slick-->





        <?php $count=count($hinhthem); if($count>0) {?>

          <div class="slick">                

            <p><img src="<?=_upload_sanpham_l.$row_detail['thumb']?>" /></p>

            <?php for($j=0,$count_hinhthem=count($hinhthem);$j<$count_hinhthem;$j++){?>

              <p><img src="<?=_upload_hinhthem_l.$hinhthem[$j]['thumb']?>" /></p>

            <?php } ?>

          </div><!--.slick-->

        <?php } ?>



      </div><!--.zoom_slick--> 

     <!--  <div id="pro__info none">    

        <div class="addr"><b><?=_diachi?>:</b>đường           
          <?php
          foreach( $p_duong as $value ){
            echo "$value";
          }
        ?>,phường           
        <?php foreach( $p_phuong as $value ){
          echo "$value";
        }
      ?>,quận 
      <?php  foreach( $p_quan as $value ){
        echo "$value";
      } 
      ?>
    </div> -->
    <div id="pro__info">    

      <div class="addr"><b><?=_diachi?>:</b> <?=$row_detail['diachi']
      ?>
    </div>
    <div class="typeapart"><b><?=_lau?>:</b> <?=$row_detail['lau']?></div>
    <div class="typeapart"><b><?=_phong?>:</b> <?=$row_detail['sophong']?></div>


<!--       <div class="type"><b><?=_loaiphong?>:</b> <?php if($row_detail['sophongngu']==0){ ?>Studio <?php }else{ ?><?=$row_detail['sophongngu']?> p.ngủ<?php } ?> </div>
-->
<div class="typeapart"><b><?=_loaicanho?>:</b> <?=$loaicanho['ten']?></div>
<div class="room_status_details">
  <?php if($row_detail['soldout'] > 0 ){ ?>
    <span class="sold__outs">Đã có khách</span>
  <?php }else{ ?> 
    <span class="still_emptys">Còn trống </span>
  <?php } ?>
</div>
<div class="room_code_details"><b>Mã phòng:</b> <?=$row_detail['id']?></div>

<div class="addr"><b><?=_dientich?>:</b> <?=$row_detail['dientich']?> m2</div>

<div class="price"><b><?=_gia?>:</b> <?=$row_detail['gia']?> <?=_trieuthang?> - <?=$row_detail['giangay']?> <?=_nganngay?></div>

</div> 

<div id="pro__desc">
  <h2>Thông tin</h2>
  <p><b><?=_giadien?>:</b> <?=$row_detail['giadien'] ?> <?=_kWh ?></p>
  <p><b><?=_gianuoc?>:</b> <?=$row_detail['gianuoc'] ?> <?=_m3 ?></p>
  <p><b><?=_phidichvu?>:</b> <?=$row_detail['phidichvu'] ?> <?=_nguoi ?></p>
  <p><b><?=_phiguixe?>:</b> <?=$row_detail['phiguixe'] ?> <?=_chiec ?></p>



</div>

<?php if($row_detail['id_loaitienich']!=''){ ?> 

  <div id="pro_service">

    <h3 class="title"><?=_tienich?></h3>

    <ul class="list_service">

     <?php foreach ($arr_loaitienich as $key => $value) { 

       $d->reset();

       $sql = "select ten$lang as ten,photo FROM #_news_danhmuc where id='".$value."' and type='loaitienich' ";       

       $d->query($sql);

       $loaitienich = $d->fetch_array(); 

       ?>

       <li>

         <img src="<?=_upload_tintuc_l.$loaitienich['photo']?>" alt="<?=$loaitienich['ten']?>">

         <p><?=$loaitienich['ten']?></p>

       </li>

     <?php } ?>

   </ul>

 </div>

<?php } ?>

<div id="pro__content">
  <?=$row_detail['linkvideo']?>

</div>
<div id="">
  <h2>Mô tả</h2>
  <hr>
  <?=$row_detail['noidung']?>

</div>

<div class="clear"></div>

</div><!--.box_containerlienhe-->

</div>

<div id="col_right">



  <form method="post" name="frm_dangkythuephong" class="frm_dangkythuephong" action="ajax/dangkythuephong.php" enctype="multipart/form-data">

    <div style="display: none;">

      <input type="hidden" name="pid" value="<?=$row_detail['id']?>">



    </div>

    <p><label><?=_hotenres?></label><span><input type="text" name="fullname" value="" size="40" class="fullname" aria-required="true" aria-invalid="false"></span></p>

    <p><label><?=_sdtres?></label><span ><input type="tel" name="phonenumber" value="" size="40" class="phonenumber" aria-required="true" aria-invalid="false"></span></p>

    <p><label><?=_emailres?></label><span ><input type="tel" name="email" value="" size="40" class="email" aria-required="true" aria-invalid="false"></span></p>

    <p><label><?=_ngaydenres?></label><span ><input type="date" name="arrive" value="" class="arrive" aria-required="true" aria-invalid="false"></span></p>

    <p><label><?=_ngaydires?></label><span ><input type="date" name="departure" value="" class="departure" aria-required="true" aria-invalid="false"></span></p>

    <p><label><?=_nguoilon?></label><span ><select name="adults" class="adults" aria-invalid="false"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option></select></span></p>

    <p><label><?=_treem?></label><span ><select name="children" class="children" aria-invalid="false"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option></select></span></p>

    <p><label><?=_phong?></label><span ><select name="room" class="room" aria-invalid="false"><option value="Studio">Studio</option><option value="1 phòng ngủ">1 <?=_phongngu?></option><option value="2 phòng ngủ">2 <?=_phongngu?></option><option value="3 phòng ngủ">3 <?=_phongngu?></option><option value="4 phòng ngủ">4 <?=_phongngu?></option><option value="5 phòng ngủ">5 <?=_phongngu?></option></select></span></p>

    <p><span class="click_send"><?=_gui?></span></p>

    <div class="thongbao"></div>

  </form>

  <div id="map">

    <?=$row_detail['map']?>

  </div>

</div>

<div class="clear"></div>