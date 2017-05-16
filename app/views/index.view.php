<?php require('partials/head.php'); ?>

<h1>Home</h1>
<ul>
<?php foreach($users as $user) : ?>
<li><?=$user->name?></li>
@can('view-user')
if(Auth::user()->hasPermissionTo('view-user')) :

endif;
@endcan
<?php endforeach; ?>
</ul>

<?php require('partials/footer.php'); ?>
