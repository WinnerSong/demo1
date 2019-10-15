<?php
namespace Songzw\Demo1;

use Songzw\Demo1\Models\User;

class Demo1

{
	public function test()
	{
		echo 'I am from demo1 test'."\n";
		$user = new User();
		$user->test();
	}
}
