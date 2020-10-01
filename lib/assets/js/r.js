// FORMATEAR TEXTO A MONEDA, SOLO ETIQUETAS CON ESTA CLASE
var etiquetasMoneda = document.getElementsByClassName("moneda");
var etiquetasHoy = document.getElementsByClassName("hoy");

Array.from(etiquetasMoneda).forEach((etiqueta) => {
    var valor = etiqueta.innerHTML;
    etiqueta.innerHTML = formatCurrency("en-US", "USD", 2, valor)
});

Array.from(etiquetasHoy).forEach((etiqueta) => {
    etiqueta.value = moment().format('DD/MM/YYYY');    
});
 

function formatCurrency (locales, currency, fractionDigits, number) {
  var formatted = new Intl.NumberFormat(locales, {
    style: 'currency',
    currency: currency,
    minimumFractionDigits: fractionDigits
  }).format(number);
  return formatted;
}
 



