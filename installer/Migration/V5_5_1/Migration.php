<?php
/**
 *
 */

namespace OrangeHRM\Installer\Migration\V5_5_1;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Types\Types;
use OrangeHRM\Installer\Util\V1\AbstractMigration;

class Migration extends AbstractMigration
{
    /**
     * @inheritDoc
     */
    public function up(): void
    {
//        $this->getSchemaHelper()->changeColumn(
//            'hs_hr_config',
//            'value',
//            ['Type' => Type::getType(Types::TEXT), 'Notnull' => true]
//        );

        $this->getSchemaHelper()->addColumn('hs_hr_employee', 'mpsa_file_number', Types::TEXT, ['Length' => 254, 'Notnull' => true, 'Default' => null]);
    }

    /**
     * @inheritDoc
     */
    public function getVersion(): string
    {
        return '5.5.1';
    }
}
