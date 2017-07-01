<?php
/**
 * TwoSortedArraySortTest.php
 * Desc:
 * Author: chenzhongkai@iwaimai.baidu.com
 * Date: 2017/7/1
 */


use QA\Sort\TwoSortedArraySort;
use PHPUnit\Framework\TestCase;

class TwoSortedArraySortTest extends TestCase {
	/**
	 * @dataProvider additionProvider
	 */
	public function testSort($foo, $bar, $expect) {
		$objSort = new TwoSortedArraySort();

		$result = $objSort->sort($foo, $bar);

		$this->assertEquals($expect, $result);
	}

	public function additionProvider() {
		return [
			[
				[1,2,3,4],
				[5,6,7,8],
				[1,2,3,4,5,6,7,8]
			],
			[
				[1,5,6,9,10],
				[0,2,2,8],
				[0,1,2,2,5,6,8,9,10]
			]
		];
	}

}