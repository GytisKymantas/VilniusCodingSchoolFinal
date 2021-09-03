$(document).ready(function () {
  // for responsive mobile menu
  $(".btn-mobile-nav").click(function () {
    $("header").toggleClass("nav-open");
  });

  // for login

  $(".inputsBtn").mouseover(function () {
    $(".inputs").addClass("inputsDisplay");
  });

  // Select all links with hashes
  $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length
          ? target
          : $("[name=" + this.hash.slice(1) + "]");
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $("html, body").animate(
            {
              scrollTop: target.offset().top,
            },
            1000,
            function () {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) {
                // Checking if the target was focused
                return false;
              } else {
                $target.attr("tabindex", "-1"); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              }
            }
          );
        }
      }

      // For smooth scrolling

      $(".icons__container-1 ion-icon")
        .load(function () {
          $(this).data("height", this.height);
        })
        .bind("mouseenter mouseleave", function (e) {
          $(this)
            .stop()
            .animate({
              height:
                $(this).data("height") * (e.type === "mouseenter" ? 1.5 : 1),
            });
        });
    });

  // For sticky header

  const sectionHeroEl = document.querySelector("header");

  const obs = new IntersectionObserver(
    function (entries) {
      const ent = entries[0];
      console.log(ent);
      if (ent.isIntersecting === false) {
        document.body.classList.add("sticky");
      }
      if (ent.isIntersecting === true) {
        document.body.classList.remove("sticky");
      }
    },
    {
      // in the viewport
      root: null,
      threshold: 0,
    }
  );
  obs.observe(sectionHeroEl);
});
