<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Portfolio-Hugo-GANGNEUX</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <?php 
        session_start();
        include 'nav.php';
        
        
        
        
        if (!isset($_REQUEST['uc'])) {
            $_REQUEST['uc'] = 'accueil';
        }
        $uc = htmlspecialchars($_REQUEST["uc"]);
        switch ($uc) {
            case 'accueil':
                include 'accueil.php';
                break;
            case 'bts-sio':
                include 'bts_sio.php';
                break;
            case 'projets':
                include 'projets.php';
                break;
            default:
                include 'accueil.php';
                break;
        }
        
        
        
        include 'footer.php'; 
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
    
</html>