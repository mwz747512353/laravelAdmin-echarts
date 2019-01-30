{!!$chart_html !!}
<script>
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

	var myChart_{{$chart}} = echarts.init(document.getElementById('{{$chart}}'),null,{renderer: 'canvas'});
	myChart_{{$chart}}.setOption({
		title: {
			text: '金额统计'
		},
		tooltip: {
			trigger: 'axis'
		},
		legend: {
			data:['累计收入','累计退款','未完成收入']
		},
		grid: {
			left: '3%',
			right: '4%',
			bottom: '3%',
			containLabel: true
		},
		toolbox: {
			feature: {
				saveAsImage: {}
			}
		},
		xAxis: {
			type: 'category',
			boundaryGap: false,
			data: ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月']
		},
		yAxis: {
			type: 'value'
		},
		series: [
			{
				name:'累计收入',
				type:'line',
				stack: '总量',
				data:[120, 132, 101, 134, 90, 230, 210]
			},
			{
				name:'累计退款',
				type:'line',
				stack: '总量',
				data:[220, 182, 191, 234, 290, 330, 310]
			},
			{
				name:'未完成收入',
				type:'line',
				stack: '总量',
				data:[150, 232, 201, 154, 190, 330, 410]
			},

		]
	});
	})

</script>