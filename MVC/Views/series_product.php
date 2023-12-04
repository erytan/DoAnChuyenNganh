    <?php
    include 'header.php';
    ?>
    <main class="mainContent-theme ">
        <div id="collection" class="collection-page">

            <div class="breadcrumb-shop">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
                            <ol class="breadcrumb breadcrumb-arrows" itemscope=""
                                itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                    <a href="/MVC/controller/productController.php" target="_self" itemprop="item"><span
                                            itemprop="name">Trang chủ</span></a>
                                    <meta itemprop="position" content="1">
                                </li>

                                <li class="active" itemprop="itemListElement" itemscope=""
                                    itemtype="http://schema.org/ListItem">
                                    <span itemprop="item" content=""><span itemprop="name">Sản phẩm</span></span>
                                    <meta itemprop="position" content="2">
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


            <div class="main-content ">
                <div class="container-fluid">
                    <div class="row">
                        <div id="collection-body" class="wrap-collection-body clearfix">


                            <div class="col-md-3 col-sm-12 col-xs-12 sidebar-fix">
                                <div class="wrap-filter">
                                    <div class="box_sidebar">
                                        <div class="block left-module">
                                            <div class=" filter_xs">
                                                <div class="layered">

                                                    <div class="group-menu">
                                                        <div class="title_block visible-sm visible-xs">
                                                            Tất cả sản phẩm
                                                            <span><i class="fa fa-angle-down"></i></span>
                                                        </div>
                                                        <div class="block_content layered layered-category">
                                                            <div class="layered-content">
                                                                <ul class="tree-menu">


                                                                    <li
                                                                        class="tree-menu-lv1 has-child  menu-uncollap menu-uncollapsed">
                                                                        <a class="" href="javascript:void(0)"
                                                                            title="Honkai Impact 3" target="_self">
                                                                            <span class="">Danh mục sản phẩm</span>
                                                                            <span class="icon-control"><i
                                                                                    class="fa fa-minus"></i></span>
                                                                        </a>
                                                                        <ul class="tree-menu-sub"
                                                                            style="display: block;">

                                                                            <li>
                                                                                <span></span>
                                                                                <a href="/MVC/controller/productController.php?controller=SeriGET&seri=Áo"
                                                                                    class="current"
                                                                                    title="Sản phẩm Honkai">Sản phẩm
                                                                                    Áo</a>
                                                                            </li>

                                                                            <li>
                                                                                <span></span>
                                                                                <a href="/MVC/controller/productController.php?controller=SeriGET&seri=Quần"
                                                                                    title="Sản phẩm Honkai">Sản phẩm
                                                                                    Quần</a>
                                                                            </li>
                                                                            <li>
                                                                                <span></span>
                                                                                <a href="/MVC/controller/productController.php?controller=SeriGET&seri=Khác"
                                                                                    title="Sản phẩm Khác">Sản phẩm
                                                                                    Khác</a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-12 col-xs-12">
                                <div class="wrap-collection-title row">
                                    <div class="heading-collection row">
                                        <div class="col-md-8 col-sm-12 col-xs-12">
                                            <h1 class="title">
                                                Sản phẩm 
                                            </h1>
                                                
                                            <div class="alert-no-filter"></div>

                                        </div>
                                        

                                    </div>
                                </div>

                                <div class="row filter-here">
                                    <div class="content-product-list product-list filter clearfix">
                                        

                                    </div>
                                    <div class="sortpagibar pagi clearfix text-center">
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


        </div>





    </main>
    <?php //fotter page here --
    include 'footer.php';
    ?>
    <?php //js page here --
    include 'sctript_indexjs.php';
    ?>