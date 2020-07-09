<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Quản lý người dùng</h1>
        </div>
    </div>
    </div>
</div>

<?php parse_str($_SERVER['QUERY_STRING'], $get_array);?>
<?php if ($get_array && array_key_exists('uid', $get_array)): ?>
    <?php if ($user->find($get_array["uid"])): ?>
        <?php if (array_key_exists('delete', $get_array) && $get_array["delete"] == '1'): ?>
            <?php
                if ($user->deleteMe()) {
                    Session::flash('user-delete-success', 'Xoá người dùng thành công!');
                    Redirect::to('admin-user.php');
                } else {
                    Session::flash('user-delete-fail', 'Xoá người dùng bị lỗi!');
                    Redirect::to('admin-user.php');
                }
                ?>
        <?php else: ?>
            <?php $GLOBALS['$User'] = $user->data(); ?>
            <div class="container" style="padding-top: 5%; padding-bottom: 5%;">
                <h2>Cập nhật người dùng</h2>
                <form action="" method="post">
                    <input type="hidden" class="form-control" id="uid" name="uid" value="<?php echo $GLOBALS['$User']->uid; ?>">
                    <div class="form-group">
                        <label for="name">User name :</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter user name" name="name" value="<?php echo $GLOBALS['$User']->name; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="description">Username :</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $GLOBALS['$User']->username; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="price">Role :<span style="color: red">*</span></label>
                        <select class="form-control" id="role" placeholder="Select role" name="role" required>
                            <?php
                                function renderOptions($value) {
                                    return '<option value="' . $value->uid . '"' . ($GLOBALS['$User']->role == $value->uid ? " selected" : '') . '>' . $value->name . '</option>';
                                }
                                $roles = $role->getAll();
                                if ($roles) {
                                    echo join(' ', array_map('renderOptions', $role->getAll()));
                                }
                            ?>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Update user">
                    <a class="btn btn-info" href="/admin-user.php">Go back</a>
                </form>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php else: ?>
    <?php
        $data = $user->getAllJoin();
        function render($value, $index) {
            return
                '<tr>
                    <td style="text-align: right;">' . ($index + 1) . '</td>
                    <td style="white-space: nowrap;">' . $value->uid . '</td>
                    <td>' . $value->name . '</td>
                    <td>' . $value->username . '</td>
                    <td>' . $value->roleName . '</td>
                    <td><img src="' . $value->avatar . '" width="200px"></td>
                    <td>
                        <div class="btn-group" style="display: flex;">
                            <a class="btn btn-primary" href="/admin-user.php?uid='. $value->uid .'">Sửa</a>
                            <a class="btn btn-danger" href="/admin-user.php?uid='. $value->uid .'&delete=1">Xoá</a>
                        </div>
                    </td>
                </tr>';
        };
    ?>
    <div style="padding: 30px">
        <table class="table table-hover table-bordered table-responsive" style="margin-left:auto;margin-right:auto;">
            <thead>
                <tr>
                    <th style="width: auto; text-align: center;">#</th>
                    <th style="width: 20%;">ID</th>
                    <th style="width: 20%; white-space: nowrap;">Tên</th>
                    <th style="width: 30%; white-space: nowrap;">Username</th>
                    <th style="width: 10%; white-space: nowrap;">Role</th>
                    <th style="width: 20%; white-space: nowrap;">Avartar</th>
                    <th style="width: auto; text-align: center; white-space: nowrap;">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    echo join(' ', array_map('render', $data, array_keys($data)));
                ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>