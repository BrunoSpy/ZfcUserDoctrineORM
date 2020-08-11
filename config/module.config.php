<?php
return array(
    'doctrine' => array(
        'driver' => array(
            'zfcuser_entity' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'paths' => array(__DIR__ . '/xml/zfcuser')
            ),

            'orm_default' => array(
                'drivers' => array(
                    'LmcUser\Entity'  => 'zfcuser_entity'
                )
            )
        )
    ),
);
