<?php include "inc/header.php"; ?>
<?php include "inc/top-bar.php"; ?>
<?php include "inc/side-nav.php"; ?>



<div class="container-fluid my-5 py-5">
    <div class="col-12 text-white p-2 mb-3" style=" background: #3a4651; ">
        <h6 class="">TRADEMARK REGISTRAITON</h6>
    </div>

    <form action="" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="text-white p-2 mb-3" style=" background: #3a4651; ">
                    <h6 class="text-center">*Company*</h6>
                </div>

                <!-- Company Certificate -->
                <div class="row">
                    <div class="col-md-4">
                       <div class="form-group">
                       <label for="t_company_certificate">Company Certificate<span class="text-danger">*</span></label>
                       </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                        <input type="file" name="t_company_certificate" id="t_company_certificate" class="form-control" required>
                        </div>
                    </div>
                </div><!-- Company Certificate -->

                <!-- Company Pan -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="t_company_pan">Company Pan<span class="text-danger">*</span></label>
                        </div>
                    </div>

                    <div class="col-md-8">
                       <div class="form-group">
                       <input type="file" name="t_company_pan" id="t_company_pan" class="form-control" required>
                       </div>
                    </div>
                </div><!-- Company Pan -->


                <!-- Company Mobile Number -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="t_company_m_number">Mobile No<span class="text-danger">*</span></label>
                        </div>
                    </div>

                    <div class="col-md-8">
                       <div class="form-group">
                       <input type="text" name="t_company_m_number" id="t_company_m_number" class="form-control" placeholder="+91" required>
                       </div>
                    </div>
                </div><!-- Company Mobile Number -->

                <!-- Company Email ID -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="t_company_email">Email ID<span class="text-danger">*</span></label>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                        <input type="text" name="t_company_email" id="t_company_email" class="form-control" placeholder="email" required>
                        </div>
                    </div>
                </div><!-- Company Email ID -->


                <!-- Company Logo -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="t_company_logo">LOGO file(Logo should be in png file)<span class="text-danger">*</span></label>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                        <input type="file" name="t_company_logo" id="t_company_logo" class="form-control" required>
                        </div>
                    </div>
                </div><!-- Company Logo -->
                <input type="submit" value="Submit" name="t_submit" class="btn px-5 py-2 bg-success text-white  m-auto d-block">
            </div>
        </form> <!-- end of company trademark-->

        <!-- Indvidual trademark -->
        
        <div class="col-md-6">
            <div class="text-white p-2 mb-3" style=" background: #3a4651; ">
                <h6 class="text-center">*Individual*</h6>
            </div>

            <form action="" method="post">
                <!-- aadhar card -->
             <div class="row">
                 <div class="col-md-3">
                    <div class="form-group">
                        <label for="t_i_aadhar">Aadhar Number<span class="text-danger">*</span></label>
                    </div>
                 </div>
                 <div class="col-md-9">
                    <div class="form-group">
                        <input type="text" name="t_i_aadhar" id="t_i_aadhar" class="form-control">
                    </div>
                 </div>
             </div> <!-- end of aadhar card -->  

             <!-- Pan card -->
             <div class="row">
                 <div class="col-md-3">
                    <div class="form-group">
                        <label for="t_i_pan">Pan Number<span class="text-danger">*</span></label>
                    </div>
                 </div>
                 <div class="col-md-9">
                    <div class="form-group">
                        <input type="text" name="t_i_pan" id="t_i_pan" class="form-control">
                    </div>
                 </div>
             </div>  <!--End  of pan card --> 

             <!-- Mobile number -->
             <div class="row">
                 <div class="col-md-3">
                    <div class="form-group">
                        <label for="t_i_mobile">Mobile Number<span class="text-danger">*</span></label>
                    </div>
                 </div>
                 <div class="col-md-9">
                    <div class="form-group">
                        <input type="text" name="t_i_mobile" id="t_i_mobile" class="form-control">
                    </div>
                 </div>
             </div>  <!--End  of mobile number --> 

             <!-- Mobile number -->
             <div class="row">
                 <div class="col-md-3">
                    <div class="form-group">
                        <label for="t_i_email">Email ID :<span class="text-danger">*</span></label>
                    </div>
                 </div>
                 <div class="col-md-9">
                    <div class="form-group">
                        <input type="text" name="t_i_email" id="t_i_email" class="form-control">
                    </div>
                 </div>
             </div>  <!--End  of mobile number --> 

              <!--  Logo -->
              <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="t_i_logo">LOGO file(Logo should be in png file)<span class="text-danger">*</span></label>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                        <input type="file" name="t_i_logo" id="t_i_logo" class="form-control" required>
                        </div>
                    </div>
                </div><!-- Logo -->

                <input type="submit" value="Submit" name="t_i_submit" class="btn px-5 py-2 bg-success text-white  m-auto d-block">
            </form>
        </div>

        <!--  End Of Indvidual trademark -->
        
        </div>
  

</div>
<?php include "inc/footer.php"; ?>

