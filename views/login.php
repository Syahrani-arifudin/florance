<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Florence Event Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .login-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            max-width: 450px;
            width: 100%;
            overflow: hidden;
        }
        
        .login-header {
            background: linear-gradient(45deg, #8b5cf6, #ec4899);
            color: white;
            padding: 2rem;
            text-align: center;
        }
        
        .login-header h2 {
            font-weight: 700;
            margin-bottom: 0.5rem;
            font-size: 1.8rem;
        }
        
        .login-header p {
            opacity: 0.9;
            margin-bottom: 0;
        }
        
        .form-control {
            border-radius: 50px;
            padding: 0.75rem 1.5rem;
            border: 2px solid #e5e7eb;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: #8b5cf6;
            box-shadow: 0 0 0 0.2rem rgba(139, 92, 246, 0.25);
        }
        
        .btn-login {
            background: linear-gradient(45deg, #8b5cf6, #ec4899);
            border: none;
            border-radius: 50px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            width: 100%;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(139, 92, 246, 0.3);
        }
        
        .input-group-text {
            background: transparent;
            border: 2px solid #e5e7eb;
            border-right: none;
            border-radius: 50px 0 0 50px;
            color: #8b5cf6;
        }
        
        .input-group .form-control {
            border-left: none;
            border-radius: 0 50px 50px 0;
        }
        
        .input-group:focus-within .input-group-text {
            border-color: #8b5cf6;
        }
        
        .alert {
            border-radius: 15px;
            border: none;
            font-weight: 500;
        }
        
        .alert-danger {
            background: linear-gradient(45deg, #fee2e2, #fecaca);
            color: #dc2626;
        }
        
        .floating-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }
        
        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }
        
        .shape:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .shape:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 20%;
            right: 10%;
            animation-delay: 2s;
        }
        
        .shape:nth-child(3) {
            width: 60px;
            height: 60px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }
        
        .shape:nth-child(4) {
            width: 100px;
            height: 100px;
            bottom: 10%;
            right: 20%;
            animation-delay: 1s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .brand-logo {
            font-size: 2.5rem;
            color: white;
            margin-bottom: 1rem;
        }
        
        .form-label {
            font-weight: 600;
            color: #374151;
            margin-bottom: 0.5rem;
        }
        
        .login-footer {
            text-align: center;
            padding: 1rem;
            background: rgba(139, 92, 246, 0.05);
            color: #6b7280;
            font-size: 0.9rem;
        }
        
        .password-toggle {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #8b5cf6;
            cursor: pointer;
            z-index: 10;
        }
        
        .input-wrapper {
            position: relative;
        }
    </style>
</head>
<body>
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
    <div class="login-container">
        <div class="login-header">
            <div class="brand-logo">
                <i class="fas fa-music"></i>
            </div>
            <h2>Selamat Datang</h2>
            <p>Masuk ke Florence Event Management</p>
        </div>
        
        <div class="p-4">
            <!-- Alert untuk error login -->
            <?php if (isset($_SESSION['login_error'])): ?>
                <div class="alert alert-danger d-flex align-items-center mb-4" role="alert">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <div>
                        <?= htmlspecialchars($_SESSION['login_error']) ?>
                    </div>
                </div>
                <?php unset($_SESSION['login_error']); ?>
            <?php endif; ?>
            
            <form method="POST" action="index.php?url=AuthController/login">
                <div class="mb-3">
                    <label for="username" class="form-label">
                        <i class="fas fa-user me-2 text-primary"></i>
                        Username
                    </label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-user"></i>
                        </span>
                        <input type="text" class="form-control" id="username" name="username" 
                               placeholder="Masukkan username" required>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label for="password" class="form-label">
                        <i class="fas fa-lock me-2 text-primary"></i>
                        Password
                    </label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </span>
                        <div class="input-wrapper flex-grow-1">
                            <input type="password" class="form-control" id="password" name="password" 
                                   placeholder="Masukkan password" required>
                            <button type="button" class="password-toggle" onclick="togglePassword()">
                                <i class="fas fa-eye" id="toggleIcon"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-login text-white mb-3">
                    <i class="fas fa-sign-in-alt me-2"></i>
                    Masuk
                </button>
            </form>
        </div>
        
        <div class="login-footer">
            <i class="fas fa-music me-2"></i>
            &copy; <?= date('Y') ?> Florence Event Management. Built with ❤️
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
        
        // Add entrance animation
        document.addEventListener('DOMContentLoaded', function() {
            const loginContainer = document.querySelector('.login-container');
            loginContainer.style.opacity = '0';
            loginContainer.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                loginContainer.style.transition = 'all 0.6s ease';
                loginContainer.style.opacity = '1';
                loginContainer.style.transform = 'translateY(0)';
            }, 100);
        });
        
        // Form validation feedback
        document.querySelector('form').addEventListener('submit', function(e) {
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();
            
            if (!username || !password) {
                e.preventDefault();
                
                // Create custom alert
                const alertDiv = document.createElement('div');
                alertDiv.className = 'alert alert-danger d-flex align-items-center mb-4';
                alertDiv.innerHTML = `
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <div>Username dan password wajib diisi.</div>
                `;
                
                // Remove existing alerts
                const existingAlert = document.querySelector('.alert');
                if (existingAlert) {
                    existingAlert.remove();
                }
                
                // Insert new alert
                const form = document.querySelector('form');
                form.insertBefore(alertDiv, form.firstChild);
                
                // Auto remove alert after 5 seconds
                setTimeout(() => {
                    alertDiv.remove();
                }, 5000);
            }
        });
    </script>
</body>
</html>