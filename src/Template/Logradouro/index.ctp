<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Logradouro'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="logradouro index large-9 medium-8 columns content">
    <h3><?= __('Logradouro') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('cd_logradouro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nm_logradouro_extenso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cd_distrito') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cd_bairro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cd_subprefeitura') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cd_tipo_logradouro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nm_logradouro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nm_anterior') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tp_legislacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nr_legislacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('di_legislacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ms_legislacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('an_legislacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nr_processo_legislacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tx_cadlog') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cd_administracao_regional') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cd_classificacao_logradouro') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($logradouro as $logradouro): ?>
            <tr>
                <td><?= $this->Number->format($logradouro->cd_logradouro) ?></td>
                <td><?= h($logradouro->nm_logradouro_extenso) ?></td>
                <td><?= $this->Number->format($logradouro->cd_distrito) ?></td>
                <td><?= $this->Number->format($logradouro->cd_bairro) ?></td>
                <td><?= $this->Number->format($logradouro->cd_subprefeitura) ?></td>
                <td><?= $this->Number->format($logradouro->cd_tipo_logradouro) ?></td>
                <td><?= h($logradouro->nm_logradouro) ?></td>
                <td><?= h($logradouro->nm_anterior) ?></td>
                <td><?= h($logradouro->tp_legislacao) ?></td>
                <td><?= h($logradouro->nr_legislacao) ?></td>
                <td><?= $this->Number->format($logradouro->di_legislacao) ?></td>
                <td><?= $this->Number->format($logradouro->ms_legislacao) ?></td>
                <td><?= $this->Number->format($logradouro->an_legislacao) ?></td>
                <td><?= h($logradouro->nr_processo_legislacao) ?></td>
                <td><?= h($logradouro->tx_cadlog) ?></td>
                <td><?= $this->Number->format($logradouro->cd_administracao_regional) ?></td>
                <td><?= $this->Number->format($logradouro->cd_classificacao_logradouro) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $logradouro->cd_logradouro]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $logradouro->cd_logradouro]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $logradouro->cd_logradouro], ['confirm' => __('Are you sure you want to delete # {0}?', $logradouro->cd_logradouro)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
