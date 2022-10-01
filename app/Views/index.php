<?= $this->extend("layout/master")?>

<?= $this->section('head')?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="css/home.css">
        
        <title>Home</title>

    </head>
<?= $this->endSection('head')?>

<?= $this->section('content')?>
   <div id="space"></div>
    <div class="main">
        <img src="img/mainbg.jpg" alt="">
        <p>Welcome to Restaurant and Cafee</p>
    </div>

    <div  id="about"></div>

    <div class="about">
        <img src="img/img.jpeg" alt="">
        <div>
            <h2>About Us</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>

    <div  id="contact"></div> 

    <div class="contact">
        <div id="form">
        <h2>Contact</h2>
        <?php if(session()->has('sent')):?>
            <p class="pp">
                <?php echo session()->get('sent'); ?>
            </p>
            <?php endif; ?>
        <form action="<?= base_url('home/contact')?>" method="post">
            <input type="text" placeholder="Your full name" name="name">
            <input type="text" placeholder="Your email" name="email">
            <input type="text" placeholder="Subject" name="subject">
            <textarea name="message" id="" cols="30" rows="5" placeholder="Message"></textarea>
            <button type="submit" name="usercontact">Submit</button>
        </form>
        </div>
    </div>
    <?php var_dump(session()->get()) ?>
<?= $this->endSection()?>
