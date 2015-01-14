    <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <a href="<?php echo "/post"; ?>" class="btn btn-default">
                        <span class="glyphicon glyphicon-chevron-left"></span> Go back
                    </a>
                    <strong>Add post </strong>
                </h3>
            </div>
            <div class="panel-body">
                <?php echo form_open('post/add');?>
                    <?php echo $this->load->view('element/post-form');?>
                    <button type="submit" class="btn btn-sm btn-default">Add post</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function() {                                      
        if(CKEDITOR.instances['post_content']) {                     
            CKEDITOR.remove(CKEDITOR.instances['post_content']);
        }
        CKEDITOR.config.width = 716;
        CKEDITOR.config.height = 150;
        CKEDITOR.replace('post_content',{});
    })
</script>