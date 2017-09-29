<div id="graf">
</div>
<input type="hidden" name="q" id="q" value="{$q}">
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
			// data: [<?php echo join($dataEfi, ',') ?>],
			data: response.total,			
		}, {
			name: 'Total',
			// data: [<?php echo join($dataEfec, ',') ?>]
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
