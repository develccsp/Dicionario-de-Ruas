<div class="large-6 center content">
 <?= $this->Form->create('Usuario') ?>
    <fieldset>
    <div class="panel panel-default">
    <h3>Login Dicionário de Ruas</h3>
    <div class="panel-body">
    <div class="content">
        <?php
            echo $this->Form->input('RF');
            echo $this->Form->input('password');
        ?>
         <?= $this->Form->button(__('Entra')) ?>
    </fieldset>
    <?= $this->Form->end() ?>
        </div>
       </div>
      </div>
   </div>