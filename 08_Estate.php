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
            [ 'url' => '#', 'display' => 'ข้อมูลนิคมฯ/ท่าเรือฯ/โรงงานฯ' ],
            [ 'url' => '#', 'display' => 'นิคมอุตสาหกรรม' ],
            [ 'url' => '#', 'display' => 'นิคมอุตสาหกรรมในประเทศไทย' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="content-05 section-bpadding">
        <div class="img-bg bg-gradient-gray-02"></div>
        <div class="container">
            <h2 class="color-black" data-aos="fade-up" data-aos-delay="0">
                นิคมอุตสาหกรรมในประเทศไทย
            </h2>
            <h3 class="sm color-06 fw-400" data-aos="fade-up" data-aos-delay="150">
                เพิ่มขีดความสามารถของคุณและธุรกิจ 
            </h3>
            <h5 class="xs-no-br" data-aos="fade-up" data-aos-delay="300">
                ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ <br>
                เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย 
            </h5>
            
            <div class="py-2 my-4" action="" data-aos="fade-up" data-aos-delay="450">
                <form>
                    <div class="ss-box-header shadow">
                        <div class="header bg-06 color-white pt-2">
                            <div class="grids">
                                <div class="grid lg-25 mt-0">
                                    <div class="field field-sm">
                                        <label>คำค้นหา :</label>
                                        <input type="text" class="bg-white" />
                                    </div>
                                </div>
                                <div class="grid lg-25 mt-0">
                                    <div class="field field-sm">
                                        <label>นิคมอุตสาหกรรม :</label>
                                        <div class="select-wrapper icon-square">
                                            <select class="bg-white">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid lg-25 mt-0">
                                    <div class="field field-sm">
                                        <label>พื้นที่ประกอบกิจการ :</label>
                                        <div class="select-wrapper icon-square">
                                            <select class="bg-white">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid lg-25 mt-0">
                                    <div class="field field-sm">
                                        <label>ประเภทโรงงาน :</label>
                                        <div class="select-wrapper icon-square">
                                            <select class="bg-white">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid lg-25 mt-0">
                                    <div class="field field-sm">
                                        <label>ประเภท ISIC :</label>
                                        <div class="select-wrapper icon-square">
                                            <select class="bg-white">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid lg-25 mt-0">
                                    <div class="field field-sm">
                                        <label>เลขทะเบียนโรงงาน :</label>
                                        <input type="text" class="bg-white" />
                                    </div>
                                </div>
                                <div class="grid lg-25 mt-0">
                                    <div class="field field-sm">
                                        <label>บริษัท :</label>
                                        <input type="text" class="bg-white" />
                                    </div>
                                </div>
                                <div class="grid lg-25 mt-0">
                                    <div class="field field-sm">
                                        <label>ประกอบอุตสาหกรรม :</label>
                                        <input type="text" class="bg-white" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body bg-08">
                            <div class="btns text-center mt-0">
                                <button type="submit" class="btn btn-action">
                                    <span>ค้นหา</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <h3 class="color-02 fw-300" data-aos="fade-up" data-aos-delay="0">
                ตอบโจทย์ที่ใช่...
            </h3>
            <h5 class="fw-300" data-aos="fade-up" data-aos-delay="150">
                ตอบสนองทุกความต้องการทางด้านธุรกิจของคุณ
            </h5>
            <div class="grids" data-aos="fade-up" data-aos-delay="300">
                <?php for($j=0; $j<12; $j++){?>
                    <div class="grid xl-25 lg-1-3 sm-50">
                        <div class="ss-card ss-card-01">
                            <a class="ss-img" href="#">
                                <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/17.jpg"></div>
                                <div class="hover-container">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/06.png" alt="Icon" />
                                    </div>
                                </div>
                            </a>
                            <div class="text-container">
                                <div class="ss-box-shadow"></div>
                                <div class="text-wrapper">
                                    <a class="title h5 fw-400" href="#">
                                        นิคมอุตสาหกรรมที เอฟ ดี
                                    </a>
                                    <table class="table table-sm">
                                        <tbody>
                                            <tr>
                                                <td>เนื้อที่ทั้งหมด</td>
                                                <td class="text-right">
                                                    302-1-20.70 ไร่
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-sm">
                                        <tbody>
                                            <tr>
                                                <td>ที่ตั้ง</td>
                                                <td class="text-right">
                                                    ต.ท่าสะอ้าน อ.บางปะกง จ.ฉะเชิงเทรา
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-sm">
                                        <tbody>
                                            <tr>
                                                <td>โทรศัพท์</td>
                                                <td><span class="mx-1">:</span></td>
                                                <td>0 2676 4031-6</td>
                                            </tr>
                                            <tr>
                                                <td>โทรสาร</td>
                                                <td><span class="mx-1">:</span></td>
                                                <td>0 2676 4038</td>
                                            </tr>
                                            <tr>
                                                <td>E-mail</td>
                                                <td><span class="mx-1">:</span></td>
                                                <td>industrial@tfd-factory.com</td>
                                            </tr>
                                            <tr>
                                                <td>Website</td>
                                                <td><span class="mx-1">:</span></td>
                                                <td>www.tfd-factory.com</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="ss-tag fw-wrap">
                                        <div class="text fw-400">TAG :</div> 
                                        <div class="tags">
                                            <a class="tag" href="#">นิคมอุตสาหกรรม</a>
                                            <a class="tag" href="#">กนอ.</a>
                                            <a class="tag" href="#">ชลบุรี</a>
                                            <a class="tag" href="#">ระบบสาธารณูปโภค</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?> 
            </div>
            <?php include('component/grid-footer.php'); ?>


        </div>
    </section>
    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
