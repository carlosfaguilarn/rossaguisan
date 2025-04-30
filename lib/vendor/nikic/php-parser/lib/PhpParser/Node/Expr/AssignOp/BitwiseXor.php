<?php 

namespace PhpParser\Node\Expr\AssignOp;

use PhpParser\Node\Expr\AssignOp;

class BitwiseXor extends AssignOp
{
    public function getType() : string {
        return 'Expr_AssignOp_BitwiseXor';
    }
}
