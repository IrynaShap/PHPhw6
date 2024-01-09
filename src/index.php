<?php
function multiplyAndApply(int $a, int $b, ?Closure $closure = null): float|int
{
	$result = $a * $b;

	if ($closure !== null) {
		$closure($result);
	}

	return $result;
}

$anonymousFunction = function ($value) {
	echo "Результат: " . $value . "\n";
};

multiplyAndApply(5, 10, $anonymousFunction);