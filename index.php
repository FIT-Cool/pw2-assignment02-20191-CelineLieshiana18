<!DOCTYPE HTML>
<html>
<head>
    <title>Praktikum 1 - 1772005</title>
</head>
<body>
    <nav>
    <a href="?menu=pasien"> Data Pasien</a>
    <a href="?menu=asuransi"> Data Asuransi </a>
    </nav>
    <main>
        <?php 
        $targetmenu = filter_input(INPUT_GET,'menu');

        switch($targetmenu):
            case 'pasien':
                include_once 'view/pasien.php';
                break;
            case 'asuransi':
                include_once 'view/asuransi.php';
                break;
            default:
                include_once 'view/index.php';
                break;
        ?>
    </main>
</body>
</html>
