<?php

if(isset($separator_value)) {
    echo _tag('div'.$separator_value);
} elseif(isset($custom_separator_value)) {
    echo _tag('div.block-separator style=height:'.$custom_separator_value.'px;');
}