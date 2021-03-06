<?php

/*
 * This file is part of the Moodle Plugin CI package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) 2015 Moodlerooms Inc. (http://www.moodlerooms.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace Moodlerooms\MoodlePluginCI\Tests\Bridge;

use Moodlerooms\MoodlePluginCI\Bridge\Moodle;

/**
 * @copyright Copyright (c) 2015 Moodlerooms Inc. (http://www.moodlerooms.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class MoodleTest extends \PHPUnit_Framework_TestCase
{
    public function testGetBranch()
    {
        $moodle = new Moodle(__DIR__.'/../Fixture/moodle');
        $this->assertEquals(29, $moodle->getBranch());
    }
}
