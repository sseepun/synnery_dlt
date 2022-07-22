    <!-- Modal -->
    <style>
        .modal-backdrop {
        background-color: #fff;
        }
        .modal-content{
        border-radius:0;
        }
        .modal-header{
            border-bottom:0;
        }
    </style>
    <div class="modal fade" id="warning-file" tabindex="-1" role="dialog" aria-labelledby="warning-file"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content"> 
                <div class="grids">
                    <div class="grid lg-20 sm-20 xs-20 bg-02 m-0 text-center">
                        <i class="fas fa-exclamation-triangle fa-3x color-white mt-2"></i>                    
                    </div>
                    <div class="grid lg-80 sm-80 xs-80 m-0">
                         <div class="modal-header">
                            <h6 class="h5 fw-600 color-01">
                                แจ้งไฟล์เสีย
                            </h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fas fa-times color-black"></i></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <div class="grids">
                                    <div class="grid sm-100 mt-0">
                                        <div class="grids">
                                            <div class="grid lg-100 sm-100 mt-0">
                                                <div class="mt-0">
                                                    <div class="grid lg-100 mt-0">
                                                        <select class="form-control no-bradius fgray" required
                                                            title="General Select Input">
                                                            <option value="">การจัดทำกรอบการสนับสนุนกองทุนเพื่อส่งเสริมการอนุรักษ์พลังงาน</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100 xs-mt-0">
                                        <div class="grids">
                                            <div class="grid lg-100 sm-100 mt-0">
                                                <input type="text" class="form-control no-bradius fgray" required placeholder="ชื่อ*"
                                                    title="General Text Input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100 xs-mt-0">
                                        <div class="grids">
                                            <div class="grid lg-100 sm-100 mt-0">
                                                <input type="text" class="form-control no-bradius fgray" required placeholder="นามสกุล*"
                                                    title="General Text Input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100 xs-mt-0">
                                        <div class="grids">
                                            <div class="grid lg-100 sm-100 mt-0">
                                                <input type="text" class="form-control no-bradius fgray" required placeholder="อีเมล"
                                                    title="General Text Input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100 xs-mt-0">
                                        <div class="grids">
                                            <div class="grid lg-100 sm-100 mt-0">
                                                <input type="text" class="form-control no-bradius fgray" required placeholder="เบอร์ติดต่อ"
                                                    title="General Text Input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100 xs-mt-0">
                                        <div class="grids">
                                            <div class="grid lg-100 sm-100 mt-0">
                                                <textarea class="form-control no-bradius fgray" rows="4"
                                                    title="General Textarea" required  placeholder="ข้อความ"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid lg-100 sm-100 mt-0"></div>
                                    <div class="grid lg-100 sm-100 mt-3 pt-1">
                                        <div class="captcha-container">
                                            <img class="img" src="public/assets/app/images/misc/captcha.jpg" alt="CAPTCHA" />
                                        </div>
                                        <div class="btns width-auto mt-3">
                                            <button type="submit" class="btn btn-action btn-color-01 btn-round btn-min-width">
                                                แจ้งไฟล์เสีย <em class="far fa-arrow-alt-circle-right text-2xl ml-1"></em>
                                            </button>
                                            <button type="reset" class="btn btn-action btn-color-02 btn-round btn-min-width" data-dismiss="modal">
                                                ยกเลิก
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                          
                    </div>
                </div>
                      
            </div>
        </div>
    </div>