<?php 

namespace PhpParser\Node\Expr\Cast;

use PhpParser\Node\Expr\Cast;

class Object_ extends Cast
{
    public function getType() : string {
        return 'Expr_Cast_Object';
    }
}
