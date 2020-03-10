<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="css/bootnavbar.css">

    <title>Multi level hover dropdown Navbar for bootstrap 4</title>
    <meta name="description" content="Multi level hover dropdown Navbar for bootstrap 4">
    <meta name="keywords" content="Multi level hover dropdown Navbar for bootstrap 4">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark text-uppercase" id="main_navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                About us
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Brief History</a>
                <a class="dropdown-item" href="#">Mission</a>
                <a class="dropdown-item" href="#">Organization</a>
                
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Products & Services
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Charts</a></li>
            <li class="nav-item dropdown">
                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Publications
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                <li><a class="dropdown-item" href="#">Chart Catalogue</a></li>
                <li><a class="dropdown-item" href="#">Tide Table</a></li>
            </ul>
        </li>
        <li><a class="dropdown-item" href="#">Notices to Mariners</a></li>
        <li><a class="dropdown-item" href="#">Hydrographic Notes</a></li>
        <li><a class="dropdown-item" href="#">Tidal Prediction</a></li>
    </ul>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">
    Meteorology
</a>
<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="#">Weather Forecast</a>
</ul>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">
    Supports
</a>
<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
    <li><a class="dropdown-item" href="#">Contact Us</a></li>
    <li><a class="dropdown-item" href="#">Query &#038; Suggestion</a></li>
    <li><a class="dropdown-item" href="#">How To Buy</a></li>
    <li><a class="dropdown-item" href="#">News Archives</a></li>
    <li><a class="dropdown-item" href="#">Forms</a></li>

</ul>
</li>
</ul>
</div>
</nav>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="js/bootnavbar.js" ></script>
<script>
    $(function () {
        $('#main_navbar').bootnavbar({
                //option
                //animation: false
            });
    })
</script>
</body>

</html>