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
            [ 'url' => '#', 'display' => 'ร่วมแสดงความคิดเห็น' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="section-bpadding section-bg-hero">
        <div class="bg-hero lazy-bg" data-src="public/assets/app/images/hero/13.jpg"></div>
        <div class="container">
            <h3 class="h2 color-black" data-aos="fade-up" data-aos-delay="0">
                ร่วมแสดงความคิดเห็น
            </h3>
            <h4 class="h3 sm color-07 fw-300 xs-hide" data-aos="fade-up" data-aos-delay="150">
                เพิ่มขีดความสามารถของคุณและธุรกิจ
            </h4>
            <h5 class="color-black xs-no-br xs-hide" data-aos="fade-up" data-aos-delay="300">
                ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆเกี่ยวกับ กนอ.และ <br>
                นิคมอุตสาหกรรมในประเทศไทย
            </h5>
            <div class="grids jc-center">
                <div class="grid lg-80 sm-100">
                    <form action="/" method="POST">

                        <div class="mt-5" data-aos="fade-up" id="fade-up-mobile" data-aos-delay="450">
                            <div class="ss-box-header bg-white">
                                <div class="ss-box-shadow"></div>
                                <div class="header bg-06 color-white">
                                    <div class="p fw-100 pt-2">
                                        <span class="text-3xl fw-400 mr-1">
                                            กรอกแบบสอบถาม
                                        </span> 
                                        กรุณาตอบแบบสอบถามเลือกข้อที่ตรงกับท่านมากที่สุด 
                                        <span class="text-lg fw-300">
                                            เราจะรักษาข้อมูลของท่านเป็นความลับ
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="ss-box-header bg-white border-bottom-2 bcolor-black">
                                <div class="ss-box-shadow"></div>
                                <div class="header bg-07 color-white">
                                    <h5 class="fw-200">01. ข้อมูลส่วนตัว</h5>
                                </div>
                                <div class="body bg-white border-bottom bcolor-sgray">
                                    <div class="field field-sm field-adaptive">
                                        <label class="fw-400">ชื่อ-นามสกุล *</label>
                                        <div class="control">
                                            <input type="text" class="bg-white" title="Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="body bg-fgray border-bottom bcolor-sgray">
                                    <div class="field field-sm field-adaptive">
                                        <label class="fw-400">ที่อยู่ ( เลขที่ ถนน ตำบล อำเภอ) *</label>
                                        <div class="control">
                                            <textarea rows="4" class="bg-white" title="Address"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="body bg-white border-bottom bcolor-sgray">
                                    <div class="grids">
                                        <div class="grid md-50 sm-100 mt-0">
                                            <div class="field field-sm field-adaptive">
                                                <label class="fw-400">จังหวัด *</label>
                                                <div class="control">
                                                    <div class="select-wrapper icon-square">
                                                        <select class="bg-white" title="Province">
                                                            <option value="">&nbsp;</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid md-50 sm-100 mt-0">
                                            <div class="field field-sm field-adaptive">
                                                <label class="fw-400">รหัสไปรษณีย์ *</label>
                                                <div class="control">
                                                    <input type="text" class="bg-white" title="Postal Code" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="body bg-fgray border-bottom bcolor-sgray">
                                    <div class="grids">
                                        <div class="grid md-50 sm-100 mt-0">
                                            <div class="field field-sm field-adaptive">
                                                <label class="fw-400">โทรศัพท์ *</label>
                                                <div class="control">
                                                    <input type="text" class="bg-white" title="Phone" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid md-50 sm-100 mt-0">
                                            <div class="field field-sm field-adaptive">
                                                <label class="fw-400">อีเมล *</label>
                                                <div class="control">
                                                    <input type="email" class="bg-white" title="Email" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="body bg-white border-bottom bcolor-sgray">
                                    <div class="grids">
                                        <div class="grid md-50 sm-100 mt-0">
                                            <div class="field field-sm field-adaptive">
                                                <label class="fw-400">เพศ *</label>
                                                <div class="control">
                                                    <fieldset>
                                                        <div class="d-flex ai-center mt-1">
                                                            <div class="mr-3">
                                                                <input class="mr-2" type="radio" name="gender" id="female" value="female" title="Sex" />
                                                                <label class="fw-300" for="female">หญิง</label>
                                                            </div>
                                                            <div>
                                                                <input class="mr-2" type="radio" name="gender" id="male" value="male" title="Sex" />
                                                                <label class="fw-300" for="male">ชาย</label>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid md-50 sm-100 mt-0">
                                            <div class="field field-sm field-adaptive">
                                                <label class="fw-400">อายุ *</label>
                                                <div class="control">
                                                    <input type="number" class="bg-white" title="Age" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="body bg-fgray border-bottom bcolor-sgray">
                                    <div class="field field-sm field-adaptive">
                                        <label class="fw-400">อายุ *</label>
                                        <div class="control">
                                            <fieldset>
                                                <div class="mt-1">
                                                    <input class="mr-2" type="radio" name="age_range" id="age_1" value="1" title="Age Range" />
                                                    <label class="fw-300" for="age_1">ต่ำกว่า 20 ปี</label>
                                                </div>
                                                <div class="mt-1">
                                                    <input class="mr-2" type="radio" name="age_range" id="age_2" value="1" title="Age Range" />
                                                    <label class="fw-300" for="age_2">20-30 ปี</label>
                                                </div>
                                                <div class="mt-1">
                                                    <input class="mr-2" type="radio" name="age_range" id="age_3" value="1" title="Age Range" />
                                                    <label class="fw-300" for="age_3">30-40 ปี</label>
                                                </div>
                                                <div class="mt-1">
                                                    <input class="mr-2" type="radio" name="age_range" id="age_4" value="1" title="Age Range" />
                                                    <label class="fw-300" for="age_4">มากกว่า 40 ปี</label>
                                                </div>
                                                <div class="mt-1">
                                                    <input class="mr-2" type="radio" name="age_range" id="age_5" value="0" title="Age Range" />
                                                    <label class="fw-300" for="age_5">ไม่ต้องการบอก</label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="body bg-white border-bottom bcolor-sgray">
                                    <div class="field field-sm field-adaptive">
                                        <label class="fw-400">อาชีพ *</label>
                                        <div class="control">
                                            <fieldset>
                                                <div class="mt-1">
                                                    <input class="mr-2" type="radio" name="job" id="job_1" value="1" title="Job" />
                                                    <label class="fw-300" for="job_1">พนักงานบริษัทเอกชน ประเภทกิจการ</label>
                                                </div>
                                                <div class="mt-1">
                                                    <input class="mr-2" type="radio" name="age_range" id="job_2" value="1" title="Job" />
                                                    <label class="fw-300" for="job_2">ข้าราชการ</label>
                                                </div>
                                                <div class="mt-1">
                                                    <input class="mr-2" type="radio" name="age_range" id="job_3" value="1" title="Job" />
                                                    <label class="fw-300" for="job_3">พนักงานรัฐวิสาหกิจ</label>
                                                </div>
                                                <div class="mt-1">
                                                    <input class="mr-2" type="radio" name="age_range" id="job_4" value="1" title="Job" >
                                                    <label class="fw-300" for="job_4">เจ้าของกิจการ</label>
                                                </div>
                                                <div class="mt-1">
                                                    <input class="mr-2" type="radio" name="age_range" id="job_5" value="0" title="Job" />
                                                    <label class="fw-300" for="job_5">อาชัพอิสระ (โปรดระบุ)</label>
                                                    <div class="field field-sm field-adaptive mt-1 pl-4" style="max-width:24rem;">
                                                        <input type="text" class="bg-white" title="Job Detail" />
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-4 pt-2" data-aos="fade-up" data-aos-delay="0">
                            <div class="ss-box-header bg-white border-bottom-2 bcolor-black">
                                <div class="ss-box-shadow"></div>
                                <div class="header bg-05 color-white">
                                    <h5 class="fw-200">02. ข้อมูลทั่วไปเกี่ยวกับเว็บไซต์การนิคมอุตสาหกรรม</h5>
                                </div>
                                <div class="body bg-fgray border-bottom bcolor-sgray">
                                    <p>
                                        คุณหาข้อมูลเกี่ยวกับนิคมอุตสาหกรรมจากแหล่งใดบ้าง (ตอบได้มากกว่า 1 ข้อ) *
                                    </p>
                                </div>
                                <div class="body bg-white border-bottom bcolor-sgray">
                                    <fieldset>
                                        <div class="grids">
                                            <?php for($i=0; $i<12; $i++){?>
                                                <div class="grid md-1-3 sm-50 mt-0 py-1">
                                                    <input class="mr-2" type="checkbox" id="choice_1_<?= $i ?>" title="Choice" />
                                                    <label class="fw-300 text-xl mb-0" for="choice_1_<?= $i ?>">
                                                        ป้ายโฆษณา
                                                    </label>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="body bg-fgray border-bottom bcolor-sgray">
                                    <p>
                                        คุณใช้สื่อ (เว็บไซต์) อะไรบ้างในการหาข้อมูลที่เกี่วกับนิคมอุตสาหกรรม (ตอบได้มากกว่า 1 ข้อ) *
                                    </p>
                                </div>
                                <div class="body bg-white border-bottom bcolor-sgray">
                                    <fieldset>
                                        <div class="grids">
                                            <?php for($i=0; $i<6; $i++){?>
                                                <div class="grid md-1-3 sm-50 mt-0 py-1">
                                                    <input class="mr-2" type="checkbox" id="choice_2_<?= $i ?>_1" title="Choice" />
                                                    <label class="fw-300 text-xl mb-0" for="choice_2_<?= $i ?>_1">
                                                        โฮมบายเออร์ไกด์
                                                    </label>
                                                </div>
                                                <div class="grid md-1-3 sm-50 mt-0 py-1">
                                                    <input class="mr-2" type="checkbox" id="choice_2_<?= $i ?>_2" title="Choice" />
                                                    <label class="fw-300 text-xl mb-0" for="choice_2_<?= $i ?>_2">
                                                        บ้านพร้อมที่อยู่
                                                    </label>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="body bg-fgray border-bottom bcolor-sgray">
                                    <p>
                                        วัตถุประสงค์ในการเลือกเข้าใช้งานเว็บไซค์การนิคมอุตสาหกรรม (ตอบได้มากกว่า 1 ข้อ) *
                                    </p>
                                </div>
                                <div class="body bg-white border-bottom bcolor-sgray">
                                    <fieldset>
                                        <div class="grids">
                                            <?php for($i=0; $i<3; $i++){?>
                                                <div class="grid sm-100 mt-0 py-1">
                                                    <input class="mr-2" type="checkbox" id="choice_3_<?= $i ?>" title="Choice" />
                                                    <label class="fw-300 text-xl mb-0" for="choice_3_<?= $i ?>">
                                                        ต้องการหาข้อมูลโครงการเพื่อการลงทุน
                                                    </label>
                                                </div>
                                            <?php }?>
                                            <div class="grid sm-100 mt-0 py-1">
                                                <input class="mr-2" type="checkbox" name="choice_3_4" id="choice_3_4" title="Choice" />
                                                <label class="fw-300 text-xl mb-0" for="choice_3_4">
                                                    อื่นๆ (โปรดระบุ)
                                                </label>
                                                <div class="field field-sm field-adaptive mt-1 pl-4" style="max-width:24rem;">
                                                    <input type="text" class="bg-white" title="Choice Detail" />
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        
                        </div>
    
                        <fieldset>
                            <div class="table-wrapper mt-4 pt-2" data-aos="fade-up" data-aos-delay="0">
                                <table class="table table-vote">
                                    <thead class="px-4 py-3"> 
                                        <tr class="bg-06 color-white">
                                            <th class="h4 fw-300" style="min-width:220px;">
                                                คุณประเมิน "บทความ" ในเว็บไซต์อย่างไร *
                                            </th>
                                            <th class="text-center" style="min-width:80px;">ดีมาก</th>
                                            <th class="text-center" style="min-width:80px;">ดี</th>
                                            <th class="text-center" style="min-width:80px;">ปานกลาง</th>
                                            <th class="text-center" style="min-width:80px;">แย่</th>
                                            <th class="text-center" style="min-width:80px;">แย่มาก</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for($i=0; $i<9; $i++){?>
                                            <tr class="color-white">
                                                <td>เป็นเรื่องที่คุณกำลังสนใจในขณะนั้น</td>
                                                <?php for($j=0; $j<5; $j++){?>
                                                    <td class="text-center">
                                                        <input type="radio" name="box_<?= $i ?>" title="Choice" />
                                                    </td>
                                                <?php }?>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </fieldset>

                        <div class="field field-sm mt-4" data-aos="fade-up" data-aos-delay="0">
                            <label class="fw-400">
                                ข้อเสนอแนะของคุณเกี่ยวกับเว็บไซต์การนิคมอุตสาหกรรม
                            </label>
                            <div class="control">
                                <textarea rows="6" title="Suggestion"></textarea>
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
                    <div class="mt-5" data-aos="fade-up" data-aos-delay="150">
                        <h4 class="h3 sm color-07 fw-400 text-center">
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
