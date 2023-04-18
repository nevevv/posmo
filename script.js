$(".slider").slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  centerMode: true,
  variableWidth: true,
  autoplay: true,
  autoplaySpeed: 1000,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        variableWidth: false,
        slidesToShow: 1,
        autoplay: true,
        centerPadding: "0px",
      },
    },
  ],
});

const body = document.body;
const modal = $(".modal");

$(".header__nav-link").click(() => {
  $(body).css({
    "overflow-y": "hidden",
  });
  $(modal).css({
    opacity: "1",
    visibility: "visible",
  });

  $(".modal-bg").css({
    opacity: "1",
    visibility: "visible",
  });

  $(".close").click(() => {
    $(body).css({
      "overflow-y": "scroll",
    });
    $(modal).css({
      opacity: "0",
      visibility: "hidden",
    });
    $(".modal-bg").css({
      opacity: "0",
      visibility: "hidden",
    });
  });

  // Send Button
  $(".form_btn-send").click(() => {
    $(modal).css({
      opacity: "0",
      visibility: "hidden",
    });
    $(".modal-bg").css({
      opacity: "0",
      visibility: "hidden",
    });
  });
});
