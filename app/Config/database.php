<?php

class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => 'root',
		'database' => 'websys',
		'prefix' => '',
		//'encoding' => 'utf8',
	);

	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => 'root',
		'database' => 'alfonsotesttest',
		'prefix' => '',
		//'encoding' => 'utf8',
	);
	
	
	public $mongo = array(
      'datasource' => 'Mongodb.MongodbSource',
      'host' => 'localhost',
      'database' => 'appsys',
      'port' => 27017,
      'prefix' => '',
      'persistent' => 'true',
      /* optional auth fields
      'login' => 'mongo', 
      'password' => 'awesomeness',
      'replicaset' => array('host' => 'mongodb://hoge:hogehoge@localhost:27021,localhost:27022/blog', 
                            'options' => array('replicaSet' => 'myRepl')
                   ),
      */
  );
  
  public $test_mongo = array(
		'datasource' => 'Mongodb.MongodbSource',
		'host' => 'localhost',
		'login' => '',
		'password' => '',
		'database' => 'appsys',
		'port' => 27017,
		'prefix' => '',
    'persistent' => 'true',
	);
  
  public $mongocake = array(
      'datasource' => 'MongoCake.CakeMongoSource',
      'server' => 'localhost', // Optional
      'database' => 'appsys', // Database to use,
      'port' => 27017,
  );
}
