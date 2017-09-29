<?php /* Smarty version Smarty3-b7, created on 2016-07-05 15:42:05
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/lists/graficas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21947577c1b9d80fbc0-21729041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '043eb4a1b692285ee5426016956b58a22fa6cf63' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/lists/graficas.tpl',
      1 => 1467751323,
    ),
  ),
  'nocache_hash' => '21947577c1b9d80fbc0-21729041',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="graf">
</div>
<script>
jQuery(document).ready(function() {
	
	// var populateGraph;
	
	
	jQuery.ajax({
		dataType: 'json',
	  	url: WEB_ROOT + '/ajax/grafica-data.php', 			
	  	success: function(response) {	
		// console.log(response)		
		console.log(response.total)		
			
		
	
	
	jQuery('#graf').highcharts({
		
		// res	= datos()
		
		title: {
			text: 'Resultados Obtenidos',
		},
		xAxis: {
			categories: response.documento
			
		},
		yAxis: {
			title: {
				text: 'Porcentaje'
			},
			min: 0,
			max: 200,
			plotBands: [{ 
				color: '#FF9999',
				from: 0,
				to: 49.99,
				label: {
					//text: 'Resultado Insatisfactorio',
					align: 'right',
					x: -10
				} 
			},{
				color: '#FFFFB2',
				from: 50,
				to: 79.99,
				label: {
					//text: 'Es necesario confrontar',
					align: 'right',
					x: -10
				}   
			},{
				color: '#B2D9B2',
				from: 80,
				to: 200,
				label: {
					//text: 'Resultado Satisfactorio',
					align: 'right',
					x: -10
				}  
			}],
			labels: {
				// format: '1 %'
			}
			
		},
		tooltip: {
			valueSuffix: ''
		},
		// plotOptions: {
			// line: {
				// dataLabels: {
					// enabled: true,
					// format: '1 %'
				// }
			// }
		// },
		credits: {
			enabled: false
		},
		series: [{
			name: 'Total',
			// data: [<<?php ?>?php echo join($dataEfi, ',') ?<??>>],
			data: response.total,			
		}, {
			name: 'Total',
			// data: [<<?php ?>?php echo join($dataEfec, ',') ?<??>>]
			data: response.total,	
		}],
		navigation: {
			buttonOptions: {
				enabled: false
			}
		},
		exporting: {
			filename: 'grafica',
			type: 'image/jpeg'
		}
	});

	
	}
    });
	
	
	jQuery('#button').click(function () {
		var chart = jQuery('#graf').highcharts();
		chart.exportChart();
	});

	

	
});
</script>
