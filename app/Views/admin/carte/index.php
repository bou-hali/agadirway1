<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>bus_management</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="<?= base_url('admin/assets/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('admin/assets/css/lineicons.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('admin/assets/css/materialdesignicons.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('admin/assets/css/fullcalendar.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('admin/assets/css/main.css') ?>" />
  </head>
  <body>
    <!-- ======== Preloader =========== -->
    <div id="preloader">
      <div class="spinner"></div>
    </div>
    <!-- ======== Preloader =========== -->

    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
      <div class="navbar-logo">
        <a href="<?= base_url('index.html') ?>">
          <p>hajar bouhali</p>
        </a>
      </div>
      <nav class="sidebar-nav">
        <ul>
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_1"
              aria-controls="ddmenu_1"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <!-- Dashboard SVG Icon -->
              </span>
              <span class="text">Dashboard</span>
            </a>
            <ul id="ddmenu_1" class="collapse show dropdown-nav">
              <li>
                <a href="<?= base_url('/admin1/index') ?>" class="active">bus management</a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_2"
              aria-controls="ddmenu_2"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <!-- Pages SVG Icon -->
              </span>
              <span class="text">Pages</span>
            </a>
            <ul id="ddmenu_2" class="collapse dropdown-nav">
              <li>
                <a href="<?= base_url('/admin1/settings') ?>">Settings</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('/admin1/invoice') ?>">
              <span class="icon">
                <!-- Invoice SVG Icon -->
              </span>
              <span class="text">Invoice</span>
            </a>
          </li>
          <span class="divider"><hr /></span>
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_4"
              aria-controls="ddmenu_4"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <!-- Trajet SVG Icon -->
              </span>
              <span class="text">trajet</span>
            </a>
            <ul id="ddmenu_4" class="collapse dropdown-nav">
              <li>
                <a href="<?= base_url('/admin1/trajet') ?>">Our trajet</a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_55"
              aria-controls="ddmenu_55"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <!-- Chauffeur SVG Icon -->
              </span>
              <span class="text">chauffeur</span>
            </a>
            <ul id="ddmenu_55" class="collapse dropdown-nav">
              <li>
                <a href="<?= base_url('/admin1/icons') ?>">List</a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_5"
              aria-controls="ddmenu_5"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <!-- Users SVG Icon -->
              </span>
              <span class="text">Users</span>
            </a>
            <ul id="ddmenu_5" class="collapse dropdown-nav">
              <li>
                <a href="<?= base_url('/admin1/form-elements') ?>">Our clients</a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== header start ========== -->
      <header class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-6">
              <div class="header-left d-flex align-items-center">
                <div class="menu-toggle-btn mr-15">
                  <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                    <i class="lni lni-chevron-left me-2"></i> Menu
                  </button>
                </div>
                <div class="header-search d-none d-md-flex">
                  <form action="#">
                    <input type="text" placeholder="Search..." />
                    <button><i class="lni lni-search-alt"></i></button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-6">
              <div class="header-right">
                <!-- Profile Section -->
                <div class="profile-box ml-15">
                  <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="profile-info">
                      <div class="info">
                        <div class="image">
                          <img src="<?= base_url('admin/assets/images/profile/ana.jpg') ?>" alt="" />
                        </div>
                        <div>
                          <h6 class="fw-500">hajar bh</h6>
                          <p>Admin</p>
                        </div>
                      </div>
                    </div>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                    <li>
                      <div class="author-info flex items-center !p-1">
                        <div class="image">
                          <img src="<?= base_url('admin/assets/images/profile/profile-image.png') ?>" alt="image">
                        </div>
                        <div class="content">
                          <h4 class="text-sm">Adam Joe</h4>
                          <a class="text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white text-xs" href="#">Email@gmail.com</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <section class="section">
        <div class="container-fluid">
          <h1 class="mb-4">Manage Users</h1>
        <?php if (!empty($cartes)): ?>
            <table class="table table-striped">
            <thead>
                  <tr>
                      <th>ID</th>
                      <th>Nom</th>
                      <th>Email</th>
                      <th>Carte</th>
                      <th>Message</th>
                      <th>Documents</th>
                      <th>Date Créée</th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach ($cartes as $carte): ?>
                      <tr>
                          <td><?= esc($carte['id']) ?></td>
                          <td><?= esc($carte['nom']) ?></td>
                          <td><?= esc($carte['email']) ?></td>
                          <td><?= esc($carte['carte']) ?></td>
                          <td><?= esc($carte['message']) ?></td>
                          <td><?= esc($carte['documents']) ?></td>
                          <td><?= esc($carte['created_at']) ?></td>
                      </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
        <?php else: ?>
          <p>Aucune carte demandée trouvée.</p>
        <?php endif; ?>
      </section>
      <!-- ========== tab components end ========== -->

      <!-- ========== footer start =========== -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 order-last order-md-first">
              <div class="copyright text-center text-md-start">
                <p class="text-sm">
                  Designed and Developed by
                  <a href="https://plainadmin.com" rel="nofollow" target="_blank">
                    PlainAdmin
                  </a>
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="terms d-flex justify-content-center justify-content-md-end">
                <a href="#0" class="text-sm">Term & Conditions</a>
                <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="<?= base_url('admin/assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('admin/assets/js/Chart.min.js') ?>"></script>
    <script src="<?= base_url('admin/assets/js/dynamic-pie-chart.js') ?>"></script>
    <script src="<?= base_url('admin/assets/js/moment.min.js') ?>"></script>
    <script src="<?= base_url('admin/assets/js/fullcalendar.js') ?>"></script>
    <script src="<?= base_url('admin/assets/js/jvectormap.min.js') ?>"></script>
    <script src="<?= base_url('admin/assets/js/world-merc.js') ?>"></script>
    <script src="<?= base_url('admin/assets/js/polyfill.js') ?>"></script>
    <script src="<?= base_url('admin/assets/js/main.js') ?>"></script>
  </body>
</html>