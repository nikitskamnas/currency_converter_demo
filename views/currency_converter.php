<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="/currency_converter/public/css/style.css">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card login-container">
        <h4 class="login-title">Login</h4>
          <div class="card-body">
            <form action="login.php" method="POST">
              <div class="form-group">
                <label for="username">From</label>
                <input type="text" id="from" name="from" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="amount">Amount</label>
                <select id="amount" name="amount" class="form-control" required>
                  <option value="">Select Amount</option>
                  <option value="10">$10</option>
                  <!-- Add more options as needed -->
                </select>
              </div>
              <div class="form-group d-flex justify-content-between align-items-center">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="rememberMe" name="rememberMe">
                  <label class="custom-control-label" for="rememberMe">Remember me</label>
                </div>
                <a href="forgot_password.php" class="forgot-password">Forgot password?</a>
              </div>
              <button type="submit" class="btn btn-login btn-block">submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>