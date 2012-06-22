<?php
 /**
  * This template is used to output a map of marker locations in a view.
  *
  * Variables available:
  * - $view: the view object, if needed
  * - $locations: array of locations each with lat/long coordinates and balloon
  *   texts; the map will be centered on the first location, usually the current
  *   visitor location
  * - $div_id: id of the div in which the map will be injected, arbitrary but
  *   must be unique
  * - $map_options: passed to Google Maps API, eg '{"mapTypeId":"roadmap", "zoom": 10}'
  * - $map_style: CSS style string, like 'height: 200px; width: 500px'
  */
?>
<div class="ip-geoloc-map view-based-map">
  <?php echo ip_geoloc_output_map_multi_location($locations, $div_id, $map_options, $map_style); ?>
</div>