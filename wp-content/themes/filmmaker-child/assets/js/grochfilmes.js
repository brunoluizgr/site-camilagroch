jQuery(function ($) {
  bindaMenuBorderOnHover();
  bindaScrollRevealBiografia();
});

var bindaMenuBorderOnHover = function() {
  jQuery('#secao-navs ul li:odd').on("hover", function() {
    jQuery('#secao-navs').css("border-bottom", "8px solid #00A99F");
  });
  jQuery('#secao-navs ul li:even').on("hover", function() {
    jQuery('#secao-navs').css("border-bottom", "8px solid #813095");
  });
}

var bindaScrollRevealBiografia = function() {
  window.sr1 = ScrollReveal();
  window.sr2 = ScrollReveal();
  window.sr3 = ScrollReveal();
  window.sr4 = ScrollReveal();
  sr1.reveal('#biografia-imagem', { origin: 'left', duration: 1000, scale: 0.5, easing: 'ease-out', mobile: false });
  sr2.reveal('.titulo-camilagroch', { origin: 'right', duration: 700, scale: 0.7, mobile: false });
  sr3.reveal('.titulo-nascimento', { origin: 'left', duration: 900, scale: 0.6, mobile: false });
  sr4.reveal('.texto-conteudo', { origin: 'right', duration: 800, scale: 0.8, mobile: false });
}
