 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0043)http://www.agence.com.br/caol/consultas.php -->
<HTML><HEAD><TITLE>CAOL - Controle de Atividades Online - Agence Interativa</TITLE>
<script src="http://localhost/PruebaCaol/public/js/jquery-2.2.0.min.js"></script>  
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<META http-equiv=Content-Type content="text/html; charset=windows-1252">
<META content="NOINDEX, NOFOLLOW" name=ROBOTS>
<META http-equiv=Content-Language content=pt-br>
<META http-equiv=pragma content=no-cache>
<META http-equiv=cache-Control content="no cache">
<META http-equiv=expires content="sat, 04 dec 1993 21:29:02 gmt">
<META http-equiv=Refresh content="600; url=main.php">
<link href="http://localhost/PruebaCaol/public/css/style.css" type="text/css" rel="stylesheet" />


<SCRIPT language=JavaScript src="inc/menu_array.js.htm" type=text/javascript></SCRIPT>

<SCRIPT language=JavaScript src="inc/menu_script.js" type=text/javascript></SCRIPT>

<META content="MSHTML 6.00.2800.1106" name=GENERATOR>
</HEAD>
<BODY>

<SCRIPT language=JavaScript>

Highcharts.theme = {
   colors: ['#2b908f', '#90ee7e', '#f45b5b', '#7798BF', '#aaeeee', '#ff0066', '#eeaaee','#55BF3B', '#DF5353', '#7798BF', '#aaeeee'],
   chart: {
      backgroundColor: {
         linearGradient: { x1: 0, y1: 0, x2: 1, y2: 1 },
         stops: [
            [0, '#2a2a2b'],
            [1, '#3e3e40']
         ]
      },
      style: {
         fontFamily: '\'Unica One\', sans-serif'
      },
      plotBorderColor: '#606063'
   },
   title: {
      style: {
         color: '#E0E0E3',
         textTransform: 'uppercase',
         fontSize: '20px'
      }
   },
   subtitle: {
      style: {
         color: '#E0E0E3',
         textTransform: 'uppercase'
      }
   },
   xAxis: {
      gridLineColor: '#707073',
      labels: {
         style: {
            color: '#E0E0E3'
         }
      },
      lineColor: '#707073',
      minorGridLineColor: '#505053',
      tickColor: '#707073',
      title: {
         style: {
            color: '#A0A0A3'

         }
      }
   },
   yAxis: {
      gridLineColor: '#707073',
      labels: {
         style: {
            color: '#E0E0E3'
         }
      },
      lineColor: '#707073',
      minorGridLineColor: '#505053',
      tickColor: '#707073',
      tickWidth: 1,
      title: {
         style: {
            color: '#A0A0A3'
         }
      }
   },
   tooltip: {
      backgroundColor: 'rgba(0, 0, 0, 0.85)',
      style: {
         color: '#F0F0F0'
      }
   },
   plotOptions: {
      series: {
         dataLabels: {
            color: '#B0B0B3'
         },
         marker: {
            lineColor: '#333'
         }
      },
      boxplot: {
         fillColor: '#505053'
      },
      candlestick: {
         lineColor: 'white'
      },
      errorbar: {
         color: 'white'
      }
   },
   legend: {
      itemStyle: {
         color: '#E0E0E3'
      },
      itemHoverStyle: {
         color: '#FFF'
      },
      itemHiddenStyle: {
         color: '#606063'
      }
   },
   credits: {
      style: {
         color: '#666'
      }
   },
   labels: {
      style: {
         color: '#707073'
      }
   },

   drilldown: {
      activeAxisLabelStyle: {
         color: '#F0F0F3'
      },
      activeDataLabelStyle: {
         color: '#F0F0F3'
      }
   },

   navigation: {
      buttonOptions: {
         symbolStroke: '#DDDDDD',
         theme: {
            fill: '#505053'
         }
      }
   },

   // scroll charts
   rangeSelector: {
      buttonTheme: {
         fill: '#505053',
         stroke: '#000000',
         style: {
            color: '#CCC'
         },
         states: {
            hover: {
               fill: '#707073',
               stroke: '#000000',
               style: {
                  color: 'white'
               }
            },
            select: {
               fill: '#000003',
               stroke: '#000000',
               style: {
                  color: 'white'
               }
            }
         }
      },
      inputBoxBorderColor: '#505053',
      inputStyle: {
         backgroundColor: '#333',
         color: 'silver'
      },
      labelStyle: {
         color: 'silver'
      }
   },

   navigator: {
      handles: {
         backgroundColor: '#666',
         borderColor: '#AAA'
      },
      outlineColor: '#CCC',
      maskFill: 'rgba(255,255,255,0.1)',
      series: {
         color: '#7798BF',
         lineColor: '#A6C7ED'
      },
      xAxis: {
         gridLineColor: '#505053'
      }
   },

   scrollbar: {
      barBackgroundColor: '#808083',
      barBorderColor: '#808083',
      buttonArrowColor: '#CCC',
      buttonBackgroundColor: '#606063',
      buttonBorderColor: '#606063',
      rifleColor: '#FFF',
      trackBackgroundColor: '#404043',
      trackBorderColor: '#404043'
   },

   // special colors for some of the
   legendBackgroundColor: 'rgba(0, 0, 0, 0.5)',
   background2: '#505053',
   dataLabelsColor: '#B0B0B3',
   textColor: '#C0C0C0',
   contrastTextColor: '#F0F0F3',
   maskColor: 'rgba(255,255,255,0.3)'
};

// Apply the theme
Highcharts.setOptions(Highcharts.theme);

$(function () {
$('#grafico_gra').highcharts({
        title: {
            useHTML: true,
            text: 'Performance Comercial'
        },
        xAxis: {
            categories: [<?php foreach ($periodos as $periodo => $value){echo "'".$periodo."',";} ?>]
        },
        series: [
        <?php  
            foreach ($grafico as $key => $value) {
          ?>
        {
            type: 'column',
            name: '<?=$key?>',
            data: [<?php 
              foreach ($periodos as $periodo => $value){
                if (isset($grafico[$key]["$periodo"])){
                  echo number_format($grafico[$key]["$periodo"],2,'.','').",";  
                }else{ echo "0,";}                
              }
            ?>]
        },

        <?php 
          }        
        ?>
         {
            type: 'spline',
            name: 'Costo fijo medio',
            data: [<?php foreach ($periodos as $key => $value){echo $costos.",";} ?>],
            marker: {
                lineWidth: 1,
                lineColor: Highcharts.getOptions().colors[3],
                fillColor: 'white'
            }
        }

        ]
    });
});

</script>

<?php echo '<div class="col l8 push-l2 " ><div id="grafico_gra" ></div></div>';    ?> 

</BODY>

</HTML>                 







       
