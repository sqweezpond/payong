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
                         <div class="pay-card mt-4">
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
                                          <label for="exampleFormControlFile1">ชื่อ/นามสกุลผู้โอน</label></label>
                                          <input type="email" class="pay-form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="สมปอง อ๊องๆ">
                                        </div>
                                        <div class="col-lg-4">
                                          <label for="exampleFormControlFile1">ชื่อ/นามสกุลผู้โอน</label></label>
                                          <input type="email" class="pay-form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="สมปอง อ๊องๆ">
                                        </div>
                                        <div class="col-lg-4">
                                          <label for="exampleFormControlFile1">หลักฐาน</label>
                                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                                <div class="col-lg-12">
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
                              </div>
                            </div>
                          </div>
                       </div>

                     </div>

                       <!-- <div class="col-lg-6">
                         <div class="row">
                           <div class="pay-card mt-4">
                              <label class="pay-bg-top text-center">แจ้งการโอนเงิน</label>
                              <div class="card-body">
                                <div class="col-lg-12">
                                  <form>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">ชื่อ/นามสกุลผู้โอน</label>
                                      <input type="email" class="pay-form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="สมปอง อ๊องๆ">
                                    </div>
                                    <div class="form-group" style="display: flex;">
                                       <div class="col-sm-4">
                                            <label for="formGroupExampleInput" class="font-all-ting">โอนเข้า</label>
                                            <input type="text" class="pay-form-control" id="formGroupExampleInput" placeholder="MM">
                                       </div>
                                        <div class="col-sm-4 ">
                                            <label for="formGroupExampleInput" class="font-all-ting">ปี</label>
                                            <input type="text" class="pay-form-control " id="formGroupExampleInput" placeholder="YYYY">
                                       </div>
                                       <div class="col-sm-4">
                                          <div class="form-group">
                                            <label for="exampleFormControlFile1">หลักฐาน</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                          </div>
                                       </div>
                                   </div>
                                  </form>

                                    <div class="col-lg-12">
                                      <form>
                                        <div class="form-group " >
                                          <div style="display: flex;">
                                            <div class="col-lg-3">
                                              <select class="pay-form-control">
                                                <option>ฤกษ์แต่งงาน</option>
                                                <option>ฤกษ์คลอดบุตร</option>
                                              </select>
                                            </div>
                                            <div class="col-lg-3">
                                              <select class="pay-form-control">
                                                <option>ฤกษ์แต่งงาน</option>
                                                <option>ฤกษ์คลอดบุตร</option>
                                              </select>
                                            </div>
                                            <div class="col-lg-3">
                                              <select class="pay-form-control">
                                                <option>ฤกษ์แต่งงาน</option>
                                                <option>ฤกษ์คลอดบุตร</option>
                                              </select>
                                            </div>
                                          </div>

                                        </div>
                                      </form>
                                    </div>



                                </div>
                              </div>
                            </div>
                         </div>
                       </div> -->

                     <!--------------------------- box 1 end ------------------------->
                     <div class="col-lg-6">
                       <div>
                         <div class="pay-card mt-4">
                            <label class="pay-bg-top text-center">รายละเอียดการขอรับบริการ</label>
                            <div class="card-body">
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
                            </div>
                          </div>
                       </div>

                     </div>

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
