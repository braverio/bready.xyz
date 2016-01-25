$(document).ready(function () {
    $("div.hidden")
        .css('opacity', 0)
        .slideDown(1000)
        .animate(
            { opacity: 1 },
            { queue: false, duration: 1500 }
  );
});