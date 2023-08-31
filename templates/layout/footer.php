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

$d->reset();
$sql_social="select photo,link,ten from #_slider where type='social' and hienthi=1 order by stt asc,id desc";
$d->query($sql_social);
$social=$d->result_array();
?>


<div id="main_footer">

    <div class="content_ft" >
    
        <div class="col_w50 wow fadeIn" data-wow-delay="500ms"  >
            <a href="index.html"><img class="logo" src="<?=_upload_hinhanh_l.$row_logo['photo']?>" /></a>
            <div id="social">
         <?php foreach ($social as $key => $value) { ?>
          <a href="<?=$value['link']?>" target="_blank"><img src="<?=_upload_hinhanh_l.$value['photo']?>" ></a>
        <?php } ?>
        <div id="copy_right"><span>Copyright © Khanh An Apartment</span></div>
    </div>
</div>
      <div class="col_w30 contact">
        <h3 class="title_ft">Liên hệ</h3>
        <div class="info">
          <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="24" height="24"
        viewBox="0 0 172 172"
        style=" fill:#fff; margin-bottom: -5px;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#fff"><path d="M86,0c-27.9388,0 -50.16667,22.22787 -50.16667,50.16667c0,43 50.16667,121.83333 50.16667,121.83333c0,0 50.16667,-79.56119 50.16667,-121.83333c0,-27.9388 -22.22786,-50.16667 -50.16667,-50.16667zM86,64.5c-7.89453,0 -14.33333,-6.4388 -14.33333,-14.33333c0,-7.89453 6.43881,-14.33333 14.33333,-14.33333c7.89453,0 14.33333,6.43881 14.33333,14.33333c0,7.89453 -6.4388,14.33333 -14.33333,14.33333z"></path></g></g></svg><a><?=$company['diachi']?></a></span>
        <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
          width="24" height="24"
          viewBox="0 0 172 172"
          style=" fill:#fff; margin-bottom: -5px;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#fff"><path d="M48.16,13.72641c-18.95899,0 -34.4,15.44101 -34.4,34.4v75.68c0,18.95899 15.44101,34.4 34.4,34.4h75.68c18.95899,0 34.4,-15.44101 34.4,-34.4v-75.68c0,-18.95899 -15.44101,-34.4 -34.4,-34.4zM48.16,20.60641h75.68c15.24149,0 27.52,12.27851 27.52,27.52v75.68c0,15.24149 -12.27851,27.52 -27.52,27.52h-75.68c-15.24149,0 -27.52,-12.27851 -27.52,-27.52v-75.68c0,-15.24149 12.27851,-27.52 27.52,-27.52zM62.08797,37.96094c-7.03591,-0.30403 -12.37608,2.36936 -15.73531,5.58328c-1.67961,1.60696 -2.89227,3.3264 -3.72219,4.93156c-0.82991,1.60517 -1.35719,2.92851 -1.35719,4.64937c0,-0.15329 -0.0378,0.65128 -0.06047,1.58563c-0.0227,0.93435 -0.01857,2.19385 0.06719,3.71547c0.17186,3.04323 0.68765,7.15968 2.05594,12.04c2.73658,9.76064 8.89856,22.56449 22.26594,35.93188c13.36739,13.36738 26.17049,19.52849 35.93188,22.26594c4.88069,1.36872 8.99648,1.88372 12.04,2.05594c1.52176,0.0861 2.77429,0.08975 3.70875,0.06719c0.93446,-0.0227 1.74511,-0.06047 1.59235,-0.06047c1.72086,0 3.04421,-0.52727 4.64937,-1.35719c1.60517,-0.82991 3.3246,-2.04257 4.93156,-3.72219c3.21393,-3.35923 5.8873,-8.6994 5.58328,-15.73531c-0.14426,-3.35565 -2.00734,-6.32724 -4.75688,-8.08938c-2.12482,-1.36153 -5.42341,-3.47507 -9.72875,-6.22828c-4.99521,-3.1915 -11.38432,-3.41947 -16.59531,-0.56437l0.29562,-0.14781l-4.0514,1.74016l-0.29563,0.20828c-0.98473,0.69141 -2.20435,0.8195 -3.31235,0.35609c-3.10374,-1.29793 -7.93978,-3.84807 -12.4364,-8.34469c-4.49662,-4.49662 -7.04676,-9.33267 -8.34469,-12.4364c-0.46341,-1.108 -0.33533,-2.32761 0.35609,-3.31235l0.20828,-0.29563l1.74016,-4.0514l-0.14781,0.29562c2.85439,-5.20969 2.63245,-11.59862 -0.56437,-16.59531c-2.75322,-4.30534 -4.86675,-7.60393 -6.22828,-9.72875c-1.76214,-2.74954 -4.73372,-4.6126 -8.08938,-4.75688zM61.79235,44.83422c0.96498,0.04149 1.96133,0.60604 2.59344,1.59235c1.36294,2.12702 3.47749,5.42721 6.22828,9.72875c1.82557,2.85339 1.95387,6.60343 0.3225,9.58094l-0.08063,0.14781l-1.65953,3.87672l0.34266,-0.62485c-2.03307,2.89559 -2.44167,6.65591 -1.075,9.9236c1.55039,3.70746 4.51527,9.33262 9.82953,14.64687c5.31426,5.31426 10.93941,8.27914 14.64687,9.82953c3.26768,1.36667 7.02801,0.95807 9.9236,-1.075l-0.62485,0.34266l3.87672,-1.65953l0.14781,-0.08063c2.97621,-1.63066 6.72607,-1.49479 9.58094,0.32922v-0.00672c4.30154,2.75079 7.60173,4.86534 9.72875,6.22828c0.9863,0.63211 1.55086,1.62845 1.59235,2.59344c0.22573,5.22425 -1.58874,8.49505 -3.68188,10.68281c-1.04656,1.09389 -2.18147,1.88777 -3.1175,2.37172c-0.93603,0.48395 -1.83127,0.58453 -1.49156,0.58453c-0.63093,0 -0.96323,0.04138 -1.7536,0.06047c-0.79037,0.01926 -1.84979,0.02031 -3.15781,-0.05375c-2.61603,-0.14802 -6.22691,-0.59461 -10.57531,-1.81406c-8.69681,-2.43889 -20.3551,-7.93884 -32.92188,-20.50562c-12.56678,-12.56678 -18.06759,-24.22606 -20.50562,-32.92188c-1.21902,-4.34791 -1.66634,-7.95964 -1.81406,-10.57531c-0.07386,-1.30784 -0.07291,-2.36752 -0.05375,-3.15781c0.01926,-0.79029 0.06047,-1.12215 0.06047,-1.7536c0,0.3397 0.10059,-0.55553 0.58453,-1.49156c0.48395,-0.93603 1.27783,-2.07094 2.37172,-3.1175c2.18777,-2.09314 5.45857,-3.90762 10.68281,-3.68188z"></path></g></g></svg><a class="blink_me" href="tel:<?=preg_replace('/[^0-9]/','',$company['dienthoai']);?>"><?=$company['dienthoai']?></a>&nbsp;&nbsp;<a class="blink_me" href="tel:<?=preg_replace('/[^0-9]/','',$company['website']);?>"><?=$company['website']?></a></span>
          <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
            width="24" height="24"
            viewBox="0 0 172 172"
            style=" fill:#fff; margin-bottom: -5px;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#fff"><path d="M19.84615,26.46154c-10.95673,0 -19.84615,8.88942 -19.84615,19.84615v79.38462c0,10.95673 8.88942,19.84615 19.84615,19.84615h132.30769c10.95673,0 19.84615,-8.88942 19.84615,-19.84615v-79.38462c0,-10.95673 -8.88942,-19.84615 -19.84615,-19.84615zM5.16827,45.27404l80.83173,43.62019l80.83173,-43.62019l-51.26923,39.89904l42.37981,43.41346l-51.68269,-36.79808l-20.25962,13.02404l-20.25962,-13.02404l-51.68269,36.79808l42.37981,-43.41346z"></path></g></g></svg><a><?=$company['email']?></a></span>
        </div>
      </div>
      <!-- </div>
            <div class="address">
                <?=$company_contact['noidung']?> 
            </div>
            
        </div> -->
        
        
        
        <!-- <div class="col_w50 wow fadeInDown" data-wow-delay="700ms" style="float:right;" >
            <div id="fanpage_ft">
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0"></script>
                <div class="fb-page" data-href="<?=$company['fanpage']?>" data-tabs="timeline" data-width="300" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?=$company['fanpage']?>" class="fb-xfbml-parse-ignore"><a href="<?=$company['fanpage']?>"><?=$company['ten']?></a></blockquote></div>
            </div>
        </div> -->
    
        
    <div class="clear"></div>
    </div>


</div>



