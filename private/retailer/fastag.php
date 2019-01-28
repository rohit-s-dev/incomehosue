<?php include "inc/header.php"; ?>
<?php include "inc/top-bar.php"; ?>
<?php include "inc/side-nav.php"; ?>

<div class="container-fluid my-5 py-5">
   <div class="col-12 text-white p-2 mb-3" style=" background: #3a4651; ">
      <h6 class="">FASTAG<span class="text-muted ml-3">Every field is Required</span></h6>
   </div>

        <div class="col-md-10 m-auto">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
               <label for="owner_name">Owner Name</label>
               <input type="text" name="owner_name" id="owner_name" class="form-control" required placeholder="owner name">
            </div>
               <div class="form-group">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="pan_no">Pan No :-</label>
                           <input type="text" name="pan_no" id="pan_no" class="form-control" required placeholder="pan number">
                        </div>            
                     </div>
                  
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="d_o_b">D-O-B :- </label>
                           <input type="date" name="d_o_b" id="d_o_b" class="form-control" required placeholder="d-o-b">
                        </div>
                     </div>
                  </div>
               </div>

            <!-- Mobile No -->
            <div class="form-group">
               <div class="row">
               <div class="col-md-4">
                  <label for="mob_no">Mobile No :- </label>
               </div>
               <div class="col-md-4">
                  <input type="text" name="mob_no" id="mob_no" class="form-control" required placeholder="primary mobile number">
               </div>
               <div class="col-md-4">
               <input type="text" name="mob_no" id="mob_no" class="form-control" required placeholder="second2ary mobile number">
               </div>
               </div>
            </div>

            <!-- Email Id -->
               <div class="form-group">
                  <label for="email_id">Email ID</label>
                  <input type="email" name="email_id" id="email_id" required class="form-control" placeholder="email id">
               </div>

               <h5>Documents</h5>

               <div class="row">
                  
                  <div class="col-md-6">
                     <label for="pan_card_doc">Pan Card</label>
                     <input type="file" name="pan_card_doc" id="pan_card_doc" class="form-control">
                  </div>
                  
                  <div class="col-md-6">
                     <label for="aadhar_card">Aadhar Card</label>
                     <input type="file" name="aadhar_card_doc" id="aadhar_card_doc" class="form-control" required>
                  </div>

               </div>

               <div class="row mt-3">
                  
                  <div class="col-md-6">
                     <label for="owner_card_doc">Owner Card</label>
                     <input type="file" name="pan_card_doc" id="pan_card_doc" class="form-control" required>
                  </div>
                  
                  <div class="col-md-6">
                     <label for="vehicle_photo">Vehicle Photo</label>
                     <input type="file" name="vehicle_photo" id="vehicle_photo" class="form-control" required>
                  </div>

               </div>

               <!-- BHARAT PAY CARD -->
         </form>
        </div>
   
</div>
<?php include "inc/footer.php"; ?>