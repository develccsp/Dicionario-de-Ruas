<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Logradouro Entity
 *
 * @property int $cd_logradouro
 * @property string $nm_logradouro_extenso
 * @property int $cd_distrito
 * @property int $cd_bairro
 * @property int $cd_subprefeitura
 * @property int $cd_tipo_logradouro
 * @property string $nm_logradouro
 * @property string $nm_anterior
 * @property string $tx_localizacao_logradouro
 * @property string $tp_legislacao
 * @property string $nr_legislacao
 * @property string $dc_legislacao
 * @property int $di_legislacao
 * @property int $ms_legislacao
 * @property int $an_legislacao
 * @property string $nr_processo_legislacao
 * @property string $tx_cadlog
 * @property string $tx_historico_logradouro
 * @property int $cd_administracao_regional
 * @property int $cd_classificacao_logradouro
 */
class Logradouro extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'cd_logradouro' => false
    ];
}
