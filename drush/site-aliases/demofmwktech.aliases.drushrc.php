<?php

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site demofmwktech, environment dev
$aliases['dev'] = array(
  'root' => '/var/www/html/demofmwktech.dev/docroot',
  'ac-site' => 'demofmwktech',
  'ac-env' => 'dev',
  'ac-realm' => 'devcloud',
  'uri' => 'demofmwktechc2zhbt39fx.devcloud.acquia-sites.com',
  'remote-host' => 'demofmwktechc2zhbt39fx.ssh.devcloud.acquia-sites.com',
  'remote-user' => 'demofmwktech.dev',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['dev.livedev'] = array(
  'parent' => '@demofmwktech.dev',
  'root' => '/mnt/gfs/demofmwktech.dev/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site demofmwktech, environment test
$aliases['test'] = array(
  'root' => '/var/www/html/demofmwktech.test/docroot',
  'ac-site' => 'demofmwktech',
  'ac-env' => 'test',
  'ac-realm' => 'devcloud',
  'uri' => 'demofmwktechqomcvndapk.devcloud.acquia-sites.com',
  'remote-host' => 'demofmwktechqomcvndapk.ssh.devcloud.acquia-sites.com',
  'remote-user' => 'demofmwktech.test',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['test.livedev'] = array(
  'parent' => '@demofmwktech.test',
  'root' => '/mnt/gfs/demofmwktech.test/livedev/docroot',
);
