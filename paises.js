function pedidoAjax(url, callback){
  var ajaxCall = new XMLHttpRequest();

  ajaxCall.onreadystatechange = function() {
    if(ajaxCall.readyState == 4 && ajaxCall.status == 200){
      var resultado = JSON.parse(ajaxCall.responseText);
      callback(resultado.contenido);
    }
  };

  ajaxCall.open("GET", url, true);

  ajaxCall.send();
}



    var selectPaises = document.querySelector('#paises');
    var selectRegiones = document.querySelector('#regiones');
    var selectCiudades = document.querySelector('#ciudades');
    selectRegiones.style.display = 'none';
    selectCiudades.style.display = 'none';

    var urlPaises = 'http://pilote.techo.org/?do=api.getPaises';
    var urlRegiones = 'http://pilote.techo.org/?do=api.getRegiones?idPais=';
    var urlCiudades = 'http://pilote.techo.org/?do=api.getCiudades?idRegionLT=';

    pedidoAjax(urlPaises, cargarPaises);

    function cargarPaises (paises) {
    	for (var n in paises) {
    		var option = `<option value="${paises[n]}"> ${n} </option>`;
    		selectPaises.innerHTML += option;
    	}

    	selectPaises.onchange = function () {
    		var idPais = this.value;

    		if (idPais == '1') {
          selectRegiones.style.display = 'block';
    		} else {
          selectRegiones.style.display = 'none';
    			selectCiudades.style.display = 'none';
    		}

    		if (selectRegiones.hasChildNodes()) selectRegiones.innerHTML = '';
    		if (selectCiudades.hasChildNodes()) selectCiudades.innerHTML = '';

    		pedidoAjax(urlRegiones + idPais, cargarRegiones);
    	};
    }

    function cargarRegiones (regiones) {
    	for (var n in regiones) {
    		var option = `<option value="${regiones[n]}"> ${n} </option>`;
    		selectRegiones.innerHTML += option;
    	}

    	selectRegiones.onchange = function () {
    		var idRegion = this.value;

    		selectCiudades.style.display = 'block';

    		if (selectCiudades.hasChildNodes()) selectCiudades.innerHTML = '';

    		pedidoAjax(urlCiudades + idRegion, cargarCiudades);
    	};
    }

    function cargarCiudades (ciudades) {
    	for (var n in ciudades) {
    		var option = `<option value="${ciudades[n]}"> ${n} </option>`;
    		selectCiudades.innerHTML += option;
    	}
    }
