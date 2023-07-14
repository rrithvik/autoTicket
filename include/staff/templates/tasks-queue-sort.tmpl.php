<div class="dropdown anchor-right"
     onclick="javascript:
var query = addSearchParam({'sort': $(event.target).data('mode'), 'dir': $(event.target).data('dir')});
$.pjax({
    url: '?' + query,
    timeout: 2000,
    container: '#pjax-container'});
return false;">
    <span class="btn btn-secondary">
  <i class="icon-caret-down pull-right" style="padding-top: 4px"></i>
  <i class="icon-sort-by-attributes-alt <?php if ($sort_dir) echo 'icon-flip-vertical'; ?>"></i> <?php echo __('Sort'); ?></span>

    <ul class="dropdown-menu" id="actions" data-dropdown="#action-dropdown-more">

        <?php foreach ($queue_sort_options as $mode) {
            $desc = $sort_options[$mode];
            $icon = '';
            $dir = '0';
            $selected = $sort_cols == $mode; ?>
            <li <?php
            if ($selected) {
                echo 'class="active"';
                $dir = ($sort_dir == '1') ? '0' : '1'; // Flip the direction
                $icon = ($sort_dir == '1') ? 'icon-hand-up' : 'icon-hand-down';
            }
            ?>>
                <a class="nav-link" href="#" data-mode="<?php echo $mode; ?>" data-dir="<?php echo $dir; ?>">
                    <i class="icon-fixed-width <?php echo $icon; ?>"
                    ></i> <?php echo Format::htmlchars($desc); ?></a>
            </li>
        <?php } ?>
    </ul>
</div>

