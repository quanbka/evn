$(document).ready(function () {
  // $(".anchor").on("click", function (event) {
  //   if (this.hash !== "") {
  //     event.preventDefault();
  //
  //     var hash = this.hash;
  //
  //     $("html, body").animate(
  //       {
  //         scrollTop: $(hash).offset().top
  //       },
  //       800,
  //       function () {
  //         window.location.hash = hash;
  //       }
  //     );
  //   }
  // });

  $('.other-sidebar').sidebar({
    context: $('#front-content'),
    transition: 'overlay'
  }).sidebar('attach events', '#mobile_item');

  $('.index-sidebar').sidebar({
    context: $('#fullpage'),
    transition: 'overlay'
  }).sidebar('attach events', '#mobile_item');

  $('.ui.checkbox')
    .checkbox()
    ;

  $('.ui.accordion')
    .accordion()
    ;

  $('.side-bar-close-icon').click(function () {
    console.log('123')
    $('#sidebar').removeClass('visible')
    $('.pusher.dimmed').removeClass('dimmed')
  })
})
