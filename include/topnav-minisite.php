<!-- Super Topnav -->
<nav class="stopnav minisite">
    <div class="top-container">
        <div class="container">
            <div class="blocks">
                <div class="block">
                    <a class="option color-black h-color-04" href="#">
                        <em class="fas fa-sitemap"></em>
                        แผนผังเว็บไซต์
                    </a>
                </div>
                <div class="block">
                    <a class="option color-black h-color-04" href="#">
                        <img src="public/assets/app/images/icon/chat.svg" alt="Image ICon" />
                        แจ้งเรื่องร้องเรียน
                    </a>
                    <div class="option">
                        <span class="mr-1">ภาษา</span>
                        <a class="btn-icon btn-icon-sm btn-hex-02 active" href="#">
                            <div class="fit img-fill" style="background-image:url('public/assets/app/images/default/flag_th.jpg');"></div>
                        </a>
                        <a class="btn-icon btn-icon-sm btn-hex-02" href="#">
                            <div class="fit img-fill" style="background-image:url('public/assets/app/images/default/flag_us.jpg');"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-container">
        <div class="container">
            <div class="blocks">
                <div class="block">
                    <a class="logo" href="index.php">
                        <img src="public/assets/app/images/logo.png" alt="Logo" />
                        <div class="text-wrapper color-black">
                            <h6 class="h5 fw-600 lh-sm">การนิคมอุตสาหกรรมแห่งประเทศไทย (กนอ.)</h6>
                            <p class="">Industrial Estate Authority of Thailand</p>
                        </div>
                    </a>
                </div>
                <div class="block hide-mobile">
                    <div class="text text-right">
                        <p class="sm fw-400">ติดต่อ Call Center</p>
                        <a class="h3 xs color-06 h-color-04 lh-xs" href="#">
                            02 2072700
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>


<!-- Topnav -->
<?php $memu = ['เกี่ยวกับ ECO', 'โครงการและกิจกรรม', 'ข่าวประชาสัมพันธ์', 'รางวัล ECO', 'ติดต่อหน่วยงาน']; ?>
<nav class="topnav minisite">
    <div class="container">
        <div class="pc-container">
            <div class="blocks">
                <div class="block">
                    <a class="option" href="#">
                        <img src="public/assets/app/images/icon/home.svg" alt="Image Icon" />
                    </a>
                </div>
                <div class="menu-container">
                    <?php foreach($memu as $i=>$m){?>
                        <div class="menu">
                            <a class="topnav-dropdown-toggle" data-dropdown="<?= $i ?>" href="#">
                                <?= $m ?>
                            </a>
                        </div>
                    <?php }?>
                </div>
                <div class="block">
                    <a class="option clear" href="#">
                        <em class="zmdi zmdi-more-vert"></em>
                    </a>
                    <a class="option global-search-toggle" href="#">
                        <em class="zmdi zmdi-search"></em>
                    </a>
                </div>
            </div>
        </div>
        <div class="mobile-container">
            <div class="blocks">
                <div class="block">
                    <a class="option" href="#">
                        <img src="public/assets/app/images/icon/home.svg" alt="Image Icon" />
                    </a>
                </div>
                <div class="block">
                    <a class="option global-search-toggle" href="#">
                        <em class="zmdi zmdi-search"></em>
                    </a>
                    <a class="option sidenav-toggle" href="#">
                        <div class="hamburger">
                            <div></div><div></div><div></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="topnav-spacer"></div>


