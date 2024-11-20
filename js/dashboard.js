new Chart(ctx1, {
    type: 'line',
    data: {
      labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
      datasets: [{
        label: 'Ingresos por mes',
        data: [100000, 50000, 70000, 150000, 200000, 30000, 70000, 100000, 130000, 50000, 45000, 20000],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  
  const ctx2 = document.getElementById('chartCategorias');

  new Chart(ctx2, {
    type: 'pie',
    data: {
      labels: ['Desayunos','Comidas','Cenas','Snacks'],
      datasets: [{
        label: '# of Votes',
        data: [10, 15, 7, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
