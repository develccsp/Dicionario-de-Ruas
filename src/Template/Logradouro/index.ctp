<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo registro'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Usuário'), ['action' => 'usuarioRed']) ?></li>
        <li><?= $this->Html->link(__('Sair'), ['action' => 'logout']) ?></li>
    </ul>
</nav>

<div class="logradouro index large-9 medium-8 columns content">
    <h3><?= __('Logradouro') ?></h3>
    <div class="container">
    <a href='#'><div class="search-tab active_search_tab">Opções de pesquisas</div></a>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
        <th><label for="CADLOG">
          <input type="radio" name="radioPesquisa[]" value="1" id="CADLOG" />
            CADLOG
        </label></th>
        <th><label for="RUA">
          <input type="radio" name="radioPesquisa[]" value="2" id="RUA" />
            Rua
        </label></th>
        <th><label for="BAIRRO">
          <input type="radio" name="radioPesquisa[]" value="3" id="BAIRRO" />
            Bairro
        </label></th>
        <th><label for="LEG">
          <input type="radio" name="radioPesquisa[]" value="4" id="LEG" />
            Legislação
        </label></th>
        <th><label for="TIPO_LEG">
          <input type="radio" name="radioPesquisa[]" value="5" id="TIPO_LEG" />
            Tipo Legislação
        </label></th>
         </thead>
         <thead>
          <th><label for="TIPO">
          <input type="radio" name="radioPesquisa[]" value="7" id="TIPO" />
            Tipo
        </label></th>
         <th><label for="DISTRITO">
          <input type="radio" name="radioPesquisa[]" value="8" id="DISTRITO" />
            Distrito
        </label></th>
         <th><label for="SUB_PF">
          <input type="radio" name="radioPesquisa[]" value="9" id="SUB_PF" />
            Subprefeitura
        </label></th>
         <th><label for="PROC">
          <input type="radio" name="radioPesquisa[]" value="10" id="PROC" />
            Processo
        </label></th>
         <th><label for="DATA_LEG">
          <input type="radio" name="radioPesquisa[]" value="11" id="DATA_LEG" />
            Data Legislação
        </label></th>
        </thead>
         <th><label for="CLASS">
          <input type="radio" name="radioPesquisa[]" value="13" id="CLASS" />
            Classificação
        </label></th>
        <th><label for="LOC">
          <input type="radio" name="radioPesquisa[]" value="12" id="LOC" />
            Localização
        </label></th>
        <th><label for="NM_ANTERIOR">
          <input type="radio" name="radioPesquisa[]" value="6" id="NM_ANTEIRO" />
            Nome Anterior
        </label></th>
        <th><label for="NM_LEG">
          <input type="radio" name="radioPesquisa[]" value="6" id="NM_LEG" />
            Número de Legislação
        </label></th>
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
