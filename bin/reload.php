<?php

require_once __DIR__.'/base_script.php';

build_bootstrap();

show_run("Drop current database", "app/console doctrine:database:drop --force");
show_run("Create database", "app/console doctrine:database:create");
show_run("Create schema", "app/console doctrine:schema:create");
show_run("Destroying cache dir manually", "rm -rf app/cache/*");
show_run("Warming up dev cache", "app/console --env=dev cache:clear");
show_run("Dump Assets to File system", "app/console assetic:dump");
show_run("Install Assets", "app/console assets:install");
show_run("Install Assets env=dev", "app/console assets:install --env=dev");
show_run("Changing permissions", "sudo chmod -R 777 app/cache app/logs");
show_run("Import translations", "app/console uber:translation:purge");
show_run("Import translations", "app/console uber:translation:import en,uk AcmeDemoBundle");
show_run("Import translations", "app/console uber:translation:import en,uk TestBundle");

exit(0);
