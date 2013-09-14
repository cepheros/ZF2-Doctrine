<?php
return array('doctrine' => array(
				'connection' => array(
						'orm_default' => array(
								'driverClass' =>'Doctrine\DBAL\Driver\PDOMySql\Driver',
								'params' => array(
										'host'     => 'localhost',
										'port'     => '3306',
										'user'     => 'segadmin',
										'password' => '5Z8A4JrMJy4YncU7',
										'dbname'   => 'segadmin_test',
								)
						)
				)
		));