# Simple package for validate brackets  
## USE  
```
use \Anstag\BracketsValidator\BracketsValidator;

$string = '(12 + 17) / 34';
$validator = new BracketsValidator();
$validator->isValid($string);
```