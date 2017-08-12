<?php

$commandLine = $this->commandLine();
$commandLine->option('src', ['array' => true, 'default' => ['src', 'datas']]);
$commandLine->option('spec', ['array' => true, 'default' => ['tests']]);
