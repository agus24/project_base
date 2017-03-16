<?php require('partials/head.php'); ?>

<?php foreach ($users as $user) : ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>

<h1>User Your Name</h1>
<form method="POST" action="<?=url('user')?>">
    <input name="name"></input>
    <button type="submit">Submit</button>
</form>

<?php require('partials/footer.php'); ?>
