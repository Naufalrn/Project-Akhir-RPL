var total = 0;
var jml1 = 0;
var jml2 = 0;
var jml3 = 0;
var jml4 = 0;
var jml5 = 0;
var jml6 = 0;
var jml7 = 0;
var jml8 = 0;
var jml9 = 0;

$(document).on("focus", "#barang1", function() {
    aData = {}
    $("#barang1").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: 'http://localhost/toko/server.php',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                //console.log(data)
                aData = $.map(data, function(value, key) {
                return {
                    id: value.id,
                    label: value.nama,
                    harga: value.harga
                };
                });
                //console.log(aData)
                var results = $.ui.autocomplete.filter(aData, request.term);
                response (results);
                console.log(results)
                }
            })
        },
        select: function(event, ui){
        document.getElementById('pcs1').onchange = function() {
            var x = this.value
            jml1 = x * ui.item.harga
            $('#harga1').text("Rp " + jml1);
            }   
        }   
        });
    });

$(document).on("focus", "#barang2", function() {
    aData = {}
    $("#barang2").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: 'http://localhost/toko/server.php',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                //console.log(data)
                aData = $.map(data, function(value, key) {
                return {
                    id: value.id,
                    label: value.nama,
                    harga: value.harga
                };
                });
                //console.log(aData)
                var results = $.ui.autocomplete.filter(aData, request.term);
                response (results);
                console.log(results)
                }
            })
        },
        select: function(event, ui){
        document.getElementById('pcs2').onchange = function() {
            var x = this.value
            jml2 = x * ui.item.harga
            $('#harga2').text("Rp " + jml2);
            }   
        }   
        });
    });

$(document).on("focus", "#barang3", function() {
    aData = {}
    $("#barang3").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: 'http://localhost/toko/server.php',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                //console.log(data)
                aData = $.map(data, function(value, key) {
                return {
                    id: value.id,
                    label: value.nama,
                    harga: value.harga
                };
                });
                //console.log(aData)
                var results = $.ui.autocomplete.filter(aData, request.term);
                response (results);
                console.log(results)
                }
            })
        },
        select: function(event, ui){
        document.getElementById('pcs3').onchange = function() {
            var x = this.value
            jml3 = x * ui.item.harga
            $('#harga3').text("Rp " + jml3);
            }   
        }   
        });
    });
    
$(document).on("focus", "#barang4", function() {
    aData = {}
    $("#barang4").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: 'http://localhost/toko/server.php',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                //console.log(data)
                aData = $.map(data, function(value, key) {
                return {
                    id: value.id,
                    label: value.nama,
                    harga: value.harga
                };
                });
                //console.log(aData)
                var results = $.ui.autocomplete.filter(aData, request.term);
                response (results);
                console.log(results)
                }
            })
        },
        select: function(event, ui){
        document.getElementById('pcs4').onchange = function() {
            var x = this.value
            jml4 = x * ui.item.harga
            $('#harga4').text("Rp " + jml4);
            }   
        }   
        });
    });
    
$(document).on("focus", "#barang5", function() {
    aData = {}
    $("#barang5").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: 'http://localhost/toko/server.php',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                //console.log(data)
                aData = $.map(data, function(value, key) {
                return {
                    id: value.id,
                    label: value.nama,
                    harga: value.harga
                };
                });
                //console.log(aData)
                var results = $.ui.autocomplete.filter(aData, request.term);
                response (results);
                console.log(results)
                }
            })
        },
        select: function(event, ui){
        document.getElementById('pcs5').onchange = function() {
            var x = this.value
            jml5 = x * ui.item.harga
            $('#harga5').text("Rp " + jml5);
            }   
        }   
        });
    });
        
$(document).on("focus", "#barang6", function() {
    aData = {}
    $("#barang6").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: 'http://localhost/toko/server.php',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                //console.log(data)
                aData = $.map(data, function(value, key) {
                return {
                    id: value.id,
                    label: value.nama,
                    harga: value.harga
                };
                });
                //console.log(aData)
                var results = $.ui.autocomplete.filter(aData, request.term);
                response (results);
                console.log(results)
                }
            })
        },
        select: function(event, ui){
        document.getElementById('pcs6').onchange = function() {
            var x = this.value
            jml6 = x * ui.item.harga
            $('#harga6').text("Rp " + jml6);
            }   
        }   
        });
    });
$(document).on("focus", "#barang7", function() {
    aData = {}
    $("#barang7").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: 'http://localhost/toko/server.php',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                //console.log(data)
                aData = $.map(data, function(value, key) {
                return {
                    id: value.id,
                    label: value.nama,
                    harga: value.harga
                };
                });
                //console.log(aData)
                var results = $.ui.autocomplete.filter(aData, request.term);
                response (results);
                console.log(results)
                }
            })
        },
        select: function(event, ui){
        document.getElementById('pcs7').onchange = function() {
            var x = this.value
            jml7 = x * ui.item.harga
            $('#harga7').text("Rp " + jml7);
            }   
        }   
        });
    });
            
$(document).on("focus", "#barang8", function() {
    aData = {}
    $("#barang8").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: 'http://localhost/toko/server.php',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                //console.log(data)
                aData = $.map(data, function(value, key) {
                return {
                    id: value.id,
                    label: value.nama,
                    harga: value.harga
                };
                });
                //console.log(aData)
                var results = $.ui.autocomplete.filter(aData, request.term);
                response (results);
                console.log(results)
                }
            })
        },
        select: function(event, ui){
        document.getElementById('pcs8').onchange = function() {
            var x = this.value
            jml8 = x * ui.item.harga
            $('#harga8').text("Rp " + jml8);
            }   
        }   
        });
    });
$(document).on("focus", "#barang9", function() {
    aData = {}
    $("#barang9").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: 'http://localhost/toko/server.php',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                //console.log(data)
                aData = $.map(data, function(value, key) {
                return {
                    id: value.id,
                    label: value.nama,
                    harga: value.harga
                };
                });
                //console.log(aData)
                var results = $.ui.autocomplete.filter(aData, request.term);
                response (results);
                console.log(results)
                }
            })
        },
        select: function(event, ui){
        document.getElementById('pcs9').onchange = function() {
            var x = this.value
            jml9 = x * ui.item.harga
            $('#harga9').text("Rp " + jml9);
            }   
        }   
        });
    });
                
    $("#tambah").click(function(e) {
        total = jml1+jml2+jml3+jml4+jml5+jml6+jml7+jml8+jml9
        console.log(total)
        $('#total').text("Rp " + total);

      });

      function kirimNilai() {
        var nilaiVar = total;
        var url = "bayar.html?nilai=" + encodeURIComponent(nilaiVar);
        window.location.href = url;
      }
      



      