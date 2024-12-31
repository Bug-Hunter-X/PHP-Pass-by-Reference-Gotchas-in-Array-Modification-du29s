# PHP Pass-by-Reference Gotchas in Array Modification

This repository demonstrates a common, yet subtle, error in PHP related to pass-by-reference when modifying arrays within functions.  Improper handling of references, especially within `foreach` loops, can lead to unexpected behavior and difficult-to-trace bugs.

The `bug.php` file contains code that showcases this issue.  The `bugSolution.php` file provides a corrected version, illustrating best practices for handling array modifications in functions.

**Key Learning:** Understanding the nuances of pass-by-reference in PHP is crucial for writing robust and predictable code, especially when working with arrays.