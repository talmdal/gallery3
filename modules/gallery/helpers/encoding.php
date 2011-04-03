<?php defined("SYSPATH") or die("No direct script access.");
/**
 * Gallery - a web based photo album viewer and editor
 * Copyright (C) 2000-2011 Bharat Mediratta
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or (at
 * your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street - Fifth Floor, Boston, MA  02110-1301, USA.
 */
class encoding_Core {
  static function convert_to_utf8($value) {
    if (function_exists("mb_detect_encoding") &&
        function_exists("mb_convert_encoding") &&
        mb_detect_encoding($value, "ISO-8859-1, UTF-8") != "UTF-8") {
      $value = mb_convert_encoding($value, "UTF-8", mb_detect_encoding($value));
    } else if (function_exists("mb_detect_encoding") &&
               mb_detect_encoding($value, "ISO-8859-1, UTF-8") != "UTF-8") {
      $value = utf8_encode($value);
    }
    return $value;
  }
}