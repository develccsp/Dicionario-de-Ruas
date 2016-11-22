<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LogradouroFixture
 *
 */
class LogradouroFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'logradouro';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'cd_logradouro' => ['type' => 'integer', 'length' => 6, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nm_logradouro_extenso' => ['type' => 'string', 'length' => 95, 'null' => false, 'default' => '', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'cd_distrito' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cd_bairro' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cd_subprefeitura' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cd_tipo_logradouro' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nm_logradouro' => ['type' => 'string', 'length' => 70, 'null' => false, 'default' => '', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nm_anterior' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => '', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tx_localizacao_logradouro' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'tp_legislacao' => ['type' => 'string', 'length' => 11, 'null' => true, 'default' => '', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nr_legislacao' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => '', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'dc_legislacao' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'di_legislacao' => ['type' => 'integer', 'length' => 3, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ms_legislacao' => ['type' => 'integer', 'length' => 3, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'an_legislacao' => ['type' => 'integer', 'length' => 6, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nr_processo_legislacao' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => '', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tx_cadlog' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => '', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tx_historico_logradouro' => ['type' => 'text', 'length' => 4294967295.0, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'cd_administracao_regional' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cd_classificacao_logradouro' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'logradouro_IX1_logradouro' => ['type' => 'index', 'columns' => ['cd_classificacao_logradouro'], 'length' => []],
            'FK_LOGRADOUROXADMINISTRACAO_REGIONAL' => ['type' => 'index', 'columns' => ['cd_administracao_regional'], 'length' => []],
            'FK_LOGRADOUROXBAIRRO' => ['type' => 'index', 'columns' => ['cd_bairro'], 'length' => []],
            'FK_LOGRADOUROXDISTRITO' => ['type' => 'index', 'columns' => ['cd_distrito'], 'length' => []],
            'FK_LOGRADOUROXSUBPREFEITURA' => ['type' => 'index', 'columns' => ['cd_subprefeitura'], 'length' => []],
            'FK_LOGRADOUROXTIPO_LOGRADOURO' => ['type' => 'index', 'columns' => ['cd_tipo_logradouro'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cd_logradouro'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'MyISAM',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'cd_logradouro' => 1,
            'nm_logradouro_extenso' => 'Lorem ipsum dolor sit amet',
            'cd_distrito' => 1,
            'cd_bairro' => 1,
            'cd_subprefeitura' => 1,
            'cd_tipo_logradouro' => 1,
            'nm_logradouro' => 'Lorem ipsum dolor sit amet',
            'nm_anterior' => 'Lorem ipsum dolor sit amet',
            'tx_localizacao_logradouro' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'tp_legislacao' => 'Lorem ips',
            'nr_legislacao' => 'Lorem ip',
            'dc_legislacao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'di_legislacao' => 1,
            'ms_legislacao' => 1,
            'an_legislacao' => 1,
            'nr_processo_legislacao' => 'Lorem ipsum dolor sit amet',
            'tx_cadlog' => 'Lorem ip',
            'tx_historico_logradouro' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'cd_administracao_regional' => 1,
            'cd_classificacao_logradouro' => 1
        ],
    ];
}
