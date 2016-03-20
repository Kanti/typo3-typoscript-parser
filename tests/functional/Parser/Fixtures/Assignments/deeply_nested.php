<?php
return [
    new \Helmich\TypoScriptParser\Parser\AST\NestedAssignment(
        new \Helmich\TypoScriptParser\Parser\AST\ObjectPath('foo', 'foo'), [
        new \Helmich\TypoScriptParser\Parser\AST\NestedAssignment(
            new \Helmich\TypoScriptParser\Parser\AST\ObjectPath('foo.bar', 'bar'), [
            new \Helmich\TypoScriptParser\Parser\AST\Operator\Assignment(
                new \Helmich\TypoScriptParser\Parser\AST\ObjectPath('foo.bar.baz', 'baz'),
                new \Helmich\TypoScriptParser\Parser\AST\Scalar('1'),
                3
            ),
        ], 2
        ),
    ], 1
    ),
];