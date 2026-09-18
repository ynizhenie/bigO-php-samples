# [bigO-php-samples]


[Simple educational file for algorithm time complexity understandment]

## Running it

```bash
[php run.php]
```



## [Implemented time complexity]

| Class | Shape in code | Steps at N=5 |
|---|---|---|
| `O(1)` | index lookup | 1 |
| `O(N)` | one loop | 5 |
| `O(N^2)` | two nested loops | 25 |
| `O(N^3)` | three nested loops | 125 |
| `O(log N)` | halving | 2 |
| `O(N log N)` | a loop inside the halving | 10 |
| `O(2^N)` | two recursive calls per step | 63 |


Sample size is set by the first line:

```php
$nums = [1, 2, 3, 4, 5];
```


