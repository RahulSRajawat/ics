<?php include('header.php') ?>

<!-- Nav Header Component Start -->
<div class="iq-navbar-header" style="height: 215px;">
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center">
                    <div>
                        <h1>Hello! Krishana Cyber Cafe</h1>
                        <p>At a glance summary of your account. Have fun!</p>
                    </div>
                    <div>
                        <a href="" class="btn btn-link btn-soft-light">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.8251 15.2171H12.1748C14.0987 15.2171 15.731 13.985 16.3054 12.2764C16.3887 12.0276 16.1979 11.7713 15.9334 11.7713H14.8562C14.5133 11.7713 14.2362 11.4977 14.2362 11.16C14.2362 10.8213 14.5133 10.5467 14.8562 10.5467H15.9005C16.2463 10.5467 16.5263 10.2703 16.5263 9.92875C16.5263 9.58722 16.2463 9.31075 15.9005 9.31075H14.8562C14.5133 9.31075 14.2362 9.03619 14.2362 8.69849C14.2362 8.35984 14.5133 8.08528 14.8562 8.08528H15.9005C16.2463 8.08528 16.5263 7.8088 16.5263 7.46728C16.5263 7.12575 16.2463 6.84928 15.9005 6.84928H14.8562C14.5133 6.84928 14.2362 6.57472 14.2362 6.23606C14.2362 5.89837 14.5133 5.62381 14.8562 5.62381H15.9886C16.2483 5.62381 16.4343 5.3789 16.3645 5.13113C15.8501 3.32401 14.1694 2 12.1748 2H11.8251C9.42172 2 7.47363 3.92287 7.47363 6.29729V10.9198C7.47363 13.2933 9.42172 15.2171 11.8251 15.2171Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M19.5313 9.82568C18.9966 9.82568 18.5626 10.2533 18.5626 10.7823C18.5626 14.3554 15.6186 17.2627 12.0005 17.2627C8.38136 17.2627 5.43743 14.3554 5.43743 10.7823C5.43743 10.2533 5.00345 9.82568 4.46872 9.82568C3.93398 9.82568 3.5 10.2533 3.5 10.7823C3.5 15.0873 6.79945 18.6413 11.0318 19.1186V21.0434C11.0318 21.5715 11.4648 22.0001 12.0005 22.0001C12.5352 22.0001 12.9692 21.5715 12.9692 21.0434V19.1186C17.2006 18.6413 20.5 15.0873 20.5 10.7823C20.5 10.2533 20.066 9.82568 19.5313 9.82568Z" fill="currentColor"></path>
                            </svg>
                            Announcements
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="iq-header-img">
        <img src="assets/images/dashboard/top-header.png" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
        <img src="assets/images/dashboard/top-header1.png" alt="header" class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
        <img src="assets/images/dashboard/top-header2.png" alt="header" class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
        <img src="assets/images/dashboard/top-header3.png" alt="header" class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
        <img src="assets/images/dashboard/top-header4.png" alt="header" class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
        <img src="assets/images/dashboard/top-header5.png" alt="header" class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
    </div>
</div> <!-- Nav Header Component End -->
<!--Nav End-->
<!-- </div>-->
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card ">

                    <div class="card-body">
                        <div class="white_bg">
                            <div class="row">
                                <div class="col-sm-12"> </div>
                            </div>
                            <form action="https://rnfi.in/filter-dmt" method="get" class="one_col" accept-charset="utf-8">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Start Date:</label>
                                            <input type="text" name="startdate" class="start form-control hasDatepicker" autocomplete="off" value="" id="dp1669245914197">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>End Date:</label>
                                            <input type="text" name="enddate" class="start form-control hasDatepicker" autocomplete="off" value="" id="dp1669245914198">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>SEARCH BY: </label>
                                                        <label>
                                                            <input type="radio" name="searchby" value="txnid" checked=""> TXNID </label>
                                                        <label>&nbsp;</label>
                                                        <label>
                                                            <input type="radio" name="searchby" value="mobile"> MOBILE </label>
                                                        <label>&nbsp;</label>
                                                        <label>
                                                            <input type="radio" name="searchby" value="accno"> ACCNO </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>SEARCH FROM: </label>
                                                        <label>
                                                            <input type="radio" name="searchfrom" value="0" checked=""> Current </label>
                                                        <label>&nbsp;</label>
                                                        <label>
                                                            <input type="radio" name="searchfrom" value="1"> Archive </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Enter keyword</label>
                                            <input type="text" name="serachvalue" value="" placeholder="Enter keyword" autofocus="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Transaction Status</label>
                                            <select class="select_search select2-hidden-accessible" name="status" data-placeholder="Transaction Status" style="width: 100%" tabindex="-1" aria-hidden="true">
                                                <option value="">Select</option>
                                                <option value="0">Refund</option>
                                                <option value="1">Complete</option>
                                                <option value="2">In Process</option>
                                                <option value="3">Sent To Bank</option>
                                                <option value="4">On Hold</option>
                                                <option value="5">Failed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Select Wallet</label>
                                            <select class="select_search select2-hidden-accessible" name="wallet" data-placeholder="Select Wallet" style="width: 100%" tabindex="-1" aria-hidden="true">
                                                <option value="">Select</option>
                                                <option value="0">Main</option>
                                                <option value="1">Credit Card</option>
                                                <option value="2">AEPS</option>
                                                <option value="3">PG</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="submit" value="Submit" class="btn btn-danger">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-12">
                <div class="card ">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%" class="table table-striped">
                                <tr>
                                    <td class="re_td_data" title="Click Here To Print">TxnId</td>
                                    <td class="re_td_data">BeneName</td>
                                    <td class="re_td_data">Account No</td>
                                    <td class="re_td_data">Bank Name</td>
                                    <td class="re_td_data">Remitter</td>
                                    <!--<td>Opening</td>-->
                                    <td class="re_td_data">Amount</td>
                                    <td class="re_td_data">Charges</td>
                                    <!--<td>Closing</td>-->
                                    <td class="re_td_data">UTR</td>
                                    <td class="re_td_data">Status</td>
                                    <td class="re_td_data">Re-Initiate</td>
                                    <td class="re_td_data">Remarks</td>
                                    <td class="re_td_data">Type</td>
                                    <td class="re_td_data">Date</td>
                                    <td class="re_td_data">IFSC</td>
                                    <td class="re_td_data">Action</td>

                                </tr>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php include('footer.php') ?>