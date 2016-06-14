<?php
/**
 * League.Uri (http://uri.thephpleague.com)
 *
 * @package   League.uri
 * @author    Ignace Nyamagana Butera <nyamsprod@gmail.com>
 * @copyright 2013-2015 Ignace Nyamagana Butera
 * @license   https://github.com/thephpleague/uri/blob/master/LICENSE (MIT License)
 * @version   4.2.0
 * @link      https://github.com/thephpleague/uri/
 */
namespace League\Uri\Types;

use League\Uri\Interfaces\UriPart;

/**
 * Common methods for Component Value Object
 *
 * @package League.uri
 * @author  Ignace Nyamagana Butera <nyamsprod@gmail.com>
 * @since   4.0.0
 */
trait ImmutableComponentTrait
{
    use ValidatorTrait;
    use TranscoderTrait;

    /**
     * Returns whether two UriPart objects represent the same value
     * The comparison is based on the getUriComponent method
     *
     * @param UriPart $component
     *
     * @return bool
     */
    public function sameValueAs(UriPart $component)
    {
        return $component->getUriComponent() === $this->getUriComponent();
    }

    /**
     * Returns the instance string representation
     * with its optional URI delimiters
     *
     * @return string
     */
    abstract public function getUriComponent();
}
