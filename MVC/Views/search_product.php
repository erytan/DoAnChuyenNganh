<?php include 'header.php'; ?>
<main class="mainContent-theme ">
    <div class="searchPage" id="layout-search">
        <div class="container-fluid">
            <div class="row pd-page">
                <div class="col-md-12 col-xs-12">
                    <div class="heading-page">
                        <h1>Tìm kiếm</h1>
                        <p class="subtxt">Có <span><?php echo $count ?> sản phẩm</span> cho tìm kiếm</p>
                    </div>
                    <div class="wrapbox-content-page">
                        <div class="content-page" id="search">
                            <p class="subtext-result"> Kết quả tìm kiếm cho <strong>"<?php echo $searchcontent ?>"</strong>. </p>

                            <div class="results content-product-list ">
                                <div class=" search-list-results row">
                                    <!-- Begin results -->

                                    

                                </div>
                            </div> <!-- End results -->
                            <div class="row pagination-theme clearfix text-center">
                                <div id="pagination" class="clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // var addToCartBtn = $("#btn-addcart");
        // addToCartBtn.on("click", function() {
        //     // Send an AJAX GET request
        //     var productId = $(this).data('product-id');
        //     $.ajax({
        //         url: 'productController.php?controller=index',
        //         data: {

        //         },
        //         type: 'POST',
        //         success: function(response) {
        //             alert("hmm"+productId);
        //             //location.reload(); //reload page after successful update
        //         },
        //         error: function(jqXHR, textStatus, errorThrown) {
        //             console.log(textStatus, errorThrown);
        //             alert('An error occurred while updating cart.');
        //         }
        //     });
        // });



        // $(document).on('change', '.btn-addcart', function(e) {
        //     e.preventDefault();
        //     // var productId = $(this).data('product-id');
        //     // var quantity = $(this).val();

        //     // alert(productId + quantity);
        //     $.ajax({
        //         url: 'productController.php?controller=index',
        //         data: {

        //         },
        //         type: 'POST',
        //         success: function(response) {
        //             alert("hehe");
        //             //location.reload(); //reload page after successful update
        //         },
        //         error: function(jqXHR, textStatus, errorThrown) {
        //             console.log(textStatus, errorThrown);
        //             alert('An error occurred while updating cart.');
        //         }
        //     });
        // });
        $('form.search-page').submit(function(e) {
            e.preventDefault();
            var q = $(this).find('input[type="text"]').val();
            if (q.indexOf('script') > -1 || q.indexOf('>') > -1) {
                alert("Key word của bạn có chứa mã độc hại");
                $(this).find('input[type="text"]').val('');
            } else {
                // window.location.href = "/search?type=product&q=" + $('input.search_box').val();
            }
        })
    </script>

</main>
<?php //fotter page here --
include 'footer.php';

?>
<?php include 'sctript_indexjs.php'; ?>
