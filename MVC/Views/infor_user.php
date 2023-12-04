<?php
include 'header.php';
?>
<main class="mainContent-theme ">

    <div class="layout-info-account">
        <div class="title-infor-account text-center">
            <h1>Tài khoản của bạn </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 sidebar-account">
                    <div class="AccountSidebar">
                        <h3 class="AccountTitle titleSidebar">Tài khoản</h3>
                        <div class="AccountContent">
                            <div class="AccountList">
                                <ul class="list-unstyled">
                                    <li class="current"><a href="userController.php?controller=inforUserGET">Thông tin tài khoản</a></li>
                                    <!-- <li><a href="/account/addresses">Danh sách địa chỉ</a></li> -->
                                    <li class="last"><a href="userController.php?controller=logout">Đăng xuất</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="row">
                        <div class="col-xs-12" id="customer_sidebar">
                            <p class="title-detail">Thông tin tài khoản</p>
                           

                            <!-- <a id="view_address" href="/account/addresses">Xem địa chỉ</a> -->
                        </div>
                    </div>
                    <div class="col-xs-12 customer-table-wrap" id="customer_orders">
                        <div class="customer_order customer-table-bg">

                            <p class="title-detail">
                                Danh sách đơn hàng mới nhất
                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="order_number text-center">Mã đơn hàng</th>
                                            <th class="date text-center">Ngày đặt</th>
                                            <th class="total text-right">Thành tiền</th>
                                            <th class="payment_status text-center">Trạng thái thanh toán</th>
                                            <th class="fulfillment_status text-center">Vận chuyển</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>


</main>
<?php //fotter page here --
include 'footer.php';
?>
<?php //js page here --
include 'sctript_indexjs.php';
?>
