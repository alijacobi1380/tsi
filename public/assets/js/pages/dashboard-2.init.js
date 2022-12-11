/*
Template Name: Qovex - Responsive Bootstrap 4 Admin Dashboard
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Dashboard-2
*/

Apex.chart = {
	fontFamily: 'inherit',
	locales: [{
		"name": "fa",
		"options": {
			"months": ["ژانویه", "فوریه", "مارس", "آوریل", "می", "ژوئن", "جولای", "آگوست", "سپتامبر", "اکتبر", "نوامبر", "دسامبر"],
			"shortMonths": ["ژانویه", "فوریه", "مارس", "آوریل", "می", "ژوئن", "جولای", "آگوست", "سپتامبر", "اکتبر", "نوامبر", "دسامبر"],
			"days": ["یکشنبه", "دوشنبه", "سه‌شنبه", "چهارشنبه", "پنجشنبه", "جمعه", "شنبه"],
			"shortDays": ["ی", "د", "س", "چ", "پ", "ج", "ش"],
			"toolbar": {
				"exportToSVG": "دریافت SVG",
				"exportToPNG": "دریافت PNG",
				"exportToCSV": "دریافت CSV",
				"menu": "فهرست",
				"selection": "انتخاب",
				"selectionZoom": "بزرگنمایی قسمت انتخاب شده",
				"zoomIn": "بزرگ نمایی",
				"zoomOut": "کوچک نمایی",
				"pan": "جا به جایی",
				"reset": "بازنشانی بزرگ نمایی"
			}
		}
	}],
	defaultLocale: "fa"
}


// Radial chart 1
var options = {
	series: [70],
	chart: {
		height: 120,
		type: 'radialBar',
	},
	plotOptions: {
		radialBar: {
			offsetY: -12,
			hollow: {
				margin: 5,
				size: '60%',
				background: 'rgba(59, 93, 231, .25)',
			},
			dataLabels: {
				name: {
					show: false,
				},
				value: {
					show: true,
					fontSize: '12px',
					offsetY: 5,
				},
				style: {
					colors: ['#fff']
				}
			}
		},
	},
	colors: ['#3b5de7'],
}

var chart = new ApexCharts(document.querySelector("#radial-chart-1"), options);
chart.render();


// Radial chart 2
var options = {
	series: [81],
	chart: {
		height: 120,
		type: 'radialBar',
	},
	plotOptions: {
		radialBar: {
			offsetY: -12,
			hollow: {
				margin: 5,
				size: '60%',
				background: 'rgba(69, 203, 133, .25)',
			},
			dataLabels: {
				name: {
					show: false,
				},
				value: {
					show: true,
					fontSize: '12px',
					offsetY: 5,
				},
				style: {
					colors: ['#fff']
				}
			}
		},
	},
	colors: ['#45CB85'],
}

var chart = new ApexCharts(document.querySelector("#radial-chart-2"), options);
chart.render();


//  Mixed chart
var options = {
	series: [{
			name: 'سری الف',
			type: 'column',
			data: [23, 11, 53, 27, 13, 19, 22, 37, 21, 44, 22, 30]
		},
		{
			name: 'سری ب',
			type: 'area',
			data: [36, 47, 33, 41, 22, 37, 43, 21, 41, 56, 27, 43]
		},
		{
			name: 'سری ج',
			type: 'line',
			data: [46, 57, 43, 51, 32, 47, 53, 31, 51, 66, 37, 53]
		}
	],
	chart: {
		height: 275,
		type: 'line',
		stacked: false,
		toolbar: {
			show: false
		},
	},
	stroke: {
		width: [0, 2, 2],
		curve: 'smooth',
		dashArray: [0, 0, 4]
	},
	plotOptions: {
		bar: {
			columnWidth: '15%',
			endingShape: 'rounded'
		}
	},
	fill: {
		opacity: [0.85,
			0.25,
			1
		],
		gradient: {
			inverseColors: false,
			shade: 'light',
			type: "vertical",
			opacityFrom: 0.85,
			opacityTo: 0.55,
			stops: [0, 100, 100, 100]
		}
	},
	xaxis: {
		categories: ['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'],
	},
	colors: ['#3b5de7',
		'#eeb902',
		'#5fd195'
	],
	markers: {
		size: 0
	},
	legend: {
		offsetY: 7
	}
}

var chart = new ApexCharts(document.querySelector("#mixed-chart"), options);
chart.render();


// monthly sales chart
var options = {
	series: [{
		name: "سری الف",
		data: [24, 66, 42, 88, 62, 24, 45, 12, 36, 10]
	}],
	chart: {
		height: 100,
		type: 'line',
		sparkline: {
			enabled: true
		},
		toolbar: {
			show: false
		},
	},
	dataLabels: {
		enabled: false
	},
	stroke: {
		curve: 'smooth',
		width: 3
	},
	colors: ['#3b5de7'],
}

var chart = new ApexCharts(document.querySelector("#sales-report-chart"), options);
chart.render();


// bar chart
var options = {
	series: [{
		data: [3, 6, 4, 7, 9, 4]
	}],
	chart: {
		type: 'bar',
		height: 250,
		toolbar: {
			show: false
		},
	},
	plotOptions: {
		bar: {
			horizontal: true,
			barHeight: '24%',
			endingShape: 'rounded',
		}
	},
	dataLabels: {
		enabled: false
	},
	colors: ['#556ee6'],
	xaxis: {
		categories: [
			'فروردین',
			'اردیبهشت',
			'خرداد',
			'تیر',
			'مرداد',
			'شهریور'
		],
		title: {
			text: 'هزار'
		},
	},
}

var chart = new ApexCharts(document.querySelector("#bar-chart"), options);
chart.render();


// Radar chart
var options = {
	series: [{
			name: 'سری 1',
			data: [80, 50, 30, 40, 100, 20],
		},
		{
			name: 'سری 2',
			data: [20, 30, 40, 80, 20, 80],
		},
		{
			name: 'سری 3',
			data: [44, 76, 78, 13, 43, 10],
		}
	],
	chart: {
		height: 250,
		type: 'radar',
		dropShadow: {
			enabled: true,
			blur: 1,
			left: 1,
			top: 1
		},
		toolbar: {
			show: false
		},
	},
	stroke: {
		width: 0
	},
	fill: {
		opacity: 0.4
	},
	markers: {
		size: 0
	},
	colors: ['#3b5de7',
		'#5fd195',
		'#eeb902'
	],
	xaxis: {
		categories: ['1394', '1395', '1396', '1397', '1398', '1399']
	},
	legend: {
		offsetY: 7
	}
}

var chart = new ApexCharts(document.querySelector("#radar-chart"), options);
chart.render();