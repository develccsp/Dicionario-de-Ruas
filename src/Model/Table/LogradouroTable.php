<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Logradouro Model
 *
 * @method \App\Model\Entity\Logradouro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Logradouro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Logradouro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Logradouro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Logradouro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Logradouro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Logradouro findOrCreate($search, callable $callback = null)
 */
class LogradouroTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('logradouro');
        $this->displayField('cd_logradouro');
        $this->primaryKey('cd_logradouro');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('cd_logradouro')
            ->allowEmpty('cd_logradouro', 'create');

        $validator
            ->requirePresence('nm_logradouro_extenso', 'create')
            ->notEmpty('nm_logradouro_extenso');

        $validator
            ->integer('cd_distrito')
            ->allowEmpty('cd_distrito');

        $validator
            ->integer('cd_bairro')
            ->allowEmpty('cd_bairro');

        $validator
            ->integer('cd_subprefeitura')
            ->allowEmpty('cd_subprefeitura');

        $validator
            ->integer('cd_tipo_logradouro')
            ->requirePresence('cd_tipo_logradouro', 'create')
            ->notEmpty('cd_tipo_logradouro');

        $validator
            ->requirePresence('nm_logradouro', 'create')
            ->notEmpty('nm_logradouro');

        $validator
            ->allowEmpty('nm_anterior');

        $validator
            ->allowEmpty('tx_localizacao_logradouro');

        $validator
            ->allowEmpty('tp_legislacao');

        $validator
            ->allowEmpty('nr_legislacao');

        $validator
            ->allowEmpty('dc_legislacao');

        $validator
            ->integer('di_legislacao')
            ->allowEmpty('di_legislacao');

        $validator
            ->integer('ms_legislacao')
            ->allowEmpty('ms_legislacao');

        $validator
            ->integer('an_legislacao')
            ->allowEmpty('an_legislacao');

        $validator
            ->allowEmpty('nr_processo_legislacao');

        $validator
            ->allowEmpty('tx_cadlog');

        $validator
            ->allowEmpty('tx_historico_logradouro');

        $validator
            ->integer('cd_administracao_regional')
            ->allowEmpty('cd_administracao_regional');

        $validator
            ->integer('cd_classificacao_logradouro')
            ->allowEmpty('cd_classificacao_logradouro');

        return $validator;
    }
}
