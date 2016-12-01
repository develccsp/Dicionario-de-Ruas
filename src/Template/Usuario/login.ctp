<h3>Login Dicionário de Ruas</h3>


 <?= $this->Form->create('Usuario') ?>
    <fieldset>
        <?php
            echo $this->Form->input('RF');
            echo $this->Form->input('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
