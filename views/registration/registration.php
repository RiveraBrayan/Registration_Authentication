<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-sm" style="width: 22rem;">
        <div class="card-body">
            <h5 class="card-title text-center mb-4">Register</h5>
            <form method="post" class="needs-validation" novalidate="" autocomplete="off" enctype="multipart/form-data">
                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                </div>
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Create a password" required>
                </div>
                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
                <!-- Login Link -->
                <div class="text-center mt-3">
                    <a href="login" class="text-decoration-none">Already have an account? Login</a>
                </div>

                <?php
                    require_once 'controllers/register.controller.php';
                    $registerUser = new RegisterController();
                    $registerUser->registerUser();
                ?>
            </form>
        </div>
    </div>
</div>
