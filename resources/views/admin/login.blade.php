<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
/* Page Loader */
#page-loader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

#page-loader .spinner {
    width: 50px;
    height: 50px;
    border: 5px solid #f3f3f3;
    border-top: 5px solid #45aae3;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>
</head>
<body class="bg-light">
<div id="page-loader">
    <div class="spinner"></div>
</div>

<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">
    <div class="col-md-4">

        <div class="card shadow">
            <div class="card-header bg-dark text-white text-center">
                <h4>Admin Login</h4>
            </div>

            <div class="card-body">

                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('admin.login.submit') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter email">
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password">
                    </div>

                    <button class="btn btn-dark w-100">Login</button>
                </form>
            </div>
        </div>

    </div>
</div>


<script>
    window.onload = function () {
        document.getElementById('page-loader').style.display = 'none';
    };
</script>
</body>
</html>
