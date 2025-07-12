</div>
    </div>
  </div>

  <footer class="py-4 mt-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 text-md-start">
          <div class="d-flex align-items-center justify-content-center justify-content-md-start">
            <i class="fas fa-music text-white me-2"></i>
            <span class="text-white fw-bold">Florence</span>
          </div>
        </div>
        <div class="col-md-6 text-md-end mt-3 mt-md-0">
          <p class="mb-0 text-white-50">
            &copy; <?= date('Y') ?> Florence Event Management. 
            <span class="text-white">Built with ❤️</span>
          </p>
        </div>
      </div>
      
      <hr class="my-3 opacity-25">
      
      <div class="row">
        <div class="col-12">
          <div class="d-flex justify-content-center gap-3">
            <a href="#" class="text-white-50 text-decoration-none fs-5">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-white-50 text-decoration-none fs-5">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-white-50 text-decoration-none fs-5">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-white-50 text-decoration-none fs-5">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    // Add smooth animation on page load
    document.addEventListener('DOMContentLoaded', function() {
      const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
      };
      
      const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
          }
        });
      }, observerOptions);
      
      document.querySelectorAll('.main-content').forEach(content => {
        content.style.opacity = '0';
        content.style.transform = 'translateY(20px)';
        content.style.transition = 'all 0.6s ease';
        observer.observe(content);
      });
    });
  </script>
</body>
</html>