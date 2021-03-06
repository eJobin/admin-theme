<!DOCTYPE html>
<html>
  <head>
    <?= $this->Html->charset() ?>
    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->Html->css('AdminTheme.admin') ?>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <?= $this->element('navbar') ?>
      <?php echo $this->element('sidebar') ?>
      <div class="content-wrapper">
        <?= $this->element('heading') ?>
        <section class="content">
            <?php echo $this->Flash->render(); ?>
            <?= $this->fetch('content') ?>
            <?= $this->fetch('action_link_forms'); ?>
        </section>
      </div>
      <?= $this->element('footer') ?>
      <?= $this->element('rightbar') ?>
    </div>

    <?= $this->Require->module('admin/dist/js/app'); ?>
    <?= $this->Require->module('admin/plugins/fastclick/fastclick'); ?>
    <?= $this->Require->module('jquery'); ?>
    <?= $this->Require->module('bootstrap'); ?>
    <?= $this->Require->load(['AdminTheme.config']); ?>
  </body>
</html>
