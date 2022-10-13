<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
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
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
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
        <div class="container" align="center" style="100px">

        <form method="POST" action="{{ route('edituser',$input->id) }}" enctype="multipart/form-data">
           @csrf
            <div class="mt-4">
                <x-jet-label for="title" value="{{ __('Title') }}" />
                <select name="title" type="text" class="px-3 py-2 block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" :value="old('title')" required autofocus autocomplete="title" >
                                   <option value="">Select </option>
                                   <option value="Prof">Prof</option>
                                   <option value="Dr">Dr</option>
                                   <option value="Eng(Mr)">Eng(Mr)</option>
                                   <option value="Eng(Ms)">Eng(Ms)</option>
                                   <option value="Mr">Mr</option>
                                   <option value="Ms">Ms</option>
                                   <option value="Mrs">Mrs</option>
                               </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Full Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="iname" value="{{ __('Name with Initials') }}" />
                <x-jet-input id="iname" class="block mt-1 w-full" type="text" name="iname" :value="old('iname')" required autofocus autocomplete="iname" />
            </div>

            <div class="mt-4">
                <x-jet-label for="gender" value="{{ __('Gender') }}" />
                <select name="gender" class="px-3 py-2 block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" :value="old('gender')" required autofocus autocomplete="gender" >
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                </select>
            </div>


            <div class="mt-4">
                <x-jet-label for="dob" value="{{ __('Date of Birth') }}" />
                <x-jet-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required autofocus autocomplete="dob" />
            </div>

            <div class="mt-4">
                <x-jet-label for="address" value="{{ __('Address') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            </div>

            <div class="mt-4">
                <x-jet-label for="phone" value="{{ __('Contact Number') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            </div>

            <div class="mt-4">
                <x-jet-label for="nic" value="{{ __('NIC') }}" />
                <x-jet-input id="nic" class="block mt-1 w-full" type="text" name="nic" :value="old('nic')" required autofocus autocomplete="nic" />
            </div>

            <div class="mt-4">
                <x-jet-label for="profession" value="{{ __('Profession/Designation') }}" />
                <x-jet-input id="profession" class="block mt-1 w-full" type="text" name="profession" :value="old('profession')" required autofocus autocomplete="profession" />
            </div>

            <div class="mt-4">
                <x-jet-label for="currentplaceofwork" value="{{ __('Present Place of work') }}" />
                <x-jet-input id="currentplaceofwork" class="block mt-1 w-full" type="text" name="currentplaceofwork" :value="old('currentplaceofwork')" required autofocus autocomplete="currentplaceofwork" />
            </div>

           

            <div class="mt-4">
                <x-jet-label for="periodofassociation" value="{{ __('Period of Association with the Faculty') }}" />
                <x-jet-input id="periodofassociation" class="block mt-1 w-full" type="text" name="periodofassociation" :value="old('currentplaceofwork')" required autofocus autocomplete="periodofassociation" />
            </div>

            <div class="mt-4">
                <x-jet-label for="typeofassociation" value="{{ __('Type of Association with the Faculty') }}" />
                <select name="typeofassociation" class="px-3 py-2 block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" :value="old('typeofassociation')" required autofocus autocomplete="typeofassociation" >
                        <option value="">Select </option>
                        <option value="Undergraduate">Undergraduate</option>
                        <option value="Postgraduate">Postgraduate</option>
                        <option value="Academic Staff">Academic Staff</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="qoff" value="{{ __('Degrees / Qualifications Obtained from the Faculty') }}" />
                <x-jet-input id="qoff" class="block mt-1 w-full" type="text" name="qoff" :value="old('qoff')" required autofocus autocomplete="qoff" />
            </div>

            <div class="mt-4">
                <x-jet-label for="yoa" value="{{ __('Year of Award') }}" />
                <x-jet-input id="yoa" class="block mt-1 w-full" type="text" name="yoa" :value="old('yoa')" required autofocus autocomplete="yoa" />
            </div>

            <div class="mt-4">
                <x-jet-label for="oq" value="{{ __('Other Academic/ Professional Qualifications') }}" />
                <x-jet-input id="oq" class="block mt-1 w-full" type="text" name="oq" :value="old('oq')" required autofocus autocomplete="oq" />
            </div>

            <div class="mt-4">
                <x-jet-label for="areasofspecialization" value="{{ __('Key Areas of Specialization') }}" />
                <x-jet-input id="areasofspecialization" class="block mt-1 w-full" type="text" name="areasofspecialization" :value="old('areasofspecialization')" required autofocus autocomplete="areasofspecialization" />
            </div>

            <div class="mt-4">
                <x-jet-label for="amtpaid" value="{{ __('Amount Paid') }}" />
                <x-jet-input id="amtpaid" class="block mt-1 w-full" type="text" name="amtpaid" :value="old('amtpaid')" required autofocus autocomplete="amtpaid" />
            </div>

            <div class="mt-4">
                <x-jet-label for="mop" value="{{ __('Mode of Payment') }}" />
                <select name="mop" class="px-3 py-2 block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" :value="old('mop')" required autofocus autocomplete="mop" >
                                   <option value="">Select </option>
                                   <option value="Cash">Cash</option>
                                   <option value="Bank Transfer">Bank Transfer</option>
                                   <option value="Cheque">Cheque</option>
                                   <option value="Bank Draft">Bank Draft</option>
                                   <option value="Credit Card">Credit Card</option>
                                   <option value="Other">Other</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="nob" value="{{ __('Name of the Bank') }}" />
                <x-jet-input id="nob" class="block mt-1 w-full" type="text" name="nob" :value="old('nob')" required autofocus autocomplete="nob" />
            </div>

            <div class="mt-4">
                <x-jet-label for="dop" value="{{ __('Date of Payment') }}" />
                <x-jet-input id="dop" class="block mt-1 w-full" type="date" name="dop" :value="old('dop')" required autofocus autocomplete="dop" />
            </div>

           

            

          

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
 

        



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