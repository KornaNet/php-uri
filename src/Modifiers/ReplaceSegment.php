<?php
/**
 * League.Url (http://url.thephpleague.com)
 *
 * @package   League.uri
 * @author    Ignace Nyamagana Butera <nyamsprod@gmail.com>
 * @copyright 2013-2015 Ignace Nyamagana Butera
 * @license   https://github.com/thephpleague/uri/blob/master/LICENSE (MIT License)
 * @version   4.0.0
 * @link      https://github.com/thephpleague/uri/
 */
namespace League\Uri\Modifiers;

use League\Uri\Interfaces\Components\Path;
use League\Uri\Modifiers\Filters\Offset;
use League\Uri\Modifiers\Filters\Segment;

/**
 * Replace a Segment from a Path
 *
 * @package League.uri
 * @author  Ignace Nyamagana Butera <nyamsprod@gmail.com>
 * @since   4.0.0
 */
class ReplaceSegment extends AbstractPathModifier
{
    use Segment;

    use Offset;

    /**
     * New instance
     *
     * @param int         $offset
     * @param Path|string $segment
     */
    public function __construct($offset, $segment)
    {
        $this->offset = $this->filterOffset($offset);
        $this->segment = $this->filterSegment($segment);
    }

    /**
     * {@inheritdoc}
     */
    protected function modify($str)
    {
        return (string) $this->segment->modify($str)->replace($this->offset, $this->segment);
    }
}