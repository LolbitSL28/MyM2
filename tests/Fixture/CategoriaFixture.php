<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategoriaFixture
 */
class CategoriaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'categoria';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'Id_Categoria' => 1,
                'Nombre_Cat' => 'Lorem ipsum dolor sit amet',
                'Descripcion_Cat' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
