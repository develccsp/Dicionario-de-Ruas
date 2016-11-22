<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Logradouro'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="logradouro form large-9 medium-8 columns content">
    <?= $this->Form->create($logradouro) ?>
    <fieldset>
        <legend><?= __('Add Logradouro') ?></legend>
        <?php
            echo $this->Form->input('nm_logradouro_extenso');
            echo $this->Form->input('cd_distrito');
            echo $this->Form->input('cd_bairro');
            echo $this->Form->input('cd_subprefeitura');
            echo $this->Form->input('cd_tipo_logradouro');
            echo $this->Form->input('nm_logradouro');
            echo $this->Form->input('nm_anterior');
            echo $this->Form->input('tx_localizacao_logradouro');
            echo $this->Form->input('tp_legislacao');
            echo $this->Form->input('nr_legislacao');
            echo $this->Form->input('dc_legislacao');
            echo $this->Form->input('di_legislacao');
            echo $this->Form->input('ms_legislacao');
            echo $this->Form->input('an_legislacao');
            echo $this->Form->input('nr_processo_legislacao');
            echo $this->Form->input('tx_cadlog');
            echo $this->Form->input('tx_historico_logradouro');
            echo $this->Form->input('cd_administracao_regional');
            echo $this->Form->input('cd_classificacao_logradouro');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
