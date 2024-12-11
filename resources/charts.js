import { isRTL, hexRGB } from "./function";

import { Line, Bar, Pie, Doughnut, Polar } from "./chart"


// Example page Line Chart
var solidLineChart = {
    labels : ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    dataUnit : 'BTC',
    lineTension : .4,
    legend: true,
    point: true,
    datasets : [{
        label : "Total Received",
        color : "#5ce0aa",
        background : 'transparent',
        data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95]
    },{
        label : "Total Send",
        color : "#798bff",
        background : 'transparent',
        data: [80, 54, 105, 120, 82, 85, 60, 80, 54, 105, 120, 82]
    }]
};
Line({selector: '#solidLineChart', data : solidLineChart });

var filledLineChart = {
    labels : ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    dataUnit : 'BTC',
    lineTension : .4,
    point: true,
    datasets : [{
        label : "Total Received",
        color : "#798bff",
        fill: true,
        background : hexRGB('#798bff',.4),
        data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
    }]
};
Line({selector:'#filledLineChart', data:filledLineChart});

var straightLineChart = {
    labels : ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    dataUnit : 'BTC',
    lineTension : 0,
    point: true,
    datasets : [{
        label : "Total Received",
        color : "#798bff",
        fill: true,
        background : hexRGB('#798bff',.3),
        data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95]
    }]
};
Line({selector:'#straightLineChart', data:straightLineChart});

// Example page Bar Chart
var barChartData = {
    labels : ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30"],
    dataUnit : 'People',
    datasets : [{
        label : "join",
        color : "#9cabff",
        data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 75, 90]
    }]
};
Bar({selector:'#barChartData', data:barChartData, tooltip:"tooltipSmall"});
var barChartMultiple = {
    labels : ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    dataUnit : 'USD',
    datasets : [{
        label : "Income",
        color : "#9cabff",
        data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95]
    },{
        label : "Expense",
        color : "#f4aaa4",
        data: [75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125]
    }]
};
Bar({selector:'#barChartMultiple', data:barChartMultiple, tooltip:"tooltipSmall"});
var barChartStacked = {
    labels : ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    stacked: true,
    dataUnit : 'USD',
    datasets : [{
        label : "Income",
        color : "#9cabff",
        data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95]
    },{
        label : "Expense",
        color : "#f4aaa4",
        data: [75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125]
    }]
};
Bar({selector:'#barChartStacked', data:barChartStacked, tooltip:"tooltipSmall"});

// Example page Pie Chart
var pieChartData = {
    labels : ["Send", "Receive", "Withdraw"],
    dataUnit : 'BTC',
    legend: false,
    datasets : [{
        borderColor : "#fff",
        background : ["#9cabff","#f4aaa4","#8feac5"],
        data: [110, 80, 125]
    }]
};
Pie({selector:'#pieChartData', data:pieChartData});

// Example page Doughnut Chart
var doughnutChartData = {
    labels : ["Send", "Receive", "Withdraw"],
    dataUnit : 'BTC',
    legend: false,
    datasets : [{
        borderColor : "#fff",
        background : ["#9cabff","#f4aaa4","#8feac5"],
        data: [110, 80, 125]
    }]
};
Doughnut({selector:'#doughnutChartData', data:doughnutChartData});

// Example page Doughnut Chart
var polarChartData = {
    labels : ["Send", "Receive", "Withdraw"],
    dataUnit : 'BTC',
    legend: false,
    datasets : [{
        borderColor : "#fff",
        background : [hexRGB("#9cabff",.8),hexRGB("#f4aaa4",.8),hexRGB("#8feac5",.8)],
        data: [110, 80, 125]
    }]
};
Polar({selector:'#polarChartData', data:polarChartData});


// // // // // // // //
// Dashboard Ecommerce 
// // // // // // // //

// Line Charts
var todayOrders = {
    labels : ["12AM - 02AM", "02AM - 04AM", "04AM - 06AM", "06AM - 08AM", "08AM - 10AM", "10AM - 12PM", "12PM - 02PM", "02PM - 04PM", "04PM - 06PM", "06PM - 08PM", "08PM - 10PM", "10PM - 12PM"],
    dataUnit : 'Orders',
    lineTension : .3,
    datasets : [{
        label : "Orders",
        color : "#854fff",
        background : "transparent",
        data: [92, 105, 125, 85, 110, 106, 131, 105, 110, 131, 105, 110]
    }]
};
Line({selector:'#todayOrders', data:todayOrders, tooltip: "tooltipSmallDark", scales: "noScale" });

