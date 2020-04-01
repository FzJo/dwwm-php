<?php include __DIR__ . "/../_header.html.php" ?>

    <div class="d-flex align-items-center" style="height: 100vh">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="col text-center display-4">Signup</h1>
            </div>
            <div class="row justify-content-center">
                <form method="post" class="col-8 border border-primary m-4 p-4">
                    <div class="form-group">
                        <label for="pseudo">Pseudo</label>
                        <?php if ($form->getError()["name"]) { ?>
                            <div class="alert alert-danger" role="alert"><?php echo $form->getError()["name"] ?></div>
                        <?php } ?>
                        <input value="<?php echo filter_var($entity->getName(), FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>"
                               name="name" class="form-control" id="pseudo" placeholder="Enter pseudo">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <?php if ($form->getEmailForm()->getError()["email"]) { ?>
                            <div class="alert alert-danger" role="alert"><?php echo $form->getEmailForm()->getError()["email"] ?></div>
                        <?php } ?>
                        <input value="<?php echo filter_var($entity->getEmail()->getValue(), FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>"
                               name="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <?php if ($form->getPasswordForm()->getError()["password"]) { ?>
                            <div class="alert alert-danger" role="alert"><?php echo $form->getPasswordForm()->getError()["password"] ?></div>
                        <?php } ?>
                        <input value="<?php echo filter_var($entity->getPassword()->getValue(), FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>"
                               name="password" type="password" class="form-control" id="password"
                               placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="confirmation">Confirmation</label>
                        <?php if ($form->getPasswordForm()->getError()["password_confirmation"]) { ?>
                            <div class="alert alert-danger" role="alert"><?php echo $form->getPasswordForm()->getError()["password_confirmation"] ?></div>
                        <?php } ?>
                        <input name="password_confirmation" type="password" class="form-control" id="confirmation"
                               placeholder="Password">
                    </div>
                    <br/>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

<?php include __DIR__ . "/../_footer.html.php" ?>