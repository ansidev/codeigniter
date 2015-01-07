    <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <a href="<?php echo "/post"; ?>" class="btn btn-default">
                        <span class="glyphicon glyphicon-chevron-left"></span> Go back
                    </a>
                    <strong>Edit post </strong>
                </h3>
            </div>
            <div class="panel-body">
                <?php
                    echo validation_errors();
                    if($this->session->flashdata('message'))
                    {
                        echo $this->session->flashdata('message');
                    }
                    echo form_open('post/edit/' . $post->post_id);
                ?>
                    <input type="hidden" id="post_id" name="post_id" value="<?php echo $post->post_id; ?>">
                    <div class="form-group">
                        <label for="post_title">Title</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                            <input type="text" class="form-control" id="post_title" name="post_title" placeholder="Enter post title" value="<?php echo $post->post_title; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="post_content">Post content</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <textarea class="form-control" id="post_content" name="post_content" placeholder="Enter post content" rows="8"><?php echo $post->post_content; ?></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-default">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>