var todayRevenue = {
    labels : ["12AM - 02AM", "02AM - 04AM", "04AM - 06AM", "06AM - 08AM", "08AM - 10AM", "10AM - 12PM", "12PM - 02PM", "02PM - 04PM", "04PM - 06PM", "06PM - 08PM", "08PM - 10PM", "10PM - 12PM"],
    dataUnit : 'Orders',
    lineTension : .3,
    datasets : [{
        label : "Revenue",
        color : "#33d895",
        background : "transparent",
        data: [92, 105, 125, 85, 110, 106, 131, 105, 110, 131, 105, 110]
    }]
};
Line({selector:'#todayRevenue', data:todayRevenue, tooltip: "tooltipSmallDark", scales: "noScale" });

var todayCustomers = {
    labels : ["12AM - 02AM", "02AM - 04AM", "04AM - 06AM", "06AM - 08AM", "08AM - 10AM", "10AM - 12PM", "12PM - 02PM", "02PM - 04PM", "04PM - 06PM", "06PM - 08PM", "08PM - 10PM", "10PM - 12PM"],
    dataUnit : 'Orders',
    lineTension : .3,
    datasets : [{
        label : "Customers",
        color : "#ff63a5",
        background : "transparent",
        data: [92, 105, 125, 85, 110, 106, 131, 105, 110, 131, 105, 110]
    }]
};
Line({selector:'#todayCustomers', data:todayCustomers, tooltip: "tooltipSmallDark", scales: "noScale" });

var todayVisitors = {
    labels : ["12AM - 02AM", "02AM - 04AM", "04AM - 06AM", "06AM - 08AM", "08AM - 10AM", "10AM - 12PM", "12PM - 02PM", "02PM - 04PM", "04PM - 06PM", "06PM - 08PM", "08PM - 10PM", "10PM - 12PM"],
    dataUnit : 'Orders',
    lineTension : .3,
    datasets : [{
        label : "Visitors",
        color : "#559bfb",
        background : "transparent",
        data: [92, 105, 125, 85, 110, 106, 131, 105, 110, 131, 105, 110]
    }]
};
Line({selector:'#todayVisitors', data:todayVisitors, tooltip: "tooltipSmallDark", scales: "noScale" });

var salesStatistics = {
    labels : ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan","13 Jan", "14 Jan", "15 Jan", "16 Jan", "17 Jan", "18 Jan", "19 Jan", "20 Jan", "21 Jan", "22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan"],
    dataUnit : 'People',
    lineTension : .4,
    datasets : [{
        label : "Total orders",
        color : "#9d72ff",
        dash : [0,0],
        background : hexRGB('#9d72ff',.15),
        data: [3710, 4820, 4810, 5480, 5300, 5670, 6660, 4830, 5590, 5730, 4790, 4950, 5100, 5800, 5950, 5850, 5950, 4450, 4900, 8000, 7200, 7250, 7900, 8950,6300, 7200, 7250, 7650, 6950, 4750]
    },{
        label : "Canceled orders",
        color : "#eb6459",
        dash : [5,5],
        background : "transparent",
        data: [110, 220, 810, 480, 600, 670, 660, 830, 590, 730, 790, 950, 100, 800, 950, 850, 950, 450, 900, 0, 200, 250, 900, 950, 300, 200, 250, 650, 950, 750]
    }]
};
Line({selector:'#salesStatistics', data:salesStatistics, tooltip: "tooltipDark", scales: "scales2" });

// Doughnut Charts
var orderStatistics = {
    labels : ["Completed", "Processing", "Canclled"],
    dataUnit : 'People',
    legend: false,
    datasets : [{
        borderColor : "#fff",
        background : ["#816bff","#13c9f2","#ff82b7"],
        data: [4305, 859, 482]
    }]
};
Doughnut({selector:'#orderStatistics', data:orderStatistics, tooltip: "tooltipDark"});


// // // // // // // //
// Dashboard Sales 
// // // // // // // //

