<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>

    <style>
        /* Fields & Inputs */
        .field{margin:.75rem 0 0 0; width:100%;}
        .field label{font-size:1.375rem; font-weight:200; margin:0;}

        .field > .control, .field > .control-flex{position:relative; width:100%; margin:.25rem 0 0 0;}
        .field > .control:first-child{margin:0;}
        .field > .control-flex{display:flex; align-items:center; flex-wrap:wrap; margin:.5rem 0 0 0;}
        .field > .control-flex > *{
            margin-right:.75rem; margin-top:.25rem; margin-bottom:.25rem; width:11rem;
        }

        .field input[type=text], .field input[type=email], .field input[type=password], 
        .field input[type=date], .field input[type=tel], .field input[type=phone], 
        .field input[type=number], .field select, .field textarea, 
        .field > .control.file-control > .file-upload{
            width:100%; border:1px solid transparent; padding:.4375rem 1rem; margin:0; background:#e7e7e7;
            font-size:1.25rem; color:#000; font-weight:300; border-radius:.1875rem;
            -webkit-box-shadow:inset 0px 0px 3px 1px rgba(0,0,0,.05);
            -moz-box-shadow:inset 0px 0px 3px 1px rgba(0,0,0,.05);
            box-shadow:inset 0px 0px 3px 1px rgba(0,0,0,.05);
            transition:border-color .3s;
        }
        .field input[type=text]:focus, .field input[type=email]:focus, .field input[type=password]:focus, 
        .field input[type=date]:focus, .field input[type=tel]:focus, .field input[type=phone]:focus, 
        .field input[type=number]:focus, .field select:focus, .field textarea:focus{
            border-color:#0d838d; border-color:var(--color4);
        }

        .field .control.checkbox-control, .field .control.radio-control{display:flex; position:relative;}
        .field .control.radio-control > input[type=radio]{position:absolute; opacity:0;}
        .field .control.checkbox-control > input[type=checkbox]{
            position:absolute; margin:0; font-size:.875rem; width:.875rem; height:.875rem;
            cursor:pointer; top:.25rem;
        }
        .field .control.checkbox-control > label, .field .control.radio-control > label{
            width:100%; padding:0 0 0 1.5rem; cursor:pointer;
        }

        .btn-cancel, .btn-cancel:focus, .btn-cancel:hover, .btn-cancel:active{
            display:inline-block; position:relative; border:0; border-radius:0;
            font-size:1.375rem; font-weight:300; padding:.25rem 2.5rem .25rem 1.5rem; overflow:hidden;
            white-space:nowrap; min-width:9.75rem; text-align:center;
        }
        /* Color-01 */
        .btn-cancel { background: #3d3d3d; color: #fff;}
        .btn-cancel:focus, .btn-cancel:hover, .btn-cancel:active{ color:#fff;}
        .btn-cancel::before{ background: #ccc; }
        .btn-cancel::before{
            content:''; position:absolute; top:0; bottom:0; right:0; width:1.75rem;
            clip-path:polygon(0 0, 100% 0, 100% 100%, 0 100%, 40% 50%); transition:transform .3s;
        }

        .btn-cancel:hover::before{transform:translateX(calc(1.75rem * .6));}
    </style>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'กนอ.อัพเดท' ],
            [ 'url' => '#', 'display' => 'แจ้งเรื่องร้องเรียน' ],
        ];
        include('component/breadcrumb.php');
    ?>


    <section class="section-bpadding section-bg-hero">
        <div class="bg-hero lazy-bg" data-src="public/assets/app/images/hero/10.jpg"></div>
        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="0">
                จดหมายข่าวสาร
            </h2>
            <h3 class="sm color-02 fw-400" data-aos="fade-up" data-aos-delay="150">
                สมัครรับจดหมายข่าวผ่านทางอีเมล์
            </h3>
            <h5 class="xs-no-br" data-aos="fade-up" data-aos-delay="300">
                จัดการเนื้อหาในเว็บไซต์และข้อมูลส่วนตัว
            </h5>

            <div data-aos="fade-up" data-aos-delay="450">
                <?php include('component/grid-header.php'); ?>
            </div>

            <div class="tab-container tab-container-01">
                <div class="grids">

                    <div class="grid xl-20 lg-25 sm-100" data-aos="fade-up" data-aos-delay="600">
                        <?php
                            $cateActive = 0;
                            $cateChildren = false;
                            include('component/category-tab.php');
                        ?>
                    </div>

                    <div class="grid xl-80 lg-75 sm-100 mt-0" data-aos="fade-up" data-aos-delay="750">
                        <div class="grids">
                            <div class="grid sm-100">

                                <div class="bg-01 px-4 py-3">
                                    <h5 class="fw-200 color-white">แบบฟอร์มสมัครรับข่าวสาร</h3>
                                </div>

                                <div class="bg-white px-4 pt-3 pb-4 box-shadow">

                                    <form action="./" method="POST">   
                                        <div class="field">
                                            <div class="control">
                                                <input type="text" placeholder="กรุณากรอกอีเมลที่ต้องการรับข่าวสาร *" style="width:80%;">
                                            </div>
                                        </div> 




                                        <h5 class="fw-400 mt-3">กรุณาเลือกประเภทของข่าวสารที่คุณมีความสนใจในการติดตาม</h5>
                                        <div class="border-bottom pt-3 pb-3" style="border-color: #dee2e6!important;">
                                            <h6 class="color-01 fw-400">ข่าวประชาสัมพันธ์</h6>
                                            <p class="fw-200">ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆเกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย</p>
                                            <?php for($i=0; $i<6;$i++){?>
                                                <div class="field mt-3">
                                                    <div class="control checkbox-control">
                                                        <input type="checkbox" name="types[]" id="type_1_<?= $i; ?>"  value="<?= $i; ?>">
                                                        <label class="mb-0 " for="type_1_<?= $i; ?>">ประกาศจาก กนอ</label>
                                                    </div>
                                                </div>
                                            <?php }?>
                                        </div>

                                        <div class="border-bottom pt-3 pb-3" style="border-color: #dee2e6!important;">
                                            <h6 class="color-01 fw-400">สื่อมัลติมีเดียและคลังความรู้</h6>
                                            <p class="fw-200">เพื่อยกระดับและพัฒนาศักยภาพสำหรับกิจการในนิคมอุตสาหกรรม</p>
                                            <?php for($i=0; $i<3;$i++){?>
                                                <div class="field mt-3">
                                                    <div class="control checkbox-control">
                                                        <input type="checkbox" name="types[]" id="type_2_<?= $i; ?>"  value="<?= $i; ?>">
                                                        <label class="mb-0 " for="type_2_<?= $i; ?>">คลังภาพ</label>
                                                    </div>
                                                </div>
                                            <?php }?>
                                        </div>
                                            

                                        <img class="mt-4" src="./public/assets/app/images/icon/capcha.png" alt="capcha">
                                        
                                        <div class="btns">
                                            <a href="#" class="btn btn-action mr-1">สมัครรับข่าวสาร</a>
                                            <a href="#" class="btn btn-cancel">ข้อมูล</a>
                                        </div>


                                        <h6 class="mt-4">เงื่อนไขการรับจดหมายข่าว</h6>
                                        <p class="fw-200">เมื่อส่งแบบฟอร์มนี้ จะถือว่าคุณยินยอมที่จะรับการติดต่อสื่อสารทางอิเล็กทรอนิกส์จากกรมการนิคมอุตสาหกรรมแห่งประเทศไทย</p>
                                    </form>

                                </div>


                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
