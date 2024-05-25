<?php
include 'functions.php';
$pdo=pdo_connect_mysql();
$msg='';

if(isset($_GET['id'])){

    if(!empty($_POST)){
        $id=isset($_POST['id']) ? $_POST['id'] :NULL;
        $name=isset($_POST['name']) ? $_POST['name'] : '';
        $email=isset($_POST['email']) ? $_POST['email'] :'';
        $phone=isset($_POST['phone']) ? $_POST['phone'] :'';
        $title=isset($_POST['title']) ? $_POST['title']: '';
        $created=isset($_POST['created']) ? $_POST['created']: '';

        
        $stmt=$pdo->prepare('UPDATE contacts SET id= ?, name= ?, email= ?, phone= ?, title= ?, creted= ? WHERE id= ?');
        $stmt->execute([$id,$name, $email, $phone, $title, $created, $_GET['id']]);
        $msg='Başarıyla Güncellendi!';
    }
    
    
    $stmt=$pdo->prepare('SELECT *FROM contacts WHERE id= ?');
    $stmt->execute([$_GET['id']]);
    $contact=$stmt->fetch(PDO::FETCH_ASSOC);
    if(!$contact){
        exit('Kayıt Bulunamadı.');
    }
}
else{
    exit('Kayıt Bulunamadı');
}

?>

<?=template_header('Update')?>

<div class="content update">
    <h2>Randevuyu Güncelle #<?=$contact['id']?></h2>
    <form action="update.php?id=<?=$contact['id']?>" method="POST">
        <label for="id">ID</label>
        <label for="name">İsim</label>
        <input type="text" name="id" value="<?=$contact['id']?>" id="id">
        <input type="text" name="name" value="<?=$contact['name'] ?>" id="name">
        <label for="email">Email</label>
        <label for="phone">Telefon</label>
        <input type="text" name="email" value="<?=$contact['email'] ?>" id="email">
        <input type="text" name="phone" value="<?=$contact['phone'] ?>" id="phone">
        <label for="title">Aşı</label>
        <label for="cretated">Randevu Tarihi</label>
        <input type="text" name="title" value="<?=$contact['title'] ?>" id="title">
        <input type="datetime-local" name="created" value="<?=date('Y-m-d\TH:i',strtotime($contact['creted'])) ?>" id="created">
        <input type="submit" value="Güncelle">
    
    </form>
    <?php if($msg) :?>
    <p><?=$msg ?></p>
    <?php endif; ?>
</div>


<?=template_footer()?>