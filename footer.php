</div><!-- .container -->
    </div><!-- #content -->
    <footer id="colophon" class="site-footer bg-dark text-light py-4">
    <div class="footer-main">
      <div class="footer-left">
        <a href="#" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="Haviland Logo"></a>
        <div class="company-info">
          <div class="company-title">CÔNG TY CỔ PHẦN HAVILAND HOUSE</div>
          <div class="company-address">Trụ sở & chi nhánh</div>
          <div>Hải Số: 193 Nguyễn Văn Linh, Hải Châu, Đà Nẵng</div>
          <div>CN NHS: 25-27 Khu Mãi Động 3, Ngũ Hành Sơn, Đà Nẵng</div>
          <div>CN Sơn Trà: 05 An Nhơn 12, Sơn Trà, Đà Nẵng</div>
          <div>CN Hoà Xuân: 368 Nguyễn Phước Lan, Hoà Xuân, Đà Nẵng</div>
        </div>
      </div>
      <div class="footer-nav">
        <ul>
          <li><a href="#">Giới thiệu</a></li>
          <li><a href="#">Đặt phòng khách sạn</a></li>
          <li><a href="#">Hoạt động công ty</a></li>
          <li><a href="#">Căn hộ dài hạn</a></li>
          <li><a href="#">Vận hành khách sạn</a></li>
          <li><a href="#">Chính sách</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Cho thuê văn phòng</a></li>
          <li><a href="#">Tuyển dụng</a></li>
          <li><a href="#">Liên hệ</a></li>
        </ul>
      </div>
      <div class="footer-contact">
        <div>MST: 0401926013 cấp ngày 24/9/2018</div>
        <div>Được cấp bởi Sở kế hoạch đầu tư thành phố Đà Nẵng</div>
        <div class="footer-contacts"><span>1900 2323 43</span> | <span>dichvukhachhang@havilandhouse.com</span></div>
        <div class="footer-socials">
          <a href="#"><img src="https://ext.same-assets.com/1488520420/2572935895.png" height="24"></a>
          <a href="#"><img src="https://ext.same-assets.com/1488520420/3239110688.png" height="24"></a>
        </div>
        <div class="footer-copyright">© Copyright 2025</div>
      </div>
    </div>
    <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="site-info">
                      <?php
                        printf(
                            /* translators: %1$s: Theme name, %2$s: Theme author. */
                            esc_html__('%1$s by %2$s', 'cyno-haviland'),
                            '<a href="http://haviland.test/haviland/">CYNO  </a>',
                            '<a href="http://haviland.test/haviland/">CYNO  </a>'
                        );
                        ?>
                    </div><!-- .site-info -->
                </div>
                <div class="col-md-6">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'menu_class'     => 'nav justify-content-end',
                        'container'      => false,
                        'fallback_cb'    => '__return_false',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'          => 1,
                    ));
                    ?>
                </div>
            </div>
        </div>
  </footer>
</div>
<?php wp_footer(); ?>
</body>
</html> 