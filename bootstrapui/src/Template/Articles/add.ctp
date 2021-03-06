<?php

$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
</ul>
<?php $this->end(); ?>
<?= $this->Form->create($article); ?>

<fieldset>
    <legend><?= __('Add {0}', ['Article']) ?></legend>
    <?php
        echo $this->Form->input('title');
        
        // just added the categories input
        echo $this->Form->input('categories');  
        echo $this->Form->input('body');
    ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>