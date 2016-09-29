<?php
use Skybluesofa\Hashtagify\Hashtagify;

class HashtagifyTest extends PHPUnit_Framework_TestCase {
	function test_as_is_hashtags () {
		$this->assertEquals ('#AnotherdayAnotherdollar', Hashtagify::asIs ('Another day. Another dollar.'));
		$this->assertEquals ('#ANOTHERdayAnotherdollar', Hashtagify::asIs ('ANOTHER day. Another dollar.'));
		$this->assertEquals ('#CuriosityKilledtheCat', Hashtagify::asIs ('Curiosity Killed the Cat'));
	}
	function test_pascal_case_hashtags () {
		$this->assertEquals ('#AnotherDayAnotherDollar', Hashtagify::PascalCase ('Another day. Another dollar.'));
		$this->assertEquals ('#AnotherDayAnotherDollar', Hashtagify::PascalCase ('ANOTHER day. Another dollar.'));
		$this->assertEquals ('#CuriosityKilledTheCat', Hashtagify::PascalCase ('Curiosity Killed the Cat'));
		$this->assertEquals ('#CuriosityKilledTheCat', Hashtagify::pascalCase ('Curiosity Killed the Cat'));
	}
	function test_camel_case_hashtags () {
		$this->assertEquals ('#anotherDayAnotherDollar', Hashtagify::camelCase ('Another day. Another dollar.'));
		$this->assertEquals ('#anotherDayAnotherDollar', Hashtagify::camelCase ('ANOTHER day. Another dollar.'));
		$this->assertEquals ('#curiosityKilledTheCat', Hashtagify::camelCase ('Curiosity Killed the Cat'));
	}
	function test_lowercase_snake_hashtags () {
		$this->assertEquals ('#another_day_another_dollar', Hashtagify::lowercase_snake ('Another day. Another dollar.'));
		$this->assertEquals ('#another_day_another_dollar', Hashtagify::lowercase_snake ('ANOTHER day. Another dollar.'));
		$this->assertEquals ('#curiosity_killed_the_cat', Hashtagify::lowercase_snake ('Curiosity Killed the Cat'));
		$this->assertEquals ('#curiosity_killed_the_cat', Hashtagify::lowercaseSnake ('Curiosity Killed the Cat'));
	}
	function test_camelcase_snake_hashtags () {
		$this->assertEquals ('#another_Day_Another_Dollar', Hashtagify::camelcase_Snake ('Another day. Another dollar.'));
		$this->assertEquals ('#another_Day_Another_dollar', Hashtagify::camelcase_Snake ('ANOTHER day. Another dollar.'));
		$this->assertEquals ('#curiosity_Killed_The_Cat', Hashtagify::camelcase_Snake ('Curiosity Killed the Cat'));
		$this->assertEquals ('#curiosity_Killed_The_Cat', Hashtagify::camelcaseSnake ('Curiosity Killed the Cat'));
	}
	function test_uppercase_snake_hashtags () {
		$this->assertEquals ('#Another_Day_Another_Dollar', Hashtagify::Uppercase_Snake ('Another day. Another dollar.'));
		$this->assertEquals ('#Another_Day_Another_dollar', Hashtagify::Uppercase_Snake ('ANOTHER day. Another dollar.'));
		$this->assertEquals ('#Curiosity_Killed_The_Cat', Hashtagify::Uppercase_Snake ('Curiosity Killed the Cat'));
		$this->assertEquals ('#Curiosity_Killed_The_Cat', Hashtagify::uppercaseSnake ('Curiosity Killed the Cat'));
	}
	function test_lowercase_hashtags () {
		$this->assertEquals ('#anotherdayanotherdollar', Hashtagify::lowercase ('Another day. Another dollar.'));
		$this->assertEquals ('#anotherdayanotherdollar', Hashtagify::lowercase ('ANOTHER day. Another dollar.'));
		$this->assertEquals ('#curiositykilledthecat', Hashtagify::lowercase ('Curiosity Killed the Cat'));
	}
	function test_uppercase_hashtags () {
		$this->assertEquals ('#ANOTHERDAYANOTHERDOLLAR', Hashtagify::UPPERCASE ('Another day. Another dollar.'));
		$this->assertEquals ('#ANOTHERDAYANOTHERDOLLAR', Hashtagify::UPPERCASE ('ANOTHER day. Another dollar.'));
		$this->assertEquals ('#CURIOSITYKILLEDTHECAT', Hashtagify::UPPERCASE ('Curiosity Killed the Cat'));
		$this->assertEquals ('#CURIOSITYKILLEDTHECAT', Hashtagify::uppercase ('Curiosity Killed the Cat'));
	}
}
?>
