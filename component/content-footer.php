<div class="content-footer">
    <div class="content-row">
        <div class="text-center">
            <a class="btn-icon btn-hex btn-social tw" href="#">
                <em class="zmdi zmdi-twitter"></em>
            </a>
            <p><strong>20</strong></p>
        </div>
        <div class="text-center">
            <a class="btn-icon btn-hex btn-social fb" href="#">
                <em class="zmdi zmdi-facebook"></em>
            </a>
            <p><strong>12</strong></p>
        </div>
        <!-- <div class="text-center">
            <a class="btn-icon btn-hex btn-social yt" href="#">
                <em class="zmdi zmdi-youtube-play"></em>
            </a>
            <p><strong>18</strong></p>
        </div> -->
    </div>
    <div class="content-row">
        <div class="ss-tag mt-0">
            <div class="text">TAG :</div> 
            <div class="tags">
                <a class="tag" href="#">นิคมอุตสาหกรรม</a>
                <a class="tag" href="#">กนอ.</a>
                <a class="tag" href="#">5G</a>
                <a class="tag" href="#">สายสื่อสาร</a>
            </div>
        </div>
    </div>
    <div class="content-row">
        <h6 class="fw-500">เอกสารแนบ</h6>
        <table class="table table-download">
            <tbody>
                <tr>
                    <td>
                        <div class="file-icon">
                            <img src="public/assets/app/images/icon/pdf.png" alt="Icon" />
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
            </tbody>
        </table>
    </div>
    <?php if(!empty($rowEmbed) && $rowEmbed){?>
        <div class="content-row no-border-bottom">
            <h6 class="fw-500">EMBED CODE</h6>
            <div class="shortcode-container my-2">
                <div class="icon">
                    <img src="public/assets/app/images/icon/code.png" alt="Icon" />
                </div>
                <textarea data-copy="0" title="Copy Area">Temporary code test temporary code test temporary code test</textarea>
                <a class="btn-code-copy color-01 h-color-04" data-copy="0" href="#">
                    [คัดลอก]
                </a>
            </div>
        </div>
    <?php }?>
</div>
