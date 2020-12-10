<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>
    <style>
        .content-01 .tab-container {display:flex; flex-wrap:wrap; justify-content: space-between; margin:4.5rem 0 0 0;}
        .content-01 .tabs {width: calc(20% - 2rem); -webkit-mask-image: linear-gradient(to bottom, #000, #000, #000, #000, #000, #000, 
            #000, #000, #000, #000, #000, #000, #000, #000, #000, #000, #000, 
            rgba(0,0,0,.5), rgba(0,0,0,0));}
        .content-01 .tabs > .wrapper {box-shadow: 0px 0px 3px 3px rgba(0,0,0,0.1);}
        .content-01 .tabs .tab {position:relative; width:100%; display:flex; align-items:center; padding: .625rem 1rem; border-bottom: 1px solid transparent; border-color: #e7e7e7; }
        .content-01 .tabs .tab.header{padding: .625rem 1.25rem; color:#fff; background:linear-gradient(to right, #169f96, #2d6d87)}
        .content-01 .tabs .tab img {width: 1.5rem; height: 1.5rem; margin: 0 .5rem 0 0;}
        .content-01 .tab-contents {width:80%; display:flex; flex-wrap:wrap; justify-content: space-between; }
        .content-01 .tab-contents .tab-content, .content-01 .tab-contents .tab-content .sub-content {display:flex; flex-wrap:wrap; justify-content:space-between; 
            -webkit-mask-image: linear-gradient(to bottom, #000, #000, #000, #000, #000, #000, 
            #000, #000, #000, #000, #000, #000, #000, #000, #000, #000, #000, 
            rgba(0,0,0,.5), rgba(0,0,0,0));} 
        .content-01 .tab-contents .tab-content.tab-left{width:calc(40% - .5rem);}
        .content-01 .tab-contents .tab-content.tab-right{width:calc(60% - .5rem);}
        .content-01 .tab-contents .tab-content .sub-content {width:calc(50% - .5rem); margin: 0 0 2rem 0; }
        .content-01 .tab-contents .tab-content .img-bg-container { overflow:hidden; display:block; position:relative; width:100%; padding:67% 0 0 0; cursor:pointer;}
        .content-01 .tab-contents .tab-content .img-bg {z-index:-1; position:absolute; top:0; left:0; right:0; bottom:0; background-size:cover; background-position:center; transition: .3s transform;}
        .content-01 .tab-contents .tab-content .img-bg-container .date {background:#169f96; display:block; color:#fff; text-align:center; padding:.25rem; position:absolute; top:0;left:0; z-index:2;}
        .content-01 .tab-contents .tab-content .img-bg-container .date .d { border-bottom: .5px solid transparent; border-color:#c1dade; font-size:2rem;}
        .content-01 .tab-contents .tab-content .img-bg-container .date .m-y {margin: .25rem 0 0 0; font-weight:100;}
        /* Hover effect */
        .content-01 .tab-contents .tab-content .img-bg-container .hover-container {z-index:-1; pointer-events:none; display:flex; justify-content: center; align-items:center; position:absolute; width:100%; height:100%; top:0; left:0; background-color: rgba(111, 81, 170, .6); opacity:0; transition:.3s opacity;}
        .content-01 .tab-contents .tab-content.tab-left:hover .img-bg-container .hover-container, .content-01 .tab-contents .tab-content.tab-right .sub-content:hover .img-bg-container .hover-container {pointer-events:auto; opacity:1; }
        .content-01 .tab-contents .tab-content.tab-left:hover .text-container, .content-01 .tab-contents .tab-content.tab-right .sub-content:hover .text-container {
            background-color:#333; color: #fff;
        }

        .content-01 .tab-contents .tab-content.tab-left:hover .img-bg-container .img-bg, .content-01 .tab-contents .tab-content.tab-right .sub-content:hover .img-bg-container .img-bg {transform: scale(1.1);}
        .content-01 .tab-contents .tab-content .text-container {
            box-shadow: 0px 0px 3px 3px rgba(0,0,0,0.1); padding: 1rem 1rem 2.5rem 1rem; margin:-1.5rem auto 0 auto; width:calc(100% - 2rem); background: #fff;
            transition: all .3s;
        }
        .content-01 .tab-contents .tab-content .text-container .icons{margin:.75rem 0 0 0;}
        .content-01 .tab-contents .tab-content .text-container .icons .icon{display: inline-block; margin: 0 1rem 0 0;}
        .content-01 .tab-contents .tab-content .text-container .icons .icon i{ margin: 0 .375rem 0 0; color:#333; background-color: #e8e8e8; font-weight:600; padding:.25rem .375rem;}
        .content-01 .tab-contents .tab-content .text-container .tags {margin: .75rem 0 0 0;}
        .content-01 .tab-contents .tab-content .text-container .tags .tag{display:inline-block; padding: .25rem;border: 1px solid transparent; border-color:#cfcfcf;  }
        .content-01 .tab-contents .tab-content .text-container .tags .tag.tag-01::before {content: 'นิคมอุตสาหกรรม'; }
        .content-01 .tab-contents .tab-content .text-container .tags .tag.tag-02::before {content: 'กนอ.'; }
        .content-01 .tab-contents .tab-content .text-container .tags .tag.tag-03::before {content: '5G'; }
        .content-01 .tab-contents .tab-content .text-container .tags .tag.tag-04::before {content: 'สายสื่อสาร'; }


        .color-02 { color: #169f96;}

        @media screen and (max-width: 991.98px) {
            .content-01 .tab-contents .tab-content.tab-left, .content-01 .tab-contents .tab-content.tab-right{width:100%;}
        }
        @media screen and (max-width: 767.98px){
            .content-01 .tab-contents .tab-content.tab-left, .content-01 .tab-contents .tab-content.tab-right .sub-content{width:100%;}
        }
    </style>
    <section class="section-padding content-01">
        <div class="container">
            <h1 class="text-center">กนอ. อัพเดท</h1>
            <p class="text-center">เพิ่มขีดคสามสามารถของคุรและธุรกิจด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดท ต่างๆ <br> เกี่ยวกับ กนอ. และนิคมอุตสาหกรรมในประเทศไทย <span class="color-02 fw-600">ได้ที่นี่</span></p>


            <div class="tab-container tab-container-01">
                <div class="tabs">
                    <div class="wrapper">
                        <div class="tab header">
                            <p class="text-xl">ข่าวประชาสัมพันธ์</p>
                        </div>
                        <div class="tab">
                            <img src="./public/assets/app/images/icon/01.png" alt="icon">
                            ข่าวสารการลงทุน
                        </div>
                        <div class="tab">
                            <img src="./public/assets/app/images/icon/02.png" alt="icon">
                            สื่อมัลติมีเดีย
                        </div>
                        <div class="tab">
                            <img src="./public/assets/app/images/icon/03.png" alt="icon">
                            เอกสารเผยแพร่
                        </div>
                        <div class="tab">
                            <img src="./public/assets/app/images/icon/04.png" alt="icon">
                            ปฏิทินกิจกรรม
                        </div>
                        <div class="tab">
                            <img src="./public/assets/app/images/icon/05.png" alt="icon">
                            สถานการณ์ปัจจุบัน
                        </div>
                    </div>

                </div>
                <div class="tab-contents">
                    <div class="tab-content tab-left">
                        <div class="img-bg-container">
                            <div class="img-bg" style="background-image:url('./public/assets/app/images/bg/17.jpg');"></div>
                            <div class="date">
                                <div class="d">04</div>
                                <div class="m-y">09.2563</div>
                            </div>
                            <div class="hover-container">
                                <img src="./public/assets/app/images/icon/06.png" alt="icon">
                            </div>
                        </div>
                        <div class="text-container">
                            <h4>กนอ. ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสารลงดิน วางระบบ 5G...</h4>
                            <p>บอร์ดกนอ.ไฟเขียวลงทุนนำสายสื่อสารในนิคมอุตสาหกรรมลงใต้ดินรองรับ Smart City เตรียมวางระบบ 5 G ครอบคลุใพื้นที่นิคมอุตสาหรกรรม 14 แห่ง และท่าเรืออุตสาหากรรม 1 แห่ง คาดเริ่มได้ปี'67..</p>
                            <div class="icons">
                                <div class="icon">
                                    <img src="./public/assets/app/images/icon/07.png" alt="" />
                                    <span class="text-xl">112</span>
                                </div>
                                <div class="icon">
                                    <i class="zmdi zmdi-share"></i>
                                    <span class="text-xl">20</span>
                                </div>
                            </div>
                            <div class="tags">
                                TAG : 
                                <div class="tag tag-01"></div>
                                <div class="tag tag-02"></div>
                                <div class="tag tag-03"></div>
                                <div class="tag tag-04"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content tab-right">
                        <?php for($i=0; $i <4; $i++){?>

                            <div class="sub-content">
                                <div class="img-bg-container">
                                    <div class="img-bg" style="background-image:url('./public/assets/app/images/bg/17.jpg');"></div>
                                    <div class="date">
                                        <div class="d">04</div>
                                        <div class="m-y">09.2563</div>
                                    </div>
                                    <div class="hover-container">
                                        <img src="./public/assets/app/images/icon/06.png" alt="icon">
                                    </div>
                                </div>
                                <div class="text-container">
                                    <h6 class="fw-600">สัมนาเรื่อง "การบริหารจัดการเส้นทางประสบการณ์...</h6>
                                    <p>บอร์ดกนอ.ไฟเขียวลงทุนนำสายสื่อสารในนิคมอุตสาหกรรมลงใต้ดินรองรับ Smart City เตรียมวางระบบ 5 G ครอบคลุใพื้นที่นิคมอุตสาหรกรรม 14 แห่ง และท่าเรืออุตสาหากรรม 1 แห่ง คาดเริ่มได้ปี'67..</p>
                                    <div class="icons">
                                        <div class="icon">
                                            <img src="./public/assets/app/images/icon/07.png" alt="" />
                                            <span class="text-xl">112</span>
                                        </div>
                                        <div class="icon">
                                            <i class="zmdi zmdi-share"></i>
                                            <span class="text-xl">20</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style>
        .temp-01 .grid > .wrapper {position:relative; height: 33vh;}
        .temp-01 .wrapper .img-bg {position:absolute; z-index:-1; top:0; left:0; right:0; bottom:0; background-position:center; background-repeat:no-repeat; background-size:cover;}
        .color-01 {color:#602774 !important;}
        .temp-01 .btn-container {margin:.375rem 0 0 0; display:flex; justify-content:flex-start; }
        .temp-01 .btn-container .btn {
            display:block; text-align:center; line-height: 1.875rem;
            font-size: .9375rem;
            color:#fff;
            width: 2.25rem; height:2.5rem;
            background-color: #4b326e;
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
        }
    </style>

    <section class="temp-01">
        <div class="grids no-gap">
            <div class="grid sm-100 md-100 lg-50">
                <div class="wrapper">
                    <div class="img-bg" style="background-image:url('./public/assets/app/images/bg/01.jpg')"></div>
                </div>
            </div>
            <div class="grid sm-100 md-100 lg-50">
                <div class="wrapper d-flex ai-center jc-flex-start">
                    <div class="px-5 py-4">
                        <h1 class="color-01 fw-600 mb-0">ประกาศจัดซื้อจัดจ้าง</h1>
                        <p class="text-sm fw-400 mt-1">เพิ่มขีดความสามารถของคุณด้วยการอัพเดทข่าวสาร
                            <br>
                            พร้อมกันทุกกระแสความเคลื่อนไหว
                        </p>
                        <div class="btn-container">
                            <div class="btn">
                                <i class="zmdi zmdi-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="img-bg" style="background-image:url('./public/assets/app/images/bg/02.jpg')"></div>
                </div>
            </div>
        </div>
    </section>


    <style>
        .content-02 {position:relative;}
        .content-02 > .wrapper {position:relative; padding:4rem 0 0 0;}
        .content-02 .img-bg-container {
            position:absolute;
            top:0; left:0;
            width:100%; height:100%;
            z-index:-1;
        }
        .content-02 .img-bg-container .img-bg {width:100%; height:100%; background-size:cover; background-position:center;}
        
        .content-02 .tab-container {transform:translateY(4rem);}
        .content-02 .tabs {display:flex; flex-wrap:wrap;}
        .content-02 .tabs .tab {cursor:pointer; position:relative; text-align:center; width:20%; height:16.5rem;}
        .content-02 .tabs .tab .img-bg { position:absolute; top:0; left:0; right:0; bottom:0; background-position:center; background-size:cover; }
        .content-02 .tabs .tab::after {content:'นิคมอุตสาหรกรรม'; width:100%; display:block; position:absolute; bottom:-1.5rem;}
    

        .content-02 .tab-container.tab-container-02{margin: 27.5rem 0 0 0;}
        @media screen and (max-width: 991.98px){
            .content-02 .tab-container {transform: translateY(3rem);}
        }
        @media screen and (max-width: 575.98px){
            .content-02 .tab-container {transform: translateY(2.5rem);}
        }
    </style>
    <section class="section-padding content-02">
        <div class="img-bg-container">
            <div class="img-bg" style="background-image:url('./public/assets/app/images/banner/02.jpg');"></div>
        </div>
        <div class="container px-sm-0">
            <div class="text-center color-white">
                <h1>ทำเลทอง</h1>
                <p class="fw-100">ตอบโจทย์ที่ใช่... ตอบสนองทุกความต้องการทางด้านธุรกิจของคุณ</p>
            </div>
            
            <div class="tab-container tab-container-02">
                <div class="tabs">
                    <?php for($i=3; $i<8; $i++){?>
                        <div class="tab">
                            <div class="img-bg" style="background-image:url('./public/assets/app/images/bg/0<?= $i;?>.jpg')"></div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    
    <style>
        .btn-container {display:flex; justify-content:center; margin: 7.5rem 0 0 0;}
        .btn-container > .btn-wrapper { width: 10rem; height:2.5rem; background-color: #6cdded;}
        .btn-container .btn {width: 90%; height:100%; background-color:#3d3d3d; line-height:1.75rem;  clip-path: polygon(90% 0, 100% 50%, 90% 100%, 0 100%, 0 0);}
    </style>
    <section class="section-padding content-02 pt-0">
        <div class="container px-sm-0">
            <div class="tab-container">
                <div class="tabs">
                    <?php for($i=8; $i<13; $i++){?>
                        <div class="tab">
                            <div class="img-bg" style="background-image:url('./public/assets/app/images/bg/<?= sprintf('%02d', $i);?>.jpg')"></div>
                        </div>
                    <?php }?>
                </div>
            </div>

            <div class="btn-container">
                <div class="btn-wrapper">
                    <div class="btn color-white">ดูทั้งหมด</div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-padding section-bg call-01" style="background-image:url('./public/assets/app/images/banner/03.jpg'); background-size:cover; background-position:center;">


    </section>



    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
