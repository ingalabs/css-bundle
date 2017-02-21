<?php

/*
 * (c) Antal Áron <antalaron@antalaron.hu>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace IngaLabs\CssBundle\Model;

/**
 * CssFileInterface.
 *
 * @author Antal Áron <antalaron@antalaron.hu>
 */
interface CssFileInterface
{
    /**
     * Set path.
     *
     * @param string $path
     *
     * @return CssFileInterface
     */
    public function setPath($path);

    /**
     * Get path.
     *
     * @return string
     */
    public function getPath();

    /**
     * Set content.
     *
     * @param string $content
     *
     * @return CssFileInterface
     */
    public function setContent($content);

    /**
     * Get content.
     *
     * @return string
     */
    public function getContent();

    /**
     * Set modifiedAt.
     *
     * @param \DateTime $modifiedAt
     *
     * @return CssFileInterface
     */
    public function setModifiedAt(\DateTime $modifiedAt);

    /**
     * Get modifiedAt.
     *
     * @return \DateTime
     */
    public function getModifiedAt();

    /**
     * Set enabled.
     *
     * @param bool $enabled
     *
     * @return CssFileInterface
     */
    public function setEnabled($enabled);

    /**
     * Is enabled.
     *
     * @return bool
     */
    public function isEnabled();
}
