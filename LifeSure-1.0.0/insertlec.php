<?php
    session_start();
    include_once("connect.php");
    $sql1 = "SELECT * FROM `lecturer`" ;
    $rs1 = mysqli_query($conn, $sql1);
    $data1 = mysqli_fetch_array($rs1);
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>LifeSure - Life Insurance Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
     <style>
        .service-icon i {
    font-size: 16px;
}
        </style>
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block">
            <div class="container">
                <div class="row gx-0 align-items-center">
                    <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <div class="border-end border-primary pe-3">
                                <a href="https://shorturl.asia/Lw9xf" class="text-muted small"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                            </div>
                            <div class="ps-3">
                                <div class="text-muted small"><i class="bi bi-emoji-laughing-fill text-primary me-2"></i>ยินดีต้อนรับคุณ <?=$_SESSION['aname'];?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <div class="d-flex justify-content-end">
                            <div class="d-flex border-end border-primary pe-3">
                                <a class="btn p-0 text-primary me-3" href="https://www.facebook.com/bc.mbs.thailand"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                <img src="image/1.jpg" class="rounded-circle" width="80" height="80"> 
                        <h1 class="text-primary mb-0 text-primary me-2"></i>BC-DBIS</h1>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav mx-0 mx-lg-auto d-flex align-items-center">
        <a href="indexadmin.php" class="nav-item nav-link active">หน้าหลัก</a>
        
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ข่าวสาร</a>
            <div class="dropdown-menu">
                <a href="new-admin.php" class="dropdown-item">ข่าวสาร</a>
                <a href="work-admin.php" class="dropdown-item">ประชาสัมพันธ์ตำแหน่งงาน</a>
                <a href="it-admin.php" class="dropdown-item">บทความ/ข่าวสารทางไอที</a>
                <a href="academic-admin.php" class="dropdown-item">ประชุมวิชาการ</a>
            </div>
        </div>
        <a href="performance-admin.php" class="nav-item nav-link">ผลงานนิสิต</a>
        <a href="logout.php" class="nav-item nav-link">ออกจากระบบ</a>




    </div>
</div>
                        </div>
                    </div>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center bg-primary">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


         <!-- FAQs Start -->
         <div class="container-fluid faq-section bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">  
            <!-- คอลัมน์ฟอร์ม -->
            <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="h-100">
                    <div class="mb-5">
                        <h1 class="display-4 mb-0">เพิ่มข้อมูลอาจารย์</h1>
                    </div>
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="Limg" class="form-label">รูปภาพ</label>
                            <input type="file" name="Limg" required class="form-control" id="Limg">
                            <div class="form-text">กรุณาอัปโหลดรูปภาพ (เฉพาะ JPG, PNG, GIF, ขนาดไม่เกิน 2MB)</div>
                        </div>

                        <div class="mb-3">
                            <label for="Lname" class="form-label">ชื่อ-สกุล</label>
                            <input type="text" name="Lname" required class="form-control" id="Lname">
                        </div>

                        <div class="mb-3">
                            <label for="Ltal" class="form-label">เบอร์โทรติดต่อ</label>
                            <input type="text" name="Ltal" required class="form-control" id="Ltal">
                        </div>

                        <div class="mb-3">
                            <label for="Lemail" class="form-label">Email</label>
                            <input type="email" name="Lemail" required class="form-control" id="Lemail">
                        </div>

                        <div class="mb-3">
                            <label for="Lteaching" class="form-label">ภาระการสอน</label>
                            <input type="text" name="Lteaching" required class="form-control" id="Lteaching">
                        </div>

                        <div class="mb-3">
                            <label for="Lexper" class="form-label">ประวัติการศึกษา</label>
                            <input type="text" name="Lexper" required class="form-control" id="Lexper">
                        </div>
                        
                        <button type="submit" name="Submit" class="btn btn-primary btn-md">เพิ่มข้อมูลอาจารย์</button>
                    </form>
                </div>
            </div>

            <!-- คอลัมน์รูปภาพ -->
            <div class="col-xl-6 col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                <img src="img/carousel-2.png" class="img-fluid w-100 rounded shadow" alt="รูปภาพ">
            </div>
        </div>
    </div>
</div>

    

   

<?php
include 'connect.php'; // เชื่อมต่อฐานข้อมูล

