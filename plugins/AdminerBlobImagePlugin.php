<?php
/**
 * (c) 2023 Cr4xy <cr4xy@live.de>
 * Licence: WTFPL
 */
class AdminerBlobImagePlugin {
    public function selectVal(&$val, &$link, &$field, &$original) {
        if ($field["type"] == "mediumblob" && substr($original, 1, 3) == "PNG") {
            return "<img src='$link&_=" . time() . "'>";
        }
    }
}
?>