<?php

if(!defined('OSTCLIENTINC') || !$thisclient || !$ticket || !$ticket->checkUserAccess($thisclient)) die('Access Denied!');

?>

<h1>
    <?php echo sprintf(__('Editing Ticket #%s'), $ticket->getNumber()); ?>
</h1>

<form action="tickets.php" method="post">
    <?php echo csrf_token(); ?>
    <input type="hidden" name="a" value="edit"/>
    <input type="hidden" name="id" value="<?php echo Format::htmlchars($_REQUEST['id']); ?>"/>
<table width="800">
    <tbody id="dynamic-form">
    <?php if ($forms)
        foreach ($forms as $form) {
            $form->render(['staff' => false]);
    } ?>
    </tbody>
</table>
<hr>
<p style="text-align: center;">
    <input class="btn btn-primary" type="submit" value="<?php echo __('Update') ?>"/>
    <input class="btn btn-secondary" type="reset" value="<?php echo __('Reset') ?>"/>
    <input class="btn btn-danger" type="button" value="<?php echo __('Cancel') ?>" onclick="javascript:
        window.location.href='index.php';"/>
</p>
</form>
