<?php get_header(); ?>  



    <!-- Room Listings and Filters -->
    <section class="room-listings">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 py-6">
                <!-- Room Listings -->
                <div class="lg:col-span-3 space-y-6">
                    <!-- Room 1 -->
                    <div class="room-card flex flex-col md:flex-row bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="w-full md:w-1/3">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/datphong1.webp" alt="Seahorse Tropical Đà Nẵng Hotel by Haviland" class="w-full h-48 object-cover">
                        </div>
                        <div class="p-4 flex-1">
                            <h3 class="text-lg font-semibold text-primary">Seahorse Tropical Đà Nẵng Hotel by Haviland</h3>
                            <p class="text-sm text-muted-foreground">Địa chỉ: 29 Yên Bái, Hải Châu, Đà Nẵng</p>
                            <div class="mt-2 flex flex-wrap gap-2 text-sm text-green-600">
                                <span>✓ Bãi đỗ xe</span>
                                <span>✓ ăn sáng</span>
                                <span>✓ ăn tối 24h/ngày</span>
                                <span>✓ 3</span>
                            </div>
                            <div class="mt-4 flex justify-between items-center">
                                <div>
                                    <p class="text-sm text-muted-foreground">Chi tước</p>
                                    <p class="text-xl font-bold text-primary">200.000 <span class="text-sm font-normal">đồng/ngày</span></p>
                                    <p class="text-sm text-muted-foreground">Phòng vệ giặt: 1 phòng 1 đêm</p>
                                </div>
                                <button class="bg-primary text-white px-4 py-2 rounded-md hover:bg-primary/90">Xem phòng</button>
                            </div>
                        </div>
                    </div>

                    <!-- Room 2 -->
                    <div class="room-card flex flex-col md:flex-row bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="w-full md:w-1/3">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/datphong2.webp" alt="Happy Day Hotel & Spa" class="w-full h-48 object-cover">
                        </div>
                        <div class="p-4 flex-1">
                            <h3 class="text-lg font-semibold text-primary">Happy Day Hotel & Spa</h3>
                            <p class="text-sm text-muted-foreground">Địa chỉ: 160 Bạch Đằng, P. Hải Châu, Hải Châu</p>
                            <div class="mt-2 flex flex-wrap gap-2 text-sm text-green-600">
                                <span>✓ Ban công</span>
                                <span>✓ Thang máy</span>
                            </div>
                            <div class="mt-4 flex justify-between items-center">
                                <div>
                                    <p class="text-sm text-muted-foreground">Chi tước</p>
                                    <p class="text-xl font-bold text-primary">400.000 <span class="text-sm font-normal">đồng/ngày</span></p>
                                </div>
                                <button class="bg-primary text-white px-4 py-2 rounded-md hover:bg-primary/90">Xem phòng</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Filters -->
                <div class="lg:col-span-1">
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h4 class="text-sm font-semibold text-muted-foreground mb-4">SẮP XẾP: GIÁ THẤP ĐẾN CAO</h4>
                        <select class="w-full border border-input rounded-md p-2">
                            <option>Giá thấp đến cao</option>
                            <option>Giá cao đến thấp</option>
                        </select>

                        <h4 class="text-sm font-semibold text-muted-foreground mt-6 mb-2">LỌC THEO</h4>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-muted-foreground">Chi tước</label>
                            <input type="range" min="0" max="30000000" value="30000000" class="w-full mt-2">
                            <div class="flex justify-between text-sm text-muted-foreground">
                                <span>0 đ</span>
                                <span>30.000.000 đ</span>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h5 class="text-sm font-semibold text-muted-foreground mb-2">Đánh giá</h5>
                            <label class="flex items-center mb-2">
                                <input type="radio" name="rating" value="650000-900000" class="mr-2">
                                <span>650.000 VNĐ - 900.000 VNĐ</span>
                            </label>
                            <label class="flex items-center mb-2">
                                <input type="radio" name="rating" value="900000-1500000" class="mr-2">
                                <span>900.000 VNĐ - 1.500.000 VNĐ</span>
                            </label>
                            <label class="flex items-center mb-2">
                                <input type="radio" name="rating" value="1500000-5500000" class="mr-2">
                                <span>1.500.000 VNĐ - 5.500.000 VNĐ</span>
                            </label>
                        </div>

                        <div>
                            <h5 class="text-sm font-semibold text-muted-foreground mb-2">Các bộ lọc bổ sung</h5>
                            <label class="flex items-center mb-2">
                                <input type="checkbox" class="mr-2">
                                <span>Chọn tiện ích</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?> 