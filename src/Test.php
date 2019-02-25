<?php
/**
 * Created by PhpStorm.
 * User: lizhenchang
 * Date: 2019/2/25
 * Time: 12:04 PM
 */

namespace Alonsolee\FastWeChat;




use EasyWeChatComposer\EasyWeChat;
use Overtrue\Socialite\AccessToken;
use Overtrue\Socialite\User;
use PHPUnit\Framework\TestCase;
require __DIR__.'/../vendor/autoload.php';

class Test extends TestCase
{
	public function testJsonserialize()
	{
//		print_r('hello moto');
		print_r((new Aligado())->hello());
		$l = new ServiceProvider(null);
//		$this->assertSame('[]', json_encode(new User([])));

//		$this->assertSame('{"token":"mock-token"}', json_encode(new User(['token' => new AccessToken(['access_token' => 'mock-token'])])));
	}
}