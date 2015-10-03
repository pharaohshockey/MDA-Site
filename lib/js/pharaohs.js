var pharaohs = pharaohs || {};

pharaohs = (function () {
  'use strict';

  var pgg = {};

  pgg.init = function () {
    jQuery('.container').fitVids();
  };

  return pgg;
}());

(function () {
  pharaohs.init();
}());
