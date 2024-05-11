<?php if(isset($_SESSION['message'])): ?>
    <div class="<?php echo $_SESSION['type'];?>">
        <?php echo $_SESSION['message'];?>
        <?php 
            unset($_SESSION['type']);
            unset($_SESSION['message']);
        ?>
    </div>   
<?php endif; ?>