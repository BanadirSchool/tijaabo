<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location:login.php');
    die();
}

?>

<?php

include 'header.php';
include 'sidebar.php';

?>

<div class="pcoded-main-container">

    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->

                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->



                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Basic Table</h5>
                                        <span class="d-block m-t-5">use class <code>table</code> inside table element</span>
                                    </div>
                                    <div class="card-block table-border-style">
                                        <form id="userForm">
                                            <div class="row">



                                                <div class="col-sm-4">
                                                    <select name="type" id="type" class="form-control">
                                                        <option value="0">All</option>
                                                        <option value="Custome">Custome</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-4">

                                                    <input type="date" name="from" id="from" class="form-control">

                                                </div>
                                                <div class="col-sm-4">

                                                    <input type="date" name="to" id="to" class="form-control">

                                                </div>

                                                <button Type="submit" id="addNew" class="btn btn-info m-3">Add New Transaction</button>

                                            </div>
                                        </form>
                                        <div class="table-responsive" id="print_area">
                                            <img width="80%" height="200px" src="download.png" style="margin-left:50px;">
                                            <table class="table" id="userTable">
                                                <thead>

                                                </thead>

                                                <tbody>

                                                </tbody>

                                            </table>
                                        </div>
                                        <button class="btn btn-success" id="print_statement"><i class="fa fa-print"></i> Print</button>
                                        <button class="btn btn-info" id="export_statement"> <i class="fa fa-file"></i>Export</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php

include 'footer.php';

?>

<script src="js/user_statement.js"></script>