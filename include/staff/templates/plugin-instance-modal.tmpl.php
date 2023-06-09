<h3 class="drag-handle"><?php echo $instance ? $instance->getName() :
    sprintf('%s &mdash; %s', $plugin->getName(), __('Add New Instance')); ?></h3>
<a class="nav-link close" href=""><i class="icon-remove-circle"></i></a>
<hr/>
<form method="post" id="instance_tabs_container" action="<?php echo $action; ?>">
<?php
echo csrf_token();
?>
<div>
<?php
 include 'plugin-instance.tmpl.php';
?>
</div>
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
<script type="text/javascript">
   // Make translatable fields translatable
   $('input[data-translate-tag], textarea[data-translate-tag]').translatable();
</script>
