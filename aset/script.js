let rootURL = location.href,
  waError = document.querySelector('.waerror'),
  nomorWA = "",
  pesanWA = "";

function updateLinkWA() {
  linkWA.href = urlWA.value = rootURL + nomorWA + '?text=' + encodeURIComponent(pesanWA);
}

function on(selector, action, cb) {
  document.querySelector(selector).addEventListener(action, cb);
}

if (typeof urlWA !== "undefined") {
  on('#nomorWA', 'input', function () {
    nomorWA = this.value;
    updateLinkWA();
  });
  on('#pesanWA', 'input', function () {
    pesanWA = this.value;
    updateLinkWA();
  });
  on('#urlWA', 'focus', function () {
    this.select();
  });
}
else {
  if (/Android|webOS|iPhone|iPad|iPod|Opera Mini/i.test(navigator.userAgent)) {
    tombolWA.href = tombolWA.href.replace('https://web.whatsapp.com/', 'whatsapp://');
  }
  on('.tombol a', 'click', function (e) {
    waError.style.diplay = 'none';
    var f = Date.now(),
      j = setTimeout(function () {
        if (Date.now() - f > 1250)
          return;
  
        waError.innerHTML = '<p>Sepertinya WhatsApp belum terinstal! <a href="https://www.whatsapp.com/download/" rel="nofollow" target="_blank">download</a></p>';
        waError.style.diplay = 'inherit';
      }, 1e3);

  });
}