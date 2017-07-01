<?php
namespace QA\Sort;

class TwoSortedArraySort {
	public function __construct() {
	}

	public function sort($foo, $bar) {
		$result = [];
		$count = count($foo) + count($bar);
		for ($i = 0; $i <= $count; $i++) {
			$curFoo = current($foo);
			$curBar = current($bar);
			if ($curFoo !== false && $curBar !== false) {
				if ($curFoo > $curBar) {
					$result[] = $curBar;
					next($bar);
				} else {
					$result[] = $curFoo;
					next($foo);
				}
			} else if ($curFoo !== false) {
				$result[] = $curFoo;
				next($foo);
			} else if ($curBar !== false) {
				$result[] = $curBar;
				next($bar);
			} else {
				return $result;
			}
		}
	}
}
