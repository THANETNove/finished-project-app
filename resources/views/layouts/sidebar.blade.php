 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         {{--   <div class="sidebar-brand-icon">
             <i class="fa-solid fa-house  icon-sb"></i>
         </div> --}}
         {{--  <img class="icon-logo" src="{{ URL::asset('/assets/img/logo_nsru_brand.png') }}"> --}}
         <div class="sidebar-brand-text mx-3">ระบบผลงานนักศึกษา</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Charts -->
     <li class="nav-item">
         <a class="nav-link" href="{{ url('/home') }}">
             <i class="fa-brands fa-microsoft"></i>
             <span>ผลงาน</span></a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="{{ url('/profile') }}">
             <i class="fa-solid fa-graduation-cap"></i>
             <span>โปรไฟล์</span></a>
     </li>


     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>



 </ul>
 <!-- End of Sidebar -->
