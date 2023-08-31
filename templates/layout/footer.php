<?php	

$d->reset();
$sql_contact = "select noidung$lang as noidung from #_about where type='footer' limit 0,1";
$d->query($sql_contact);
$company_contact = $d->fetch_array();

$d->reset();
$sql_logo1 = "select photo from #_background where type='logo' limit 0,1";
$d->query($sql_logo1);
$row_logo = $d->fetch_array();

$d->reset();
$sql2="select ten$lang as ten,tenkhongdau,id from #_news where type='chinhsach' and hienthi=1 order by stt asc,id desc";
$d->query($sql2);
$chinhsach_ft=$d->result_array();

?>
<div id="main_footer">

    <div class="content_ft" >
    
        <div class="col_w50 wow fadeIn" data-wow-delay="500ms"  >
            <a href="index.html"><img class="logo" src="<?=_upload_hinhanh_l.$row_logo['photo']?>" /></a>
            <div class="address">
                <?=$company_contact['noidung']?> 
            </div>
            
        </div>
        
        
        
        <div class="col_w50 wow fadeInDown" data-wow-delay="700ms" style="float:right;" >
            <div id="fanpage_ft">
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0"></script>
                <div class="fb-page" data-href="<?=$company['fanpage']?>" data-tabs="timeline" data-width="300" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?=$company['fanpage']?>" class="fb-xfbml-parse-ignore"><a href="<?=$company['fanpage']?>"><?=$company['ten']?></a></blockquote></div>
            </div>
        </div>
    
        
    <div class="clear"></div>
    </div>


</div>


<div id="copy_right">
 © 2020 <?=$company['ten']?>. All rights reserved. Design by <a href="https://webgalaxy.vn/" style="color: #fff" target="_blank">Galaxy</a>
</div>