// Line Charts
let salesOverview = {
    labels : ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30"],
    dataUnit : 'BTC',
    lineTension : 0.1,
    datasets : [{
        label : "Sales Overview",
        color : "#798bff",
        background : hexRGB('#798bff',.3),
        data: [8200, 7800, 9500, 5500, 9200, 9690, 8200, 7800, 9500, 5500, 9200, 9690,8200, 7800, 9500, 5500, 9200, 9690, 8200, 7800, 9500, 5500, 9200, 9690,8200, 7800, 9500, 5500, 9200, 9690]
    }]
};
Line({selector:'#salesOverview', data:salesOverview, scales: "scales3" });

// Bar Charts
let salesRevenue = {
    labels : ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    dataUnit : 'USD',
    stacked : true,
    datasets : [{
        label : "Sales Revenue",
        color : [hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), "#6576ff"],
        data: [11000, 8000, 12500, 5500, 9500, 14299, 11000, 8000, 12500, 5500, 9500, 14299]
    }]
};
Bar({selector:'#salesRevenue', data:salesRevenue, tooltip: "tooltipSmall", scales: "noScale" });

let activeSubscription = {
    labels : ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
    dataUnit : 'USD',
    stacked : true,
    datasets : [{
        label : "Active User",
        color : [hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), "#6576ff"],
        data: [8200, 7800, 9500, 5500, 9200, 9690]
    }]
};
Bar({selector:'#activeSubscription', data:activeSubscription, tooltip: "tooltipSmall", scales: "noScale" });

let totalSubscription = {
    labels : ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
    dataUnit : 'USD',
    stacked : true,
    datasets : [{
        label : "Active User",
        color : [hexRGB("#aea1ff", .2), hexRGB("#aea1ff", .2), hexRGB("#aea1ff", .2), hexRGB("#aea1ff", .2), hexRGB("#aea1ff", .2), "#aea1ff"],
        data: [8200, 7800, 9500, 5500, 9200, 9690]
    }]
};
Bar({selector:'#totalSubscription', data:totalSubscription, tooltip: "tooltipSmall", scales: "noScale" });


// // // // // // // //
// Dashboard Crypto 
// // // // // // // //

// Bar Charts
var orderOverview = {
    labels : ["19 Dec", "20 Dec", "21 Dec", "22 Dec", "23 Dec", "24 Dec", "25 Dec", "26 Dec", "27 Dec", "28 Dec", "29 Dec", "30 Dec", "31 Dec", "01 Jan"],
    dataUnit : 'USD',
    datasets : [{
        label : "Buy Orders",
        color : "#8feac5",
        data: [1740, 2500, 1820, 1200, 1600, 2500, 1820, 1200, 1700, 1820, 1400, 1600, 1930, 2100]
    },{
        label : "Sell Orders",
        color : "#9cabff",
        data: [2420, 1820, 3000, 5000, 2450, 1820, 2700, 5000, 2400, 2600, 4000, 2380, 2120, 1700]
    }]
};
Bar({selector:'#orderOverview', data:orderOverview, scales: "scales2" });

var coinOverview = {
    labels : ["Bitcoin", "Ethereum", "NioCoin", "Litecoin", "Bitcoin"],
    stacked:true,
    dataUnit:'',
    datasets : [{
        label : "Buy Orders",
        color : ["#f98c45", "#9cabff", "#8feac5", "#6b79c8", "#79f1dc"],
        data: [1740, 2500, 1820, 1200, 1600, 2500]
    },{
        label : "Sell Orders",
        color : [hexRGB('#f98c45',.2),hexRGB('#9cabff',.4),hexRGB('#8feac5',.4),hexRGB('#6b79c8',.4),hexRGB('#79f1dc',.4)],
        data: [2420, 1820, 3000, 5000, 2450, 1820]
    }]
};
Bar({selector:'#coinOverview', data:coinOverview, scales: "noScale", axis: "y", thickness: "thin" });

var userActivity = {
    labels : ["01 Nov", "02 Nov", "03 Nov", "04 Nov", "05 Nov", "06 Nov", "07 Nov", "08 Nov", "09 Nov", "10 Nov", "11 Nov", "12 Nov", "13 Nov", "14 Nov", "15 Nov", "16 Nov", "17 Nov", "18 Nov", "19 Nov", "20 Nov", "21 Nov"],
    dataUnit : 'USD',
    stacked : true,
    datasets : [{
        label : "Direct Join",
        color : "#9cabff",
        data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90]
    },{
        label : "Referral Join",
        color : hexRGB("#9cabff", .4),
        data: [125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 75, 90]
    }]
};

