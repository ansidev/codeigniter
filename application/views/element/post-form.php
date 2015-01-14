                    <div class="form-group">
                        <label for="post_title">Title</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                            <input type="text" class="form-control" id="post_title" name="post_title" placeholder="Enter post title" value="<?php if(!empty($post_title)) { echo $post_title; }?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="post_content">Post content</label>
                        <div class="input-group">
                            <textarea class="form-control" id="post_content" name="post_content" placeholder="Enter post content" rows="8"><?php if(!empty($post_content)) { echo $post_content; }?></textarea>
                        </div>
                    </div>
