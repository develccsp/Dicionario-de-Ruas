<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo registro'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Manutenção'), ['action' => 'edit']) ?></li>
        <li><?= $this->Html->link(__('Sair'), ['action' => 'Logout']) ?></li>
    </ul>
</nav>

<div class="logradouro index large-9 medium-8 columns content">
    <h3><?= __('Logradouro') ?></h3>

    <div class="container">
    <a href='#'><div class="search-tab active_search_tab">Opções de pesquisas</div></a>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
        <th><label for="CAD">
          <input type="radio" name="radioPesquisa[]" value="5" id="CAD" />
            CAD
        </label></th>
        <th><label for="RUA">
          <input type="radio" name="radioPesquisa[]" value="5" id="RUA" />
            RUA
        </label></th>
        <th><label for="BAIRRO">
          <input type="radio" name="radioPesquisa[]" value="5" id="BAIRRO" />
            BAIRRO
        </label></th>
        <th><label for="LEG">
          <input type="radio" name="radioPesquisa[]" value="5" id="LEG" />
            LEG
        </label></th>
        <th><label for="TIPO_LEG">
          <input type="radio" name="radioPesquisa[]" value="5" id="TIPO_LEG" />
            TIPO_LEG
        </label></th>
        <th><label for="NM_ANTEIRO">
          <input type="radio" name="radioPesquisa[]" value="5" id="NM_ANTEIRO" />
            NM_ANTEIRO
        </label></th>
         </thead>
    </table>

    
    <a href='#'><div class="search-tab active_search_tab">Pesquisar Logradouro</div></a>
    <div class="col-md-12 purple search_box">
    <?php
    echo $this->Form->create('Properties', array('type' => 'get'));
    echo $this->Form->input('q', array('between'=>'<label for="pesquisa" class="main_search">pesquisa</label><br>','label'=>false));
    echo $this->Form->button('Pesquisa', array('class'=>'btn btn-success'));
    echo $this->Form->end
    ?>
   
    </div>
    </div>

</div>


