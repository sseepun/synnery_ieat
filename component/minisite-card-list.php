
<?php if(empty($cardType) || $cardType == 'CMS'){?>
    <div class="ss-card ss-card-04">
        <a class="ss-img" href="#">
            <div class="img-bg lazy-bg" data-src="public/assets/app/images/content/0<?= $j%6+1 ?>.jpg"></div>
            <div class="hover-container">
                <div class="icon">
                    <img src="public/assets/app/images/icon/06.png" alt="Icon" />
                </div>
            </div>
            <div class="date bg-04">
                <div class="d">04</div>
                <div class="m-y">09.2563</div>
            </div>
        </a>
        <div class="text-container">
            <div class="wrapper">
                <div class="ss-box-shadow fade-right"></div>
                <div class="text-wrapper">
                    <a class="title h6 fw-600" href="#">
                        กนอ.ดึงเอกชนร่วมพีพีพีจัดระเบียบ
                        สายสื่อสารลงดิน วางระบบ 5G
                    </a>
                    <p class="desc mt-1">
                        บอร์ดกนอ.ไฟเขียวลงทุนนำสายสื่อสารในนิคมอุตสาหกรรมลงใต้ดิน 
                        รองรับ Smart City เตรียมวางระบบ 5 G ครอบคลุมพื้นที่นิคมอุตสาห
                        กรรรม 14 แห่ง และท่าเรืออุตสาหกรรม 1 แห่ง คาดเริ่มได้ปี’67  
                    </p>
                    <div class="ss-stat">
                        <div class="stat">
                            <div class="icon">
                                <img src="public/assets/app/images/icon/07.png" alt="Icon" />
                            </div> 112
                        </div>
                        <div class="stat">
                            <div class="icon">
                                <em class="zmdi zmdi-share"></em>
                            </div> 20
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }else if($cardType == 'Video'){?>
    <div class="ss-card ss-card-04">
        <a class="ss-img" href="#">
            <div class="img-bg lazy-bg" data-src="public/assets/app/images/content/0<?= $j%6+1 ?>.jpg"></div>
            <div class="hover-container op-100 bg-transparent">
                <div class="icon">
                    <img src="public/assets/app/images/icon/play.svg" alt="Icon" />
                </div>
            </div>
            <div class="date bg-04">
                <div class="d">04</div>
                <div class="m-y">09.2563</div>
            </div>
        </a>
        <div class="text-container">
            <div class="wrapper">
                <div class="ss-box-shadow fade-right"></div>
                <div class="text-wrapper">
                    <a class="title h6 fw-600" href="#">
                        กนอ.ดึงเอกชนร่วมพีพีพีจัดระเบียบ
                        สายสื่อสารลงดิน วางระบบ 5G
                    </a>
                    <p class="desc mt-1">
                        บอร์ดกนอ.ไฟเขียวลงทุนนำสายสื่อสารในนิคมอุตสาหกรรมลงใต้ดิน 
                        รองรับ Smart City เตรียมวางระบบ 5 G ครอบคลุมพื้นที่นิคมอุตสาห
                        กรรรม 14 แห่ง และท่าเรืออุตสาหกรรม 1 แห่ง คาดเริ่มได้ปี’67  
                    </p>
                    <div class="ss-stat">
                        <div class="stat">
                            <div class="icon">
                                <img src="public/assets/app/images/icon/07.png" alt="Icon" />
                            </div> 112
                        </div>
                        <div class="stat">
                            <div class="icon">
                                <em class="zmdi zmdi-share"></em>
                            </div> 20
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>
