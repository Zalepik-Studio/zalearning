
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Zalearning</title>
</head>
<body>
   <div style="position: absolute; right: 1rem; top: 50%; z-index: 10;">
      <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
         < </button>
   </div>
   <div class="offcanvas offcanvas-end" style="top: 4rem;" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
         <h5 class="offcanvas-title" id="offcanvasRightLabel">Daftar Modul</h5>
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="progress mx-2" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
         <div class="progress-bar" style="width: 50%"></div>
      </div>
      <p class="mx-2">50% selesai</p>

      <div class="offcanvas-body">
         <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar w-100">
            <div class="position-sticky">
               <ul class="nav flex-column">
                  <li class="nav-item">
                     <a class="nav-link active d-flex" style="justify-content: space-between;" href="#">
                        <span class="toggle-icon float-end text-black" data-bs-toggle="collapse" href="#subMateri3" role="button" aria-expanded="false" data-submateri="subMateri3" aria-controls="subMateri3">
                           <i class="fas fa-caret-down"></i>
                           Fundamental JavaScript
                        </span>
                        <span class="float-end">
                           0/7
                        </span>
                     </a>
                     <ul class="sub-nav collapse list-unstyled" id="subMateri3">
                        <li class="nav-item">
                           <a class="nav-link" href="/class/pengenalan-dan-sejarah-javascript">
                              <i class="fas fa-check-circle text-success me-2"></i>Pengenalan dan Sejarah JavaScript (Gratis)
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                              <i class="fas fa-check-circle text-success  me-2"></i>JavaScript Hello World (Gratis)
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                              <i class="fas fa-circle text-muted me-2"></i>JavaScript Comments (Gratis)
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                              <i class="fas fa-circle text-muted me-2"></i>JavaScript Variable (Gratis)
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                              <i class="fas fa-circle text-muted me-2"></i>Tipe Data di JavaScript (Gratis)
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                              <i class="fas fa-circle text-muted me-2"></i>JavaScript Operators (Gratis)
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                              <i class="fas fa-circle text-muted me-2"></i>Pengkondisian di JavaScript(Gratis)
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active d-flex" style="justify-content: space-between;" href="#">
                        <span class="toggle-icon float-end text-black" data-bs-toggle="collapse" href="#subMateri4" role="button" aria-expanded="false" data-submateri="subMateri4" aria-controls="subMateri4">
                           <i class="fas fa-caret-down"></i>
                           Struktur Data
                        </span>
                        <span class="float-end">
                           0/5
                        </span>
                     </a>
                     <ul class="sub-nav collapse list-unstyled" id="subMateri4">
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                              <i class="fas fa-check-circle text-success me-2"></i>-
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                              <i class="fas fa-check-circle text-success  me-2"></i>-
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                              <i class="fas fa-circle text-muted me-2"></i>-
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                              <i class="fas fa-circle text-muted me-2"></i>-
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                              <i class="fas fa-circle text-muted me-2"></i>-
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
   </div>
</body>
</html>