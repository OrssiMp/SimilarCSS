<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        SimilarCSS 
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav class="navbar ">
            <div class="logo">
                <h2>SimilarCSS</h2>
            </div>
            <div class="menu-links">
                <a href="?page=apropos">à propos</a>
                <a href="?page=contribuer">contribuer</a>
                <a href="?page=contact">contacter</a>
            </div>
            <i class="fas fa-sun"></i>
        </nav>
    </header>
    
<?php    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        # code...
        include 'home.php';
        break;
    case 'apropos':
        # code...
        include 'apropos.php';
        break;
    case 'contact':
        # code...
        include 'contact.php';
        break;
    case 'contribuer':
        include 'contribuer.php';
        break;

    default:
        # code...
        echo 'not found';
        break;
}?>
    <script>
        // Dark theme toggle script
        const themeToggle = document.querySelector('.fa-sun');
        themeToggle.addEventListener('click', () => {
            // Optionally, change icon
            if (document.body.classList.contains('dark')) {
                themeToggle.classList.remove('fa-moon');
                themeToggle.classList.add('fa-sun');

            } else {
                themeToggle.classList.remove('fa-sun');
                themeToggle.classList.add('fa-moon');

            }
            document.body.classList.toggle('dark');
        });
    </script>
</body>

</html>