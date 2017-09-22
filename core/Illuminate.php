<?php
namespace thunder;
use Illuminate\Database\Capsule\Manager as Capsule;
$data = Conf::get('database','ORM');
$capsule = new Capsule;
$capsule->addConnection($data);
$capsule->bootEloquent();