<!-- Topnav Dropdown -->
<div class="topnav-dropdown minisite">
    <div class="close-filter"></div>
    <div class="container">
        <?php foreach($memu as $i=>$m){?>
            <div class="dropdown-wrapper" data-dropdown="<?= $i ?>" style="background-image:url('public/assets/app/images/bg/14.jpg');">
                <div class="grids">
                    <div class="grid xl-20 sm-100">
                        <h5 class="h3 sm color-01">
                            <?= $m ?>
                        </h5>
                        <img class="hero" src="public/assets/app/images/hero/01.png" alt="Hero" />
                    </div>
                    <div class="grid xl-80 sm-100">
                        <p>
                            กนอ. ได้จัดตั้งสำนักบริการเบ็ดเสร็จครบวงจร (One Stop Service Center : OSS) ขึ้น 
                            เพื่อให้บริการแบบเบ็ดเสร็จตั้งแต่ต้นจนจบกระบวนการในการทำธุรกิจกับกนอ. 
                            ไม่ว่าจะเป็นการซื้อหรือเช่าที่ดิน การแนะนำพื้นที่ที่เหมาะสมในการตั้งโรงงาน 
                            การอนุมัติคำขออนุญาตและการออกใบรับรองที่จำเป็นต่างๆ เพื่อการจัดตั้งโรงงานในทุกขั้นตอนโดยง่าย 
                            หรือแม้แต่การพัฒนาจัดตั้งนิคมอุตสาหกรรมร่วมกับ กนอ.
                        </p>
                        <div class="ss-sep"></div>
                        <div class="scroll-wrapper" data-simplebar>
                            <div class="grids">
                                <div class="grid lg-25 mt-0">
                                    <ul class="ss-list">
                                        <li><a href="#">บทบาทหน้าที่ความรับผิดชอบขององค์กร</a></li>
                                        <li><a href="#">ปรัชญา วิสัยทัศน์ และพันธกิจ</a></li>
                                        <li><a href="#">ภารกิจหลักของ กนอ.</a></li>
                                        <li><a href="#">การแถลงทิศทางและนโยบายที่สำคัญ</a></li>
                                        <li><a href="#">การดำเนินงานตามนโยบายของรัฐบาล</a></li>
                                    </ul>
                                </div>
                                <div class="grid lg-30 mt-0">
                                    <ul class="ss-list ss-list-toggle">
                                        <li><a href="#">แนวนโยบายผู้ถือหุ้นภาครัฐ</a></li>
                                        <li><a href="#">การแสดงความรับผิดชอบต่อสังคม (CSR) ของ กนอ.</a></li>
                                        <li><a href="#">ธรรมาภิบาล</a>
                                            <div class="btn-icon btn-icon-xs btn-hex">
                                                <em class="zmdi zmdi-chevron-down"></em>
                                            </div>
                                            <ul class="ss-list dot-dark">
                                                <li><a href="#">นโยบาย กนอ. ใสสะอาด</a></li>
                                                <li><a href="#">นโยบายการกำกับดูแลกิจการที่ดี</a></li>
                                                <li><a href="#">บทบาทคณะกรรมการ กนอ.</a></li>
                                                <li><a href="#">การบริหารความเสี้ยง</a></li>
                                                <li><a href="#">การควบคุมภายใน</a></li>
                                                <li><a href="#">การตรวจสอบภายใน</a></li>
                                                <li><a href="#">การบริหารจัดการสารสนเทศ</a></li>
                                                <li><a href="#">การบริหารทรัพยากรบุคคล</a></li>
                                                <li><a href="#">จรรยาบรรณ กนอ.</a></li>
                                                <li><a href="#">ส่งเสริมคุณธรรมจริยธรรม</a></li>
                                                <li><a href="#">การเปิดเผยข้อมูลสาธารณะ (OIT)</a></li>
                                                <li><a href="#">นโยบายการป้องกันและต่อค้านการทุจริต</a></li>
                                                <li><a href="#">นโยบายการส่งเสริมความคิตสร้างสรรค์และการบริหารจัดการนวัตกรรม</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">ผลการตำเนินงานของ กนอ.</a></li>
                                        <li><a href="#">รางวัลแห่งความภูมิใจ</a></li>
                                    </ul>
                                </div>
                                <div class="grid lg-20 mt-0">
                                    <ul class="ss-list">
                                        <li><a href="#">ผังองค์กร</a></li>
                                        <li><a href="#">คณะกรรมการ</a></li>
                                        <li><a href="#">คณะผู้บริหาร</a></li>
                                        <li><a href="#">รายงานประจำปี</a></li>
                                    </ul>
                                </div>
                                <div class="grid lg-25 mt-0">
                                    <ul class="ss-list ss-list-toggle">
                                        <li><a href="#">แผนงานที่สำคัญ</a></li>
                                        <li><a href="#">ข้อมูลโครงการลงทุนที่สำคัญ</a></li>
                                        <li><a href="#">แผนแม่บท</a>
                                            <div class="btn-icon btn-icon-xs btn-hex">
                                                <em class="zmdi zmdi-chevron-down"></em>
                                            </div>
                                            <ul class="ss-list dot-dark">
                                                <li><a href="#">นโยบาย กนอ. ใสสะอาด</a></li>
                                                <li><a href="#">นโยบายการกำกับดูแลกิจการที่ดี</a></li>
                                                <li><a href="#">บทบาทคณะกรรมการ กนอ.</a></li>
                                                <li><a href="#">การบริหารความเสี้ยง</a></li>
                                                <li><a href="#">การควบคุมภายใน</a></li>
                                                <li><a href="#">การตรวจสอบภายใน</a></li>
                                                <li><a href="#">การบริหารจัดการสารสนเทศ</a></li>
                                                <li><a href="#">การบริหารทรัพยากรบุคคล</a></li>
                                                <li><a href="#">จรรยาบรรณ กนอ.</a></li>
                                                <li><a href="#">ส่งเสริมคุณธรรมจริยธรรม</a></li>
                                                <li><a href="#">การเปิดเผยข้อมูลสาธารณะ (OIT)</a></li>
                                                <li><a href="#">นโยบายการป้องกันและต่อค้านการทุจริต</a></li>
                                                <li><a href="#">นโยบายการส่งเสริมความคิตสร้างสรรค์และการบริหารจัดการนวัตกรรม</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">แผนวิสาหกิจ กนอ /แผนปฏิบัติการ กนอ.</a>
                                            <div class="btn-icon btn-icon-xs btn-hex">
                                                <em class="zmdi zmdi-chevron-down"></em>
                                            </div>
                                            <ul class="ss-list dot-dark">
                                                <li><a href="#">นโยบาย กนอ. ใสสะอาด</a></li>
                                                <li><a href="#">นโยบายการกำกับดูแลกิจการที่ดี</a></li>
                                                <li><a href="#">บทบาทคณะกรรมการ กนอ.</a></li>
                                                <li><a href="#">การบริหารความเสี้ยง</a></li>
                                                <li><a href="#">การควบคุมภายใน</a></li>
                                                <li><a href="#">การตรวจสอบภายใน</a></li>
                                                <li><a href="#">การบริหารจัดการสารสนเทศ</a></li>
                                                <li><a href="#">การบริหารทรัพยากรบุคคล</a></li>
                                                <li><a href="#">จรรยาบรรณ กนอ.</a></li>
                                                <li><a href="#">ส่งเสริมคุณธรรมจริยธรรม</a></li>
                                                <li><a href="#">การเปิดเผยข้อมูลสาธารณะ (OIT)</a></li>
                                                <li><a href="#">นโยบายการป้องกันและต่อค้านการทุจริต</a></li>
                                                <li><a href="#">นโยบายการส่งเสริมความคิตสร้างสรรค์และการบริหารจัดการนวัตกรรม</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>
<div class="topnav-dropdown-filter"></div>


<!-- Sidenav -->
<nav class="sidenav">
    <div class="wrapper">
        <div class="sidenav-toggle">
            <div class="hamburger">
                <div></div><div></div><div></div>
            </div>
        </div>
        <div class="scroll-wrapper" data-simplebar>
            <div class="items">
                <div class="item">
                    <a href="#">
                        แจ้งเรื่องร้องเรียน
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        ติดต่อ Call Center : 
                        <span class="text-xl fw-500">02 2072700</span>
                    </a>
                </div>
                <div class="item">
                    ภาษา 
                    <a class="btn-icon btn-icon-sm btn-hex ml-3" href="#">
                        <div class="fit img-fill" style="background-image:url('public/assets/app/images/default/flag_th.jpg');"></div>
                    </a> 
                    <a class="btn-icon btn-icon-sm btn-hex inactive ml-1" href="#">
                        <div class="fit img-fill" style="background-image:url('public/assets/app/images/default/flag_uk.jpg');"></div>
                    </a>
                </div>
            </div>
            <div class="menu-container"></div>
        </div>
    </div>
</nav>
<div class="sidenav-filter"></div>

<!-- Global Search Container -->
<div class="global-search-container use-gsap">
    <div class="wrapper">
        <div class="container">
            <div class="hamburger active global-search-toggle">
                <div></div><div></div><div></div>
            </div>
            <div class="container">
                <form action="/" method="GET">
                    <h5 class="h3 color-white text-center mt-0 mb-0-5">
                        คุณกำลังมองหาอะไร?
                    </h5>
                    <div class="input-container field">
                        <input type="text" name="keywords" placeholder="ค้นหา" required title="Keywords" />
                        <button type="submit">
                            <em class="zmdi zmdi-search"></em>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Quick Tab -->
<div class="quick-tab minisite">
    <div class="wrapper">

        <div class="tabs">
            <a class="tab btn-hover" href="#" data-tab="0">
                <img src="public/assets/app/images/icon/hex-4.png" alt="Icon" />
                <div class="wrapper">
                    <div class="inner-wrapper">
                        <img class="tab-icon" src="public/assets/app/images/icon/icon-user.png" alt="Tab Icon" />
                        <div class="p">การช่วย<br>การเข้าถึง</div>
                    </div>
                </div>
            </a>
            <a class="tab btn-hover" href="#" data-tab="1">
                <img src="public/assets/app/images/icon/hex-5.png" alt="Icon" />
                <div class="wrapper">
                    <div class="inner-wrapper">
                        <img class="tab-icon" src="public/assets/app/images/icon/icon-chain.png" alt="Tab Icon" />
                        <div class="p">ลิงค์ด่วน</div>
                    </div>
                </div>
            </a>
        </div>

        <div class="tab-bar" data-tab="0">
            <div class="wrapper">
                <div class="panel">
                    <div class="wrapper">
                        <div class="top-panel">
                            ขนาดตัวอักษร 
                            <a class="btn-font-size btn-hover" href="#" data-size="-1">
                                <img src="public/assets/app/images/icon/font-0.png" alt="Icon" />
                            </a>
                            <a class="btn-font-size btn-hover" href="#" data-size="0">
                                <img src="public/assets/app/images/icon/hex-6.png" alt="Icon" />
                                <div class="wrapper" style="color:#fff;">ก</div>
                            </a>
                            <a class="btn-font-size btn-hover" href="#" data-size="1">
                                <img src="public/assets/app/images/icon/font-2.png" alt="Icon" />
                            </a>
                        </div>
                        <div class="bottom-panel">
                            ความตัดกันของสี
                            <a class="btn-theme btn-hover" href="#" data-theme="0">
                                <img src="public/assets/app/images/icon/hex-6.png" alt="Icon" />
                                <div class="wrapper">ก</div>
                            </a>
                            <a class="btn-theme btn-hover" href="#" data-theme="1">
                                <img src="public/assets/app/images/icon/hex-7.png" alt="Icon" />
                                <div class="wrapper">น</div>
                            </a>
                            <a class="btn-theme btn-hover" href="#" data-theme="2">
                                <img src="public/assets/app/images/icon/hex-8.png" alt="Icon" />
                                <div class="wrapper" style="color:#000;">อ</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bar">
                    <div class="icon">
                        <img src="public/assets/app/images/icon/access-2.png" alt="Icon" />
                    </div>
                    <a class="btn-close btn-hover" href="#">
                        <img src="public/assets/app/images/icon/close.png" alt="Icon" />
                    </a>
                </div>
            </div>
        </div>

        <div class="tab-bar" data-tab="1" style="padding-top:.5rem;">
            <div class="wrapper">
                <div class="bubbles">
                    <a class="bubble btn-hover pos pos-0" href="#">
                        <img src="public/assets/app/images/icon/hex-1.png" alt="Bubble" />
                        <div class="wrapper">
                            <div class="inner-wrapper">
                                <img class="bubble-icon" src="public/assets/app/images/client/07.png" alt="Bubble Icon" />
                                <div class="h6">I-EA-T</div>
                                <div class="p">Operation Center</div>
                            </div>
                        </div>
                    </a>
                    <a class="bubble btn-hover pos pos-1" href="#">
                        <img src="public/assets/app/images/icon/hex-2.png" alt="Bubble" />
                        <div class="wrapper">
                            <div class="inner-wrapper">
                                <img class="bubble-icon" src="public/assets/app/images/client/08.png" alt="Bubble Icon" />
                                <div class="h6">TSC</div>
                            </div>
                        </div>
                    </a>
                    <a class="bubble btn-hover pos pos-2" href="#">
                        <img src="public/assets/app/images/icon/hex-1.png" alt="Bubble" />
                        <div class="wrapper">
                            <div class="inner-wrapper">
                                <img class="bubble-icon" src="public/assets/app/images/client/07.png" alt="Bubble Icon" />
                                <div class="h6">I-EA-T</div>
                                <div class="p">Operation Center</div>
                            </div>
                        </div>
                    </a>
                    <a class="bubble btn-hover pos pos-3" href="#">
                        <img src="public/assets/app/images/icon/hex-2.png" alt="Bubble" />
                        <div class="wrapper">
                            <div class="inner-wrapper">
                                <img class="bubble-icon" src="public/assets/app/images/client/08.png" alt="Bubble Icon" />
                                <div class="h6">TSC</div>
                            </div>
                        </div>
                    </a>
                    <a class="bubble btn-hover pos pos-4" href="#">
                        <img src="public/assets/app/images/icon/hex-1.png" alt="Bubble" />
                        <div class="wrapper">
                            <div class="inner-wrapper">
                                <img class="bubble-icon" src="public/assets/app/images/client/07.png" alt="Bubble Icon" />
                                <div class="h6">I-EA-T</div>
                                <div class="p">Operation Center</div>
                            </div>
                        </div>
                    </a>
                    <a class="bubble btn-hover pos pos-5" href="#">
                        <img src="public/assets/app/images/icon/hex-2.png" alt="Bubble" />
                        <div class="wrapper">
                            <div class="inner-wrapper">
                                <img class="bubble-icon" src="public/assets/app/images/client/08.png" alt="Bubble Icon" />
                                <div class="h6">TSC</div>
                            </div>
                        </div>
                    </a>
                    <a class="bubble btn-hover pos pos-6" href="#">
                        <img src="public/assets/app/images/icon/hex-3.png" alt="Bubble" />
                        <div class="wrapper">
                            <div class="inner-wrapper">
                                <img class="bubble-icon" src="public/assets/app/images/client/09.png" alt="Bubble Icon" />
                                <div class="h6">Eco</div>
                                <div class="p">Challenge</div>
                            </div>
                        </div>
                    </a>
                    <a class="bubble btn-hover" href="#">
                        <img src="public/assets/app/images/icon/hex-3.png" alt="Bubble" />
                        <div class="wrapper">
                            <div class="inner-wrapper">
                                <img class="bubble-icon" src="public/assets/app/images/client/09.png" alt="Bubble Icon" />
                                <div class="h6">Eco</div>
                                <div class="p">Challenge</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="bar">
                    <div class="icon">
                        <img src="public/assets/app/images/icon/quicklink-2.png" alt="Icon" />
                    </div>
                    <a class="btn-close btn-hover" href="#">
                        <img src="public/assets/app/images/icon/close.png" alt="Icon" />
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