if (isset($_POST['Submit'])) {
    $Lname = mysqli_real_escape_string($conn, $_POST['Lname']);
    $Ltal = mysqli_real_escape_string($conn, $_POST['Ltal']);
    $Lemail = mysqli_real_escape_string($conn, $_POST['Lemail']);
    $Lteaching = mysqli_real_escape_string($conn, $_POST['Lteaching']);
    $Lexper = mysqli_real_escape_string($conn, $_POST['Lexper']);

    if (isset($_FILES['Limg']) && $_FILES['Limg']['error'] === UPLOAD_ERR_OK) {
        $file_name = $_FILES['Limg']['name'];
        $file_tmp = $_FILES['Limg']['tmp_name'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];

        if (!in_array($file_ext, $allowed_ext)) {
            die("ไฟล์ต้องเป็นรูปภาพประเภท JPG, JPEG, PNG หรือ GIF เท่านั้น");
        }

        // เพิ่มข้อมูลลงในฐานข้อมูล โดยยังไม่ใส่ชื่อไฟล์รูป
        $sql = "INSERT INTO `lecturer` (`L_name`, `L_tal`, `L_email`, `L_teaching`, `L_exper`, `L_img`) 
                VALUES ('$Lname', '$Ltal', '$Lemail', '$Lteaching', '$Lexper', '')";

        if (mysqli_query($conn, $sql)) {
            $idauto = mysqli_insert_id($conn);
            $new_file_name = "image1/" . $idauto . "." . $file_ext;

            // อัปโหลดรูปภาพ
            if (move_uploaded_file($file_tmp, $new_file_name)) {
                // อัปเดตฐานข้อมูลให้มีชื่อไฟล์รูปภาพที่ถูกต้อง
                $update_sql = "UPDATE `lecturer` SET `L_img`='$new_file_name' WHERE `L_id`='$idauto'";
                mysqli_query($conn, $update_sql);

                echo "<script>alert('เพิ่มข้อมูลอาจารย์สำเร็จ'); window.location='lecturer.php';</script>";
            } else {
                echo "เกิดข้อผิดพลาดในการอัปโหลดรูปภาพ";
            }
        } else {
            echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล: " . mysqli_error($conn);
        }
    } else {
        echo "กรุณาอัปโหลดรูปภาพ";
    }
}

mysqli_close($conn);
?>



        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-9">
                        <div class="mb-5">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-6 col-xl-5">
                                    <div class="footer-item">
                                        <a href="index.html" class="p-0">
                                            <h3 class="text-white"><i class="fab fa-slack me-3"></i> LifeSure</h3>
                                            <!-- <img src="img/logo.png" alt="Logo"> -->
                                        </a>
                                        <p class="text-white mb-4">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
                                        <div class="footer-btn d-flex">
                                            <a class="btn btn-md-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-md-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-md-square rounded-circle me-3" href="#"><i class="fab fa-instagram"></i></a>
                                            <a class="btn btn-md-square rounded-circle me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="footer-item">
                                        <h4 class="text-white mb-4">Useful Links</h4>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> Features</a>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> Services</a>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ's</a>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> Blogs</a>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> Contact</a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="footer-item">
                                        <h4 class="mb-4 text-white">Instagram</h4>
                                        <div class="row g-3">
                                            <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/instagram-footer-1.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/instagram-footer-1.jpg" data-lightbox="footerInstagram-1" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                           <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/instagram-footer-2.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/instagram-footer-2.jpg" data-lightbox="footerInstagram-2" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/instagram-footer-3.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/instagram-footer-3.jpg" data-lightbox="footerInstagram-3" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/instagram-footer-4.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/instagram-footer-4.jpg" data-lightbox="footerInstagram-4" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/instagram-footer-5.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/instagram-footer-5.jpg" data-lightbox="footerInstagram-5" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                           <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/instagram-footer-6.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/instagram-footer-6.jpg" data-lightbox="footerInstagram-6" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5" style="border-top: 1px solid rgba(255, 255, 255, 0.08);">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="row g-4">
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="d-flex">
                                                <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                    <i class="fas fa-map-marker-alt fa-2x"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-white">Address</h4>
                                                    <p class="mb-0">123 Street New York.USA</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="d-flex">
                                                <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                    <i class="fas fa-envelope fa-2x"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-white">Mail Us</h4>
                                                    <p class="mb-0">info@example.com</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="d-flex">
                                                <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                    <i class="fa fa-phone-alt fa-2x"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-white">Telephone</h4>
                                                    <p class="mb-0">(+012) 3456 7890</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Newsletter</h4>
                            <p class="text-white mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="position-relative rounded-pill mb-4">
                                <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                            </div>
                            <div class="d-flex flex-shrink-0">
                                <div class="footer-btn">
                                    <a href="#" class="btn btn-lg-square rounded-circle position-relative wow tada" data-wow-delay=".9s">
                                        <i class="fa fa-phone-alt fa-2x"></i>
                                        <div class="position-absolute" style="top: 2px; right: 12px;">
                                            <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column ms-3 flex-shrink-0">
                                    <span>Call to Our Experts</span>
                                    <a href="tel:+ 0123 456 7890"><span class="text-white">Free: + 0123 456 7890</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-start text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>