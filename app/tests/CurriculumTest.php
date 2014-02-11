<?php
/**
 * Created by PhpStorm.
 * User: bkintanar
 * Date: 2/11/14
 * Time: 5:31 AM
 */

class CurriculumTest extends TestCase {

    /** @test */
    public function it_works()
    {
        $curriculum = Curriculum::whereId(1)->first();

        $this->assertEquals('BSIT', $curriculum->abbr);
    }
}
 