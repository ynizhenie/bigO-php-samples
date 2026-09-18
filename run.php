<?php
$nums = [1, 2, 3, 4, 5];
$n = count($nums);

#O(1) for any element inside an array.
$steps = 0;

$val = $nums[0];
$steps++;

echo "O(1) steps: " . $steps . "\n"; // 3? = 3



#O(N) for any element inside that loop.
$steps = 0;

for ($i = 0; $i < $n; $i++) { // 3? = 0,1,2,3
    $steps++;
}

echo "O(N) steps: " . $steps . "\n"; // N



#O(N^2) for any element in outer loop call N and inner loop N
$steps = 0;

for ($i = 0; $i < $n; $i++) { //[2,3]? = 0,1,2
    for ($j = 0; $j < $n; $j++) { // = 0,1,2,3
        $steps++;
    }
}

echo "O(N^2) steps: " . $steps . "\n"; //N*N



#O(N^3), follows the same logic as O(N^2), N for each loop.
$steps = 0;

for ($i = 0; $i < $n; $i++) { // [1,2,3]? = 0,1
    for ($j = 0; $j < $n; $j++) { // = 0,1,2
        for ($k = 0; $k < $n; $k++) { // = 0,1,2,3
            $steps++;
        }
    }
}

echo "O(N^3) steps: " . $steps . "\n"; // N*N*N



#O(log N) each iteration we take twice less inputs.
$steps = 0;
$tempN = $n;

while ($tempN > 1) {
    $steps++;
    $tempN = (int)($tempN / 2); // 5? = 2,3 = 1 (2 steps)
}

echo "O(log N) steps: " . $steps . "\n"; // LogN

#O(NlogN), Quick sort or sort()

$steps = 0;
$size = $n;

while ($size > 1) { // log(N)
    for ($i = 0; $i < $n; $i++) { // 5? = 0,1,2,3,4,5
        $steps++;
    }
    $size = (int)($size / 2); // 5? = 2,3 = 1 (2 steps)
}

echo "O(N log N) steps for N=$n: " . $steps . "\n"; // N * LogN



#O(2^N), recursive subsets.
$steps = 0;
function generateSubsets($index, $current, $n, &$steps, $nums) {
    $steps++;
    if ($index === $n) {
        //echo ' [' . implode(', ', $current) . '] '."\n"; //visual representation
        return;
    }

    // skip
    generateSubsets($index + 1, $current, $n, $steps, $nums);
    
    // take
    generateSubsets($index + 1, $current = [...$current, $nums[$index]], $n, $steps, $nums);
}

generateSubsets(0, $current = [], $n, $steps, $nums);

echo "O(2^N) steps for N=$n: " . $steps . "\n"; // a LOT.
