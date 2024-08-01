<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <title>Best Software Company || Camwel Solution </title>
    <meta http-equiv="X-UA-Compatible" content="">
    <meta content="" name="viewport" />
    <meta http-equiv="" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="" />
    <meta name="google-site-verification" content="" />
    <meta name="robots" content="all" />
    <meta name="msvalidate.01" content="" />

    <?php $this->load->view('mentor/include/css'); ?>
    <style>
        .editBtn { color: blue;border: 2px solid blue;border-radius: 5px; padding: 0.3rem 0.5rem;}
    </style>
</head>

<body>

    <?php $this->load->view('mentor/include/header'); ?>
    <?php $this->load->view('mentor/include/left'); ?>
    <!-- Content wrapper scroll start -->



    <div class="content-wrapper-scroll">

        <!-- --------------------------- 1st sectioin start ---------------------- -->

        <section>
            <div class="container">
                <div class="row">
                    <p style="padding:2rem;"><span style="font-size:2rem;color:#245fae;">Manage Register </span><span class="float-end">Home / Manage Register</span></p>
                    <p style="margin-top:-2.8rem;">&nbsp;&nbsp;&nbsp;</p>

                    <div class="col-md-12">
                        <!-- --------------------------- table section start -------------------------  -->
                        <div class="card">
                            <div class="card-header">
                                <!-- <div class="card-title">API Call Backs</div> -->
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="apiCallbacks_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="apiCallbacks" class="table custom-table dataTable no-footer" aria-describedby="apiCallbacks_info">
                                                    <thead>
                                                        <tr>
                                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width:80.453px;padding-left:1rem;">S.No</th>
                                                            <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:209.453px;">Name</th>
                                                            <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:186.453px;">Mobile Number </th>
                                                            <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:86.453px;">Email</th>
                                                            <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width:146.453px;">Status</th>
                                                            <th class="sorting" tabindex="0" aria-controls="apiCallbacks" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width:180.4844px;">Action</th>
                                                        </tr>
                                                    </thead>



                                                    <tbody>
                                                        <?php foreach ($mentorData as $re => $ten) { ?>
                                                            <tr>
                                                                <td style="padding-left:1.5rem;"><?php echo $re + 1 ?></td>
                                                                <td><?php echo $ten['name'] ?></td>
                                                                <td><?php echo $ten['mobile'] ?></td>
                                                                <td><?php echo $ten['email'] ?></td>

                                                                <td>
                                                                    <?php
                                                                    $status = ($ten['status'] == 1) ?
                                                                        "<a class='ediCla' href='javascript:void()' onClick='return changeStatus(\"" . $ten['id'] . "\",\"0\",\"registration\",\"admin/Common/chageStatus\")' title='Click to Di-Active Sector Data'><span class='badge shade-green'>Success</span></a>"

                                                                        :
                                                                        "<a class='ediCla' href='javascript:void()'  onClick='return changeStatus(\"" . $ten['id'] . "\",\"1\",\"registration\",\"admin/common/chageStatus\")' title='Click to Active Sector Data '><span class='badge shade-yellow'>Pending</span></a>";
                                                                    echo "<span id=" . $ten['id'] . ">" . $status . "</span>";
                                                                    ?>&emsp;
                                                                </td>
                                                                <td>
                                                                    <a href="javaScript:void();" class="viewCla" onclick="viewDatafun(<?php echo $ten['id'] ?>)" data-bs-toggle="modal" data-bs-target="#viewSectorData"><i class="bi bi-eye-slash-fill"></i></a>
                                                                    <a href="javaScript:void();" class="editBtn" onclick="editDAtaFun(<?php echo $ten['id'] ?>)" data-bs-toggle="modal" data-bs-target="#editSecDAta"><i class="bi bi-pencil-square"></i></a>



                                                                </td>
                                                            </tr>
                                                        <?php } ?>

                                                    </tbody>



                                                    <!-- ---------------- table body sectioin start --------------------  -->

                                                    <!-- ---------------- table body sectioin end --------------------  -->
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="apiCallbacks_info" role="status" aria-live="polite">Showing 1 to 5 of 57 entries</div>
                                            </div>
                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers" id="apiCallbacks_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled" id="apiCallbacks_previous"><a href="#" aria-controls="apiCallbacks" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                        <li class="paginate_button page-item active"><a href="#" aria-controls="apiCallbacks" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                                        <li class="paginate_button page-item disabled" id="apiCallbacks_ellipsis"><a href="#" aria-controls="apiCallbacks" data-dt-idx="6" tabindex="0" class="page-link">…</a></li>
                                                        <li class="paginate_button page-item "><a href="#" aria-controls="apiCallbacks" data-dt-idx="7" tabindex="0" class="page-link">12</a></li>
                                                        <li class="paginate_button page-item next" id="apiCallbacks_next"><a href="#" aria-controls="apiCallbacks" data-dt-idx="8" tabindex="0" class="page-link">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- --------------------------- table section end -------------------------  -->
                    </div>
                </div>
            </div>
        </section>
        <!-- --------------------------- 1st sectioin end ---------------------- -->



        <!-- ============================== adding data model section start for view start ========================= -->

        <!-- Card start -->




        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Add Tender
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- -----------  body section start ---------------  -->
                    <div class="container">
                        <div class="row">

                            <form action="" id="addFouData" method="post">

                                <div class="col-md-12">
                                    <div class="card-body pt-2 pb-2">
                                        <label for="">Title *</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                            <input type="text" name="tender_title" id="tender_title" class="form-control" placeholder="Tender Title">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="card-body pt-2 pb-2">
                                        <label for="">Description *</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>

                                            <input type="text" name="description" id="description" class="form-control" placeholder="Tender Description">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="card-body pt-2 pb-2">
                                        <label for="">Document *</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-link-45deg"></i></span>
                                            <input type="file" name="doc" id="doc" class="form-control" placeholder="Choose Doc">
                                        </div>
                                    </div>
                                </div>






                        </div>
                    </div>

                    <!-- -----------  body section end ---------------  -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" name="submit" class="btn btn-primary">
                            Save Data
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Card end -->

    <!-- ============================== adding data model section start for view end ============================  -->


    <!-- ====================================  view section start ===================================  -->

    <section>

        <!-- data-bs-toggle="modal" data-bs-target="#exampleModal" --> <br><br>
        <!-- Modal -->
        <div class="modal fade mt-6" id="viewSectorData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="border-top:2px solid #245fae;">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Registration Details
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container" id="viewDetails">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====================================  view section end ===================================  -->


    <!-- ====================================  edit section start ===================================  -->



    <!-- data-bs-toggle="modal" data-bs-target="#exampleModal" -->
    <!-- Modal -->
    <div class="modal fade" id="editSecDAta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="" method="post" id="updatelData">
                    <div class="modal-header" style="border-top:6px solid #245fae;">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Update Registration  Details
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="container">
                            <div class="row" id="editDetails"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" name="submit" class="btn btn-primary">
                            Save changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ====================================  edit section end ===================================  -->



    </div>
    <!-- Content wrapper scroll end -->
    <?php $this->load->view('mentor/include/footer'); ?>
    <?php $this->load->view('mentor/include/js'); ?>


    <script>
        $("#addFouData").on("submit", function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: '<?= base_url() ?>mentor/Tender/addDAta',
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function(data) {
                    console.log(data);
                    // window.location.reload(true);               
                }
            });
        });

        $("#updatelData").on("submit", function(e) {
            alert("sdfsdfsd");
            e.preventDefault();
            $.ajax({
                url: '<?= base_url() ?>mentor/Register/updateData',
                type: "post",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function(data) {
                    console.log(data);
                    window.location.reload(true);
                }
            });
        });


        function viewDatafun(id) {
            // alert(id);
            $.ajax({
                type: "POST",
                url: '<?= base_url() ?>' + 'mentor/Register/viewDAta',
                data: {
                    'id': id
                },
                success: function(data) {
                    console.log(data);
                    $('#viewDetails').html(data);
                },
            });


        }

        function editDAtaFun(id) {
            alert(id);
            $.ajax({
                type: "POST",
                url: '<?= base_url() ?>' + 'mentor/Register/editRegData',
                data: {
                    'id': id
                },
                success: function(data) {
                    console.log(data);
                    $('#editDetails').html(data);
                },
            });


        }


        function deleteDAta(id) {
            alert(id);
            $.ajax({
                type: "POST",
                url: '<?= base_url() ?>' + 'mentor/Register/deleteData',
                data: {
                    'id': id
                },
                success: function(data) {
                    window.location.reload(true);
                },
            });
        }
    </script>

</body>


</html>