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
                <?php
                    echo form_open('post/add');
                ?>
                    <div class="form-group">
                        <label for="post_title">Title</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                            <input type="text" class="form-control" id="post_title" name="post_title" placeholder="Enter post title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="post_content">Post content</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <textarea class="form-control" id="post_content" name="post_content" placeholder="Enter post content" rows="8"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-default">Add post</button>
                </form>
            </div>
        </div>
    </div>
</div>