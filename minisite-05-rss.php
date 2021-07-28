<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading bg-ffgray">
    <?php include_once('include/topnav-minisite.php'); ?>
    <?php
        $breadcrumb = [
            'bg' => 'public/assets/app/images/bg/breadcrumb-minisite-05.png',
            'title' => 'RSS',
            'desc' => 'ติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทจต่างๆ <br> เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย',
            'structure' => [
                [ 'url' => '#', 'display' => 'กนอ.อัพเดท' ],
                [ 'url' => '#', 'display' => 'RSS' ]
            ]
        ];
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-padding pt-0" data-aos="fade-up" data-aos-delay="450">
        <div class="container">
            <div class="grids jc-center">
                <div class="grid lg-90 sm-100">
            
                    <div class="grids grid-header sm-break mt-0">
                        <div class="grid sm-100 mt-0">
                            <div class="d-flex jc-end">
                                <div class="options w-auto mx-2">
                                    <div class="select-wrapper">
                                        <select class="order" title="Order">
                                            <option value="" disabled="" selected="">ที่มาใหม่</option>
                                            <option value="newest">ที่มาใหม่</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="options w-auto">
                                    <input type="text" class="w-md" name="search" placeholder="ค้นหา" required title="Search" />
                                    <button type="submit" class="btn btn-grid">
                                        <em class="zmdi zmdi-search"></em>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rss-01 mt-2">
                        <?php for($i=0; $i<10; $i++){?>
                            <div class="rss">
                                <?php if($i%2==0){?>
                                    <div class="ss-date">
                                        <div class="date bg-04">
                                            <div class="d">04</div>
                                            <div class="m-y">09.2563</div>
                                        </div>
                                    </div>
                                <?php }else{?>
                                    <div class="ss-date">
                                        <div class="date bg-11">
                                            <div class="d">04</div>
                                            <div class="m-y">09.2563</div>
                                        </div>
                                    </div>
                                <?php }?>
                                <a class="title h6 color-black h-color-04" href="#">
                                    การใช้งานระบบการให้บริการสอบถามและแจ้งปัญหาการใช้งานระบบ e-GP แบบออนไลน์
                                </a>
                                <div class="icon-rss">
                                    <img src="public/assets/app/images/icon/rss.svg" alt="Image Icon" />
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    <?php include('component/grid-footer.php'); ?>

                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
