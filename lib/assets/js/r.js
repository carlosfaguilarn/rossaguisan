// FORMATEAR TEXTO A MONEDA, SOLO ETIQUETAS CON ESTA CLASE
var etiquetasMoneda = document.getElementsByClassName("moneda");

Array.from(etiquetasMoneda).forEach((etiqueta) => {
    // Do stuff here
    var valor = etiqueta.innerHTML;
    etiqueta.innerHTML = formatCurrency("en-US", "USD", 2, valor)
});
 

function formatCurrency (locales, currency, fractionDigits, number) {
  var formatted = new Intl.NumberFormat(locales, {
    style: 'currency',
    currency: currency,
    minimumFractionDigits: fractionDigits
  }).format(number);
  return formatted;
}