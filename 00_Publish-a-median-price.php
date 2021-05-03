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
            [ 'url' => '#', 'display' => 'ข่าวจัดซื้อจัดจ้าง' ],
            [ 'url' => '#', 'display' => 'เผยแพร่ราคากลาง' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="about-02 section-bpadding section-bg-hero">
        <div class="bg-hero lazy-bg" data-src="public/assets/app/images/hero/08.jpg"></div>
        <div class="container">
            <h3 class="h2 color-black" data-aos="fade-up" data-aos-delay="0">
                เผยแพร่ราคากลาง
            </h3>
            <h4 class="h3 sm color-06 fw-300 xs-hide" data-aos="fade-up" data-aos-delay="150">
                แบบฟอร์มและเอกสารต่างๆ
            </h4>
            <h5 class="xs-no-br xs-hide" data-aos="fade-up" data-aos-delay="300">
                เพื่อการเติบโตทางธุรกิจสังคมและสิ่งแวดล้อมอย่างยั่งยืน รางวัลแห่งความสำเร็จต่างๆ<br>
                ที่ กนอ. ได้รับนับว่าเป็นเครื่องการันตีถึงการดำเนินการของบริษัทที่ดีและมีการบูรณาการ<br>
                อีกทั้งพัฒนาอย่างต่อเนื่อง
            </h5>
 
            <div data-aos="fade-up" data-aos-delay="450">
                <div class="grids grid-header">
                    <div class="grid xl-20 lg-25 md-30 sm-100 mt-0">
                        <div class="options">
                            <input type="text" name="search" placeholder="ค้นหา" required title="Search" />
                            <button type="submit" class="btn btn-grid">
                                <em class="zmdi zmdi-search"></em>
                            </button>
                        </div>
                    </div>
                    <div class="grid xl-80 lg-75 md-70 sm-100 mt-0">
                        <div class="options">
                            <div class="select-wrapper">
                                <select class="order" title="Order">
                                    <option value="" disabled="" selected="">เรียงลำดับข้อมูล</option>
                                    <option value="newest">เรียงลำดับข้อมูล</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-container tab-container-01">

                <div class="grids">

                    <div class="grid xl-20 lg-25 sm-100" data-aos="fade-up" data-aos-delay="600">
                        <div class="tabs">
                            <div class="ss-box-shadow"></div>
                            <a class="tab tab-main color-black h-color-04 active" href="#">
                                <h6>เผยแพร่ราคากลาง</h6>
                            </a>
                        </div>
                    </div>

                    <div class="grid xl-80 lg-75 sm-100" data-aos="fade-up" data-aos-delay="750">
                        <?php for($i=0; $i<7; $i++){?>
                            <div class="about-container <?php if($i==0)echo 'active'; ?>">
                                <div class="about-header">
                                    <h6 class="title h3 xs color-04">
                                        เผยแพร่ราคากลางงานก่อสร้างจ้างก่อสร้างโครงการก่อสร้างนิคมอุตสาหกรรม Smart Park
                                    </h6>
                                    <div class="ss-date">
                                        <div class="date">
                                            <div class="d border-bottom bcolor-white">04</div>
                                            <div class="m-y">09.2563</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-tag">
                                    <div class="icon">
                                        <em class="active zmdi zmdi-plus"></em>
                                        <em class="inactive zmdi zmdi-minus"></em>
                                    </div>
                                </div>
                                <div class="about-body">
                                    <div class="grids">

                                        <div class="grid xl-100 lg-3-3 sm-100 mt-0">
                                    <table class="table table-download type-02">
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
                            </div>
                        <?php }?>
                        <?php include('component/grid-footer.php'); ?>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
