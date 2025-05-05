<?php get_header(); ?>

<!-- Hero Section -->
<div class="container-fluid bg-dark text-white py-5 mb-4" style="background: url('<?php echo CYNO_HAVILAND_IMAGES_URL; ?>/banner.png') center/cover no-repeat; min-height: 250px;">
  <div class="container py-5">
    <h1 class="display-4 fw-bold">Danh sách khách sạn</h1>
    <p class="lead">Khám phá và đặt phòng khách sạn cao cấp tại Haviland</p>
  </div>
</div>

<div class="container mb-5">
  <!-- Search/Filter Section (có thể mở rộng sau) -->
  <form class="row g-3 mb-4">
    <div class="col-md-4">
      <input type="text" class="form-control" placeholder="Tìm kiếm theo tên khách sạn...">
    </div>
    <div class="col-md-3">
      <select class="form-select">
        <option>Chọn thành phố</option>
        <option>Đà Nẵng</option>
        <option>Hội An</option>
        <option>Huế</option>
      </select>
    </div>
    <div class="col-md-3">
      <select class="form-select">
        <option>Sắp xếp theo</option>
        <option>Giá thấp đến cao</option>
        <option>Giá cao đến thấp</option>
        <option>Đánh giá cao nhất</option>
      </select>
    </div>
    <div class="col-md-2">
      <button class="btn btn-primary w-100" type="submit">Lọc</button>
    </div>
  </form>

  <!-- Hotel List -->
  <div class="row g-4">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
          <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('medium_large'); ?>" class="card-img-top" alt="<?php the_title(); ?>">
          <?php else : ?>
            <img src="<?php echo CYNO_HAVILAND_IMAGES_URL; ?>/assets/images/sale4.webp" class="card-img-top" alt="No image">
          <?php endif; ?>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title mb-2"><?php the_title(); ?></h5>
            <p class="card-text text-muted small mb-2">
              <?php if ($address = get_post_meta(get_the_ID(), 'address', true)) echo '<i class="bi bi-geo-alt"></i> ' . esc_html($address); ?>
            </p>
            <div class="mb-2">
              <!-- Tiện ích mẫu, có thể lấy từ taxonomy hoặc custom field -->
              <span class="badge bg-success">Wifi</span>
              <span class="badge bg-info text-dark">Bể bơi</span>
              <span class="badge bg-warning text-dark">Ăn sáng</span>
            </div>
            <div class="mt-auto d-flex justify-content-between align-items-center">
              <span class="fw-bold text-primary fs-5">
                <?php if ($price = get_post_meta(get_the_ID(), 'price', true)) echo number_format($price) . 'đ/đêm'; else echo 'Liên hệ'; ?>
              </span>
              <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary btn-sm">Xem chi tiết</a>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; else: ?>
      <div class="col-12">
        <div class="alert alert-warning">Không tìm thấy khách sạn nào.</div>
      </div>
    <?php endif; ?>
  </div>

  <!-- Pagination -->
  <div class="mt-5 d-flex justify-content-center">
    <?php
      the_posts_pagination(array(
        'mid_size' => 2,
        'prev_text' => __('&laquo; Trước'),
        'next_text' => __('Sau &raquo;'),
        'class' => 'pagination',
      ));
    ?>
  </div>
</div>

<?php get_footer(); ?> 