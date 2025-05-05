<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>WP</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<header id="masthead" class="site-header">
        <div class="top-bar">
            <div class="container">
                <div class="topbar-right">
                    <a href="#" class="download">Tải ứng dụng</a>
                </div>
                <div class="topbar-right">
                    <span class="language">Tiếng Việt</span>
                    <a href="#" class="account">Thông tin tài khoản</a>
                </div>
            </div>
        </div>
        <div id="content" class="site-content">
            <div class="container py-4"> 
                <div class="main-content">
                    <!-- Navigation -->   
                    <div class="nav-container">
                        <a href="#" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Haviland Logo"></a>
                        <nav>
                            <ul>
                                <li><a href="<?php echo site_url('/'); ?>">Trang chủ</a></li>                                
                                <li><a href="<?php echo site_url('/datphong/'); ?>">Đặt phòng</a></li>
                                <li><a href="#">Căn hộ dài hạn</a></li>
                                <li><a href="#">Tư vấn đầu tư</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Tin tức</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="hero">
    <img class="hero-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-banner.jpeg" alt="Hero Banner">
    <div class="hero-content">
      <div class="hero-title">
        <span class="event">DIEE 2025</span>
        <h1>Book ngay vé <span class="gold">Vàng</span></h1>
      </div>

      <!-- Search Bar -->
      <div class="search-bar">
        <div class="search-tabs">
          <button class="active">Đặt phòng khách sạn</button>
          <button>Cho thuê mặt bằng</button>
          <button>Cho thuê văn phòng</button>
          <button>Cho thuê căn hộ</button>
        </div>
        <form class="search-form">
          <select class="location">
            <option>Chọn vị trí</option>
          </select>
          <input class="date-in" type="text" placeholder="Ngày nhận phòng">
          <input class="date-out" type="text" placeholder="Ngày trả phòng">
          <input class="guests" type="text" placeholder="Số phòng & Số khách">
          <button type="submit" class="search-btn">Tìm kiếm</button>
        </form>
      </div>
    </div>
  </section>
</header>



   

   

   
    
