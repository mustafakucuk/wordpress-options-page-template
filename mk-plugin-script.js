jQuery(document).ready(function($){
    $(document).on('click', '.mk-upload', function() {
        var send_attachment_bkp = wp.media.editor.send.attachment;
        var self = $(this);
        var upload_relation = self.data('relation');
        var upload_input = upload_relation ? $(upload_relation) : self;
        
        wp.media.editor.send.attachment = function(props, attachment) {
            upload_input.attr('src', attachment.url);
            upload_input.val(attachment.url);
            wp.media.editor.send.attachment = send_attachment_bkp;
        }
        
        wp.media.editor.open(upload_input);
        return false;
    });
});