$('.navbar-nav .nav-item .nav-link[data-widget="pushmenu"]').click(function () {
  $("body").toggleClass("sidebar-open");
});

$(".nav-item.has-treeview a.nav-link").click(function () {
  $(this).parent().find(".sub-menu").toggle();
});
