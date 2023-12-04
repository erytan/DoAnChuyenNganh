<?php
include 'header.php';
?>
<main class="mainContent-theme ">
    <div class="layout-info-account account-order">
        <div class="title-infor-account text-center">
            <h1>Chi tiết đơn hàng </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 sidebar-account">
                    <div class="AccountSidebar">
                        <h3 class="AccountTitle titleSidebar">Tài khoản</h3>
                        <div class="AccountContent">
                            <div class="AccountList">
                                <ul class="list-unstyled">
                                    <li class="current"><a href="/MVC/controller/userController.php?controller=inforUserGET">Thông tin tài khoản</a></li>

                                    <li class="last"><a href="/MVC/controller/userController.php?controller=logout">Đăng xuất</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="header-page">
                        <h4 class="name-order">Đơn hàng: #<?php echo $id ?>, <span class="order_date">Đặt lúc —  <?php echo $getinforbill['daybuy']?></span></h4>

                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="/MVC/controller/userController.php?controller=inforUserGET" id="return_to_store">Quay lại trang tài khoản </a>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 content-page customer-table-wrap detail-table-order">
                            <div class="customer-table-bg">
                                <p class="title-detail">Chi tiết đơn hàng </p>
                                <div class="table-responsive">
                                    <table id="order_details" class="table tableOrder">
                                        <tbody>
                                            <tr>
                                                <th class=""></th>
                                                <th class="">Sản phẩm</th>
                                                <th class="text-center">Mã sản phẩm</th>
                                                <th class="text-center">Đơn giá</th>
                                                <th class="text-center">Số lượng</th>
                                                <th class="total text-right">Thành tiền</th>
                                            </tr>
                                            
                                            <tr class="order_summary ">
                                                <td class="text-right" colspan="5"><b>Miễn phí vận chuyển</b></td>
                                                <td class="total money text-right"><b>0₫</b></td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 content-page">
                            <div class="row">
                                <div id="order_payment" class="col-md-6 col-sm-6">
                                    <h3 class="order_section_title">Địa chỉ nhận thanh toán</h3>
                                    <div class="alert alert-info">
                                        <span class="text_status">Tình trạng thanh toán:</span> <span class="status_pending">     <?php echo $getinforbill['trangthai']; ?></span>
                                    </div>
                                    <div class="address">
                                       
                                    </div>
                                </div>

                                <div id="order_shipping" class="col-md-6 col-sm-6">
                                    <h3 class="order_section_title">Địa chỉ gửi hàng</h3>
                                    <div class="alert alert-info">
                                        <span class="text_status">Vận chuyển:</span>
                                        <span class="status_not fulfilled shipment_pending">

                                        
                                        </span>
                                    </div>
                                    <div class="address">
                                       
                                    </div>
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
