<!-- jQuery -->
<script src="<?= base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.nice-select.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.nicescroll.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.magnific-popup.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.countdown.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.slicknav.js'); ?>"></script>
<script src="<?= base_url('assets/js/mixitup.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/owl.carousel.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/main.js'); ?>"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom Script  -->
<script>
    document.querySelectorAll('.btn-decrease').forEach(button => {
        button.addEventListener('click', () => {
            const input = button.nextElementSibling;
            const value = parseInt(input.value) || 1;
            if (value > 1) input.value = value - 1;
        });
    });

    document.querySelectorAll('.btn-increase').forEach(button => {
        button.addEventListener('click', () => {
            const input = button.previousElementSibling;
            const value = parseInt(input.value) || 1;
            input.value = value + 1;
        });
    });
</script>
<!-- Slider Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 5, // Default number of visible slides
            spaceBetween: 20, // Space between slides
            loop: true, // Enable looping
            autoplay: {
                delay: 3000, // Time between slide transitions
                disableOnInteraction: false, // Continue autoplay after interactions
            },
            navigation: {
                nextEl: '.swiper-button-next', // Next button
                prevEl: '.swiper-button-prev', // Previous button
            },
            breakpoints: {
                320: {
                    slidesPerView: 1, // Smaller screens
                    spaceBetween: 10,
                },
                576: {
                    slidesPerView: 2, // Medium screens
                },
                768: {
                    slidesPerView: 3, // Medium screens
                },
                992: {
                    slidesPerView: 4, // Large screens
                },
                1200: {
                    slidesPerView: 5, // Extra large screens
                },
            },
        });

        // Stop autoplay on hover
        const swiperContainer = document.querySelector('.swiper-container');
        swiperContainer.addEventListener('mouseenter', () => swiper.autoplay.stop());
        swiperContainer.addEventListener('mouseleave', () => swiper.autoplay.start());
    });
</script>
<!-- JavaScript Countdown Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Set the target countdown date
        const countdownDate = new Date();
        countdownDate.setDate(countdownDate.getDate() + 5);

        function updateCountdown() {
            const now = new Date();
            const timeLeft = countdownDate - now;

            if (timeLeft <= 0) {
                document.getElementById('countdown').innerHTML = "Offer Expired!";
                return;
            }

            const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

            // Update each span individually
            document.getElementById('days').innerText = String(days).padStart(2, '0');
            document.getElementById('hours').innerText = String(hours).padStart(2, '0');
            document.getElementById('minutes').innerText = String(minutes).padStart(2, '0');
            document.getElementById('seconds').innerText = String(seconds).padStart(2, '0');
        }

        // Initial call and update every second
        updateCountdown();
        setInterval(updateCountdown, 1000);
    });
</script>