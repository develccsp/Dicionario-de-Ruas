<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Logradouro'), ['action' => 'edit', $logradouro->cd_logradouro]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Logradouro'), ['action' => 'delete', $logradouro->cd_logradouro], ['confirm' => __('Are you sure you want to delete # {0}?', $logradouro->cd_logradouro)]) ?> </li>
        <li><?= $this->Html->link(__('List Logradouro'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Logradouro'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="logradouro view large-9 medium-8 columns content">
    <h3><?= h($logradouro->cd_logradouro) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nm Logradouro Extenso') ?></th>
            <td><?= h($logradouro->nm_logradouro_extenso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nm Logradouro') ?></th>
            <td><?= h($logradouro->nm_logradouro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nm Anterior') ?></th>
            <td><?= h($logradouro->nm_anterior) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tp Legislacao') ?></th>
            <td><?= h($logradouro->tp_legislacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nr Legislacao') ?></th>
            <td><?= h($logradouro->nr_legislacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nr Processo Legislacao') ?></th>
            <td><?= h($logradouro->nr_processo_legislacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tx Cadlog') ?></th>
            <td><?= h($logradouro->tx_cadlog) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cd Logradouro') ?></th>
            <td><?= $this->Number->format($logradouro->cd_logradouro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cd Distrito') ?></th>
            <td><?= $this->Number->format($logradouro->cd_distrito) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cd Bairro') ?></th>
            <td><?= $this->Number->format($logradouro->cd_bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cd Subprefeitura') ?></th>
            <td><?= $this->Number->format($logradouro->cd_subprefeitura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cd Tipo Logradouro') ?></th>
            <td><?= $this->Number->format($logradouro->cd_tipo_logradouro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Di Legislacao') ?></th>
            <td><?= $this->Number->format($logradouro->di_legislacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ms Legislacao') ?></th>
            <td><?= $this->Number->format($logradouro->ms_legislacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('An Legislacao') ?></th>
            <td><?= $this->Number->format($logradouro->an_legislacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cd Administracao Regional') ?></th>
            <td><?= $this->Number->format($logradouro->cd_administracao_regional) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cd Classificacao Logradouro') ?></th>
            <td><?= $this->Number->format($logradouro->cd_classificacao_logradouro) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Tx Localizacao Logradouro') ?></h4>
        <?= $this->Text->autoParagraph(h($logradouro->tx_localizacao_logradouro)); ?>
    </div>
    <div class="row">
        <h4><?= __('Dc Legislacao') ?></h4>
        <?= $this->Text->autoParagraph(h($logradouro->dc_legislacao)); ?>
    </div>
    <div class="row">
        <h4><?= __('Tx Historico Logradouro') ?></h4>
        <?= $this->Text->autoParagraph(h($logradouro->tx_historico_logradouro)); ?>
    </div>
</div>
