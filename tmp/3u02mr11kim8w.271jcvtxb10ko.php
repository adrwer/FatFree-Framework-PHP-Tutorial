<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Messages from UI</h1>    
</div>
    <?php foreach (($messages?:[]) as $message): ?>
        <p><?= ($message['id']) ?> <?= ($message['value']) ?></p>
        <br>
    <?php endforeach; ?>
</main>