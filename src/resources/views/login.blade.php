<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+2:500&amp;display=swap">
</head>

<body class="d-xl-flex justify-content-xl-center align-items-xl-center" style="background: rgb(196,222,243);font-family: 'Baloo 2', serif;">
    <section class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center position-relative py-4 py-xl-5" style="width: 100vH;height: 100vH;">
        <div class="card mb-5" style="margin: 0px;">
            <div class="card-body"><img src="{{ url('/img/reportei-logo2.png') }}" style="margin: 15px;margin-bottom: 15px;">
                <div class="text-center">
                    <div class="mb-3"></div>
                    <div class="mb-3"></div>
                    <div class="mb-3">
                        <a href="{{ url('/auth/redirect') }}" class="p-3 btn btn-primary d-sm-flex justify-content-sm-center align-items-sm-center d-block " style="background: #2f64e0;border-style: none;">Login with GitHub&nbsp;&nbsp;<i class="fab fa-github fs-4"></i></a></div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
