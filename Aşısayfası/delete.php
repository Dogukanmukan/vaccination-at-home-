<?php
    include 'functions.php';
    $pdo=pdo_connect_mysql();
    $msg='';

    if(isset($_GET['id'])){  

        $stm=$pdo->prepare('SELECT *FROM contacts WHERE id=?');  
        $stm->execute([$_GET['id']]);
        $contact=$stm->fetch(PDO::FETCH_ASSOC);

        if(!$contact){
            exit('Contact does not exist with that ID');
        }

        if(isset($_GET['confirm'])){
            if($_GET['confirm']=='yes'){
                $stmt=$pdo->prepare('DELETE FROM contacts WHERE id=?');
                $stmt->execute([$_GET['id']]);
                $msg='Randevuyu İptal Ettiniz';
            }
            else{
                header('Location: read.php');
                exit;
            }
        }
     } 
     else{
        exit('No ID specified');
    }   
?>

<?=template_header('Delete') ?>

    <div class="content delete">
        <h2>Randevuyu Sil<?=$contact['id']?></h2>
        <?php if($msg):?>
        <p><?=$msg ?></p>
        <?php else:?>
        <p>Randevu iptal edilecektir, emin misiniz??<?=$contact['id'] ?></p>
        <div class="yesno">
        <a href="delete.php?id=<?=$contact['id']?>&confirm=yes">Evet</a>
        <a href="delete.phph?id=<?=$contact['id']?>&confirm=no">Hayır</a>
        </div>
        <?php endif; ?>
    </div>

<?=template_footer();?>