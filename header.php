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
                        <a href="#" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="Haviland Logo"></a>
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
    <img class="hero-bg" src="https://ext.same-assets.com/1488520420/1447933214.jpeg" alt="Hero Banner">
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

  <!-- Featured Hotels -->
  <section class="hotels featured">
    <div class="section-title">KHÁCH SẠN GIÁ TỐT TẠI HAVILAND</div>
    <div class="hotel-cards">
      <!-- Example hotel card -->
      <div class="hotel-card">
        <img src="<?php echo get_template_directory_uri(); ?>/image/KS1.jpg" alt="Shi House by Haviland">
        <div class="hotel-info">
          <div class="name">Shi House by Haviland</div>
          <div class="address">Địa chỉ: 232 Trần Hưng Đạo, An Hải Tây, Sơn Trà</div>
          <div class="price">1.050.000 <span>Đồng/Ngày</span></div>
          <a href="#" class="card-btn">Xem phòng</a>
        </div>
      </div>
      
      <div class="hotel-card">
        <img src="<?php echo get_template_directory_uri(); ?>/image/KS2.webp" alt="Golden Bamboo Villa & Spa">
        <div class="hotel-info">
          <div class="name">Golden Bamboo Villa & Spa An Bang Beach Hoian</div>
          <div class="address">Địa chỉ: Lô 18 Hai Bà Trưng, bãi biển An Bàng, Hội An</div>
          <div class="price">1.080.000 <span>Đồng/Ngày</span></div>
          <a href="#" class="card-btn">Xem phòng</a>
        </div>
      </div>
      <div class="hotel-card">
        <img src="<?php echo get_template_directory_uri(); ?>/image/KS3.webp" alt="Dragon View Riverfront Hotel">
        <div class="hotel-info">
          <div class="name">Dragon View Riverfront Hotel By Haviland</div>
          <div class="address">Địa chỉ: 07 Lê Hồng Phong</div>
          <div class="price">1.550.000 <span>Đồng/Ngày</span></div>
          <a href="#" class="card-btn">Xem phòng</a>
        </div>
      </div>
    </div>
    
  </section>

  <!-- Most Popular Hotels -->
  <section class="hotels popular">
    <div class="section-title">KHÁCH SẠN ĐƯỢC YÊU THÍCH NHẤT TẠI HAVILAND</div>
    <div class="hotel-cards">
      <div class="hotel-card">
        <img src="https://ext.same-assets.com/1488520420/1206928580.png" alt="Sujet Residence Da Nang">
        <div class="hotel-info">
          <div class="name">Sujet Residence Da Nang by Haviland</div>
          <div class="address">Địa chỉ: 01 Trần Quốc Toản</div>
          <div class="price">260.000 <span>Đồng/Ngày</span></div>
          <a href="#" class="card-btn">Xem phòng</a>
        </div>
      </div>
      <div class="hotel-card">
        <img src="<?php echo get_template_directory_uri(); ?>/image/SALE2.webp" alt="Golden Bamboo Villa & Spa">
        <div class="hotel-info">
          <div class="name">Golden Bamboo Villa & Spa An Bang Beach Hoian</div>
          <div class="address">Địa chỉ: Lô 18 Hai Bà Trưng, bãi biển An Bàng, Hội An</div>
          <div class="price">1.080.000 <span>Đồng/Ngày</span></div>
          <a href="#" class="card-btn">Xem phòng</a>
        </div>
      </div>
      <div class="hotel-card">
        <img src="<?php echo get_template_directory_uri(); ?>/image/sale3.webp" alt="Doha Central Bliss Danang Hotel">
        <div class="hotel-info">
          <div class="name">Doha Central Bliss Danang Hotel by Haviland</div>
          <div class="address">Địa chỉ: 193 Nguyễn Văn Linh, Hải Châu, Đà Nẵng</div>
          <div class="price">375.000 <span>Đồng/Ngày</span></div>
          <a href="#" class="card-btn">Xem phòng</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="services">
    <div class="section-title">MỘT SỐ DỊCH VỤ KHÁC TẠI HAVILAND</div>
    <div class="services-grid">
      <a href="#" class="service-btn">CHO THUÊ MẶT BẰNG</a>
      <a href="#" class="service-btn">CHO THUÊ CĂN HỘ</a>
      <a href="#" class="service-btn">CHO THUÊ VĂN PHÒNG</a>
      <a href="#" class="service-btn">CHO THUÊ NHÀ NGUYÊN CĂN</a>
      <a href="#" class="service-btn">TƯ VẤN ĐẦU TƯ</a>
      <a href="#" class="service-btn">QUẢN LÝ VẬN HÀNH KHÁCH SẠN</a>
      <a href="#" class="service-btn">QUẢN LÝ VẬN HÀNH CĂN HỘ</a>
      <a href="#" class="service-btn">QUẢN LÝ VẬN HÀNH VĂN PHÒNG</a>
    </div>
  </section>

  <!-- Partners and Brands Section -->
  <section class="brands">
    <div class="brands-groups">
      <div class="brands-row">
        <img src="https://ext.same-assets.com/1488520420/3083103231.bin" alt="SeaColor">
        <img src="https://ext.same-assets.com/1488520420/2208809516.bin" alt="Partner logo">
        <img src="https://ext.same-assets.com/1488520420/1119282689.bin" alt="Partner logo">
        <img src="https://ext.same-assets.com/1488520420/1017454673.bin" alt="Partner logo">
        <img src="https://ext.same-assets.com/1488520420/364598141.bin" alt="Happy Day">
        <img src="https://ext.same-assets.com/1488520420/1868224805.bin" alt="Partner logo">
        <img src="https://ext.same-assets.com/1488520420/1850890028.bin" alt="Partner logo">
        <img src="https://ext.same-assets.com/1488520420/36402021.bin" alt="Partner logo">
      </div>
      <div class="brands-row">
        <img src="https://ext.same-assets.com/1488520420/3141739386.bin" alt="Partner logo">
        <img src="https://ext.same-assets.com/1488520420/6559296.bin" alt="Partner logo">
        <img src="https://ext.same-assets.com/1488520420/3239110688.png" alt="Happy Day">
        <img src="https://ext.same-assets.com/1488520420/3924273186.png" alt="Logo 3">
        <img src="https://ext.same-assets.com/1488520420/2888702700.png" alt="Logo 1">
        <img src="https://ext.same-assets.com/1488520420/444804574.png" alt="Logo 2">
      </div>
      <div class="brands-row">
        <img src="https://ext.same-assets.com/1488520420/4208286103.png" alt="Theme Hotel">
        <img src="https://ext.same-assets.com/1488520420/2572935895.png" alt="Haviland">
      </div>
      <div class="brands-row">
        <img src="https://ext.same-assets.com/1488520420/2444102820.png" alt="apa">
      </div>
    </div>
  </section>

  <!-- Contact CTA -->
  <section class="cta-contact">
    <div class="cta-box">
      <button class="contact-btn">LIÊN HỆ<br><span>Gửi thông tin để được tư vấn</span></button>
    </div>
  </section>
   

   

   
    
