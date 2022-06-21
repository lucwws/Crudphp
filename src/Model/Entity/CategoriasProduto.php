<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CategoriasProduto Entity
 *
 * @property int $id
 * @property string $nome_categoria
 * @property string $descricao_categoria
 *
 * @property \App\Model\Entity\Produto[] $produtos
 */
class CategoriasProduto extends Entity
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
        'nome_categoria' => true,
        'descricao_categoria' => true,
        'produtos' => true,
    ];
}