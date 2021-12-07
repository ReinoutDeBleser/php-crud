<?php
    require './View/includes/header.php';
?>
<div class="w-full max-w-screen-sm mx-auto my-12">
    <div class="w-full h-96 mx-4 my-4 px-6 py-6 border border-gray-300 shadow-xl">
        Single teacher <br>
        <?php echo $teachers[0]['firstname']; ?>
    </div>
</div>

<?php
    require './View/includes/footer.php';
?>