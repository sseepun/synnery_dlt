
<div class="popup-container" data-popup="file-report">
    <div class="wrapper">
        <div class="close-filter btn-popup-toggle" data-popup="file-report"></div>
        <div class="popup-box sm">
            <div class="content-container">
                <h6 class="h4 lg fw-600 color-black">
                    แจ้งไฟล์เสีย
                </h6>
                <form action="/" method="POST">
                    <div class="grids">
                        <div class="grid sm-100 mt-1">
                            <div class="form-group">
                                <div class="select-wrapper">
                                    <select name="department" class="form-control round" required>
                                        <option value="1">ผู้ดูแลระบบ</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="grid sm-50 mt-1">
                            <div class="form-group">
                                <label class="p color-gray">ชื่อ <span class="text-danger">*</span></label>
                                <input type="text" name="firstname" class="form-control round" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-1">
                            <div class="form-group">
                                <label class="p color-gray">นามสกุล <span class="text-danger">*</span></label>
                                <input type="text" name="lastname" class="form-control round" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-1">
                            <div class="form-group">
                                <label class="p color-gray">เบอร์โทร <span class="text-danger">*</span></label>
                                <input type="text" name="phone" class="form-control round" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-50 mt-1">
                            <div class="form-group">
                                <label class="p color-gray">อีเมล <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control round" required title="General Text Input" />
                            </div>
                        </div>
                        <div class="grid sm-100 mt-1">
                            <div class="form-group">
                                <label class="p color-gray">ข้อความ <span class="text-danger">*</span></label>
                                <textarea name="message" rows="5" class="form-control round" required title="General Textarea"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="captcha-container mt-3">
                        <img class="img" src="public/assets/app/images/misc/captcha.jpg" alt="CAPTCHA" />
                    </div>
                    <div class="btns mt-3 pt-2 border-top bcolor-sgray">
                        <button type="submit" class="btn btn-action btn-color-01 btn-round mt-1">
                            ส่งข้อความ <em class="far fa-arrow-alt-circle-right ml-1"></em>
                        </button>
                        <button type="reset" class="btn btn-action btn-color-02 btn-round mt-1">
                            ล้างข้อมูล <em class="far fa-times-circle ml-1"></em>
                        </button>
                    </div>
                </form>
            </div>
            <a class="btn-close btn-popup-toggle" data-popup="file-report" href="#">
                <em class="zmdi zmdi-close"></em>
            </a>
        </div>
    </div>
</div>
