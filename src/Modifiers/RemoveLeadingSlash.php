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

use League\Uri\Components\HierarchicalPath;

/**
 * Remove the leading slash to the URI path
 *
 * @package League.uri
 * @author  Ignace Nyamagana Butera <nyamsprod@gmail.com>
 * @since   4.0.0
 */
class RemoveLeadingSlash extends AbstractPathModifier
{
    /**
     * {@inheritdoc}
     */
    protected function modify($str)
    {
        $path = new HierarchicalPath($str);
        if (!$path->isAbsolute()) {
            return (string) $path;
        }

        return (string) $path->createFromArray($path->toArray());
    }
}