<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>

    <style>
        .helpdesk-chat .tag-num {font-size:1rem; padding: 0 .625rem; text-align:center; background:#fff; color:#4e4e50;}
        .helpdesk-chat .tag-num::before {content:'#667643';}
        .helpdesk-chat .header-container img {width:1.5rem; height:1.5rem;}
        .sep{ background-color: #c2b0d6; height:1.5rem; width: .5px;}


        /* Chat container */
        .chat-container { overflow-y:auto; overflow-x:hidden; }
        .chat-container .chat-content {
            padding: 0 2rem 2rem 2rem;
            background: linear-gradient(to top, rgba(205,205,205, 1), rgba(255,255,255, 1), rgba(255,255,255, 1), rgba(255,255,255, 1), rgba(255,255,255, 1), rgba(255,255,255, 1), rgba(255,255,255, 1),  rgba(255,255,255, 1),rgba(255,255,255, 1),rgba(255,255,255, 1),rgba(255,255,255, 1));
        }
        .chat-container .chat-you {display:flex; flex-wrap:wrap; justify-content: flex-start; align-items:flex-end; width:100%;}
        .chat-container .chat-me {display:flex; flex-wrap:wrap; justify-content: flex-end; align-items:flex-end; width:100%;}
        .chat-container .chat-message {display:flex; flex-wrap:wrap; width:100%; justify-content: flex-start; align-items:flex-start; background-color:#169f96; padding: .5rem 2rem 1.25rem 2rem;}

        .chat-container .profile-container {position:relative; width:3rem; height:3rem;clip-path: circle(50% at 50% 50%); background-color: #fff; }
        .chat-container .chat-you .profile-container,.chat-container .chat-message .profile-container  {margin:0 0 0 auto;}
        
        .chat-container .profile {position:absolute; top:.125rem; left: .125rem; right:.125rem; bottom:.125rem; background-position:center; background-size:cover; background-repeat:no-repeat; border-radius: 50%;}
        .chat-container .text-wrapper {padding:1.5rem; border-radius:.25rem;}
        .chat-container .chat-me .text-wrapper {background-color: #8c6ab2; color:#fff;}
        .chat-container .chat-you .text-wrapper, .chat-container .chat-message input[type="text"] {background-color:#eaeaea;}
        .chat-container .chat-message input[type="text"] { border-color:#fff; width:100%; font-size:1.375rem; padding: .625rem 1rem;}


        @media screen and (max-width: 767.98px){
            .chat-container .chat-you .profile-container, .chat-container .chat-message .profile-container {margin:0 auto 0 0;}
            .chat-container .chat-me{flex-direction: column-reverse;}
            .chat-container .chat-me .profile-container{margin:0 0 0 auto;}
        }
    </style>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>


    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'เกี่ยวกับกนอ' ],
            [ 'url' => '#', 'display' => 'แจ้งเรื่องร้องเรียน' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="section-bpadding section-bg-hero helpdesk-chat">
        <div class="bg-hero lazy-bg" data-src="public/assets/app/images/hero/10.jpg"></div>
        <div class="container">
            <h2 class="color-black" data-aos="fade-up" data-aos-delay="0">
                แจ้งเรื่องร้องเรียน
            </h2>
            <h3 class="sm color-02 fw-400" data-aos="fade-up" data-aos-delay="150">
                ระบบจัดการ เกี่ยวกับการใช้งาน
            </h3>
            <h5 class="color-black xs-no-br" data-aos="fade-up" data-aos-delay="300">
                จัดการเนื้อหาในเว็บไซต์และข้อมูลส่วนตัว
            </h5>
 
            <div data-aos="fade-up" data-aos-delay="450">
                <?php include('component/grid-header.php'); ?>
            </div>

            <div class="tab-container tab-container-01">

                <div class="grids">

                    <div class="grid xl-20 lg-25 sm-100" data-aos="fade-up" data-aos-delay="600">
                        <div class="tabs">
                            <div class="ss-box-shadow"></div>
                            <?php
                                foreach([
                                    'กระทู้ของฉัน', 'จดหมายข่าวสาร', 'แก้ไขข้อมูลและรหัส', 'ออกจากระบบ', 
                                ] as $i=>$d){
                                    $cateActive = 0;
                            ?>
                                <a class="tab tab-main color-black h-color-04 <?php if($i==$cateActive)echo 'active'; ?>" 
                                data-tab="<?= $i ?>" href="#">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/tab-<?= $i+1 ?>.png" alt="Icon">
                                    </div>
                                    <h6><?= $d ?></h6>
                                </a>
                            <?php }?>
                        </div>

                    </div>

                    <div class="grid xl-80 lg-75 sm-100 mt-0" data-aos="fade-up" data-aos-delay="750">
                        <div class="grids">
                            <div class="grid sm-100">
                                <div class="d-flex jc-space-between header-container ai-center bg-01 px-4 py-2">
                                    <div class="d-flex ai-center">
                                        <p class="color-white text-md mr-2">หมายเลข : </p>
                                        <div class="tag-num"></div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="color-white mr-2">
                                            <img class="mr-1" src="./public/assets/app/images/icon/helpdesk-1.png" alt="">
                                            04.09.2560
                                        </div>
                                        <div class="color-white mr-2">
                                            <img class="mr-1" src="./public/assets/app/images/icon/helpdesk-2.png" alt="">
                                            04.09.2560
                                        </div>

                                        <div class="sep"></div>

                                        <div class="color-white ml-2">
                                            แชร์
                                            <img class="ml-1" src="./public/assets/app/images/icon/helpdesk-3.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 bg-02">
                                    <p class="color-white fw-200">
                                        กรณีที่ระบบเดิมมีการขอมอบอำนาจ เพื่อขอสิทธิ์ผู้ใช้งานเพิ่มเติมมากกว่า 1 User User ที่เป็นรูปแบบของการมอบอำนาจสามารถใช้งานในระบบใหม่ได้หรือไม่ ถ้าไม่ได้ ต้องยื่นเรื่องขอมอบอำนาจใหม่หรือไม่
                                    </p>
                                </div>
                                <div class="chat-container">
                                    <div class="chat-content">
                                        <div class="ss-box-shadow"></div>
                                        <div class="grids chat-you">
                                            <div class="grid sm-100 md-10">
                                                <div class="profile-container">
                                                    <div class="profile" style="background-image:url('./public/assets/app/images/hero/chat-you.jpg');"></div>
                                                </div>
                                            </div>
                                            <div class="grid sm-100 md-80">
                                                <div class="text-wrapper">
                                                    <p class="fw-200">
                                                        ใน e-PP เวอร์ชั่นใหม่ ทางกนอ: ได้ยกเลิกเรื่องการมอบอำนาจ เพื่อขอสิทธิ์ใช้งานเพิ่มเติมทั้งหมด คงไว้แต่ User หลักของผู้ประกอบการ ซึ่งในระบบใหม่จะเรียกว่า Master User ซึ่งหากผู้ประกอบการรายใด ต้องการสร้าง User เพิ่มในระบบ สามารถบริหารจัดการ User/Password และสิทธิ์การเข้าใช้งานโปรแกรมได้ด้วยตัวเองโดยไม่จำกัด User ใช้งาน
                                                    </p>
                                                </div>
                                                <div class="mt-1 text-left">
                                                    <p class="text-md fw-100">ตอบเมื่อวันที่ 11 ธันวาคม 2563 เวลา 14.50 น.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grids chat-me">

                                            <div class="grid sm-100 md-80">
                                                <div class="text-wrapper">
                                                    <p class="fw-200">
                                                        อยากให้ กนอ. ช่วยสนับสนุนศูนย์ฝึกอาชัพ อบรมเทคนิคเฉพาะทาง เป็นคอร์สสัมนา เกี่ยวกับสินค้าที่จะทำธุรกิจครับ เพราะว่าโรงงานในนิคมของ กนอ. นั้นมีแต่บริษัทชั้นนำของประเทศ อยากให้ช่วยส่งเสริมแนะนำ SME
                                                    </p>
                                                </div>
                                                <div class="mt-1 text-right">
                                                    <p class="text-md fw-100">ตอบเมื่อวันที่ 11 ธันวาคม 2563 เวลา 14.50 น.</p>
                                                </div>
                                            </div>
                                            <div class="grid sm-100 md-10">
                                                <div class="profile-container">
                                                    <div class="profile" style="background-image:url('./public/assets/app/images/hero/chat-me.jpg');"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grids chat-me">

                                            <div class="grid sm-100 md-80">
                                                <div class="text-wrapper">
                                                    <p class="fw-200">
                                                        ข้อมูลผู้ติดต่อ ยังต้องกรอกใหม่ทุกคำขอเหมือนเดิมได้หรือไม่
                                                    </p>
                                                </div>
                                                <div class="mt-1 text-right">
                                                    <p class="text-md fw-100">ตอบเมื่อวันที่ 11 ธันวาคม 2563 เวลา 14.50 น.</p>
                                                </div>
                                            </div>
                                            <div class="grid sm-100 md-10">
                                                <div class="profile-container">
                                                    <div class="profile" style="background-image:url('./public/assets/app/images/hero/chat-me.jpg');"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grids chat-you">
                                            <div class="grid sm-100 md-10">
                                                <div class="profile-container">
                                                    <div class="profile" style="background-image:url('./public/assets/app/images/hero/chat-you.jpg');"></div>
                                                </div>
                                            </div>
                                            <div class="grid sm-100 md-80">
                                                <div class="text-wrapper">
                                                    <p class="fw-200">
                                                        ทางเราได้รับเรื่องร้องเรียน และอยู่ระหว่างการดำนเนินการแล้วค่ะ
                                                    </p>
                                                </div>
                                                <div class="mt-1 text-left">
                                                    <p class="text-md fw-100">ตอบเมื่อว 20 นาทีที่ผ่านมา</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grids chat-message">
                                        <div class="grid sm-100 md-10">
                                            <div class="profile-container">
                                                <div class="profile" style="background-image:url('./public/assets/app/images/hero/chat-me.jpg');"></div>
                                            </div>
                                        </div>
                                        <div class="grid sm-100 md-80">
                                            <form action="./" method="POST">
                                                <input type="text" placeholder="พิมพ์ตอบหรือถามเพิ่มเติมเรื่องร้องเรียน...">
                                                <div class="btns mt-2">
                                                    <button type="submit" class="btn btn-action" href="#">
                                                        <span>ส่งข้อความ</span>
                                                    </button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
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
