jQuery(document).ready(function ($) {
  'use strict';

  var table      = $('#update-themes-table');
  var voelas_table_update_screenshot = table.find("img[src*='wp-content/themes/voelas/screenshot.png']");
  // remove td
  voelas_table_update_screenshot.parent().parent().parent().remove();

  $(window).on('load', function() {
    var voelas_theme_screenshot = $('.theme-browser').find("img[src*='wp-content/themes/voelas/screenshot.png']");
    voelas_theme_screenshot.parent().next('.notice').remove();

    var voelas_theme_overlay_screenshot = $('.theme-overlay .theme-about').find("img[src*='wp-content/themes/voelas/screenshot.png']");
    voelas_theme_overlay_screenshot.parent().parent().next('.theme-info').find('.notice').remove();
  });
});
