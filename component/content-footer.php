<div class="content-footer">
    <div class="content-row">
        <a class="btn-icon btn-hex btn-social tw" href="#">
            <i class="zmdi zmdi-twitter"></i>
        </a>
        <a class="btn-icon btn-hex btn-social fb" href="#">
            <i class="zmdi zmdi-facebook"></i>
        </a>
        <a class="btn-icon btn-hex btn-social yt" href="#">
            <i class="zmdi zmdi-youtube-play"></i>
        </a>
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
                        <span class="fw-500">150 Kb.</span>
                    </td>
                    <td>
                        <a class="btn-download" href="#">
                            ดาวน์โหลดไฟล์นี้ <i class="zmdi zmdi-arrow-right"></i>
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
                <textarea data-copy="0">Temporary code test temporary code test temporary code test</textarea>
                <a class="btn-code-copy color-01 h-color-04" data-copy="0" href="#">
                    [คัดลอก]
                </a>
            </div>
        </div>
    <?php }?>
</div>
