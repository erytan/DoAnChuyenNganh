<?php include 'header_admin.php'; ?>
<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bảng sản phẩm</h1>
                </div>

            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-20" style="width: 100%;">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Nhập sản phẩm mới</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="/MVC/controller/adminController.php?controller=updateProductPOST">
                            <div class="card-body">
                                <div class="form-group" style="display: none;">
                                    <label for="exampleInputEmail1">id</label> <input type="text" class="form-control" id="masp" name="masp" value="<?php echo $result['masp']; ?>" placeholder="Nhập sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label> <input type="text" class="form-control" id="tensp" name="tensp" value="<?php echo $result['tensp']; ?>" placeholder="Nhập sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Giá</label> <input type="text" class="form-control" value="<?php echo $result['gia']; ?>" id="gia" name="gia" placeholder="Nhập giá">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Series</label>
									<select class="form-control" id="maloaisp" name="maloaisp" value="<?php echo $result['maloaisp']; ?>">
										<option value="<?php echo $result['maloaisp']; ?>">Quần</option></option>
										<option value="Áo">Áo</option>
										<option value="Giày">Giày</option>
										<option value="Khác">Khác</option>
									</select>
                                    
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hãng sản xuất</label> <input type="text" class="form-control" value="<?php echo $result['manhasx']; ?>" id="manhasx" name="manhasx" placeholder="Nhập hãng sản xuất">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả</label> <input type="text" class="form-control" value="<?php echo $result['note']; ?>" id="note" name="note" placeholder="Nhập mô tả cho sản phẩm">
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleInputPassword1">Ngày phát hành</label> <input type="text" class="form-control" value="<?php echo $result['DateRelease']; ?>" id="DateRelease" name="DateRelease" placeholder="Nhập mô tả ngày phát hành">
                                </div> -->
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tình trạng sản phẩm</label> <input type="text" class="form-control" value="<?php echo $result['ttsp']; ?>" id="ttsp" name="ttsp" placeholder="Nhập tình trạng sản phẩm">
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleInputPassword1">Thông tin sản phẩm</label> <input type="text" class="form-control" value="<?php echo $result['Infor']; ?>" id="Infor" name="Infor" placeholder="Nhập tình thông tin sản phẩm">
                                </div> -->
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Số lượng nhập</label> <input type="text" class="form-control" value="<?php echo $result['soluong']; ?>" id="soluong" name="soluong" placeholder="Nhập số lượng cần thêm vào">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Hình ảnh</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="fileupload" multiple>
                                            <label class="custom-file-label" for="exampleInputFile">Chọn
                                                file để upload</label>
                                        </div>

                                    </div>
                                    <div style="margin: 2% 0 0 2%;">


                                    </div>
                                    <input style="display:none;" type="text" class="form-control" id="geturlcloud" name="geturlcloud">

                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" id="myButton" class="btn btn-primary">Cập nhật sản phẩm</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript">
    const CLOUDINARY_URL = 'https://api.cloudinary.com/v1_1/di7ymas5y/upload';
    const CLOUDINARY_UPLOAD_PRESET = 'r2wkhf6u';
    const image = document.querySelector('#fileupload');
    image.addEventListener('change', (e) => {
        // document.getElementById("myButton").setAttribute("disabled", "true");
        document.getElementById('image1').src = "https://artsmidnorthcoast.com/wp-content/uploads/2014/05/no-image-available-icon-6.png";
        document.getElementById('image2').src = "https://artsmidnorthcoast.com/wp-content/uploads/2014/05/no-image-available-icon-6.png";
        document.getElementById('image3').src = "https://artsmidnorthcoast.com/wp-content/uploads/2014/05/no-image-available-icon-6.png";
        document.getElementById('image4').src = "https://artsmidnorthcoast.com/wp-content/uploads/2014/05/no-image-available-icon-6.png";
        const formData = new FormData();

        const length = e.target.files.length;

        //let length = parseInt(document.getElementById("fileupload").value);

        /* let length = parseInt(document.getElementById("countFile").name);*/
        for (let i = 0; i < length; i++) {
            const file = e.target.files[i];

            formData.append('file', file);
            formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET);

            fetch(CLOUDINARY_URL, {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then((data) => {

                    if (data.secure_url !== '') {
                        const uploadedFileUrl = data.secure_url;
                        localStorage.setItem('passportUrl', uploadedFileUrl)
                        var url = data.secure_url;

                        //document.getElementById('image').src = url;
                        var tc = url + "";

                        if (tc.includes("undefined") == true) {
                            return;
                        } else {
                            // alert(url);
                            var t = document.getElementById('geturlcloud').value + "@" + url;
                            document.getElementById('geturlcloud').value = t;

                            if (i == 0) {
                                document.getElementById('image1').src = url;


                                document.getElementById('images1').src = url;

                            }
                            if (i == 1) {
                                document.getElementById('image2').src = url;
                                document.getElementById('images2').src = url;

                            }
                            if (i == 2) {
                                document.getElementById('image3').src = url;
                                document.getElementById('images3').src = url;
                            }
                            if (i == 3) {
                                document.getElementById('image4').src = url;
                                document.getElementById('images4').src = url;
                            }

                        }
                        // alert(i + ' ' +length);
                        // if (i == length - 1) {
                        // document.getElementById("myButton").removeAttribute("disabled");
                        //     }
                    } else {
                        alert('upload thất bại');
                    }
                })
                .catch(err => console.error(err));
        }
    });
    // //
    // 	const CLOUDINARY_URL = 'https://api.cloudinary.com/v1_1/di7ymas5y/image/upload';
    // 	const CLOUDINARY_UPLOAD_PRESET = 'r2wkhf6u';
    // 	const image = document.querySelector('#fileupload');
    // 	image.addEventListener('change', (e) => {

    // 		const file = e.target.files[0];

    // 		const formData = new FormData();
    // 		formData.append('file', file);
    // 		formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET);

    // 		fetch(CLOUDINARY_URL, {
    // 				method: 'POST',
    // 				body: formData,
    // 			})
    // 			.then(response => response.json())
    // 			.then((data) => {
    // 				if (data.secure_url !== '') {

    // 					const uploadedFileUrl = data.secure_url;
    // 					localStorage.setItem('passportUrl', uploadedFileUrl)
    // 					var url = data.secure_url;

    // 					document.getElementById('image').src = url;
    // 					document.getElementById('geturlcloud').value = url;
    // 				} else {
    // 					alert('upload thất bại');
    // 				}
    // 			})
    // 			.catch(err => console.error(err));
    // 	});
</script>
<?php include 'footer_admin.php'; ?>