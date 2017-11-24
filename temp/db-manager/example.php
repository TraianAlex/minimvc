<?php
require_once 'db_manager.php';

$db = DB_Manager::get_instance();
$db->database();

$db->table = 'users';

# all results.
$result = $db->select('*')->all();
echo '<pre>';
	var_export($result);
echo '</pre>';

# one result.
$result = $db->select('*')->where('username', 'cantuares')->row();
echo '<pre>';
	var_export($result);
echo '</pre>';

# insert record.
$result = $db->values(array('username' => 'fulano', 'password' => '***'))->insert();
echo '<pre>';
	var_export($result);
echo '</pre>';

# update record.
$result = $db->set(array('username' => 'sicrano'))->where('username', 'fulano')->update();
echo '<pre>';
	var_export($result);
echo '</pre>';

# delete record.
$result = $db->where('username', 'sicrano')->delete();
echo '<pre>';
	var_export($result);
echo '</pre>';

//Now for return all results:
//Note: The aliase `'u'` is optional.
$db->table = 'users u';

$db->select('u.username, u.password')->all();

//You can also to pass array parameters in the methods `select` and `all`, for example:
$db->select(array('u.login', 'u.password'))->all(2000); // will be returned 2000.;

//Use the `row()` method instead `all()` if you want return only one result,

$db->select('u.username, u.password')->where('username','fulano')->where('password', '***')->row();

//If you want insert record in the database, see this example:
$db->values(array('username' => 'fulano', 'password' => '***'))->insert();

//If you want update some record in the database, see this example:

$db->set(array('username' => 'sicrano'))->where('username','fulano')->update();

//for delete some record in the database, you can use:
$db->where('username', 'fulano')->delete();

//Many others functions can be explored in the class, see documentation for more details, below i go show some fast examples.
//Queries with `where` method:
$db->select('*')->where('username', 'fulano')->all();

//Queries with `where_between` method:
$db->select('*')->where_between('year', 2013, 2014)->all();

//Queries with `where_in` method:
$db->select('*')->where_in('numbers', array(10,11,15,19,25))->all();

//Queries with `order_by` method:
$db->select('*')->where('username', 'fulano')->order_by('age', 'DESC')->all();

//Queries with `group_by` method:
$db->select('count(*) as count, age')->group_by('age')->all();

//Queries with `group_by` method:
$db->select('count(*) as count, age')->group_by('age')->all();

//Queries with `join` method:
$db->table = 'users u';
$db->select('u.name, g.name')->join('genders g', 'u.gender_id = g.id', 'LEFT')->all();

//Method `get_result_count` return the number total records:
$db->table = 'users u';
$db->get_result_count();

//You can increase the limit of records will be returned and change the primary key field name.
$db->limit = 2000;
$db->primaryKey = 'name_your_primary_key_field'; // default is id.
