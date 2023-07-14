<?php
$info=array();
if ($instance) {
    $title = __('Update Instance');
    $action = 'update-instance';
    $submit_text = __('Save Changes');
} else {
    $title = __('Add New Intance');
    $action = 'add-instance';
    $submit_text = __('Add Instance');
}
?>
<h2>&nbsp;<?php
    echo sprintf('<a href="plugins.php">%s</a> <small> &gt; <a
            href="plugins.php?id=%d">%s</a> ( %s ) &mdash; <b>%s</b></small>',
        __('Plugins'),
        $plugin->getId(),
        $plugin->getName(),
        $plugin->getStatus(),
        $title
        );?>
</h2>
<form action="" method="post" class="save">
    <?php csrf_token(); ?>
    <input type="hidden" name="do" value="<?php echo $action; ?>">
    <input type="hidden" name="a" value="<?php echo Format::htmlchars($_REQUEST['a']); ?>">
    <input type="hidden" name="id" value="<?php echo $plugin->getId(); ?>">
    <input type="hidden" name="xid" value="<?php echo $instance ?
    $instance->getId() : 0; ?>">
<div>
<?php
    include 'templates/plugin-instance.tmpl.php';
?>
</div>
<p class="centered">
    <input class="btn btn-primary" type="submit" name="submit" value="<?php echo $submit_text; ?>">
    <input class="btn btn-secondary" type="reset"  name="reset"  value="<?php echo __('Reset'); ?>">
    <input class="btn btn-danger" type="button" name="cancel" value="<?php echo __('Cancel'); ?>"
        onclick='window.location.href="?"'>
</p>
</form>
