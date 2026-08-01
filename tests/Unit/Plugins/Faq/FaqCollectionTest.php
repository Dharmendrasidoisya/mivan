<?php

namespace Tests\Unit\Plugins\Faq;

use Botble\Faq\FaqCollection;
use Botble\Faq\FaqItem;
use Illuminate\Contracts\Support\Arrayable;
use PHPUnit\Framework\TestCase;

class FaqCollectionTest extends TestCase
{
    public function test_it_starts_empty(): void
    {
        $this->assertSame([], (new FaqCollection())->toArray());
    }

    public function test_it_is_arrayable(): void
    {
        $this->assertInstanceOf(Arrayable::class, new FaqCollection());
    }

    public function test_it_pushes_items_and_keeps_their_order(): void
    {
        $first = new FaqItem('Do you ship abroad?', 'Yes, worldwide.');
        $second = new FaqItem('What is the warranty?', 'One year.');

        $collection = (new FaqCollection())->push($first)->push($second);

        $this->assertSame([$first, $second], $collection->toArray());
    }

    public function test_push_returns_the_same_collection_for_chaining(): void
    {
        $collection = new FaqCollection();

        $this->assertSame($collection, $collection->push(new FaqItem('Q', 'A')));
    }
}
