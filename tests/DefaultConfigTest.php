<?php

namespace ProtoneMedia\LaravelFFMpeg\Tests;

use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class DefaultConfigTest extends TestCase
{
    /** @test */
    public function it_has_a_default_of_12_threads()
    {
        $this->fakeLocalVideoFile();

        $command = FFMpeg::open('video.mp4')
            ->export()
            ->getCommand('test.mp4');

        $this->assertStringContainsString('-threads 12', $command[0]);
    }
}
