<?php $this->setLayoutVar('title', 'アカウント登録') ?>

<h2>アカウント登録</h2>
<form action="<?=$this->default['base_url']?>/account/register" method="post">
    <input type="hidden" name="_token" value="<?=$this->escape($_token)?>" />

    <?php if (isset($errors) && count($errors) > 0): ?>
    <?= $this->render('errors', array('errors' => $errors)) ?>
    <?php endif; ?>

    <?= $this->render('account/inputs', array('user_name' => $user_name, 'password' => $password)) ?>

    <p>
        <input type="submit" value="登録" />
    </p>
</form>