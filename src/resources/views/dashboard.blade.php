<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Repositorios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+2:500&amp;display=swap">
</head>

<body class="d-xl-flex justify-content-xl-center align-items-xl-center"
      style="background: rgb(196,222,243);font-family: 'Baloo 2', serif;">

<section
    class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center position-relative py-4 py-xl-5"
    style="width: 100vH;height: 100vH;">
    <div class="card mb-5" style="margin: 0px;">
        <h1 style="margin: 32px;">Repositories List</h1>
        <div class="table-responsive" style="margin: 32px;">
            <table class="table">
                <thead>
                <tr>
                    <th>Repository</th>
                    <th class="text-end">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($repositories as $repository)
                    <tr>
                        <td style="padding-top: 16px;"> {{ $repository['name'] }} </td>
                        <td><a class="btn btn-primary" type="button" href="{{ route('commits', $repository['name']) }}">Visualizar</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
