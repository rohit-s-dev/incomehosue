
<?php include "inc/header.php"; ?>
<?php include "inc/top-bar.php"; ?>
<?php include "inc/side-nav.php"; ?>

<div class="container-fluid my-5 py-5">
    <div class="col-12 text-white p-2 mb-3" style=" background: #3a4651; ">
        <h4 class="text-center text-uppercase">Life Insurance Form</h4>
    </div>
    <!-- Life Insurance Form -->
    <form method="" enctype="multipart/form-data" action="">
        <div class="form-group">
            <label for="p_w_t_n">Plan Number and Table Number</label>
            <select name="p_w_t_n" id="p_w_t_n" class="form-control" >
            <option value="null">Select Plan Name</option>
            <option value="">815: Jeevan Ananad</option>
            <option value="">814: New Endowment</option>
            <option value="">836: Jeevan Laabh</option>
            <option value="">844: Aadhar Sila</option>
            <option value="">833: Jeevan Lakshaya</option>
            <option value="">845: Jeevan Umang</option>
            <option value="">820: 20 Year Money Back</option>
            <option value="">821: 25 Year Money Back</option>
            <option value="">832: Child Money Back</option>
            <option value="">816: Bima Bachat</option>
            <option value="">848: Bima Shree</option>
            <option value="">834: Jeeva Traun</option>
            <option value="">817: Single Premium Endowment</option>
            <option value="">818: Jeevan Nidhi Single Premium</option>
            <option value="">822: Anmol Jeevan</option>
            <option value="">189: Jeevan Akshay VI</option>
            <option value="">842: Pradanmantri Vaya Vandana Yojna </option>
            <option value="">850: Jeevan Shanti </option>
            <option value="">904: Jeevan Arogya </option>
            <option value="">905: Cancer Cover </option>
            </select>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="col-md-6">
                <label for="d-o-b">D-O-B: </label>
                <input type="date" name="d-o-b" id="d-o-b" class="form-control">
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="col-md-6">
                <label for="d-o-b">D-O-B: </label>
                <input type="date" name="d-o-b" id="d-o-b" class="form-control">
                </div>
            </div>
        </div>
    </form>
    <!-- End of Life Insurance Form -->
</div>
<?php include "inc/footer.php"; ?>