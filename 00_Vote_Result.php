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
            <div class="grids jc-center mt-5" data-aos="fade-up" data-aos-delay="450">
                <div class="grid lg-80 sm-100">
                    <div class="vote-blocks">

                        <div class="vote-block bg-white bcolor-sgray">
                            <div class="ss-date">
                                <div class="date bg-05">
                                    <div class="d">04</div>
                                    <div class="m-y">09.2563</div>
                                </div>
                            </div>
                            <div class="question-container">
                                <div class="field field-sm">
                                    <div class="h5 fw-600">
                                        มีการปรับตัวในสถานะการลงมือปฏิบัติตามกลยุทย์ อุตสาหกรรม 4.0
                                    </div>
                                    <div class="control">
                                        <fieldset>
                                            <div class="mt-2">
                                                <input class="mr-2" type="radio" name="radio_0" id="radio_0_0" value="0" title="General Radio Input" />
                                                <label class="fw-300 op-60" for="radio_0_0">ไม่มีกลยุทย์อยู่เลย</label>
                                            </div>
                                            <div class="mt-2">
                                                <input class="mr-2" type="radio" name="radio_0" id="radio_0_1" value="1" title="General Radio Input" />
                                                <label class="fw-300 op-60" for="radio_0_1">เริ่มต้นพัฒนากลยุทย์</label>
                                            </div>
                                            <div class="mt-2">
                                                <input class="mr-2" type="radio" name="radio_0" id="radio_0_2" value="2" title="General Radio Input" />
                                                <label class="fw-300 op-60" for="radio_0_2">กลยุทย์อยู่ในระดับกำลังพัฒนา</label>
                                            </div>
                                            <div class="mt-2">
                                                <input class="mr-2" type="radio" name="radio_0" id="radio_0_3" value="3" title="General Radio Input" />
                                                <label class="fw-300 op-60" for="radio_0_3">กลยุทย์ได้กำหนดเป็นรูปแบบแล้ว</label>
                                            </div>
                                            <div class="mt-2">
                                                <input class="mr-2" type="radio" name="radio_0" id="radio_0_4" value="4" title="General Radio Input" />
                                                <label class="fw-300 op-60" for="radio_0_4">กลยุทย์ได้นำไปปฏิบัติ</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="info-container">
                                <div class="icon-container bg-sgray color-02">
                                    <em class="zmdi zmdi-badge-check"></em> 180
                                </div>
                                <div class="btns text-center mt-3">
                                    <button class="btn btn-action">
                                        <span>ลงคะแนนโหวด</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="vote-block bg-white bcolor-sgray">
                            <div class="ss-date">
                                <div class="date bg-05">
                                    <div class="d">04</div>
                                    <div class="m-y">09.2563</div>
                                </div>
                            </div>
                            <div class="question-container">
                                <div class="field field-sm">
                                    <div class="h5 fw-600">
                                        ได้มีการใช้ตัวชี้วัด (Indicators) เพื่อติดตามสถานะการลงมือฏิบัติตามกลยุทย์อุตสาหกรรม 4.0
                                    </div>
                                    <div class="control">
                                        <fieldset>
                                            <div class="mt-2">
                                                <input class="mr-2" type="radio" name="radio_1" id="radio_1_0" value="0" title="General Radio Input" />
                                                <label class="fw-300 op-60" for="radio_1_0">มีระบบตัวชี้วัด ซึ่งพิจารณาอย่างเหมาะสม</label>
                                            </div>
                                            <div class="mt-2">
                                                <input class="mr-2" type="radio" name="radio_1" id="radio_1_1" value="1" title="General Radio Input" />
                                                <label class="fw-300 op-60" for="radio_1_1">มีระบบตัวชี้วัด ซึ่งอยู่ในขั้นเริ่มต้น</label>
                                            </div>
                                            <div class="mt-2">
                                                <input class="mr-2" type="radio" name="radio_1" id="radio_1_2" value="2" title="General Radio Input" />
                                                <label class="fw-300 op-60" for="radio_1_2">ยังไม่มีความชัดเจนในการนำมาใช้งาน</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="info-container">
                                <div class="icon-container bg-sgray color-02">
                                    <em class="zmdi zmdi-badge-check"></em> 180
                                </div>
                                <div class="btns text-center mt-3">
                                    <button class="btn btn-action">
                                        <span>ลงคะแนนโหวด</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="vote-block bg-white bcolor-sgray">
                            <div class="ss-date">
                                <div class="date bg-05">
                                    <div class="d">04</div>
                                    <div class="m-y">09.2563</div>
                                </div>
                            </div>
                            <div class="question-container">
                                <div class="field field-sm">
                                    <div class="h5 fw-600">
                                        ชนิดข้อมูล วิธีการรวบรวมและระดับความสามารถในการรวบรวมข้อมูลที่เกี่ยวกับเครื่องจักร 
                                        กระบวนการผลิตและผลิตภัณฑ์ รวมถึงการไม่สามารถผลิตได้อย่างปกติพร้อมสาเหตุ 
                                        ที่ได้รวบรวมระหว่างการผลิต
                                    </div>
                                </div>
                                <div class="chart-container">
                                    <div class="chart" id="chart-1"></div>
                                    <div class="labels">
                                        <div class="label">
                                            <div class="dot" style="background:#4b316e;">68%</div>
                                            <p>ข้อมูลสินค้าคงคลัง</p>
                                        </div>
                                        <div class="label">
                                            <div class="dot" style="background:#179c8b;">20%</div>
                                            <p>เวลารวมในการทำงานของการผลิต</p>
                                        </div>
                                        <div class="label">
                                            <div class="dot" style="background:#03b5ff;">15%</div>
                                            <p>การใช้กำลังการผลิตเครื่องจักร</p>
                                        </div>
                                        <div class="label">
                                            <div class="dot" style="background:#cbaaf9;">13%</div>
                                            <p>ส่วนที่เหลือจากการผลิต</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="info-container">
                                <div class="icon-container bg-sgray color-02">
                                    <em class="zmdi zmdi-badge-check"></em> 180
                                </div>
                            </div>
                        </div>

                        <div class="vote-block bg-white bcolor-sgray">
                            <div class="ss-date">
                                <div class="date bg-05">
                                    <div class="d">04</div>
                                    <div class="m-y">09.2563</div>
                                </div>
                            </div>
                            <div class="question-container">
                                <div class="field field-sm">
                                    <div class="h5 fw-600">
                                        ได้มีการใช้ตัวชี้วัด (Indicators) เพื่อติดตามสถานะการลงมือฏิบัติตามกลยุทย์อุตสาหกรรม 4.0
                                    </div>
                                    <div class="control">
                                        <fieldset>
                                            <div class="mt-2">
                                                <input class="mr-2" type="radio" name="radio_2" id="radio_2_0" value="0" title="General Radio Input" />
                                                <label class="fw-300 op-60" for="radio_2_0">มีระบบตัวชี้วัด ซึ่งพิจารณาอย่างเหมาะสม</label>
                                            </div>
                                            <div class="mt-2">
                                                <input class="mr-2" type="radio" name="radio_2" id="radio_2_1" value="1" title="General Radio Input" />
                                                <label class="fw-300 op-60" for="radio_2_1">มีระบบตัวชี้วัด ซึ่งอยู่ในขั้นเริ่มต้น</label>
                                            </div>
                                            <div class="mt-2">
                                                <input class="mr-2" type="radio" name="radio_2" id="radio_2_2" value="2" title="General Radio Input" />
                                                <label class="fw-300 op-60" for="radio_2_2">ยังไม่มีความชัดเจนในการนำมาใช้งาน</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="info-container">
                                <div class="icon-container bg-sgray color-02">
                                    <em class="zmdi zmdi-badge-check"></em> 180
                                </div>
                                <div class="btns text-center mt-3">
                                    <button class="btn btn-action">
                                        <span>ลงคะแนนโหวด</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php include('component/grid-footer.php'); ?>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            chart: {
                type: 'donut'
            },
            series: [68, 20, 15, 12],
            legend: {
                show: false
            },
            colors: ['#4b316e', '#179c8b', '#03b5ff', '#2a72a4'],
            plotOptions: {
                pie: {
                    donut: {
                        size: '65%',
                        background: '#ffffff',
                        labels: {
                            show: true,
                            name: {
                                show: true,
                                offsetY: -5
                            },
                            value: {
                                show: true,
                                fontFamily: 'Sukhumvit',
                                fontWeight: 400,
                                fontSize: '26px',
                                color: '#5a5a5c',
                                offsetY: 5
                            },
                            total: {
                                show: true,
                                showAlways: true,
                                label: '',
                                fontSize: '30px',
                                fontWeight: 400,
                                fontFamily: 'Sukhumvit',
                                color: '#5a5a5c',
                                formatter: function(w, d){
                                    return '';
                                }
                            }
                        }
                    }
                }
            }
        }

        var chart1 = new ApexCharts(document.querySelector('#chart-1'), options);
        chart1.render();
    </script>
</body>
</html>
