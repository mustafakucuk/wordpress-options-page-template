<div class="wrap">
  <div class="mk-plugin-panel">
        <div class="mk-plugin-panel-heading">
            <span><?php _e('Settings'); ?></span>
            <div class="pull-right">
                <?php submit_button( __('Submit'), 'primary', '' ); ?>
            </div>
        </div>            
        <div class="mk-plugin-panel-body">
            <div class="mk-plugin-blocks">

                <div class="mk-plugin-block">
                    <div class="mk-plugin-block-title"><?php _e('Alerts'); ?></div>
                    <div class="mk-plugin-alert success"><?php _e('Lorem Ipsum is simply dummy text of the printing and typesetting industry.'); ?></div>
                    <div class="mk-plugin-alert danger"><?php _e('Lorem Ipsum is simply dummy text of the printing and typesetting industry.'); ?></div>
                    <div class="mk-plugin-alert info"><?php _e('Lorem Ipsum is simply dummy text of the printing and typesetting industry.'); ?></div>                                        
                </div>
                
                <div class="mk-plugin-block">
                    <div class="mk-plugin-block-title"><?php _e('Form'); ?></div>
                    <div class="mk-plugin-form-group">
                        <label for="input-field"><?php _e('Input'); ?></label>
                        <input type="text" class="mk-plugin-form-control" id="input-field" />
                    </div>

                    <div class="mk-plugin-form-group">
                        <label for="textarea-field"><?php _e('Textarea'); ?></label>
                        <textarea class="mk-plugin-form-control" id="textarea-field"></textarea>
                    </div>

                    <div class="mk-plugin-form-group">
                        <label for="select-field"><?php _e('Select'); ?></label>
                        <div class="mk-plugin-select-container">
                            <select class="mk-plugin-form-control" id="select-field">
                                <option value="1"><?php _e('Option 1'); ?></option>
                                <option value="2"><?php _e('Option 2'); ?></option>
                                <option value="3"><?php _e('Option 3'); ?></option>
                            </select>
                            <div class="mk-plugin-select-arrow"></div>
                        </div>
                    </div>

                    <div class="mk-plugin-form-group">
                        <label for="upload-field-1"><?php _e('Upload'); ?></label>
                        <input type="text" class="mk-plugin-form-control mk-upload" id="upload-field-1" />
                    </div>
                    
                    <div class="mk-plugin-form-group">
                        <label for="upload-field-2"><?php _e('Upload with Button'); ?></label>
                        <input type="text" class="mk-plugin-form-control" id="upload-field-2" />
                        <div class="button button-primary mk-upload mk-plugin-margin-10" data-relation="#upload-field-2"><?php _e('Select Image'); ?></div>
                        <div class="mk-plugin-help-block"><?php _e('Will setting image url to relation input after choose an image if you write "data-relation" attribute.'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>