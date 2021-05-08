<h5 style="color: red;"><?php echo validation_errors(); ?></h5>
<?= $this->session->flashdata('msg');?>
<form action="<?= base_url('login/'); ?>" method="post">
    <input required name="user_username" type="text"><br>
    <input required name="user_password" type="password"><br>
    <button type="submit">Login</button>
</form>
<a href="<?= base_url('home/'); ?>">Go to home</a>
