<?php

namespace Matrix\Tests\Baseline;

use Matrix\Tests\Baseline\Models\BaseLineAlpha;
use Matrix\Tests\Baseline\UnitAbstract;

class EloquentTest extends UnitAbstract
{

	/** @test */
    public function record_count_test()
    {
		factory(BaseLineAlpha::class, 50)->create();
		$this->assertEquals(BaseLineAlpha::count(), 50);
	}

}
