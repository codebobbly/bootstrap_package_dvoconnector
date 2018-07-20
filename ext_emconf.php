<?php
/**
 * $EM_CONF
 *
 * @category   Extension
 * @author     codebobbly
 */
$EM_CONF[$_EXTKEY] = [
    'title'            => 'Dvoconnector for Bootstrap-Package',
    'description'      => 'Integrate Dvoconnector with Bootstrap-Package',
    'category'         => 'fe',
    'version'          => '1.0.0',
    'state'            => 'stable',
    'clearcacheonload' => 1,
    'author'           => 'codebobbly',
    'author_email'     => 'codebobbly@gmail.com',
    'constraints'      => [
        'depends' => [
            'typo3'       => '7.6.0-*',
            'dvoconnector' => '1.0.0-*',
            'bootstrap_package' => '9.1.0-*',
        ],
    ],
];
