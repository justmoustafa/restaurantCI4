<?= $this->renderSection('head') ?>
<?php include("header.php");?>

<?= $this->renderSection('content') ?>  
<?php if(session()->get('name') !== null ):?>
        <script>
            document.getElementById('loginb').innerHTML = 'log out';
            document.getElementById('logina').href = '<?= base_url('home/logOut')?>';
        </script>
        <?php endif; ?>
</body>
</html>