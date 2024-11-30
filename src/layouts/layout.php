<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Storia'; ?></title>
</head>

<body>
    <!-- navbar component -->
    <?php include 'src/components/navbar.php'; ?>

    <!-- content -->
    <div class="content">
        <?php echo $content; ?>
    </div>

    <footer class="footer">
        <p>&copy; 2021 Storia</p>
    </footer>
</body>

</html>