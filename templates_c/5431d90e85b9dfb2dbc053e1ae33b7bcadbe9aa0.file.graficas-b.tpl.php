<?php /* Smarty version Smarty3-b7, created on 2016-07-09 16:31:41
         compiled from "C:/wamp/www/tapachula/acervo/sistema/templates/lists/graficas-b.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2739457816d3d6592a1-23188940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5431d90e85b9dfb2dbc053e1ae33b7bcadbe9aa0' => 
    array (
      0 => 'C:/wamp/www/tapachula/acervo/sistema/templates/lists/graficas-b.tpl',
      1 => 1468099826,
    ),
  ),
  'nocache_hash' => '2739457816d3d6592a1-23188940',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="graf">
</div>
<input type="hidden" name="q" id="q" value="<?php echo $_smarty_tpl->getVariable('q')->value;?>
">
<script>
jQuery(document).ready(function() {
	
	
	
	jQuery.ajax({
		dataType: 'json',
	  	url: WEB_ROOT + '/ajax/grafica-data-b.php', 
		data: "q="+jQuery("#q").val(),
	  	success: function(response) {	
		console.log(response)		
			
			
		
	
	
	jQuery('#graf').highcharts({
		
	
		
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
