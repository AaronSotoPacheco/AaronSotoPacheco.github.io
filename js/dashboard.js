// Datos de ejemplo para la gráfica de Ingresos por Anuncios
const ingresosData = {
  labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
  datasets: [{
      label: 'Ingresos por Anuncios ($)',
      data: [3000, 2500, 3200, 2800, 3500],
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      borderColor: 'rgba(255, 99, 132, 1)',
      borderWidth: 1
  }]
};

// Datos de ejemplo para la gráfica de Juegos Más Usados
const juegosData = {
  labels: ['FIFA', 'Call of Duty', 'Minecraft', 'Valorant', 'League of Legends'],
  datasets: [{
      label: 'Juegos Más Usados',
      data: [120, 150, 180, 100, 160],
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1
  }]
};

// Obtener el contexto de los canvas
const ctxIngresos = document.getElementById('chartIngresos').getContext('2d');
const ctxCategorias = document.getElementById('chartCategorias').getContext('2d');

// Crear los gráficos usando Chart.js
const chartIngresos = new Chart(ctxIngresos, {
  type: 'line', // Tipo de gráfico (puedes cambiarlo a 'bar' si prefieres barras)
  data: ingresosData,
  options: {
      responsive: true,
      plugins: {
          legend: {
              position: 'top',
          },
          tooltip: {
              enabled: true,
          }
      }
  }
});

const chartCategorias = new Chart(ctxCategorias, {
  type: 'bar', // Tipo de gráfico
  data: juegosData,
  options: {
      responsive: true,
      plugins: {
          legend: {
              position: 'top',
          },
          tooltip: {
              enabled: true,
          }
      }
  }
});
