<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
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

    <section class="section-bpadding section-bg-hero">
        <div class="bg-hero lazy-bg" data-src="public/assets/app/images/hero/10.jpg"></div>
        <div class="container">
            <h3 class="h2 color-black" data-aos="fade-up" data-aos-delay="0">
                แจ้งเรื่องร้องเรียน
            </h3>
            <h4 class="h3 sm color-02 fw-300 xs-hide" data-aos="fade-up" data-aos-delay="150">
                ระบบจัดการ เกี่ยวกับการใช้งาน
            </h4>
            <h5 class="color-black xs-no-br xs-hide" data-aos="fade-up" data-aos-delay="300">
                จัดการเนื้อหาในเว็บไซต์และข้อมูลส่วนตัว
            </h5>
            
            <div class="grids jc-center">
                <div class="grid lg-80 sm-100">
                    <form action="/" method="POST" enctype="multipart/form-data">

                        <div class="mt-5" data-aos="fade-up" id="fade-up-mobile" data-aos-delay="450">
                            <div class="ss-box-header shadow">
                                <div class="header bg-06 color-white">
                                    <div class="h3 xs fw-400">
                                        แบบฟอร์มแจ้งปัญหา
                                    </div>
                                </div>
                                
                                <div class="body bg-fgray border-bottom bcolor-sgray">
                                    <div class="field field-sm field-adaptive">
                                        <label class="fw-400">ชื่อ-นามสกุล *</label>
                                        <div class="control">
                                            <input type="text" class="bg-white" title="General Text Input" />
                                        </div>
                                    </div>
                                </div>
                                <div class="body bg-white border-bottom bcolor-sgray">
                                    <div class="grids">
                                        <div class="grid md-50 sm-100 mt-0">
                                            <div class="field field-sm field-adaptive">
                                                <label class="fw-400">โทรศัพท์ *</label>
                                                <div class="control">
                                                    <input type="text" class="bg-white" title="General Text Input" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid md-50 sm-100 mt-0">
                                            <div class="field field-sm field-adaptive">
                                                <label class="fw-400">อีเมล *</label>
                                                <div class="control">
                                                    <input type="email" class="bg-white" title="General Text Input" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="body bg-fgray border-bottom bcolor-sgray">
                                    <div class="field field-sm field-adaptive">
                                        <label class="fw-400">หัวข้อเรื่อง *</label>
                                        <div class="control">
                                            <input type="text" class="bg-white" title="General Text Input" />
                                        </div>
                                    </div>
                                </div>
                                <div class="body bg-white">
                                    <div class="field field-sm field-adaptive">
                                        <label class="fw-400">ข้อความ</label>
                                        <div class="control">
                                            <textarea rows="4" class="bg-white" title="General Textarea Input"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="body bg-white">
                                    <div class="field field-sm field-adaptive">
                                        <label class="fw-400">อัพโหลดไฟล์</label>
                                        <div class="control">
                                            <div class="input-dropzone bcolor-sgray bg-fgray">
                                                <div class="wrapper text-center color-gray">
                                                    <div class="icon h3 sm color-01">
                                                        <em class="zmdi zmdi-cloud-upload"></em>
                                                    </div>
                                                    <div class="h4 fw-300">
                                                        ลากไฟล์ หรือ <u class="color-01">ค้นหาไฟล์</u> 
                                                        เพื่ออัพโหลด
                                                    </div>
                                                    <div class="h5">
                                                        ไฟล์ทั้งหมดรวมกันไม่เกิน 5 MB
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-download type-02 mt-2">
                                                <tbody>
                                                    <?php foreach(['jpg', 'gif', 'pdf'] as $d){?>
                                                        <tr>
                                                            <td>
                                                                <div class="file-icon">
                                                                    <img src="public/assets/app/images/file/<?= $d ?>.png" alt="Icon" />
                                                                </div>
                                                            </td>
                                                            <td class="pr-3">
                                                                ระบบ 5G ในนิคมอุตสาหกรรม <br>
                                                                ขนาด <span class="fw-600 mr-3">1.6 Mb.</span>
                                                                ดาวโหลด <span class="fw-600">23 ครั้ง</span>
                                                            </td>
                                                            <td>
                                                                <a class="btn-download mr-2" href="#">
                                                                    <span class="xs-hide">ดาวน์โหลด</span>
                                                                    <em class="zmdi zmdi-arrow-right"></em>
                                                                </a>
                                                                <a class="btn-download" href="#">
                                                                    <span class="xs-hide">แจ้งไฟล์เสีย</span>
                                                                    <em class="zmdi zmdi-alert-circle-o" style="transform:none;"></em>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <?php }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="body bg-white">
                                    <div class="field field-sm field-adaptive">
                                        <label>&nbsp;</label>
                                        <div class="pt-1 pb-3 mb-1">
                                            <div class="capcha-container">
                                                <img src="public/assets/app/images/icon/capcha.png" alt="Capcha" />
                                            </div>
                                            <div class="btns pt-1 mt-2">
                                                <button type="submit" class="btn btn-action mr-1">
                                                    <span>ส่งข้อความ</span>
                                                </button>
                                                <button type="reset" class="btn btn-action btn-action-01">
                                                    ล้างข้อมูล
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                    <div class="pt-3 mt-5" data-aos="fade-up" data-aos-delay="150">
                        <h4 class="h3 sm color-07 fw-300 text-center">
                            การนิคมอุตสาหกรรมขอขอบคุณเป็นอย่างยิ่งที่ร่วมแสดงความคิดเห็นกับเรา 
                        </h4>
                        <h5 class="fw-200 text-center">
                            ทุกความคิดเห็นของคุณมีประโยชน์ในการพัฒนาเว็บไซต์ของเรา
                        </h5>
                    </div>
                </div>
            </div>
 
        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
