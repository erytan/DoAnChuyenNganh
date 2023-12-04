<?php
include 'header.php';
?>
<div id="product" class="productDetail-page 0_ size_aonam ">

    <div class="product-detail-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    



                    <!-- ///////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="list-productRelated clearfix">
                        <div class="heading-title text-center">
                            <h2>Sản phẩm liên quan</h2>
                        </div>
                        <div class="content-product-list row">
                            
                            }
                            ?>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<?php //fotter page here --
include 'footer.php';
?>
<?php //js page here --
include 'sctript_indexjs.php';
?>
<script>
    $(".product-gallery__thumb img").click(function() {
        $(".product-gallery__thumb").removeClass('active');
        $(this).parents('.product-gallery__thumb').addClass('active');
        var img_thumb = $(this).data('image');
        var total_index = $(this).parents('.product-gallery__thumb').index() + 1;
        $(".gallery-index .current").html(total_index);

        $(".product-image-detail .product-image-feature").attr("src", $(this).attr("data-image"));


    });
    $(".product-gallery__thumb").first().addClass('active');
    var check_variant = true;
    var fIndex = false;

    var selectCallback = function(variant, selector) {
        if (variant && variant.available) {
            current_id = variant.id;

            if (variant.featured_image != null) {
                if ($(window).width() > 991) {

                    $(".product-gallery__thumb a img[data-image='" + Haravan.resizeImage(variant.featured_image.src, 'master').replace('https:', '') + "']").click().parents('.product-gallery__thumb').addClass('active');

                } else {
                    setTimeout(function() {
                        var indexVariant = $(".product-gallery-item img[src='" + Haravan.resizeImage(variant.featured_image.src, 'master').replace('https:', '') + "']").parent().index();
                        $("#sliderproduct").flickity('select', indexVariant);
                    }, 500);
                }
            }
        }
    };
    //Img 360*
    
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
  <script>
    // Khởi tạo Three.js
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);

    const renderer = new THREE.WebGLRenderer();
    renderer.setSize(window.innerWidth, window.innerHeight);
    document.body.appendChild(renderer.domElement);

    // Load hình ảnh 360 độ
    const textureLoader = new THREE.TextureLoader();
    const texture = textureLoader.load('path_to_your_image.jpg');
    texture.mapping = THREE.UVMapping;
    texture.encoding = THREE.sRGBEncoding;

    // Tạo SphereGeometry với hình ảnh 360 độ
    const geometry = new THREE.SphereGeometry(500, 60, 40);
    geometry.scale(-1, 1, 1);

    // Tạo vật liệu MeshBasicMaterial để gán hình ảnh vào SphereGeometry
    const material = new THREE.MeshBasicMaterial({ map: texture });

    // Tạo Mesh từ SphereGeometry và vật liệu đã tạo
    const sphere = new THREE.Mesh(geometry, material);

    // Thêm Sphere vào scene
    scene.add(sphere);

    // Đặt camera
    camera.position.set(0, 0, 0.1);

    // Render hình ảnh 360 độ
    function animate() {
      requestAnimationFrame(animate);
    renderer.render(scene, camera);
    }
    animate();
  </script>