<?php declare(strict_types=1);

namespace Przeslijmi\CliApp\Exceptions;

use Przeslijmi\Sexceptions\Sexception;

/**
 * Neccessary param is missing.
 */
class ParamDonoexException extends Sexception
{

    /**
     * Hint.
     *
     * @var string
     */
    protected $hint = 'Neccessary param is missing.';

    /**
     * Keys for extra data array.
     *
     * @var array
     */
    protected $keys = [ 'paramName', 'operationMethodName' ];
}
