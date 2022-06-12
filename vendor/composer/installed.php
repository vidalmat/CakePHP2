<?php return array(
    'root' => array(
        'name' => '__root__',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'cakephp/debug_kit' => array(
            'pretty_version' => '2.2.9',
            'version' => '2.2.9.0',
            'reference' => '8649a612001fa1caee82d9c432b8223cef221104',
            'type' => 'cakephp-plugin',
            'install_path' => __DIR__ . '/../../Plugin/DebugKit',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'composer/installers' => array(
            'pretty_version' => 'v1.12.0',
            'version' => '1.12.0.0',
            'reference' => 'd20a64ed3c94748397ff5973488761b22f6d3f19',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'roundcube/plugin-installer' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'shama/baton' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => '*',
            ),
        ),
    ),
);
