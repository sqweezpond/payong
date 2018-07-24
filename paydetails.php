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

                     <!--------------------------- box 1 end ------------------------->

                     <div class="col-lg-6">

                       <div>
                         <div class="pay-card my-5">
                            <label class="pay-bg-top text-center">แจ้งการโอนเงิน</label>
                            <div class="card-body">

                              <div class="row">
                                <div class="col-lg-12">
                                  <form>
                                    <div class="form-group">
                                      <label for="exampleFormControlFile1">ชื่อ/นามสกุลผู้โอน</label></label>
                                      <input type="email" class="pay-form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="สมปอง อ๊องๆ">
                                    </div>
                                  </form>
                                </div>
                                <div class="col-lg-12">
                                  <form>
                                    <div class="form-group">
                                      <div class="row">
                                        <div class="col-lg-4">
                                          <label for="exampleFormControlFile1">โอนเข้าธนาคาร</label></label>
                                          <input type="email" class="pay-form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ไทยพาณิชย์">
                                        </div>
                                        <div class="col-lg-4">
                                          <label for="exampleFormControlFile1">จำนวนเงินที่โอน</label></label>
                                          <input type="email" class="pay-form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-lg-4">
                                          <label for="exampleFormControlFile1">หลักฐาน</label>
                                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                                  <div class="col-lg-12 my-lg-3">
                                    <form>
                                      <div class="form-group">
                                        <div class="row">
                                          <div class="col-lg-8">
                                            <label for="exampleFormControlFile1">วันที่ทำรายการ</label>
                                            <div class="row">
                                              <div class="col-lg-4">
                                                <label for="exampleFormControlFile1">Day</label>
                                                <select class="pay-form-control">
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                </select>
                                              </div>
                                              <div class="col-lg-4">
                                                <label for="exampleFormControlFile1">Month</label>
                                                <select class="pay-form-control">
                                                  <option>1</option>
                                                  <option>2</option>
                                                </select>
                                              </div>
                                              <div class="col-lg-4">
                                                <label for="exampleFormControlFile1">Year</label>
                                                <select class="pay-form-control">
                                                  <option>1995</option>
                                                  <option>1996</option>
                                                </select>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-lg-4">
                                            <label for="exampleFormControlFile1">เวลาที่ทำรายการ</label>
                                            <div class="row">
                                              <div class="col-lg-6">
                                                <label for="exampleFormControlFile1">Hour</label>
                                                <select class="pay-form-control">
                                                  <option>12</option>
                                                  <option>11</option>
                                                </select>
                                              </div>
                                              <div class="col-lg-6">
                                                <label for="exampleFormControlFile1">Minute</label>
                                                <select class="pay-form-control">
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
                                <div class="col-lg-6 my-4">
                                  <p>*หากพบปัญหาเรื่องการโอนเงิน <u>สามารถติดต่อได้ที่ 089 120 0321</u></p>
                                  <p>**ผู้รับสายขออนุญาตรับฟังเฉพาะปัญหาเรื่องการดอนเงินเท่านั้น**</p>
                                </div>
                                <div class="col-lg-6">

                                </div>
                              </div>
                            </div>
                          </div>
                       </div>

                     </div>



                     <!--------------------------- box 1 end ------------------------->

                     <!--------------------------- box 2 ----------------------------->
                     <div class="col-lg-6">
                      <div class="pay-card my-5">
                        <label class="pay-bg-top text-center">รายละเอียดการขอรับบริการ</label>
                          <div class="card-body">
                            <div class="row">
                              <div class="col-lg-12">
                                <form>
                                  <div class="form-group">
                                    <label for="exampleFormControlFile1">บริการที่รับ</label></label>
                                      <select class="pay-form-control">
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
                                      <label for="exampleFormControlFile1">เดือนที่แพลนไว้</label></label>
                                        <select class="pay-form-control">
                                          <option>มิถุนายน 2556</option>
                                          <option>มกราคม 2556</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                      <label for="exampleFormControlFile1">ประเทศที่อยู่</label></label>
                                        <select class="pay-form-control">
                                          <option>ลาว</option>
                                          <option>ไทย</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                      <label for="exampleFormControlFile1">รัฐ</label></label>
                                        <select class="pay-form-control">
                                          <option>นิวยอก</option>
                                          <option>ฤกษ์คลอดบุตร</option>
                                        </select>
                                    </div>
                                  </div>
                                </form>
                              </div>
                              <div class="col-lg-4">
                                <form>
                                  <div class="form-group">
                                    <label for="exampleFormControlFile1">เบอร์โทรศัพท์</label></label>
                                    <input type="email" class="pay-form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="098-852-9635">
                                  </div>
                                </form>
                              </div>
                              <div class="col-lg-8">
                                <form>
                                  <div class="form-group">
                                    <label for="exampleFormControlFile1">อีเมล์ที่ได้รับ</label></label>
                                    <input type="email" class="pay-form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="user@gmail.com">
                                  </div>
                                </form>
                              </div>
                              <div class="col-lg-12">
                                <label>(เพื่อติดต่อกรณีหากเกิดปัญหาการโอนเงิน)</label>
                              </div>


                              <div class="col-lg-6 my-lg-3">
                                <div class="form-group ">
                                  <label for="" class="pay-font3">เพศ</label>
                                  <div class="form-row">
                                    <div class="form-inline col-xl-3 col-lg-3 col-md-3 col-4">
                                      <label class="pay-select">
                                          <input type="radio" name="radio" checked="checked">
                                          <span class="checkmark"></span>
                                          <span for="" class="pay-font5">ชาย</span>
                                      </label>
                                    </div>
                                    <div class="form-inline col-xl-3 col-lg-3 col-md-3 col-4">
                                      <label class="pay-select">
                                          <input type="radio" name="radio">
                                          <span class="checkmark"></span>
                                          <span for="" class="pay-font6">หญิง</span>
                                      </label>
                                    </div>
                                  </div>
                                </div>
                              </div>



                              <div class="col-lg-6 my-lg-3">
                                <div class="form-group ">
                                  <label for="" class="pay-font3">สถานที่เกิดในประเทศไทย</label>
                                  <div class="form-row">
                                    <div class="form-inline col-xl-3 col-lg-3 col-md-3 col-4">
                                      <label class="pay-select">
                                          <input type="radio" name="radio" checked="checked">
                                          <span class="checkmark"></span>
                                          <span for="" class="pay-font5">ใช่</span>
                                      </label>
                                    </div>
                                    <div class="form-inline col-xl-3 col-lg-3 col-md-3 col-4">
                                      <label class="pay-select">
                                          <input type="radio" name="radio">
                                          <span class="checkmark"></span>
                                          <span for="" class="pay-font6">ไม่ใช่</span>
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
                                        <label for="exampleFormControlFile1">วันเดือนปีเกิด</label>
                                        <div class="row">
                                          <div class="col-lg-4">
                                            <label for="exampleFormControlFile1">Day</label>
                                            <select class="pay-form-control">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                            </select>
                                          </div>
                                          <div class="col-lg-4">
                                            <label for="exampleFormControlFile1">Month</label>
                                            <select class="pay-form-control">
                                              <option>1</option>
                                              <option>2</option>
                                            </select>
                                          </div>
                                          <div class="col-lg-4">
                                            <label for="exampleFormControlFile1">Year</label>
                                            <select class="pay-form-control">
                                              <option>1995</option>
                                              <option>1996</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-lg-4">
                                        <label for="exampleFormControlFile1">เวลาเกิด</label>
                                        <div class="row">
                                          <div class="col-lg-6">
                                            <label for="exampleFormControlFile1">Hour</label>
                                            <select class="pay-form-control">
                                              <option>12</option>
                                              <option>11</option>
                                            </select>
                                          </div>
                                          <div class="col-lg-6">
                                            <label for="exampleFormControlFile1">Minute</label>
                                            <select class="pay-form-control">
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

                              <div class="col-lg-6">
                                <form>
                                  <div class="form-group">
                                    <label for="exampleFormControlFile1">Conutry of Birth</label></label>
                                      <select class="pay-form-control">
                                        <option>Afghanis</option>
                                        <option>ฤกษ์คลอดบุตร</option>
                                      </select>
                                  </div>
                                </form>
                              </div>
                              <div class="col-lg-6">
                                <form>
                                  <div class="form-group">
                                    <label for="exampleFormControlFile1">State of Birth</label></label>
                                      <select class="pay-form-control">
                                        <option>kabul</option>
                                        <option>kabul</option>
                                      </select>
                                  </div>
                                </form>
                              </div>
                              <div class="col-lg-12 text-right">
                                <a href="#">
                                  <button type="button" class="pay-btn btn-primary-pay">Summit</button>
                                </a>
                              </div>
                            </div>
                          </div>
                       </div>
                     </div>
                     <!--------------------------- box 2 ----------------------------->

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
