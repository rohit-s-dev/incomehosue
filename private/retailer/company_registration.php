<?php include "inc/header.php"; ?>
<?php include "inc/top-bar.php"; ?>
<?php include "inc/side-nav.php"; ?>

<div class="container-fluid my-5 py-5">
    <div class="col-12 text-white p-2 mb-3" style=" background: #3a4651; ">
        <h4 class="text-center text-uppercase">Company Registration</h4>
    </div>

    <div class="row">       
        <div class="col-12">
            <form action="" method="post">
                <!-- Business Type -->
                <div class="row mb-4">
                    <div class="col-md-12">
                    <label for="business_type_title">1: Select the type of Business Registraition <span class="text-danger">*</span> </label>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="business_type" id="business_type_p_l" value="pvt_ltd">
                                    <label for="business_type_p_l" class="form-check-label" >PVT LTD</label>
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="business_type" id="business_type_llp" value="llp">
                                    <label for="business_type_llp" class="form-check-label" >Limited Liability Partnership(LLP)</label>
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="business_type" id="business_type_opc" value="opc">
                                    <label for="business_type_opc" class="form-check-label" >One Person Comapny</label>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <!-- Proposed Name -->
                <div class="row  mb-4">
                    <div class="col-md-12">
                        <label for="proposed_name">2: Proposed Name (The name should have some significance)<span class="text-danger">*</span></label>
                    </div>
                    
                    <div class="col-md-12 px-5">
                        <div class="form-group">
                        <div class="form-inline">
                            <label class="mr-4" for="proposed_name1">1</label>
                            <input type="text" class="form-control w-50" name="proposed_name1" required id="proposed_name1" placeholder="name 1">
                        </div>
                        </div>
                      <div class="form-group">
                      <div class="form-inline">
                            <label class="mr-4" for="proposed_name2">2</label>
                            <input type="text" class="form-control w-50" name="proposed_name2" required id="proposed_name2" placeholder="name 2">
                        </div>
                      </div>
                    
                        <div class="form-group">
                        
                        <div class="form-inline">
                            <label class="mr-4" for="proposed_name3">3</label>
                            <input type="text" class="form-control w-50" name="proposed_name3" required id="proposed_name3" placeholder="name 3">
                        </div>
                        </div>
                       <div class="form-group">
                       <div class="form-inline">
                            <label class="mr-4" for="proposed_name4">4</label>
                            <input type="text" class="form-control w-50" name="proposed_name4" required id="proposed_name4" placeholder="name 4">
                        </div>
                       </div>
                        <div class="form-group">
                        <div class="form-inline">
                            <label class="mr-4" for="proposed_name5">5</label>
                            <input type="text" class="form-control w-50" name="proposed_name5" required id="proposed_name5" placeholder="name 5">
                        </div>
                        </div>
                       <div class="form-group">
                       <div class="form-inline">
                            <label class="mr-4" for="proposed_name6">6</label>
                            <input type="text" class="form-control w-50" name="proposed_name6" required id="proposed_name6" placeholder="name 6">
                        </div>
                       </div>
                    </div>
                </div>

                <!-- Proposed Business Activity -->
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="proposed_business_activity">3: Proposed Business Activity<span cass="text-danger">*</span></label>
                            <textarea name="proposed_b_activity" id="proposed_business_activity" cols="30" rows="3" class="form-control"></textarea>
                        </div>    
                    </div>
                </div>

                <!-- Capital Value -->
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="form-inline">
                            
                            <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                            <label for="capital_value">4: Proposed Capital Of the Company or LLP<span cass="text-danger">*</span></label>
                            </div>
                            </div> 
                            
                            <input type="text" name="capital_value" id="capital_value" class="form-control" placeholder="Rs" required > 
                            </div>
                        </div>    
                    </div>
                </div>

                <!-- Directors Details -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert text-white" role="alert" style=" background:          #3a4651; border-radius: 0;">
                            5: Directors Details
                        </div>
                    </div>
                </div>
                
               
                <div class="row">
                    <div class="col-md-6 py-2 text-white" style=" background: #3a4651; ">
                        <h5 class=" text-center text-uppercase">Director 1</h5>
                    </div>
                    
                    <div class="col-md-6 py-2 text-white " style=" background: #3a4651; "><h5 class=" text-center text-uppercase">Director 2</h5></div>
                </div>
                
                <!-- Director Details  -->
                <section class="mt-4">
                    <!-- Directors Name -->
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="director_name">Name<span class="text-danger">*</span></label>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="text" name="director_name" id="director_name" class="form-control" required placeholder="director 1 name">
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="text" name="director_name" id="director_name" class="form-control" required placeholder="director 2 name">
                            </div>
                        </div>

                    </div>

                    <!-- Directors Father Name -->
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="director_father_name">Father's Name<span class="text-danger">*</span></label>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="text" name="director_father_name" id="director_father_name" class="form-control" required placeholder="director 1 father's name">
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="text" name="director_father_name" id="director_father_name" class="form-control" required placeholder="director 2 father's name">
                            </div>
                        </div>
                    </div>

                    <!-- Directors D-O-B -->
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="director_dob">DOB(mm/dd/yyyy)<span class="text-danger">*</span></label>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="date" name="director_dob" id="director_dob" class="form-control" required placeholder="director 1 d-o-b">
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="date" name="director_dob" id="director_dob" class="form-control" required placeholder="director 2 d-o-b">
                            </div>
                        </div>
                    </div>

                    <!-- Directors Mother's Name -->
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="director_mother_name">Mother's Name<span class="text-danger">*</span></label>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="text" name="director_mother_name" id="director_mother_name" class="form-control" required placeholder="director 1 mother's name">
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="text" name="director_mother_name" id="director_mother_name" class="form-control" required placeholder="director 2 mother's name">
                            </div>
                        </div>
                    </div>

                    <!-- Directors Mobile Number -->
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="director_mobile_number">Mobile number<span class="text-danger">*</span></label>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="text" name="director_mobile_number" id="director_mobile_number" class="form-control" required placeholder="director 1 mobile number" maxlength="10"  onkeypress="if(event.keyCode<48 || event.keyCode>57)event.returnValue=false;">
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="text" name="director_mobile_number" id="director_mobile_number" class="form-control" required placeholder="director 2 mobile number" maxlength="10"  onkeypress="if(event.keyCode<48 || event.keyCode>57)event.returnValue=false;">
                            </div>
                        </div>
                    </div>

                    <!-- Directors Qualification -->
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="director_qualification">Qualification<span class="text-danger">*</span></label>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <textarea name="director_qualification" id="director_qualification" cols="30" rows="4" placeholder="director 1 last qualification" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <textarea name="director_qualification" id="director_qualification" cols="30" rows="4" placeholder="director 1 last qualification" class="form-control"></textarea>
                            </div> 
                        </div>
                    </div>

                    <!-- Directors Address Line 1 -->
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="director_address_line1">Adress Line 1<span class="text-danger">*</span></label>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <textarea name="director_address_line1" id="director_address_line1" cols="30" rows="4" placeholder="director 1 address line 1" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <textarea name="director_address_line1" id="director_address_line1" cols="30" rows="4" placeholder="director 2 address line 1" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Directors Address Line 2 -->
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="director_address_line2">Adress Line 2<span class="text-danger">*</span></label>
                            </div> 
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <textarea name="director_address_line2" id="director_address_line2" cols="30" rows="4" placeholder="director 1 address line 2" class="form-control"></textarea>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="a_2_d_1_address_city">City</label>
                                    <input type="text" class="form-control" required name="a_2_d_1_address_city" id="a_2_d_1_address_city" placeholder="city name">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="a_2_d_1_address_district">District</label>
                                    <input type="text" class="form-control" required name="a_2_d_1_address_district" id="a_2_d_1_address_district" placeholder="District name">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="a_2_d_1_address_state">State</label>
                                    <input type="text" class="form-control" required name="a_2_d_1_address_state" id="a_2_d_1_address_state" placeholder="state name">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="a_2_d_1_address_pincode">Pincode</label>
                                    <input type="text" class="form-control" required name="a_2_d_1_address_pincode" id="a_2_d_1_address_pincode" placeholder="Pincode">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <textarea name="director_address_line2" id="director_address_line2" cols="30" rows="4" placeholder="director 2 address line 2" class="form-control"></textarea>
                            </div>

                            <div class="form-row">
                               <div class="form-group col-md-6">
                                    <label for="d_2_address_city">City</label>
                                    <input type="text" class="form-control" required name="d_2_address_city" id="d_2_address_city" placeholder="city name">
                               </div>

                               <div class="form-group col-md-6">
                                    <label for="d_2_address_district">District</label>
                                    <input type="text" class="form-control" required name="d_2_address_district" id="d_2_address_district" placeholder="District name">
                               </div>
                            </div>
                            
                            <div class="form-row">
                               <div class="form-group col-md-6">
                                    <label for="d_2_address_state">State</label>
                                    <input type="text" class="form-control" required name="d_2_address_state" id="d_2_address_state" placeholder="state name">
                               </div>

                               <div class="form-group col-md-6">
                                    <label for="d_2_address_pincode">Pincode</label>
                                    <input type="text" class="form-control" required name="d_2_address_pincode" id="d_2_address_pincode" placeholder="Pincode">
                               </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Of Director Details -->

                <!-- Documents -->
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="alert text-white" role="alert" style=" background:          #3a4651; border-radius: 0;">
                            Documents
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="photograph">
                            <span class="mr-2">1</span>
                            Photograph
                            <span class="text-danger">*</span>
                            
                            </label>
                            <input type="file" name="photograph" id="photograph" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="pancard">
                            <span class="mr-2">2</span>
                            Pancard
                            <span class="text-danger">*</span>
                            
                            </label>
                            <input type="text" name="pancard" id="pancard" required placeholder="please type your pancard number" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="address_proof">
                            <span class="mr-2">3</span>
                            Address Proof ( Aadharcard number / Bank passport )
                            <span class="text-danger">*</span>
                
                            </label>

                            <input type="file" name="address_proof" id="address_proof"  class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="electricity_bill">
                            <span class="mr-2">4</span>
                            Electricity Bill
                            <span class="text-danger">*</span>
                
                            </label>

                            <input type="file" name="electricity_bill" id="electricity_bill"  class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="rent_agreement">
                            <span class="mr-2">5</span>
                            Rent Agreement
                            <span class="text-danger">*</span>
                            </label>
                            <input type="file" name="rent_agreement" id="rent_agreement"  class="form-control">
                        </div>
                    </div>
                </div>

                <!-- End Of Documents -->
                <input type="submit" value="Submit" name="c_r_submit" class="btn px-5 py-2 bg-success text-white  m-auto d-block">
                
            </form>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>

