<div id="frm_where_field_<?php echo $where_key; ?>" class="frm_where_row">
    <select id="where_field_id" name="options[where][<?php echo $where_key; ?>]" onchange="javascript:frm_insert_where_options(this.value, <?php echo $where_key ?>)">
        <option value="">&mdash; <?php _e('Select Field', 'formidable') ?> &mdash;</option>
        <option value="created_at" <?php selected($where_field, 'created_at') ?>><?php _e('Entry creation date', 'formidable') ?></option>
        <option value="updated_at" <?php selected($where_field, 'updated_at') ?>><?php _e('Entry updated date', 'formidable') ?></option>
        <option value="id" <?php selected($where_field, 'id') ?>><?php _e('Entry ID', 'formidable') ?></option>
        <option value="item_key" <?php selected($where_field, 'item_key') ?>><?php _e('Entry Key', 'formidable') ?></option>
        <?php if (is_numeric($form_id)) FrmProFieldsHelper::get_field_options($form_id, $where_field, 'not', "'break','divider','file'"); ?>
    </select>
    <?php _e('is', 'formidable') ?>
    <select id="where_field_is" name="options[where_is][<?php echo $where_key; ?>]" style="width:100px;">
        <option value="=" <?php selected($where_is, '=') ?>><?php _e('equal to', 'formidable') ?></option>
        <option value="!=" <?php selected($where_is, '!=') ?>><?php _e('NOT equal to', 'formidable') ?></option>
        <option value=">" <?php selected($where_is, '>') ?>><?php _e('greater than', 'formidable') ?></option>
        <option value="<" <?php selected($where_is, '<') ?>><?php _e('less than', 'formidable') ?></option>
        <option value=">=" <?php selected($where_is, '>=') ?>><?php _e('greater than or equal to', 'formidable') ?> &nbsp;</option>
        <option value="<=" <?php selected($where_is, '<=') ?>><?php _e('less than or equal to', 'formidable') ?></option>
        <option value="LIKE" <?php selected($where_is, 'LIKE') ?>><?php _e('like', 'formidable') ?></option>
        <option value="not LIKE" <?php selected($where_is, 'not LIKE') ?>><?php _e('NOT like', 'formidable') ?></option>
    </select>
    <span id="where_field_options_<?php echo $where_key; ?>" style="display:inline;">
        <?php FrmProDisplaysController::add_where_options($where_field, $where_key, $where_val); ?>
    </span>
    <a class="frm_remove_tag frm_icon_font" data-removeid="frm_where_field_<?php echo $where_key; ?>" data-showlast="#frm_where_options .frm_add_where_row"></a>
    <a class="frm_add_where_row frm_add_tag frm_icon_font"></a>
    
</div>