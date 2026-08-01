<?php

namespace Tests\Unit\Plugins\Faq;

use Botble\Faq\FaqItem;
use PHPUnit\Framework\TestCase;

class FaqItemTest extends TestCase
{
    public function test_it_exposes_the_question_and_the_answer(): void
    {
        $item = new FaqItem('Do you ship abroad?', 'Yes, worldwide.');

        $this->assertSame('Do you ship abroad?', $item->getQuestion());
        $this->assertSame('Yes, worldwide.', $item->getAnswer());
    }
}
