<?php
if (rex_addon::get('yrewrite')->isAvailable()) {
    rex_yrewrite::setScheme(new yrewrite_one_level());
}
