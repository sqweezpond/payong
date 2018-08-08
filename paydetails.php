<!doctype html>
<html lang="en">
  <head>
    <!-- START HEADER -->
    <?php include_once('inc/header.php'); ?>
    <!-- END HEADER -->
  </head>

  <body>
  <!-- START NAVBAR -->
    <?php include_once('inc/navbar.php'); ?>
  <!-- END NAVBAR -->

    <div class="wrapper fadeIn animated">
       <!-- CONTENT -->

           <div class="container">
              <div class="row">

            <!--- box 1 end ------------------------->
                     <div class="col-lg-6">
                       <div>
                         <div class="pay-card my-5">
                            <label class="pay-bg-top text-center">แจ้งการโอนเงิน</label>
                            <div class="card-body">
                              <div class="row">
                                <div class="col-xl-11 col-lg-11 col-md-10 col-sm-11 col-11">
                                  <form>
                                    <div class="form-group">
                                      <label  class="pay-confirm-font">ชื่อ/นามสกุลผู้โอน</label></label>
                                      <input type="email" class="pay-form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ชื่อ-นามสกุล">
                                    </div>
                                  </form>
                                </div>
                                <div class="col-xl-1 col-lg-1 col-md-2 col-sm-1 col-1 px-0 ">
                                    <i class="fa fa-check-circle pay-icon" aria-hidden="true"></i>
                                </div>
                                <div class="col-lg-12 ">
                                  <form>
                                    <div class="form-group">
                                      <div class="row">
                                        <div class="col-lg-4  col-md-4 col-12">
                                          <label  class="pay-confirm-font my-lg-2 my-md-2 my-2">โอนเข้าธนาคาร</label></label>
                                          <input type="email" class="pay-form-control"  aria-describedby="emailHelp" placeholder="เลือกธนาคาร">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12 ">
                                          <label  class="pay-confirm-font my-lg-2 my-md-2 my-2">จำนวนเงินที่โอน</label></label>
                                          <input type="email" class="pay-form-control"  aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12 ">
                                          <label for="exampleFormControlFile1" class="pay-confirm-font my-lg-2 my-md-2 my-2" >หลักฐาน</label>
                                          <div>
                                            <label class="custom-file-upload ">
                                              <input type="file"/>
                                              Choose File
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                                  <div class="col-lg-12 my-lg-1">
                                    <form>
                                      <div class="form-group">
                                        <div class="row">
                                          <div class="col-lg-8 ">
                                            <label  class="pay-confirm-font my-lg-2 my-md-2 my-2">วันที่ทำรายการ</label>
                                            <div class="row">
                                              <div class="col-lg-4 col-md-4 col-12">
                                                <label  class="pay-en-text my-lg-2 my-md-2 my-2">Day</label>
                                                <select class="paycon-selected-1 custom-select">
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                </select>
                                              </div>
                                              <div class="col-lg-4 col-md-4 col-12">
                                                <label  class="pay-en-text my-lg-2 my-md-2 my-2">Month</label>
                                                <select class="paycon-selected-1 custom-select">
                                                  <option>1</option>
                                                  <option>2</option>
                                                </select>
                                              </div>
                                              <div class="col-lg-4 col-md-4 col-12">
                                                <label  class="pay-en-text my-lg-2 my-md-2 my-2">Year</label>
                                                <select class="paycon-selected-1 custom-select">
                                                  <option>1995</option>
                                                  <option>1996</option>
                                                </select>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-lg-4 mt-lg-0 mt-md-4 mt-3">
                                            <label  class="pay-confirm-font my-lg-2 my-md-2 my-2">เวลาที่ทำรายการ</label>
                                            <div class="row">
                                              <div class="col-lg-6 col-md-6 col-12 px-lg-2">
                                                <label  class="pay-en-text my-lg-2 my-md-2 my-2">Hour</label>
                                                <select class="paycon-selected-1 custom-select">
                                                  <option>12</option>
                                                  <option>11</option>
                                                </select>
                                              </div>
                                              <div class="col-lg-6 col-md-6 col-12 px-lg-2">
                                                <label  class="pay-en-text my-lg-2 my-md-2 my-2">Minute</label>
                                                <select class="paycon-selected-1 custom-select">
                                                  <option>00</option>
                                                  <option>01</option>
                                                </select>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                <div class="col-xl-6 col-lg-12 col-md-12 col-12 my-4">
                                  <p>*หากพบปัญหาเรื่องการโอนเงิน <u>สามารถติดต่อได้ที่ 089 120 0321</u></p>
                                  <p>**ผู้รับสายขออนุญาตรับฟังเฉพาะปัญหาเรื่องการโอนเงินเท่านั้น**</p>
                                </div>
                                <div class="col-lg-6">

                                </div>
                              </div>
                            </div>
                          </div>
                       </div>
                     </div>
             <!--- box 1 end ------------------------->

             <!--- box 2 ----------------------------->
                     <div class="col-lg-6">
                      <div class="pay-card my-5">
                        <label class="pay-bg-top text-center">รายละเอียดการขอรับบริการ</label>
                          <div class="card-body">
                            <div class="row">
                              <div class="col-lg-12">
                                <form>
                                  <div class="form-group">
                                    <label  class="pay-confirm-font">บริการที่รับ</label></label>
                                      <select class="paycon-selected custom-select">
                                        <option>ฤกษ์แต่งงาน</option>
                                        <option>ฤกษ์คลอดบุตร</option>
                                      </select>
                                  </div>
                                </form>
                              </div>
                              <div class="col-lg-12">
                                <form>
                                  <div class="row">
                                    <div class="col-lg-4 form-group">
                                      <label  class="pay-confirm-font my-lg-2 my-md-2 my-2">เดือนที่แพลนไว้</label></label>
                                        <select class="paycon-selected custom-select">
                                          <option>มิถุนายน 2556</option>
                                          <option>มกราคม 2556</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                      <label  class="pay-confirm-font my-lg-2 my-md-2 my-2">ประเทศที่อยู่</label></label>
                                        <select class="paycon-selected custom-select">
                                          <option>ลาว</option>
                                          <option>ไทย</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                      <label  class="pay-confirm-font my-lg-2 my-md-2 my-2">รัฐ</label></label>
                                        <select class="paycon-selected custom-select">
                                          <option>นิวยอก</option>
                                          <option>ฤกษ์คลอดบุตร</option>
                                        </select>
                                    </div>
                                  </div>
                                </form>
                              </div>


                              <div class="col-lg-4 col-md-4 col-sm-11 col-11">
                                <form>
                                  <div class="form-group">
                                    <label  class="pay-confirm-font">เบอร์โทรศัพท์</label></label>
                                    <input type="email" class="pay-form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="xxx-xxx-xxxx">
                                  </div>
                                </form>
                              </div>
                              <div class=" col-lg-1 col-md-1 col-sm-1 col-1 px-0 ">
                                  <i class="fa fa-check-circle pay-icon" aria-hidden="true"></i>
                              </div>


                              <div class="col-lg-6 col-md-6 col-sm-11 col-11">
                                <form>
                                  <div class="form-group">
                                    <label  class="pay-confirm-font">อีเมล์ที่ได้รับ</label></label>
                                    <input type="email" class="pay-form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="user@mail.com">
                                  </div>
                                </form>
                              </div>
                              <div class=" col-lg-1 col-md-1 col-sm-1 col-1 px-0 ">
                                <i class="fa fa-check-circle pay-icon" aria-hidden="true"></i>
                              </div>


                              <div class="col-lg-12">
                                <label>(เพื่อติดต่อกรณีหากเกิดปัญหาการโอนเงิน)</label>
                              </div>
                              <div class="col-lg-6 my-lg-3">
                                <div class="form-group ">
                                  <label for="" class="pay-confirm-font" >เพศ</label>
                                  <div class="form-row">
                                    <div class="form-inline col-xl-3 col-lg-3 col-md-3 col-4">
                                      <label class="pay-select ">
                                          <input type="radio" name="radio" checked="checked">
                                          <span class="checkmark"></span>
                                          <span for="" class="pay-font5 ml-4">ชาย</span>
                                      </label>
                                    </div>
                                    <div class="form-inline col-xl-3 col-lg-3 col-md-3 col-4 ">
                                      <label class="pay-select ml-lg-2 ml-0">
                                          <input type="radio" name="radio">
                                          <span class="checkmark"></span>
                                          <span for="" class="pay-font6 ml-4">หญิง</span>
                                      </label>
                                    </div>
                                  </div>
                                </div>
                              </div>



                              <div class="col-lg-6 my-lg-3">
                                <div class="form-group ">
                                  <label for="" class="pay-confirm-font" >สถานที่เกิดในประเทศไทย</label>
                                  <div class="form-row">
                                    <div class="form-inline col-xl-3 col-lg-3 col-md-3 col-4">
                                      <label class="pay-select-1">
                                          <input type="radio" name="radio-1" checked="checked">
                                          <span class="checkmark-1"></span>
                                          <span for="" class="pay-font5 ml-4">ใช่</span>
                                      </label>
                                    </div>
                                    <div class="form-inline col-xl-3 col-lg-3 col-md-3 col-4">
                                      <label class="pay-select-1 ml-lg-2 ml-0">
                                          <input type="radio" name="radio-1">
                                          <span class="checkmark-1"></span>
                                          <span for="" class="pay-font6 ml-4">ไม่ใช่</span>
                                      </label>
                                    </div>
                                  </div>
                                </div>
                              </div>


                              <div class="col-lg-12">
                                <form>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-8">
                                        <label  class="pay-confirm-font my-2">วันเดือนปีเกิด</label>
                                        <div class="row">
                                          <div class="col-lg-4 col-md-4 col-12 ">
                                            <label  class="pay-en-text my-lg-2 my-md-2 my-2">Day</label>
                                            <select class="paycon-selected-1 custom-select">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                            </select>
                                          </div>
                                          <div class="col-lg-4 col-md-4 col-12">
                                            <label  class="pay-en-text my-lg-2 my-md-2 my-2">Month</label>
                                            <select class="paycon-selected-1 custom-select">
                                              <option>1</option>
                                              <option>2</option>
                                            </select>
                                          </div>
                                          <div class="col-lg-4 col-md-4 col-12">
                                            <label  class="pay-en-text my-lg-2 my-md-2 my-2">Year</label>
                                            <select class="paycon-selected-1 custom-select">
                                              <option>1995</option>
                                              <option>1996</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-lg-4 mt-lg-0 mt-md-3 mt-3">
                                        <label class="pay-confirm-font my-2">เวลาเกิด</label>
                                        <div class="row">
                                          <div class="col-lg-6 col-md-6 col-12 px-lg-2">
                                            <label class="pay-en-text my-lg-2 my-md-2 my-2">Hour</label>
                                            <select class="paycon-selected-1 custom-select">
                                              <option>12</option>
                                              <option>11</option>
                                            </select>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-12 px-lg-2">
                                            <label class="pay-en-text my-lg-2 my-md-2 my-2" >Minute</label>
                                            <select class="paycon-selected-1 custom-select">
                                              <option>00</option>
                                              <option>01</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                              </div>

                              <div class="col-lg-6 col-md-6 col-12">
                                <form>
                                  <div class="form-group">
                                    <label for="exampleFormControlFile1 " class="pay-en-text">Conutry of Birth</label></label>
                                      <select class="paycon-selected custom-select">
                                        <option>Afghanis</option>
                                        <option>ฤกษ์คลอดบุตร</option>
                                      </select>
                                  </div>
                                </form>
                              </div>
                              <div class="col-lg-6 col-md-6 col-12">
                                <form>
                                  <div class="form-group">
                                    <label  class="pay-en-text">State of Birth</label></label>
                                      <select class="paycon-selected custom-select">
                                        <option>kabul</option>
                                        <option>kabul</option>
                                      </select>
                                  </div>
                                </form>
                              </div>
                              <div class="col-lg-12 text-lg-right text-center">
                                <a href="pay-1.php">
                                  <button type="button" class="pay-btn btn-primary-pay">Summit</button>
                                </a>
                              </div>
                            </div>
                          </div>
                       </div>
                     </div>
               <!-- box 2 ----------------------------->

                  </div>
               </div>

   <!-- END CONTENT ---------->
</div>

<!-- START FOOTER -->
<?php include_once('inc/footer.php'); ?>
<!-- END FOOTER -->

<!-- START FOOTER SCRIPT -->
<?php include_once('inc/footer-script.php'); ?>
<!-- END FOOOTER SCRIPT -->


</body>
</html>
