<?php if(count($errors) > 0): ?>
    <div class="error-message">
        <?php foreach ($errors as $error): ?>
            <ion-icon name="alert-circle-outline"></ion-icon> <span><?php echo("$error")?></span>
            <br>
        <?php endforeach; ?>  
    </div> 
<?php endif; ?>