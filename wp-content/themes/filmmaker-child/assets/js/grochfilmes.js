jQuery(function(a) {
    bindaMenuBorderOnHover();
    bindaDisplayServices();
    bindaScrollRevealServices();
    bindaCustomMapMarkerGMaps();
});

var bindaMenuBorderOnHover = function() {
  jQuery("#secao-navs ul li:odd").on("hover", function() {
    jQuery("#secao-navs").css("border-bottom", "8px solid #00A99F")}),
    jQuery("#secao-navs ul li:even").on("hover", function() {
    jQuery("#secao-navs").css("border-bottom", "8px solid #813095")
  })
};

var bindaScrollRevealBiografia = function() {
  window.sr = ScrollReveal(),
  sr.reveal("#biografia-imagem", {
      origin: "left",
      duration: 1e3,
      scale: .5,
      easing: "ease-out",
      mobile: !1
  }),
  sr.reveal(".titulo-camilagroch", {
      origin: "right",
      duration: 700,
      scale: .7,
      mobile: !1
  }),
  sr.reveal(".titulo-nascimento", {
      origin: "left",
      duration: 900,
      scale: .6,
      mobile: !1
  }),
  sr.reveal(".texto-conteudo", {
      origin: "right",
      duration: 800,
      scale: .8,
      mobile: !1
  })
};

var bindaDisplayServices = function() {
  jQuery(".info-nome").css("display", "inline-block");
  jQuery(".info-barra").css("display", "inline-block");
  jQuery(".info-especificacoes-tecnicas").css("display", "inline-block");
};

var bindaScrollRevealServices = function() {
  window.sr = ScrollReveal(),
  sr.reveal(".info-nome", {
      origin: "left",
      duration: 1e3,
      easing: "ease-in",
      mobile: !1
  }),
  sr.reveal(".info-barra", {
      origin: "left",
      duration: 1500,
      easing: "ease-out",
      mobile: !1
  }),
  sr.reveal(".info-especificacoes-tecnicas", {
      origin: "left",
      duration: 1500,
      easing: "ease-out",
      mobile: !1
  })
};

var bindaCustomMapMarkerGMaps = function() {
  jQuery(".gmnoprint").on("click", function() {
    jQuery(".gm-style-iw div div span").html("Rua Dona Maria Paula, 78 / 10º andar - Bela Vista - CEP 01319-000 - Sao Paulo - SP - Brasil")
  });
}
