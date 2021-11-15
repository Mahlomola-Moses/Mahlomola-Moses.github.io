<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Dashboard - LBDM</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <!--    <link href="assets/img/favicon.png" rel="icon"> -->
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
        <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
        <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">


        <link href="assets/css/style.css" rel="stylesheet">

        <style>
            .modal-dialog {
            height: 90%; /* = 90% of the .modal-backdrop block = %90 of the screen */
            }
            .modal-content {
            height: 100%; /* = 100% of the .modal-dialog block */
            }

            @media (min-width: 576px){
                .modal-dialog {
                    max-width: 930px;
                }

                .modal-content {
                    height: 80%; /* = 100% of the .modal-dialog block */
                    }
            }

           
        </style>

    </head>

    <body>

        <!-- ======= Header ======= -->
        <?php include 'header.php'; ?>
        <!-- End Header -->

        <!-- ======= Sidebar ======= -->
        <?php include 'sidebar.php'; ?>
        <!-- End Sidebar-->

        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Books</h1>

            </div>
            <!-- End Page Title -->

            <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                    <br>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">Add Book</button>
                    <br>
                    <br>
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th>Cover</th>
                            <th scope="col">Name</th>
                            <th scope="col">Faculty</th>
                            <th scope="col">Type</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                         
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td> 
                                <img src="assets/img/logo.png" alt="" height="20%" width="20%">
                            </td>
                            <td>LAWS</td>
                            <td>LLB</td>
                            <td>Law</td>
                            <td>
                                <span class="badge bg-success">Available</span>
                            </td>
                            <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">Update</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                            
                          
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td> 
                                <img src="assets/img/logo.png" alt="" height="20%" width="20%">
                            </td>
                            <td>Bridie Kessler</td>
                            <td>ICT</td>
                            <td>Programming</td>
                            <td>
                            <span class="badge bg-danger">Booked</span>
                            </td>
                            <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">Update</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                            
                        </tr>
                  
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                    </div>
                </div>

                </div>
            </div>
            </section>
            <?php include 'addBookModal.php'; ?>

        </main>


        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/quill/quill.min.js"></script>
        <script src="assets/vendor/tinymce/tinymce.min.js"></script>
        <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="assets/vendor/chart.js/chart.min.js"></script>
        <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="assets/vendor/echarts/echarts.min.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
        <script>
            $('#coverPreview').hide();
        </script>

      

    </body>



</html>


                <div class="card-body" id="task">
                        <h5 class="card-title"></h5>
                        <ul class="col-8 list-group">
                            <li class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                            First checkbox
                            </li>
                        
                            <li class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                            Second checkbox
                            </li>
                            <li class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                            Third checkbox
                            </li>
                            <li class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                            Fourth checkbox
                            </li>
                            <li class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                            Fifth checkbox
                            </li>
                        </ul>

                    </div>