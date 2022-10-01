<?= $this->extend('layout/master')?>

<?= $this->section('head')?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="css/registerStyles.css">
        <title>Register</title>

    </head>

<?= $this->endSection('head')?>
<?= $this->section('content')?>
    <div class="main">
        <!--<img src="img/img.jpeg" alt="food & beverages">-->
        <p id="reg">Registeration</p>
        </p>
        <form action="<?php echo base_url('register') ?>" method="post">
                <input type="text" placeholder="Your full name" name="name" value=<?= set_value('name')?>>
            <?php if(isset($validation) && $validation->hasError('name')):?>
                <p class='pp'>
                    <?php echo $validation->getError('name')?>
                </p>
            <?php endif;?>
                <input type="text" placeholder="Your email" name="email" value=<?= set_value('email')?>>
            <?php if(isset($validation) && $validation->hasError('email')):?>
                <p class='pp'>
                    <?php echo $validation->getError('email')?>
                </p>
            <?php endif;?>
                <input type="text" placeholder="Your phone" name="phone" value=<?= set_value('phone')?>>
            <?php if(isset($validation)&& $validation->hasError('phone')):?>
                <p class='pp'>
                    <?php echo $validation->getError('phone')?>
                </p>
            <?php endif;?>
            <input type="password" placeholder="Your password" name="password" value=<?= set_value('password')?>>
                <?php if(isset($validation)&& $validation->hasError('password')):?>
                <p class='pp'>
                    <?php echo $validation->getError('password')?>
                </p>
            <?php endif;?>
            <input type="password" placeholder="confirm password" name="cpassword" value=<?= set_value('cpassword')?>>
                <?php if(isset($validation)&& $validation->hasError('cpassword')):?>
                <p class='pp'>
                    <?php echo $validation->getError('cpassword')?>
                </p>
            <?php endif;?>

            <button type="submit">Sign up</button>
            <div id="underform">
            <a href="#">forgot password?</a>
            <p>   |   </p>
            <a href="login">login</a>
        </div>
        </form>
        
    </div>
<?= $this->endSection('content')?>