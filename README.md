# PHP Ternary Operator in Echo: Unexpected Behavior

This repository demonstrates a subtle bug in PHP involving the use of the ternary operator within an echo statement.  The problem arises from the operator precedence and how PHP interprets the expression, leading to unexpected output when dealing with empty strings or 0 values.

The `bug.php` file contains the problematic code snippet. The `bugSolution.php` file provides a corrected version using parentheses to explicitly define the order of operations.

This issue highlights the importance of understanding operator precedence in PHP, and also showcases the difference between a language construct (`echo`) and a function.