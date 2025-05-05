<?php
/**
 * The template for displaying the footer
 *
 * @package cyno-haviland
 */
?>
<footer class="bg-gray-900 text-white">
    <div class="container py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div class="space-y-4">
                <img src="<?php echo CYNO_HAVILAND_IMAGES_URL; ?>/assets/images/logo.png" alt="Haviland Logo" class="h-12">
                <p class="text-gray-400">Haviland - Hệ thống khách sạn và căn hộ cao cấp tại Đà Nẵng</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Liên kết nhanh</h3>
                <ul class="space-y-2">
                    <li><a href="<?php echo site_url('/'); ?>" class="text-gray-400 hover:text-white">Trang chủ</a></li>
                    <li><a href="<?php echo site_url('/datphong/'); ?>" class="text-gray-400 hover:text-white">Đặt phòng</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Căn hộ dài hạn</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Tư vấn đầu tư</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Liên hệ</h3>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt mt-1 mr-2"></i>
                        <span>29 Yên Bái, Hải Châu, Đà Nẵng</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone-alt mr-2"></i>
                        <span>0236 1234 567</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope mr-2"></i>
                        <span>info@haviland.vn</span>
                    </li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Đăng ký nhận tin</h3>
                <p class="text-gray-400 mb-4">Nhận thông tin về ưu đãi và tin tức mới nhất từ Haviland</p>
                <form class="space-y-2">
                    <input type="email" placeholder="Email của bạn" class="w-full px-4 py-2 rounded bg-gray-800 text-white border border-gray-700 focus:outline-none focus:border-primary">
                    <button type="submit" class="w-full bg-primary text-white px-4 py-2 rounded hover:bg-primary/90">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-gray-800">
        <div class="container py-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">© <?php echo date('Y'); ?> Haviland. All rights reserved.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Điều khoản sử dụng</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Chính sách bảo mật</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Chính sách cookie</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>