Bar({selector:'#userActivity', data:userActivity, scales: "noScale" });


// // // // // // // //
// Dashboard Analytics 
// // // // // // // //

// Line Charts
var analyticOvData = {
    labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan", "13 Jan", "14 Jan", "15 Jan", "16 Jan", "17 Jan", "18 Jan", "19 Jan", "20 Jan", "21 Jan", "22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan"],
    dataUnit: 'People',
    lineTension: .1,
    datasets: [{
        label: "Current Month",
        color: "#c4cefe",
        dash: [5,5],
        background: "transparent",
        data: [3910, 4420, 4110, 5180, 4400, 5170, 6460, 8830, 5290, 5430, 4690, 4350, 4600, 5200, 5650, 6850, 6950, 4150, 4300, 6000, 6800, 2250, 6900, 7950, 6900, 4200, 6250, 7650, 8950, 9750]
    }, {
        label: "Current Month",
        color: "#798bff",
        dash: [0,0],
        background: hexRGB('#798bff', .15),
        data: [4110, 4220, 4810, 5480, 4600, 5670, 6660, 4830, 5590, 5730, 4790, 4950, 5100, 5800, 5950, 5850, 5950, 4450, 4900, 8000, 7200, 7250, 7900, 8950, 6300, 7200, 7250, 7650, 6950, 4750]
    }]
};
Line({selector: '#analyticOvData', data : analyticOvData, scales: "scales4" });


var OrganicSearchData = {
    labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
    dataUnit: 'People',
    lineTension: .1,
    datasets: [{
        label: "Organic Search",
        color: "#798bff",
        background: hexRGB('#798bff', .25),
        data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
    }]
};
Line({selector: '#OrganicSearchData', data : OrganicSearchData, scales: "noScale", tooltip:"tooltipSmall" });

var SocialMediaData = {
    labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
    dataUnit: 'People',
    lineTension: .1,
    datasets: [{
        label: "Social Media",
        color: "#b8acff",
        background: hexRGB('#b8acff', .25),
        data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
    }]
};
Line({selector: '#SocialMediaData', data : SocialMediaData, scales: "noScale", tooltip:"tooltipSmall" });

var ReferralsData = {
    labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
    dataUnit: 'People',
    lineTension: .1,
    datasets: [{
        label: "Referrals",
        color: "#ffa9ce",
        background: hexRGB('#ffa9ce', .25),
        data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
    }]
};
Line({selector: '#ReferralsData', data : ReferralsData, scales: "noScale", tooltip:"tooltipSmall" });

var OthersData = {
    labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
    dataUnit: 'People',
    lineTension: .1,
    datasets: [{
        label: "Others",
        color: "#f9db7b",
        background: hexRGB('#f9db7b', .25),
        data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
    }]
};
Line({selector: '#OthersData', data : OthersData, scales: "noScale", tooltip:"tooltipSmall" });

var BounceRateData = {
    labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
    dataUnit: 'People',
    lineTension: .1,
    datasets: [{
        label: "Bounce Rate",
        color: "#798bff",
        background: hexRGB('#798bff', .25),
        data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
    }]
};
Line({selector: '#BounceRateData', data : BounceRateData, scales: "noScale", tooltip:"tooltipSmall" });

var PageviewsData = {
    labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
    dataUnit: 'People',
    lineTension: .1,
    datasets: [{
        label: "Pageviews",
        color: "#9a89ff",
        background: hexRGB('#9a89ff', .25),
        data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
    }]
};
Line({selector: '#PageviewsData', data : PageviewsData, scales: "noScale", tooltip:"tooltipSmall" });

var NewUsersData = {
    labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
    dataUnit: 'People',
    lineTension: .1,
    datasets: [{
        label: "New Users",
        color: "#798bff",
        background: hexRGB('#798bff', .25),
        data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
    }]
};
Line({selector: '#NewUsersData', data : NewUsersData, scales: "noScale", tooltip:"tooltipSmall" });

