<?php
include 'header.php';
?>

<main class="mainContent-theme ">
    <div class="layoutPage-cart" id="layout-cart">
        <div class="breadcrumb-shop">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
                        <ol class="breadcrumb breadcrumb-arrows" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <a href="/MVC/controller/productController.php" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                                <meta itemprop="position" content="1">
                            </li>

                            <li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <span itemprop="item" content=""><span itemprop="name">Giỏ hàng (
                                        
                                        )</span></span>
                                <meta itemprop="position" content="2">
                            </li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-cart-detail">
            <div class="container-fluid">
                <div class="heading-page">
                    <div class="header-page">
                        <h1>Giỏ hàng của bạn</h1>
                        <p class="count-cart">Có <span>
                               
                    </div>
                </div>
                <div class="row wrapbox-content-cart">
                    <div class="col-md-8 col-sm-8 col-xs-12 contentCart-detail">

                        <div class="cart-container">
                            <div class="cart-col-left">
                                <div class="main-content-cart">
                                    <form action="/cart" method="post" id="cartformpage">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table class="table-cart">
                                                    <thead>
                                                        <tr>
                                                            <th class="image">&nbsp;</th>
                                                            <th class="item">Tên sản phẩm</th>
                                                            <th class="remove">&nbsp;</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                                <div class="sidebox-group">
                                                    <h4>Ghi chú đơn hàng</h4>
                                                    <div class="checkout-note clearfix">
                                                        <textarea id="note" name="note" rows="4" placeholder="Ghi chú"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-sm-12 col-xs-12 hidden-xs">
                                                <div class="sidebox-group sidebox-policy">
                                                    <h4></h4>
                                                    <ul>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li>.</li>
                                                    </ul>
                                                </div>
                                                <div class="cart-buttons hidden">
                                                    <button type="submit" id="update-cart" class="btn-update button dark hidden" name="update" value="">Cập nhật</button>
                                                    <button type="submit" id="checkout" class="btn-checkout button dark hidden" name="checkout" value="">Thanh toán</button>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- End cart -->
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 sidebarCart-sticky">
                        <div class="sidebox-order">
                            <div class="sidebox-order-inner">
                                <div class="sidebox-order_title">
                                    <h3>Thông tin đơn hàng</h3>
                                </div>
                                <div class="sidebox-order_total">
                                    <p>Tổng tiền:
                                        <span class="total-price">
                                           
                                    </p>
                                </div>
                                <div class="sidebox-order_text">
                                    <p>Phí vận chuyển sẽ được tính ở trang thanh toán.<br>
                                        Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.</p>
                                </div>
                                <div class="sidebox-order_action">
                                    <a href="/MVC/controller/productController.php?controller=checkoutCart" class="button dark btncart-checkout">THANH TOÁN</a>
                                    <p class="link-continue text-center">
                                        <a href="/MVC/controller/productController.php">
                                            <i class="fa fa-reply"></i> Tiếp tục mua hàng
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="sidebox-group sidebox-policy visible-xs">
                            <h4></h4>
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li>.</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).on('change', '.line-item-qty', function(e) {
            e.preventDefault();
            var productId = $(this).data('product-id');



            var quantity = $(this).val();

            alert(productId + quantity);
            $.ajax({
                url: 'productController.php?controller=updateCart',
                data: {
                    product_id: productId,
                    quantity: parseInt(quantity)
                },
                type: 'POST',
                success: function(response) {
                    location.reload(); //reload page after successful update
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    alert('An error occurred while updating cart.');
                }
            });
        });
        //debugger;

        $(document).on('click', '.qty-click .qtyplus', function(e) {
            e.preventDefault();
            var productId = $(this).data('product-id');

            var quantity = $('#quantity').val();

            var input = $(this).parent('.quantity-partent').find('input');
            var currentVal = parseInt(input.val());
            //alert(productId+quantity);
            if (!isNaN(currentVal)) {
                input.val(currentVal + 1);
            } else {
                input.val(1);
            }

            $.ajax({
                url: 'productController.php?controller=updateCart',
                data: {
                    product_id: productId,
                    quantity: parseInt(quantity) + parseInt(1)
                },
                type: 'POST',
                success: function(response) {
                    // do something with response
                    location.reload(); //reload page after successful update
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    alert('An error occurred while updating cart.');
                }
            });
        });
        $(document).on('click', ".qty-click .qtyminus", function(e) {
            e.preventDefault();
            var productId = $(this).data('product-id');

            var quantity = $('#quantity').val();


            var input = $(this).parent('.quantity-partent').find('input');
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal) && currentVal > 1) {
                input.val(currentVal - 1);
            } else {
                input.val(1);
            }
            //event
            $.ajax({
                url: 'productController.php?controller=updateCart',
                data: {
                    product_id: productId,

                    quantity: parseInt(quantity) - parseInt(1)
                },
                type: 'POST',
                success: function(response) {
                    // do something with response
                    location.reload(); //reload page after successful update
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    alert('An error occurred while updating cart.');
                }
            });
        });
    </script>




</main>
<?php //fotter page here --
include 'footer.php';
?>
<?php //js page here --
include 'sctript_indexjs.php';
?>
