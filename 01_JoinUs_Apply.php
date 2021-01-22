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
            [ 'url' => '#', 'display' => 'เกี่ยวกับ กนอ.' ],
            [ 'url' => '#', 'display' => 'ร่วมงานกับเรา' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="about-02 section-bpadding section-bg-hero">
        <div class="bg-hero lazy-bg" data-src="public/assets/app/images/hero/12.jpg"></div>
        <div class="container">
            <h3 class="h2 color-black" data-aos="fade-up" data-aos-delay="0">
                ร่วมงานกับเรา
            </h3>
            <h4 class="h3 sm color-02 fw-300 xs-hide" data-aos="fade-up" data-aos-delay="150">
                ทุกความสำเร็จมาจากทีมที่ยิ่งใหญ่
            </h4>
            <h5 class="color-black xs-no-br xs-hide" data-aos="fade-up" data-aos-delay="300">
                มาร่วมเป็นส่วนหนึ่งกับเรา กนอ.
            </h5>
            <div class="tab-container tab-container-01">
                <div class="grids mt-4">

                    <div class="grid xl-20 lg-25 sm-100" data-aos="fade-up" data-aos-delay="600">
                        <div class="grid-header mt-0 mb-4">
                            <div class="options">
                                <input type="text" name="search" placeholder="ค้นหา" required title="Search" />
                                <button type="submit" class="btn btn-grid">
                                    <em class="zmdi zmdi-search"></em>
                                </button>
                            </div>
                        </div>
                        <div class="tabs">
                            <div class="ss-box-shadow"></div>
                            <a class="tab tab-main color-black h-color-04" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-1.png" alt="Icon">
                                </div>
                                <h6>ข่าวประชาสัมพันธ์</h6>
                            </a>
                            <div class="tab-children d-block">
                                <a class="tab tab-list color-black h-color-04 active" href="#">
                                    <p>ประกาศจาก กนอ.</p>
                                </a>
                                <a class="tab tab-list color-black h-color-04" href="#">
                                    <p>ข่าวสารจาก กนอ.</p>
                                </a>
                                <a class="tab tab-list color-black h-color-04" href="#">
                                    <p>ข่าวสารจากหน่วยงานที่เกี่ยวข้อง</p>
                                </a>
                            </div>
                            <a class="tab tab-main color-black h-color-04" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-2.png" alt="Icon">
                                </div>
                                <h6>ข่าวสารการลงทุน</h6>
                            </a>
                            <a class="tab tab-main color-black h-color-04" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-4.png" alt="Icon">
                                </div>
                                <h6>ประกาศจัดซื้อจัดจ้าง</h6>
                            </a>
                            <a class="tab tab-main color-black h-color-04 active" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-7.png" alt="Icon">
                                </div>
                                <h6>ร่วมงานกับเรา</h6>
                            </a>
                        </div>
                    </div>

                    <div class="grid xl-80 lg-75 sm-100">
                        <form action="/" method="POST">

                            <div data-aos="fade-up" data-aos-delay="450">
                                <div class="ss-box-header">
                                    <div class="ss-box-shadow"></div>
                                    <div class="header bg-07 color-white">
                                        <div class="h5 fw-400">
                                            ใบสมัครสำหรับบุคคลทั่วไป
                                        </div>
                                    </div>
                                </div>
                                <div class="ss-box-header bg-fgray">
                                    <div class="body border-bottom bcolor-sgray">
                                        <div class="grids ai-center">
                                            <div class="grid xl-60 lg-2-3 md-70 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive">
                                                    <label class="fw-400">จังหวัด</label>
                                                    <div class="control">
                                                        <div class="select-wrapper icon-square">
                                                            <select class="bg-white" title="Province">
                                                                <option value="">&nbsp;</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div data-aos="fade-up" data-aos-delay="600">
                                <div class="ss-box-header bg-fgray">
                                    <div class="ss-box-shadow"></div>
                                    <div class="header bg-05 color-white">
                                        <h5 class="fw-200">01. ข้อมูลส่วนตัว</h5>
                                    </div>

                                    <div class="body border-bottom bcolor-sgray">
                                        <div class="field field-sm field-adaptive">
                                            <label class="fw-400">คำนำหน้า</label>
                                            <div class="control">
                                                <fieldset>
                                                    <div class="d-flex ai-center mt-1">
                                                        <div class="mr-3">
                                                            <input class="mr-2" type="radio" name="prefix" id="prefix_0" value="0" title="Prefix" />
                                                            <label class="fw-300" for="prefix_0">นาย</label>
                                                        </div>
                                                        <div class="mr-3">
                                                            <input class="mr-2" type="radio" name="prefix" id="prefix_1" value="1" title="Prefix" />
                                                            <label class="fw-300" for="prefix_1">นาง</label>
                                                        </div>
                                                        <div class="mr-3">
                                                            <input class="mr-2" type="radio" name="prefix" id="prefix_2" value="2" title="Prefix" />
                                                            <label class="fw-300" for="prefix_2">นางสาว</label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body border-bottom bcolor-sgray">
                                        <div class="grids ai-center">
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive">
                                                    <label class="fw-400">ชื่อ (ภาษาไทย)</label>
                                                    <div class="control">
                                                        <input type="text" class="bg-white" title="First Name" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive">
                                                    <label class="fw-400">นามสกุล (ภาษาไทย)</label>
                                                    <div class="control">
                                                        <input type="text" class="bg-white" title="Last Name" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body border-bottom bcolor-sgray">
                                        <div class="field field-sm field-adaptive">
                                            <label class="fw-400">เพศ</label>
                                            <div class="control">
                                                <fieldset>
                                                    <div class="d-flex ai-center mt-1">
                                                        <div class="mr-3">
                                                            <input class="mr-2" type="radio" name="sex" id="sex_0" value="0" title="Sex" />
                                                            <label class="fw-300" for="sex_0">ชาย</label>
                                                        </div>
                                                        <div class="mr-3">
                                                            <input class="mr-2" type="radio" name="sex" id="sex_1" value="1" title="Sex" />
                                                            <label class="fw-300" for="sex_1">หญิง</label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body border-bottom bcolor-sgray">
                                        <div class="field field-sm field-adaptive">
                                            <label class="fw-400">วันเกิด</label>
                                            <div class="control">
                                                <div class="gallery-grids">
                                                    <div class="grid xl-15 lg-20 md-25 sm-1-3 mt-0">
                                                        <div class="select-wrapper icon-square width-full">
                                                            <select class="bg-white" title="Birth Date">
                                                                <option value="" disabled selected>วัน</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="grid xl-15 lg-20 md-25 sm-1-3 mt-0">
                                                        <div class="select-wrapper icon-square width-full">
                                                            <select class="bg-white" title="Birth Month">
                                                                <option value="" disabled selected>เดือน</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="grid xl-15 lg-20 md-25 sm-1-3 mt-0">
                                                        <div class="select-wrapper icon-square width-full">
                                                            <select class="bg-white" title="Birth Year">
                                                                <option value="" disabled selected>พ.ศ.</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="body border-bottom bcolor-sgray">
                                        <div class="grids ai-center">
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive ai-center">
                                                    <label class="fw-400">
                                                        เลขที่บัตรประชาชน <br>
                                                        <span class="color-gray text-sm">
                                                            (ไม่ต้องเว้นวรรค)
                                                        </span>
                                                    </label>
                                                    <div class="control">
                                                        <input type="text" class="bg-white" title="Thai Id" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive">
                                                    <label class="fw-400">ออกให้ที่</label>
                                                    <div class="control">
                                                        <input type="text" class="bg-white" title="Thai Issued Location" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body border-bottom bcolor-sgray">
                                        <div class="grids ai-center">
                                            <div class="grid lg-2-3 md-70 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive">
                                                    <label class="fw-400">รูปถ่าย</label>
                                                    <div class="control">
                                                        <input type="file" class="bg-white" title="User Profile" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid lg-1-3 md-30 sm-100 mt-0">
                                                <p class="sm color-gray">
                                                    (ไฟล์ jpg, png ไม่เกิน 2 MB)
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body border-bottom bcolor-sgray">
                                        <div class="grids ai-center">
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive ai-center">
                                                    <label class="fw-400">เชื้อชาคิ</label>
                                                    <div class="control">
                                                        <input type="text" class="bg-white" title="General Text Input" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive">
                                                    <label class="fw-400">สัญชาติ</label>
                                                    <div class="control">
                                                        <input type="text" class="bg-white" title="General Text Input" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body border-bottom bcolor-sgray">
                                        <div class="grids ai-center">
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive ai-center">
                                                    <label class="fw-400">ศาสนา</label>
                                                    <div class="control">
                                                        <input type="text" class="bg-white" title="General Text Input" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body border-bottom bcolor-sgray">
                                        <div class="field field-sm field-adaptive">
                                            <label class="fw-400">สถานภาพการสมรส</label>
                                            <div class="control">
                                                <fieldset>
                                                    <div class="d-flex ai-center mt-1">
                                                        <div class="mr-3">
                                                            <input class="mr-2" type="radio" name="status" id="status_0" value="0" title="General Radio Input" />
                                                            <label class="fw-300" for="status_0">โสด</label>
                                                        </div>
                                                        <div class="mr-3">
                                                            <input class="mr-2" type="radio" name="status" id="status_1" value="1" title="General Radio Input" />
                                                            <label class="fw-300" for="status_1">สมรส</label>
                                                        </div>
                                                        <div class="mr-3">
                                                            <input class="mr-2" type="radio" name="status" id="status_2" value="2" title="General Radio Input" />
                                                            <label class="fw-300" for="status_2">หย่า</label>
                                                        </div>
                                                        <div class="mr-3">
                                                            <input class="mr-2" type="radio" name="status" id="status_3" value="3" title="General Radio Input" />
                                                            <label class="fw-300" for="status_3">หม้าย</label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="body border-bottom bcolor-sgray">
                                        <div class="grids ai-center">
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive ai-center">
                                                    <label class="fw-400">หมายเลขติดต่อ</label>
                                                    <div class="control">
                                                        <input type="text" class="bg-white" title="General Text Input" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive">
                                                    <label class="fw-400">อีเมล</label>
                                                    <div class="control">
                                                        <input type="text" class="bg-white" title="General Text Input" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body border-bottom bcolor-sgray">
                                        <div class="grids ai-center">
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive ai-center">
                                                    <label class="fw-400">บ้านเลขที่</label>
                                                    <div class="control">
                                                        <input type="text" class="bg-white" title="General Text Input" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive">
                                                    <label class="fw-400">หมู่ที่</label>
                                                    <div class="control">
                                                        <input type="text" class="bg-white" title="General Text Input" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body border-bottom bcolor-sgray">
                                        <div class="grids ai-center">
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive ai-center">
                                                    <label class="fw-400">ซอย</label>
                                                    <div class="control">
                                                        <input type="text" class="bg-white" title="General Text Input" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive">
                                                    <label class="fw-400">ถนน</label>
                                                    <div class="control">
                                                        <input type="text" class="bg-white" title="General Text Input" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body border-bottom bcolor-sgray">
                                        <div class="grids ai-center">
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive ai-center">
                                                    <label class="fw-400">ตำบล/แขวง</label>
                                                    <div class="control">
                                                        <input type="text" class="bg-white" title="General Text Input" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive">
                                                    <label class="fw-400">อำเภอ/เขต</label>
                                                    <div class="control">
                                                        <input type="text" class="bg-white" title="General Text Input" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body border-bottom bcolor-sgray">
                                        <div class="grids ai-center">
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive ai-center">
                                                    <label class="fw-400">จังหวัด</label>
                                                    <div class="control">
                                                        <div class="select-wrapper icon-square">
                                                            <select class="bg-white" title="General Select Input">
                                                                <option value="">&nbsp;</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive">
                                                    <label class="fw-400">รหัสไปรษณีย์</label>
                                                    <div class="control">
                                                        <input type="text" class="bg-white" title="General Text Input" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="body border-bottom bcolor-sgray">
                                        <div class="grids ai-center">
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive ai-center">
                                                    <label class="fw-400">ชื่อบิดา</label>
                                                    <div class="control">
                                                        <input type="text" class="bg-white" title="General Text Input" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive">
                                                    <label class="fw-400">นามสกุลบิดา</label>
                                                    <div class="control">
                                                        <input type="text" class="bg-white" title="General Text Input" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body border-bottom bcolor-sgray">
                                        <div class="grids ai-center">
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive ai-center">
                                                    <label class="fw-400">อาชีพ</label>
                                                    <div class="control">
                                                        <input type="text" class="bg-white" title="General Text Input" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body border-bottom bcolor-sgray">
                                        <div class="grids ai-center">
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive ai-center">
                                                    <label class="fw-400">ชื่อมารดา</label>
                                                    <div class="control">
                                                        <input type="text" class="bg-white" title="General Text Input" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive">
                                                    <label class="fw-400">นามสกุลมารดา</label>
                                                    <div class="control">
                                                        <input type="text" class="bg-white" title="General Text Input" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body border-bottom bcolor-sgray">
                                        <div class="grids ai-center">
                                            <div class="grid md-50 sm-100 mt-0">
                                                <div class="field field-sm field-adaptive ai-center">
                                                    <label class="fw-400">อาชีพ</label>
                                                    <div class="control">
                                                        <input type="text" class="bg-white" title="General Text Input" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div data-aos="fade-up" data-aos-delay="0">
                                <div class="ss-box-header bg-fgray">
                                    <div class="ss-box-shadow"></div>
                                    <div class="header bg-05 color-white">
                                        <h5 class="fw-200">02. ข้อมูลการศึกษา (เรียงจากล่าสุด)</h5>
                                    </div>
                                    <?php for($i=0; $i<3; $i++){?>
                                        <div class="body bg-sgray">
                                            <h6 class="h5 fw-600">
                                                ระดับการศึกษา <?= $i+1 ?>
                                            </h6>
                                        </div>
                                        <div class="body border-bottom bcolor-sgray">
                                            <div class="field field-sm field-adaptive">
                                                <label class="fw-400">ระดับการศึกษา</label>
                                                <div class="control">
                                                    <fieldset>
                                                        <div class="d-flex ai-center fw-wrap mt-1">
                                                            <?php
                                                                foreach([
                                                                    'ปริญญาเอก', 'ปริญญาโท', 'ปริญญาตรี', 
                                                                    'ปวส/ ปวท/ อนุปริญญา', 'มัธยมศึกษาตอนปลาย/ ปวช'
                                                                ] as $j=>$d){
                                                            ?>
                                                                <div class="mr-3">
                                                                    <input class="mr-2" type="radio" name="education_<?= $i ?>" 
                                                                        id="education_<?= $i.'_'.$j ?>" value="<?= $j ?>" 
                                                                        title="General Radio Input" />
                                                                    <label class="fw-300" for="education_<?= $i.'_'.$j ?>">
                                                                        <?= $d ?>
                                                                    </label>
                                                                </div>
                                                            <?php }?>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="body border-bottom bcolor-sgray">
                                            <div class="grids ai-center">
                                                <div class="grid md-50 sm-100 mt-0">
                                                    <div class="field field-sm field-adaptive ai-center">
                                                        <label class="fw-400">สถาบันการศึกษา</label>
                                                        <div class="control">
                                                            <input type="text" class="bg-white" title="General Text Input" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grid md-50 sm-100 mt-0">
                                                    <div class="field field-sm field-adaptive">
                                                        <label class="fw-400">คะแนนสะสมเฉลี่ย</label>
                                                        <div class="control">
                                                            <input type="text" class="bg-white" title="General Text Input" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="body border-bottom bcolor-sgray">
                                            <div class="grids ai-center">
                                                <div class="grid md-50 sm-100 mt-0">
                                                    <div class="field field-sm field-adaptive ai-center">
                                                        <label class="fw-400">คณะ</label>
                                                        <div class="control">
                                                            <input type="text" class="bg-white" title="General Text Input" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grid md-50 sm-100 mt-0">
                                                    <div class="field field-sm field-adaptive">
                                                        <label class="fw-400">สาขา</label>
                                                        <div class="control">
                                                            <input type="text" class="bg-white" title="General Text Input" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="body border-bottom bcolor-sgray">
                                            <div class="grids ai-center">
                                                <div class="grid md-50 sm-100 mt-0">
                                                    <div class="field field-sm field-adaptive ai-center">
                                                        <label class="fw-400">ปีที่เข้ารับการศึกษา</label>
                                                        <div class="control">
                                                            <input type="text" class="bg-white" placeholder="พ.ศ." title="General Text Input" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grid md-50 sm-100 mt-0">
                                                    <div class="field field-sm field-adaptive">
                                                        <label class="fw-400">ปีที่จบการศึกษา</label>
                                                        <div class="control">
                                                            <input type="text" class="bg-white" placeholder="พ.ศ." title="General Text Input" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            
                            <div data-aos="fade-up" data-aos-delay="0">
                                <div class="ss-box-header bg-fgray">
                                    <div class="ss-box-shadow"></div>
                                    <div class="header bg-05 color-white">
                                        <h5 class="fw-200">03. ประสบการณ์การทำงาน (เรียงจากล่าสุด)</h5>
                                    </div>
                                    <?php for($i=0; $i<3; $i++){?>
                                        <div class="body bg-sgray">
                                            <h6 class="h5 fw-600">
                                                ประวัติการทำงาน <?= $i+1 ?>
                                            </h6>
                                        </div>
                                        <div class="body border-bottom bcolor-sgray">
                                            <div class="grids ai-center">
                                                <div class="grid md-50 sm-100 mt-0">
                                                    <div class="field field-sm field-adaptive ai-center">
                                                        <label class="fw-400">ชื่อนายจ้าง/ บริษัท</label>
                                                        <div class="control">
                                                            <input type="text" class="bg-white" title="General Text Input" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grid md-50 sm-100 mt-0">
                                                    <div class="field field-sm field-adaptive">
                                                        <label class="fw-400">ตำแหน่งงาน</label>
                                                        <div class="control">
                                                            <input type="text" class="bg-white" title="General Text Input" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="body border-bottom bcolor-sgray">
                                            <div class="grids ai-center">
                                                <div class="grid md-50 sm-100 mt-0">
                                                    <div class="field field-sm field-adaptive ai-center">
                                                        <label class="fw-400">วันที่เริ่มงาน</label>
                                                        <div class="control">
                                                            <input type="text" class="bg-white" title="General Text Input" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grid md-50 sm-100 mt-0">
                                                    <div class="field field-sm field-adaptive">
                                                        <label class="fw-400">วันที่สิ้นสุด</label>
                                                        <div class="control">
                                                            <input type="text" class="bg-white" title="General Text Input" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>

                            <div class="btns text-center mt-3" data-aos="fade-up" data-aos-delay="0">
                                <button type="submit" class="btn btn-action mr-1">
                                    <span>บันทึก</span>
                                </button>
                                <button type="reset" class="btn btn-action btn-action-01">
                                    ล้างข้อมูล
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
