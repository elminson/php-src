--TEST--
bcround() function PHP_ROUND_HALF_DOWN
--EXTENSIONS--
bcmath
--FILE--
<?php
require_once __DIR__ . '/bcround_test_helper.inc';
run_round_test(PHP_ROUND_HALF_DOWN);
?>
--EXPECT--
========== non-boundary value ==========
         [1.1, 0] => 1
         [1.2, 0] => 1
         [1.3, 0] => 1
         [1.4, 0] => 1
         [1.6, 0] => 2
         [1.7, 0] => 2
         [1.8, 0] => 2
         [1.9, 0] => 2
        [-1.1, 0] => -1
        [-1.2, 0] => -1
        [-1.3, 0] => -1
        [-1.4, 0] => -1
        [-1.6, 0] => -2
        [-1.7, 0] => -2
        [-1.8, 0] => -2
        [-1.9, 0] => -2

========== minus precision ==========
         [50, -2] => 0
        [-50, -2] => 0
       [1230, -1] => 1230
       [1235, -1] => 1230
      [-1230, -1] => -1230
      [-1235, -1] => -1230
  [3400.0000, -2] => 3400
  [3400.0001, -2] => 3400
  [3450.0000, -2] => 3400
  [3450.0001, -2] => 3500
 [-3400.0000, -2] => -3400
 [-3400.0001, -2] => -3400
 [-3450.0000, -2] => -3400
 [-3450.0001, -2] => -3500

========== zero precision ==========
        [1235, 0] => 1235
      [1235.0, 0] => 1235
 [1235.000001, 0] => 1235
      [1235.5, 0] => 1235
 [1235.500001, 0] => 1236
       [-1235, 0] => -1235
     [-1235.0, 0] => -1235
[-1235.000001, 0] => -1235
     [-1235.5, 0] => -1235
[-1235.500001, 0] => -1236
      [0.0001, 0] => 0
         [0.5, 0] => 0
      [0.5000, 0] => 0
      [0.5001, 0] => 1
     [-0.0001, 0] => 0
        [-0.5, 0] => 0
     [-0.5000, 0] => 0
     [-0.5001, 0] => -1

========== plus precision ==========
       [28.40, 1] => 28.4
  [28.4000001, 1] => 28.4
       [28.45, 1] => 28.4
  [28.4500001, 1] => 28.5
      [-28.40, 1] => -28.4
 [-28.4000001, 1] => -28.4
      [-28.45, 1] => -28.4
 [-28.4500001, 1] => -28.5
      [153.90, 1] => 153.9
 [153.9000001, 1] => 153.9
      [153.95, 1] => 153.9
 [153.9500001, 1] => 154.0
     [-153.90, 1] => -153.9
[-153.9000001, 1] => -153.9
     [-153.95, 1] => -153.9
[-153.9500001, 1] => -154.0
    [0.000001, 3] => 0.000
      [0.0005, 3] => 0.000
    [0.000500, 3] => 0.000
    [0.000501, 3] => 0.001
   [-0.000001, 3] => 0.000
     [-0.0005, 3] => 0.000
   [-0.000500, 3] => 0.000
   [-0.000501, 3] => -0.001
