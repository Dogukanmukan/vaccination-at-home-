<?php
    include 'functions.php';
    $pdo=pdo_connect_mysql();
    $msg='';
    
    if(!empty($_POST)){
    $id=isset($POST['id']) && !empty($_POST['id']) && $_POST['id']!='auto' ? $_POST['id']: NULL;
    $name=isset($_POST['name']) ? $_POST['name'] : '';
    $email=isset($_POST['email']) ? $_POST['email'] :'';
    $phone=isset($_POST['phone']) ? $_POST['phone'] :'';
    $title=isset($_POST['title']) ? $_POST['title']: '';
    $created=isset($_POST['created']) ? $_POST['created']: '';

    $stm=$pdo->prepare('INSERT INTO contacts VALUES(?,?,?,?,?,?)');
    $stm->execute([$id,$name,$email,$phone,$title,$created]);

    $msg='Kayıt Başarıyla Oluşturuldu.';
    }

?>

<?=template_header('Create Page'); ?>

<div class="content update">
    <h2>Randevu Oluşturun</h2>
    <form action="create.php" method="Post">
        <label for="id">ID</label>
        <label for="name">İsim</label>
        <input type="text" name="id" value="auto" id="id">
        <input type="text" name="name" placeholder="İsim Soyisim" id="name">
        <label for="email">Email</label>
        <label for="phone">Telefon</label>
        <input type="text" name="email" placeholder="abc@gmail.com" id="email">
        <input type="text" name="phone" placeholder="05--------" id="phone">
        <label for="title">Aşı</label>
        <label for="cretated">Randevu Tarihi</label>
        <input type="text" name="title" placeholder="Biontech/Sinovac" id="title">
        <input type="datetime-local" name="created" value="<?=date('Y-m-d\TH:i')?>" id="created">
        <input type="submit" value="Randevu Oluştur">
    </form>
    <?php if($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer(); ?>