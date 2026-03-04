<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Name Explorer</title>

    <!-- Compiled Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/app.min.css">
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <span class="navbar-brand">Name Explorer</span>
    </div>
</nav>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="mb-4 text-center">Search for a Name</h3>

                    <input 
                        type="text"
                        id="search"
                        class="form-control form-control-lg"
                        placeholder="Start typing a name..."
                    >
                </div>
            </div>

            <div id="results" class="mt-4"></div>

        </div>
    </div>
</div>

<!-- Your App JS -->
<script src="assets/js/app.js"></script>

<!-- Compiled Bootstrap JS -->
<script src="assets/js/bootstrap.js"></script>

</body>
</html>