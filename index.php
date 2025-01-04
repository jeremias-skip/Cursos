<!DOCTYPE html>
<html lang="en">
    <head>
    <?php require_once './inc/head.php'; ?>
    <link rel="stylesheet" href="css/index.css">
    </head>


<body>
    <header>
        <?php require_once './inc/header.php'; ?>
    </header>
    <main>
    <div class="floating-buttons" id="floating-buttons-1">
        <a href="https://wa.me/1234567890" target="_blank" class="btn btn-whatsapp-1" id="btn-1">
            <i class="bi bi-whatsapp"></i>
        </a>
        <a href="https://calendar.google.com" target="_blank" class="btn btn-calendar-1" id="btn-1">
            <i class="bi bi-calendar"></i>
        </a>
    </div>
        <div>
            <?php require_once './inc/slider.php'; ?>
        </div>
        <section>
            <?php require_once './inc/courses.php'; ?>
        </section>
        <section>
            <?php require_once './inc/beneficios.php'; ?>
        </section>
        <section>
        <?php require_once './inc/inscribete.php'; ?>
        </section>
        <section>
            <?php require_once './inc/testimonios.php'; ?>
        </section>
    </main>
    <footer>
        <?php require_once './inc/footer.php'; ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>