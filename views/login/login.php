<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-sm" style="width: 22rem;">
        <div class="card-body">
            <h5 class="card-title text-center mb-4">Login</h5>
            <form method="post" class="needs-validation" novalidate="" autocomplete="off" enctype="multipart/form-data">
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                </div>
                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <!-- Registration Link -->
                <div class="text-center mt-3">
                    <a href="register" class="text-decoration-none">Don't have an account? Register</a>
                </div>

                <?php
                    require_once 'controllers/login.controller.php';
                    $loginUser = new LoginController();
                    $loginUser->loginUser();
                ?>
            </form>
        </div>
    </div>
</div>