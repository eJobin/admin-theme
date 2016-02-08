<section class="content-header">
    <h1>
        <?= $this->request->params['controller'] ?>
        <small><?= $this->request->params['action'] ?></small>
    </h1>
    <?=
    $this->Html->getCrumbList(['class' => 'breadcrumb'], [
        'text' => __d('admin_theme', 'Admin'),
        'url' => ['controller' => 'users', 'action' => 'index']
    ]) ?>
</section>
