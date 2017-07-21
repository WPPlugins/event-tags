<?
/*
Plugin Name: Event Tags
Plugin URI: http://blog.ebotunes.com/event-tags-for-wordpressevent-tags-for-wordpress/
Description: Adds links to event pages based on post machine tags
Author: Iain Mullan
Author URI: http://www.ebotunes.com
Version: 0.1

*/

/*  Copyright 2009  Iain Mullan  (email : iain.mullan@gmail.com )

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


function event_tags() {

	echo "<style>img.eventIcon { border: 0; padding: 0; } a.eventLink { font-weight: bold; }</style>";

$posttags = get_the_tags();
if ($posttags) {
foreach($posttags as $tag) {
if (preg_match("/lastfm:event=([0-9]*)/", $tag->name, $matches)) {
$id = $matches[1];
$event_url = "http://www.last.fm/event/$id";
$img_url = get_bloginfo('wpurl') . '/wp-content/plugins/eventtag/img/lastfm.gif';
//echo "<img class='eventIcon' src='$img_url' />";
echo "<a href='$event_url' class='eventLink lastfm'>Last.FM event page</a>"; 

}
}
}

}


?>