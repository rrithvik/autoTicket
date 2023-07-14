<?php
$action = "#schedule/{$schedule->getId()}/entry/add";
if ($entry)
    $action = "#schedule/{$schedule->getId()}/entry/{$entry->getId()}/update";
?>
<h3 class="drag-handle"><?php
    echo $entry ? $entry->getName() : __('Add New Schedule Entry');
    ?></h3>
<a class="nav-link close" href=""><i class="icon-remove-circle"></i></a>
<div><em><?php echo $schedule->getName(); ?></em></div>
<hr/>
<?php
if ($errors['error']) { ?>
<div id="msg_error" class="error-banner"><?php echo
    Format::htmlchars($errors['error']); ?></div>
<?php
} ?>
<form method="post" action="<?php echo $action; ?>">
    <?php
    echo csrf_token();
    $form = $form ?: $schedule->getEntryForm();
    echo $form->asTable('');
    ?>
    <hr>
    <p class="full-width">
        <span class="buttons pull-left">
            <input class="btn btn-secondary" type="reset" value="<?php echo __('Reset'); ?>">
            <input class="btn btn-danger close" type="button" value="<?php echo __('Cancel'); ?>">
        </span>
        <span class="buttons pull-right">
            <input class="btn btn-primary" type="submit" value="<?php echo __('Save'); ?>">
        </span>
     </p>
</form>
<?php
echo $form->emitJavascript();
?>
