<?= $this->extend("layout/master.php")?>

<?= $this->section('head')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/loginStyles.css?v=<?php echo time(); ?>">
    <title>Login</title>

</head>

<?= $this->endSection('head')?>
<?= $this->section('content')?>
    <div class="main">
        <img src="img/background.png" alt="">
        <p>login</p>
        <form action="Login" method="post">
            <?php
                if(session()->has('wrongInput')):?>
                    <p class="pp">
                        <?php echo session()->get('wrongInput') ?>
                    </p>
            <?php endif; ?>
            <input type="text" placeholder="Enter your email" name="email" value="<?= set_value('email');?>">
                <?php 
                    if(isset($validation)):
                        if($validation->hasError('email')):?>
                    <p class="pp">
                        <?php echo $validation->getError('email');?>
                    </p>
                <?php 
                        endif;
                    endif; ?>
            <input type="password" placeholder="Enter your password" name="password" value="<?=set_value('password')?>";>
        <?php 
            if(isset($validation)):
                if($validation->hasError('password')):?>
                    <p class="pp">
                        <?php echo $validation->getError('password'); ?>
                    </p>
        <?php 
                endif; 
                endif;
       ?>
            <button type="submit" name="userRegister">login</button>
        </form>
        <div id="underform">
            <a href="#">forgot password?</a>
            <p>   |   </p>
            <a href="register">Sign up</a>
        </div>
    </div>
<?= $this->endSection()?>