var TimeOnSiteData = {
    labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
    dataUnit: 'Hours',
    lineTension: .1,
    datasets: [{
        label: "Time on Site",
        color: "#9a89ff",
        background: hexRGB('#9a89ff', .25),
        data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
    }]
};
Line({selector: '#TimeOnSiteData', data : TimeOnSiteData, scales: "noScale", tooltip:"tooltipSmall" });

//Bar Charts
var analyticAuData = {
    labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan", "13 Jan", "14 Jan", "15 Jan", "16 Jan", "17 Jan", "18 Jan", "19 Jan", "20 Jan", "21 Jan", "22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan"],
    dataUnit: 'People',
    lineTension: .1,
    datasets: [{
        label: "Active Users",
        color: "#9cabff",
        background: "#9cabff",
        data: [1110, 1220, 1310, 980, 900, 770, 1060, 830, 690, 730, 790, 950, 1100, 800, 1250, 850, 950, 450, 900, 1000, 1200, 1250, 900, 950, 1300, 1200, 1250, 650, 950, 750]
    }]
};
Bar({selector:'#analyticAuData', data:analyticAuData, scales: "noScaleLine" });

// Doughnut Charts
var deviceStatusData = {
    labels: ["Desktop", "Mobile", "Tablet"],
    dataUnit: 'People',
    legend: false,
    datasets: [{
        borderColor: "#fff",
        background: ["#9cabff", "#b8acff", "#7de1f8"],
        data: [84.5, 14.2, 1.3]
    }]
};
Doughnut({selector:'#deviceStatusData', data:deviceStatusData});
var TrafficChannelDoughnutData = {
    labels: ["Organic Search", "Social Media", "Referrals", "Others"],
    dataUnit: 'People',
    legend: false,
    datasets: [{
        borderColor: "#fff",
        background: ["#798bff", "#b8acff", "#ffa9ce", "#f9db7b"],
        data: [4305, 859, 482, 138]
    }]
};
Doughnut({selector:'#TrafficChannelDoughnutData', data:TrafficChannelDoughnutData});


// // // // // // // //
// Dashboard Analytics 
// // // // // // // //

// Bar Charts
var totalDeposit = {
    labels : ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan"],
    dataUnit : 'USD',
    stacked : true,
    datasets : [{
        label : "Active User",
        color : [hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), "#6576ff"], // @v2.0
        data: [7200, 8200, 7800, 9500, 5500, 9200, 9690]
    }]
};
Bar({selector:'#totalDeposit', data:totalDeposit, scales: "noScale", tooltip: "tooltipSmall", thickness: "thick" });

var totalWithdraw = {
    labels : ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan"],
    dataUnit : 'USD',
    stacked : true,
    datasets : [{
        label : "Active User",
        color : [hexRGB("#816bff", .2), hexRGB("#816bff", .2), hexRGB("#816bff", .2), hexRGB("#816bff", .2), hexRGB("#816bff", .2), hexRGB("#816bff", .2), "#816bff"],  // @v2.0
        data: [7200, 8200, 7800, 9500, 5500, 9200, 9690]
    }]
};
Bar({selector:'#totalWithdraw', data:totalWithdraw, scales: "noScale", tooltip: "tooltipSmall", thickness: "thick" });

var totalBalance = {
    labels : ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan"],
    dataUnit : 'USD',
    stacked : true,
    datasets : [{
        label : "Active User",
        color : [hexRGB("#559bfb", .2), hexRGB("#559bfb", .2), hexRGB("#559bfb", .2), hexRGB("#559bfb", .2), hexRGB("#559bfb", .2), hexRGB("#559bfb", .2), "#559bfb"],  // @v2.0
        data: [6000,8200, 7800, 9500, 5500, 9200, 9690]
    }]
};
Bar({selector:'#totalBalance', data:totalBalance, scales: "noScale", tooltip: "tooltipSmall", thickness: "thick" });

var planPurchase = {
    labels : ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan"],
    dataUnit : 'USD',
    stacked : true,
    datasets : [{
        label : "Active User",
        color : hexRGB("#6576ff", .2),
        colorHover : "#6576ff",
        data: [6000,8200, 7800, 9500, 5500, 9200, 9690, 6000,8200, 7800, 9500, 5500, 9200, 9690, 6000,8200, 7800, 9500, 5500, 9200, 9690]
    }]
};
Bar({selector:'#planPurchase', data:planPurchase, scales: "noScale", tooltip: "tooltipSmall", thickness: "thick" });