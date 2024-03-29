<div id="marco_superior_gris1" >
    <span class="titulo_marco"> <?php echo lang('login_heading'); ?></span> 
    <p><?php // echo lang('login_subheading'); ?></p>
</div>
<div id="marco_gris1" >
    <div id="infoMessage"><?php echo $message; ?></div>

    <?php echo form_open("auth/index"); ?>

    <p>
        <?php echo lang('login_identity_label', 'identity'); ?>
        <?php echo form_input($identity); ?>
    </p>

    <p>
        <?php echo lang('login_password_label', 'password'); ?>
        <?php echo form_input($password); ?>
    </p>

    <p>
        <?php echo lang('login_remember_label', 'remember'); ?>
        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
    </p>


    <p><?php echo form_submit('submit', lang('login_submit_btn')); ?></p>

    <?php echo form_close(); ?>

    <p><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>
</div>