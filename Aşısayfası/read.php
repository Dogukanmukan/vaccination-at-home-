<?php
    include 'functions.php';

    $pdo=pdo_connect_mysql();


$stmt=$pdo->prepare('SELECT *FROM contacts');
$stmt->execute();

$contacts=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('Randevu')?>

<div class="content read">
    <h2>Randevu Listesi</h2>
    <a href="create.php" class="create-contact">Randevu Oluşturma</a>
    <table>
        <thead>
            <tr>
                <td>#</td>
                <td>İsim</td>
                <td>Email</td>
                <td>Telefon</td>
                <td>Aşı</td>
                <td>Tarih</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact): ?>
                <tr>
                    <td><?=$contact['id']?></td>
                    <td><?=$contact['name'] ?></td>
                    <td><?=$contact['email'] ?></td>
                    <td><?=$contact['phone'] ?></td>
                    <td><?=$contact['title'] ?></td>
                    <td><?=$contact['creted'] ?></td>
                    <td class="actions">
                        <a href="update.php?id=<?=$contact['id'] ?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                        <a href="delete.php?id=<?=$contact['id'] ?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?=template_footer() ?>
