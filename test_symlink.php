<?php
if (function_exists('symlink')) {
    echo "symlink() function is enabled.";
} else {
    echo "symlink() function is not available.";
}