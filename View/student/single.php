<?php require_once './View/includes/header.php'; ?>

<div class="w-full max-w-screen-sm mx-auto my-12">
    <div class="w-full h-96 mx-4 my-4 px-6 py-6 border border-gray-300 shadow-xl">
        Single student <br>
        <?php echo $student[0]['firstname']; ?>
    </div>
</div>

<?php require_once './View/includes/footer.php'; ?>