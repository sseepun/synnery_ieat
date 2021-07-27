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
            'bg' => 'public/assets/app/images/bg/breadcrumb-minisite-02.png',
            'title' => 'แบบสำรวจโหวต',
            'desc' => 'ติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทจต่างๆ <br> เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย',
            'structure' => [
                [ 'url' => '#', 'display' => 'กนอ.อัพเดท' ],
                [ 'url' => '#', 'display' => 'แบบสำรวจโหวต' ]
            ]
        ];
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-padding mt-0">
        <div class="container">

            <div class="grids jc-center" data-aos="fade-up" data-aos-delay="450">
                <div class="grid lg-90 sm-100 mt-0">

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

                    <div class="faq-03 grids">
                        <?php for($i=0; $i<10; $i++){?>
                            <div class="grid sm-100 mt-3">
                                <div class="faq">
                                    <div class="faq-header">
                                        <div class="faq-icon">
                                            <div class="icon"></div>
                                        </div>
                                        <h6 class="title h4 fw-300">
                                            ได้มีการใช้ตัวชี้วัด(indicators) เพื่อติดตามสถานะการลงมือปฏิบัติตามกลยุทธ์อุตสาหกรรม 4.0
                                        </h6>
                                        <div class="ss-stat">
                                            <div class="stat">
                                                <div class="icon">
                                                    <img src="public/assets/app/images/icon/chart.svg" alt="Icon" />
                                                </div> 
                                                <div class="p sm fw-300 lh-xs">
                                                    <span class="fw-600">โหวต</span> 
                                                    <br> 24
                                                </div>
                                            </div>
                                            <div class="stat">
                                                <div class="icon">
                                                    <em class="zmdi zmdi-calendar-alt"></em>
                                                </div> 
                                                <div class="p sm fw-300 lh-xs">
                                                    <span class="fw-600">วันที่แผยแพร่</span> 
                                                    <br> 13/05/2564
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-body">
                                        <div class="wrapper">
                                            <div class="faq-icon"></div>
                                            <div class="content">
                                                <?php if($i%2==0){?>
                                                    <form action="">
                                                        <div class="field field-sm field-adaptive">
                                                            <div class="control">
                                                                <fieldset>
                                                                    <div class="mb-1">
                                                                        <input 
                                                                            class="mr-2" type="radio" name="radio_<?= $i ?>" 
                                                                            id="radio_<?= $i ?>_0" value="1" title="General Radio" 
                                                                        />
                                                                        <label class="fw-300" for="radio_<?= $i ?>_0">มีระบบตัวชี้วัด ซึ่งพิจารณาอย่างเหมาะสม</label>
                                                                    </div>
                                                                    <div class="mb-1">
                                                                        <input 
                                                                            class="mr-2" type="radio" name="radio_<?= $i ?>" 
                                                                            id="radio_<?= $i ?>_1" value="1" title="General Radio" 
                                                                        />
                                                                        <label class="fw-300" for="radio_<?= $i ?>_1">มี ระบบตัวชี้วัด ซึ่งอยู่ในขั้นเริ่มต้น</label>
                                                                    </div>
                                                                    <div class="mb-1">
                                                                        <input 
                                                                            class="mr-2" type="radio" name="radio_<?= $i ?>" 
                                                                            id="radio_<?= $i ?>_2" value="1" title="General Radio" 
                                                                        />
                                                                        <label class="fw-300" for="radio_<?= $i ?>_2">ยังไม่มีความชัดเจนในการนำมาใช้งาน</label>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                        <div class="btns mt-3">
                                                            <button type="submit" class="btn btn-action">
                                                                <span>ลงคะแนนโหวต</span>
                                                            </button>
                                                        </div>
                                                    </form>
                                                <?php }else{?>
                                                    <table class="table-vote-01">
                                                        <tbody>
                                                            <tr>
                                                                <td class="p">ข้อมูลสินค้าคงคลัง</td>
                                                                <td><div class="percent h6 fw-600">12%</div></td>
                                                                <td><div class="progress" style="--percent:12%;"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="p">เวลารวมในการทำงานของการผลิต</td>
                                                                <td><div class="percent h6 fw-600">24%</div></td>
                                                                <td><div class="progress" style="--percent:24%;"></div></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="p">การใช้กำลังการผลิตเครื่องจักร</td>
                                                                <td><div class="percent h6 fw-600">12%</div></td>
                                                                <td><div class="progress" style="--percent:12%;"></div></td>
                                                            </tr>
                                                            <tr class="winning">
                                                                <td class="p">ส่วนที่เหลือจากการผลิต</td>
                                                                <td><div class="percent h6 fw-600">52%</div></td>
                                                                <td><div class="progress" style="--percent:52%;"></div></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
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
