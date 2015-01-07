    <div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <strong>Log In </strong> or <a href="/user/register">Register</a>
                </h3>
            </div>
            <div class="panel-body">
                <?php
                    echo validation_errors();
                    echo form_open('user/login');
                ?>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password <a href="/sessions/forgot_password">(forgot password)</a></label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-default">Log in</button>
                </form>
            </div>
        </div>
    </div>
</div>