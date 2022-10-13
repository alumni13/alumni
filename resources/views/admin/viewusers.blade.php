<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PEFAA</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
    <div class="row p-8 m-1 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-8">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')
      
      <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->
        
        <div  style="overflow-y:auto;height:auto; padding:120px; ">
            <div align="center" style="padding:120px;">
                <table>
                    <tr style="background-color:black">
                        <th style="padding:10px">ID</th>
                        <th style="padding:10px">Title</th>
                        <th style="padding:10px">Name</th>
                        <th style="padding:10px">Name with Initials</th>
                        <th style="padding:10px">Gender</th>
                        <th style="padding:10px">Date of Birth</th>
                        <th style="padding:10px">Address</th>
                        <th style="padding:10px">Contact number</th>
                        <th style="padding:10px">NIC</th>
                        <th style="padding:10px">Designation/Profession</th>
                        <th style="padding:10px">Current place of work</th>
                        <th style="padding:10px">Period of Association</th>
                        <th style="padding:10px">Type of Association</th>
                        <th style="padding:10px">Qualifications obtained from the Faculty</th>
                        <th style="padding:10px">Year of award</th>
                        <th style="padding:10px">Other Qualifications</th>
                        <th style="padding:10px">Areas of Specialization</th>
                        <th style="padding:10px">Amount Paid</th>
                        <th style="padding:10px">Method of Payement</th>
                        <th style="padding:10px">Name of the Bank</th>
                        <th style="padding:10px">Date of Payment</th>
                        <th style="padding:10px">Email</th>
                        <th style="padding:10px">User type</th>
                        <th style="padding:10px">Delete</th>
                        <th style="padding:10px">Update</th>
                    </tr>

                    @foreach($data as $users)
                    <tr align="center" style="background-color:ash;">
                        <td>{{$users->id}}</td>
                        <td>{{$users->title}}</td>
                        <td>{{$users->name}}</td>
                        <td>{{$users->iname}}</td>
                        <td>{{$users->gender}}</td>
                        <td>{{$users->dob}}</td>
                        <td>{{$users->address}}</td>
                        <td>{{$users->phone}}</td>
                        <td>{{$users->nic}}</td>
                        <td>{{$users->profession}}</td>
                        <td>{{$users->currentplaceofwork}}</td>
                        <td>{{$users->periodofassociation}}</td>
                        <td>{{$users->typeofassociation}}</td>
                        <td>{{$users->qoff}}</td>
                        <td>{{$users->yoa}}</td>
                        <td>{{$users->oq}}</td>
                        <td>{{$users->areasofspecialization}}</td>
                        <td>{{$users->amtpaid}}</td>
                        <td>{{$users->mop}}</td>
                        <td>{{$users->nob}}</td>
                        <td>{{$users->dop}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->usertype == '1' ? 'Admin':'User' }}</td>
                        <td><a class="btn btn-danger" href="{{url('deleteuser->$users->id')}}">Delete</a></td>
                        <td><a class="btn btn-primary" href="{{url('updateuser',$users->id)}}">Update</a></td>
                    </tr>

                    @endforeach


                </table>

            </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>