$(function() {
  'use strict';
  if ($(".mapael-container").length) {
    $(".mapael-container").mapael({
      map: {
        name: "world_countries"
      }
    });
  }
});