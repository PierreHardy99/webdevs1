<?php
/**
 *  Librairie d'affichage
 */

// ce script contiendra les fonctions d'affichage [function]

/**
 * @param string $link
 * @param string $caption
 * @param string $class
 * @param string $target
 * @return string
 */
function linkA(string $link, string $caption, string $class = '', string $target = 'default'): string
{
    return '<a href="' . $link . '" class="' . $class . '" target="' . $target . '">' . $caption . '</a>';
}

/**
 * @param string $link
 * @param string $caption
 * @param string $class
 * @return string
 */
function linkBtn(string $link, string $caption, string $class = 'default'): string
{
    return '<a href="' . $link . '" class="btn btn-' . $class . '">' . $caption . '</a>';
}