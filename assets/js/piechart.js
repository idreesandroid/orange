// Bar chart
new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["Total Impression", "Total Clicks", "Total Enquries"],
      datasets: [
        {
          label: "Impression",
          backgroundColor: ["#ff9900", "#3366cc","#ff5656",],
          data: [2478,5267,734]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Leads Impressions'
      }
    }
});

/*pie chart*/

new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["Dealer", "Seller", "Private User"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: [ "#3366cc","#ff9900", "#ff5656"],
        data: [2478,5267, 1554]
      }]
    },
    options: {
      title: {
        display: true,
        text: ''
      }
    }
});

/*horixzontal bar chart*/
new Chart(document.getElementById("bar-chart-horizontal"), {
    type: 'horizontalBar',
    data: {
      labels: ["2015", "2016", "2017", "2018", "2019"],
      datasets: [
        {
          label: "Dealer Leads",
          backgroundColor: ["#29a2cc", "#d31e1e","#ff9900","#29a2cc","#ff9900"],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: ''
      }
    }
});

/*grouped bar chart*/
new Chart(document.getElementById("bar-chart-grouped"), {
    type: 'bar',
    data: {
      labels: ["0", "100", "150", "200"],
      datasets: [
        {
          label: "Active Ads",
          backgroundColor: "#ff9900",
          data: [133,221,783,2478]
        }, {
          label: "Inactive Ads",
          backgroundColor: "#3366cc",
          data: [408,547,675,734]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: ''
      }
    }
});

/*mixed chart*/
new Chart(document.getElementById("mixed-chart"), {
    type: 'bar',
    data: {
      labels: ["Task 1", "Task 2", "Task 3", "Task 4"],
      datasets: [{
          label: "Completed",
          type: "line",
          borderColor: "#8e5ea2",
          data: [408,547,675,734],
          fill: false
        }, {
          label: "In progress",
          type: "line",
          borderColor: "#fe7096",
          data: [133,221,783,2478],
          fill: false
        }, {
          label: "completed",
          type: "bar",
          backgroundColor: "rgba(0,0,0,0.2)",
          data: [408,547,675,734],
        }, {
          label: "Started",
          type: "bar",
          backgroundColor: "rgba(0,0,0,0.2)",
          backgroundColorHover: "#fe7096",
          data: [133,221,783,2478]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: ''
      },
      legend: { display: false }
    }
});