<?php 

namespace PhpParser\Node\Expr\AssignOp;

use PhpParser\Node\Expr\AssignOp;

class Coalesce extends AssignOp
{
    public function getType() : string {
        return 'Expr_AssignOp_Coalesce';
    }
}
