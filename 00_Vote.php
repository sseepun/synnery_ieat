<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>

    <style>
        .grid > .grids {width:100%; }
        /* form-01 */
        .form-01, .form-02 {border-bottom: 2px solid #000;}
        .form-01 .grids .grid .grids{border-bottom: 1px solid transparent; border-color:#cfcfcf;}
        .form-01 .grids .grid:last-child .grids{ border-color:transparent;}
        .form-01 .grids .grid:nth-child(2n+1) > .grids {width:100%; background: #fff;}
        .form-01 .grids .grid:nth-child(2n) > .grids{ width:100%; background: #eaeaea;}
        @media screen and (max-width:575.98px){
            .form-01 .grids .grid > .grids .grid {justify-content: flex-start !important;}
            .form-01 .grids .grid .grids .grid:nth-child(3) {
                margin-top: .5rem !important;
            }
            .form-01 .grids .grid > .grids {padding-left:1.5rem;}
        }


        /* form-02 */
        .form-02 > .grids > .grid:nth-child(2n) {width:100%; background: #eaeaea;}
        .form-02 > .grids > .grid {width:100%; border-bottom: 1px solid transparent; border-color:#cfcfcf; }
        .form-02 > .grids > .grid:last-child {border-color:transparent;}


        /* vote table */
        .table.vote-table {width:100%; min-width:50rem; overflow:auto; border-collapse: collapse;}
    </style>
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
        <div class="bg-hero lazy-bg" data-src="public/assets/app/images/hero/12.jpg"></div>
        <div class="container">
            <h2 class="color-black" data-aos="fade-up" data-aos-delay="0">
                ร่วมแสดงความคิดเห็น
            </h2>
            <h3 class="sm color-02 fw-400" data-aos="fade-up" data-aos-delay="150">
                เพิ่มขีดความสามารถของคุณและธุรกิจ
            </h3>
            <h5 class="color-black xs-no-br" data-aos="fade-up" data-aos-delay="300">
                ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆเกี่ยวกับ กนอ.และ <br>
                นิคมอุตสาหกรรมในประเทศไทย
            </h5>
            <section class="section-padding">
            
                <div data-aos="fade-up" data-aos-delay="450">
                    <div class="bg-02 color-white px-4 pt-4 pb-3">
                        <span class="text-3xl fw-400 mr-1">กรอกแบบสอบถาม</span>
                        <span class="text-xl fw-100">กรุณาตอบแบบสอบถามเลือกข้อที่ตรงกับท่านมากที่สุด</span>
                        <span class="text-xl fw-400">เราจะรักษาข้อมูลของท่านเป็นความลับ</span>
                    </div>
                    
                    <form action="./" method="POST" class="form-01 w-100">
                        <div class="grids">
                            <div class="grid sm-100 mt-0 bg-01">
                                <div class="color-white px-4 py-3">
                                    <h5 class="fw-100">
                                        01. ข้อมูลส่วนตัว
                                    </h5>
                                </div>     
                            </div>

                            <div class="grid sm-100 mt-0">
                                <div class="grids d-flex ai-center py-3">
                                    <div class="grid sm-40 md-30 mt-0 d-flex jc-end">
                                        <label class="fw-400 text-xl mb-0" for="firstlast">ชื่อ-นามสกุล *</label>
                                    </div>
                                    <div class="grid sm-60 mt-0">
                                        <input class="py-1 w-100" type="text">
                                    </div>
                                </div>
                            </div>


                            <div class="grid sm-100 mt-0">
                                <div class="grids d-flex ai-start py-3">
                                    <div class="grid sm-40 md-30 mt-0 d-flex jc-end">
                                        <label class="fw-400 text-xl mb-0" for="address">ที่อยู่ ( เลขที่ ถนน ตำบล อำเภอ) *</label>
                                    </div>
                                    <div class="grid sm-60 mt-0">
                                        <textarea name="address" rows="4" class="w-100"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="grid sm-100 mt-0">
                                <div class="grids d-flex ai-center py-3">
                                    <div class="grid mt-0 d-flex jc-end sm-40 md-30">
                                        <label class="fw-400 text-xl mb-0" for="province" class="mb-0">จังหวัด *</label>
                                    </div>
                                    <div class="grid mt-0 sm-20">
                                        <select name="province" class="py-1 w-100">
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                    <div class="grid mt-0 sm-20 d-flex jc-end">
                                        <label class="fw-400 text-xl mb-0" for="postal">รหัสไปรษณีย์ *</label>
                                    </div>
                                    <div class="grid mt-0 sm-20">
                                        <input type="text" name="postal" class="py-1 w-100">
                                    </div>
                                </div>
                            </div>

                            <div class="grid sm-100 mt-0">
                                <div class="grids d-flex ai-center py-3">
                                    <div class="grid mt-0 d-flex jc-end sm-40 md-30">
                                        <label class="fw-400 text-xl mb-0" for="phone" class="mb-0">โทรศัพท์ *</label>
                                    </div>
                                    <div class="grid mt-0 sm-20">
                                        <input type="text" name="phone" class="py-1 w-100">
                                    </div>
                                    <div class="grid mt-0 sm-20 d-flex jc-end">
                                        <label class="fw-400 text-xl mb-0" for="email">อีเมล์ *</label>
                                    </div>
                                    <div class="grid mt-0 sm-20">
                                        <input type="email" name="email" class="py-1 w-100">
                                    </div>
                                </div>
                            </div>


                            <div class="grid sm-100 mt-0">
                                <div class="grids d-flex ai-center py-3">
                                    <div class="grid mt-0 d-flex jc-end sm-40 md-30">
                                        <span class="fw-400 text-xl mb-0">เพศ *</span>
                                    </div>
                                    <div class="grid mt-0 sm-20 d-flex">
                                        <div class="d-flex ai-center mr-3">
                                            <input class="mr-2" type="radio" name="gender" value="female">
                                            <label class="mb-0 text-xl fw-400" for="female">หญิง</label>
                                        </div>

                                        <div class="d-flex ai-center">
                                            <input class="mr-2" type="radio" name="gender" value="male">
                                            <label class="mb-0 text-xl fw-400" for="male">ชาย</label>
                                        </div>
                                    </div>
                                    <div class="grid mt-0 sm-20 d-flex jc-end">
                                        <label class="fw-400 text-xl mb-0" for="age">อายุ *</label>
                                    </div>
                                    <div class="grid mt-0 sm-20">
                                        <input type="text" name="age" class="py-1 w-100">
                                    </div>
                                </div>
                            </div>

                            <div class="grid sm-100 mt-0">
                                <div class="grids d-flex ai-start py-3">
                                    <div class="grid sm-40 md-30 mt-0 d-flex jc-end">
                                        <span class="fw-400 text-xl mb-0">อายุ *</span>
                                    </div>
                                    <div class="grid sm-60 mt-0">
                                        <div>
                                            <input class="mr-2" type="radio" name="age_range" value="1">
                                            <label class="mb-0 text-xl fw-400" for="1">ต่ำกว่า 20 ปี</label>
                                        </div>
                                        <div class="pt-1">
                                            <input class="mr-2" type="radio" name="age_range" value="1">
                                            <label class="mb-0 text-xl fw-400" for="2">20-30 ปี</label>
                                        </div>
                                        <div class="pt-1">
                                            <input class="mr-2" type="radio" name="age_range" value="1">
                                            <label class="mb-0 text-xl fw-400" for="3">30-40 ปี</label>
                                        </div>
                                        <div class="pt-1">
                                            <input class="mr-2" type="radio" name="age_range" value="1">
                                            <label class="mb-0 text-xl fw-400" for="4">มากกว่า 40 ปี</label>
                                        </div>
                                        <div class="pt-1">
                                            <input class="mr-2" type="radio" name="age_range" value="0">
                                            <label class="mb-0 text-xl fw-400" for="0">ไม่ต้องการบอก</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid sm-100 mt-0">
                                <div class="grids d-flex ai-start pt-3 pb-5">
                                    <div class="grid sm-40 md-30 mt-0 d-flex jc-end">
                                        <span class="fw-400 text-xl mb-0">อาชีพ *</span>
                                    </div>
                                    <div class="grid sm-60 mt-0">
                                        <div>
                                            <input class="mr-2" type="radio" name="age_range" value="1">
                                            <label class="mb-0 text-xl fw-400" for="1">พนักงานบริษัทเอกชน ประเภทกิจการ</label>
                                        </div>
                                        <div class="pt-1">
                                            <input class="mr-2" type="radio" name="age_range" value="1">
                                            <label class="mb-0 text-xl fw-400" for="2">ข้าราชการ</label>
                                        </div>
                                        <div class="pt-1">
                                            <input class="mr-2" type="radio" name="age_range" value="1">
                                            <label class="mb-0 text-xl fw-400" for="3">พนักงานรัฐวิสาหกิจ</label>
                                        </div>
                                        <div class="pt-1">
                                            <input class="mr-2" type="radio" name="age_range" value="1">
                                            <label class="mb-0 text-xl fw-400" for="4">เจ้าของกิจการ</label>
                                        </div>
                                        <div class="pt-1">
                                            <input class="mr-2" type="radio" name="age_range" value="0">
                                            <label class="mb-0 text-xl fw-400" for="0">อาชัพอิสระ (โปรดระบุ)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                    <form action="/" method="POST" class="form-02 mt-3">
                        <div class="grids">
                            <div class="grid sm-100 mt-0 bg-04">
                                <div class="color-white px-4 py-3">
                                    <h5 class="fw-100">
                                        01. ข้อมูลทั่วไปเกี่ยวกับเว็บไซต์การนิคมอุตสาหกรรม
                                    </h5>
                                </div>     
                            </div>


                            <div class="grid sm-100 mt-0">
                                <div class="px-4 py-3">
                                    <p class="fw-200">คุณหาข้อมูลเกี่ยวกับนิคมอุตสาหกรรมจากแหล่งใดบ้าง (ตอบได้มากกว่า 1 ข้อ) *</p>
                                </div>
                            </div>

                            <div class="grid sm-100 mt-0">
                                <div class="grids px-4 py-3">
                                    <?php for($i=0; $i<6; $i++){?>
                                    
                                        <div class="grid sm-30 mt-0 d-flex ai-center py-1">
                                            <input class="mr-3" type="checkbox" name="choice_1_<?= $i; ?>_1">
                                            <label class="fw-400 text-xl mb-0" for="choice_1_<?= $i; ?>_1">ป้ายโฆษณา</label>
                                        </div>
                                        <div class="grid sm-70 mt-0 d-flex ai-center py-1">
                                            <input class="mr-3" type="checkbox" name="choice_1_<?= $i; ?>_2">
                                            <label class="fw-400 text-xl mb-0" for="choice_1_<?= $i; ?>_2">ป้ายโฆษณา</label>
                                        </div>

                                    <?php }?>
                                </div>
                            </div>

                            <div class="grid sm-100 mt-0">
                                <div class="px-4 py-3">
                                    <p class="fw-200">คุณใช้สื่อ (เว็บไซต์) อะไรบ้างในการหาข้อมูลที่เกี่วกับนิคมอุตสาหกรรม (ตอบได้มากกว่า 1 ข้อ) *</p>
                                </div>
                            </div>

                            <div class="grid sm-100 mt-0">
                                <div class="grids px-4 py-3">
                                    <?php for($i=0; $i<4; $i++){?>
                                    
                                        <div class="grid sm-30 mt-0 d-flex ai-center py-1">
                                            <input class="mr-3" type="checkbox" name="choice_2_<?= $i; ?>_1">
                                            <label class="fw-400 text-xl mb-0" for="choice_2_<?= $i; ?>_1">โฮมบายเออร์ไกด์</label>
                                        </div>
                                        <div class="grid sm-70 mt-0 d-flex ai-center py-1">
                                            <input class="mr-3" type="checkbox" name="choice_2_<?= $i; ?>_2">
                                            <label class="fw-400 text-xl mb-0" for="choice_2_<?= $i; ?>_2">บ้านพร้อมที่อยู่</label>
                                        </div>

                                    <?php }?>
                                </div>
                            </div>

                            <div class="grid sm-100 mt-0">
                                <div class="px-4 py-3">
                                    <p class="fw-200">วัตถุประสงค์ในการเลือกเข้าใช้งานเว็บไซค์การนิคมอุตสาหกรรม (ตอบได้มากกว่า 1 ข้อ) *</p>
                                </div>
                            </div>

                            <div class="grid sm-100 mt-0">
                                <div class="grids px-4 pt-3 pb-5">
                                    <?php for($i=0; $i<3; $i++){?>
                                    
                                        <div class="grid sm-100 mt-0 d-flex ai-center py-1">
                                            <input class="mr-3" type="checkbox" name="choice_3_<?= $i; ?>">
                                            <label class="fw-400 text-xl mb-0" for="choice_3_<?= $i; ?>">ต้องการหาข้อมูลโครงการเพื่อการลงทุน</label>
                                        </div>

                                    <?php }?>
                                    <div class="grid sm-100 mt-0 d-flex ai-center py-1">
                                    <input class="mr-3" type="checkbox" name="choice_3_4">
                                        <label class="fw-400 text-xl mb-0" for="choice_3_4">อื่นๆ (ระบุ)..........................................</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    
                    </form>

                    <form action="./" method="POST" class="form-03">
                        <table class="table vote-table">
                            <thead class="px-4 py-3"> 
                                <tr class="bg-06 color-white">
                                    <td class="text-xl fw-600">คุณประเมิน "บทความ" ในเว็บไซต์อย่างไร *</td>
                                    <td style="min-width: 110px;" class="text-center">ดีมาก</td>
                                    <td style="min-width: 110px;" class="text-center">ดี</td>
                                    <td style="min-width: 110px;" class="text-center">ปานกลาง</td>
                                    <td style="min-width: 110px;" class="text-center">แย่</td>
                                    <td style="min-width: 110px;" class="text-center">แย่มาก</td>
                                </tr>
                            </thead>
                            <tbody class="bg-dark px-4 py-3">
                                <?php for($i=0; $i< 9; $i++){?>

                                    <tr class="color-white">
                                        <td>เป็นเรื่องที่คุณกำลังสนใจในขณะนั้น</td>
                                        <?php for($j= 0; $j<5; $j++){?>
                                            <td class="text-center">
                                                <input type="checkbox" name="box_<?= $i; ?>_<?= $j;?>" id="box_1_1">
                                            </td>
                                        <?php }?>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </form>



                    
                </div>
            
            </section>

        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
