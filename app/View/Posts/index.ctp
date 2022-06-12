<h1>Salut <?= $prenom; ?></h1>

<?= $this->start('sidebar'); ?>

    <h2>Ma sidebar</h2>
    <ul>
        <a href="#" ><li>Salut</li></a>
        <a href="#" ><li>Test</li></a>
        <a href="#" ><li>Test2</li></a>
        <a href="#" ><li>Test3</li></a>
    </ul>

<?= $this->end(); ?>

<?= $this->assign('title', 'Mon projet'); ?>