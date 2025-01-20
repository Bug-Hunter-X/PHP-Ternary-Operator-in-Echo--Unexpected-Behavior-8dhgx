The solution lies in explicitly setting the precedence using parentheses:

```php
<?php
echo ($someVariable ? 'true' : 'false');
?>
```

By encapsulating the ternary operation within parentheses, we ensure that the entire expression is evaluated before the `echo` statement executes. This guarantees the correct output, where 'true' is outputted if `$someVariable` is truthy, and 'false' is outputted otherwise.  This avoids the unintended interpretation and resolves the unexpected behavior.