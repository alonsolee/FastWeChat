<?php
/**
 * Created by PhpStorm.
 * User: lizhenchang
 * Date: 2019/2/25
 * Time: 12:04 PM
 */

namespace Alonsolee\FastWeChat;




use Overtrue\Socialite\AccessToken;
use Overtrue\Socialite\User;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
	public function testJsonserialize()
	{
		print_r('hello moto');
//		$this->assertSame('[]', json_encode(new User([])));

//		$this->assertSame('{"token":"mock-token"}', json_encode(new User(['token' => new AccessToken(['access_token' => 'mock-token'])])));
	}
}